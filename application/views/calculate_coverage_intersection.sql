SET search_path TO common_gis;

CREATE OR REPLACE FUNCTION common_gis.calculate_coverage_intersection(p_cellname text) 
RETURNS TABLE (cellname text, azimuth integer, grid real, pd_85 real, ncellname text, n_azimuth integer, n_pd85 real, samples_in_intersection integer ) AS $$ 
 
SET search_path TO common_gis;
drop table if exists common_gis.coverage_intersections_tmp;

CREATE  TABLE common_gis.coverage_intersections_tmp
(
	"rnc" text NOT NULL,
	"cellid" integer NOT NULL,
    "cellname"  text NULL,
	"azimuth" integer NULL,
    "pd_85" real NULL,
	"nearest" real NULL,
	"grid" real NULL,
	"point" common_gis.geography NULL,
	"avg_samples" real NULL,
	"dateday" date NULL,
	"coverage_poli" common_gis.geography NULL,
	"nrnc" text NOT NULL,
	"ncellid" integer NOT NULL,
	"ncellname" text NULL,
	"npoint"  common_gis.geography NULL,
	"n_azimuth" integer NULL,
	"n_pd85" real NULL,
	"30km_poli" common_gis.geography NULL,
	"ncoverage_poli" common_gis.geography NULL,
	"intersection_poli" common_gis.geography NULL,
	"intersection_area" real NULL,
	"distance" real NULL,
	"d_min" real NULL,
	"d_max" real NULL,
	n_max_samples real NULL,
	n_min_samples real NULL,
	"nearest_dist_poli" common_gis.geography NULL,
	"nearest_dist_area" real NULL,
	"suggested_grid" real NULL,
	"samples_in_nearest_dist" real NULL,
	"samples_in_intersection" integer NULL 
);


INSERT INTO common_gis.coverage_intersections_tmp (rnc, cellid, cellname, azimuth, pd_85, nearest, grid, point, avg_samples, dateday, intersection_poli, nrnc, ncellid, ncellname, npoint, n_azimuth, n_pd85, ncoverage_poli, distance)
SELECT 
	t1.rnc, t1.cellid, t1.cellname, t1.azimuth, t1.pd_85, t1.nearest, t1.grid, st_setsrid(common_gis.st_point((t1.longitude)::double precision, (t1.latitude)::double precision), 4326)::common_gis.geography, t1.avg_samples, t1.dateday, t1.pd85_poli_90deg,
	t2.rnc, t2.cellid, t2.cellname, st_setsrid(common_gis.st_point((t2.longitude)::double precision, (t2.latitude)::double precision), 4326)::common_gis.geography, 
	t2.azimuth, t2.pd_85, t2.pd85_poli_90deg, 
	common_gis._st_distance(st_setsrid(common_gis.st_point((t1.longitude)::double precision, (t1.latitude)::double precision), 4326)::common_gis.geography, st_setsrid(common_gis.st_point((t2.longitude)::double precision, (t2.latitude)::double precision), 4326)::common_gis.geography,0.0, true)
from 
common_gis.overshooters_v2_daily as t1
left join
common_gis.overshooters_v2_daily as t2
on t1.cellname <> t2.cellname
where 
st_intersects(t2.pd85_poli_90deg, t1.pd85_poli_90deg)  and t2.dateday=(select dateday from common_gis.overshooting_umts_aux limit 1) and t1.dateday = (select dateday from common_gis.overshooting_umts_aux limit 1)
and t1.cellname=p_cellname;


analyze common_gis.coverage_intersections_tmp;


update common_gis.coverage_intersections_tmp set intersection_poli = ST_Intersection(intersection_poli, ncoverage_poli);
-- 741424 3 min.
update common_gis.coverage_intersections_tmp set intersection_area = ST_Area(intersection_poli);
-- 741424 - 58 sec

delete from coverage_intersections_tmp where intersection_area<=0;

update common_gis.coverage_intersections_tmp set d_min = ST_Distance(intersection_poli, npoint);
-- 738149 1 min
update common_gis.coverage_intersections_tmp set d_max=ST_Length(ST_GeographyFromText('SRID=4326;' || ST_AsText(ST_LongestLine(npoint::geometry, intersection_poli::geometry))));
-- 738149 1 min
 
update common_gis.coverage_intersections_tmp set suggested_grid = ST_Length(ST_GeographyFromText('SRID=4326;' || ST_AsText(ST_LongestLine(point::geometry, intersection_poli::geometry))));
--UPDATE 738149 1 min

update common_gis.coverage_intersections_tmp
set
nearest_dist_poli  = common_gis.st_geogfromtext('POLYGON((' || 
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az1(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az1(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az1(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az2(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az2(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az2(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az3(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az3(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az3(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az4(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az4(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az4(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az5(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az5(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az5(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az6(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az6(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az6(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az7(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az7(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az7(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az8(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az8(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az8(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az9(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az9(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az9(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az9(n_azimuth)))*sin(d_max::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_max::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az9(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az9(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az8(n_azimuth)))*sin(d_max::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_max::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az8(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az8(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az7(n_azimuth)))*sin(d_max::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_max::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az7(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az7(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az6(n_azimuth)))*sin(d_max::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_max::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az6(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az6(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az5(n_azimuth)))*sin(d_max::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_max::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az5(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az5(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az4(n_azimuth)))*sin(d_max::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_max::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az4(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az4(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az3(n_azimuth)))*sin(d_max::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_max::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az3(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az3(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az2(n_azimuth)))*sin(d_max::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_max::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az2(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az2(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az1(n_azimuth)))*sin(d_max::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_max::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az1(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_max::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_max::real/6371000)*cos(radians(get_az1(n_azimuth))))) || ',' ||
degrees(radians(ST_X(npoint::geometry)) + atan2(sin(radians(get_az1(n_azimuth)))*sin(d_min::real/6371000)*cos(radians(ST_Y(npoint::geometry))),cos(d_min::real/6371000)-sin(radians(ST_Y(npoint::geometry)))*sin(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az1(n_azimuth))))))) || ' ' ||
degrees(asin(sin(radians(ST_Y(npoint::geometry)))*cos(d_min::real/6371000) + cos(radians(ST_Y(npoint::geometry)))*sin(d_min::real/6371000)*cos(radians(get_az1(n_azimuth))))) ||  
'))')::common_gis.geography(Polygon,4326);

update common_gis.coverage_intersections_tmp set nearest_dist_area = ST_Area(nearest_dist_poli);

delete from common_gis.coverage_intersections_tmp where nearest_dist_area=0;


update common_gis.coverage_intersections_tmp u
set 
n_max_samples = CASE WHEN u.d_max > 13026 THEN  ((aux.vs_tp_ue_more55 * (u.d_max - 13026)) / (30000 - 13026) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9 + aux.vs_tp_ue_10_15 + aux.vs_tp_ue_16_25 + aux.vs_tp_ue_26_35 + aux.vs_tp_ue_36_55)
    WHEN u.d_max > 8346 THEN  ((aux.vs_tp_ue_36_55 * (u.d_max - 8346)) / (13026 - 8346) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9 + aux.vs_tp_ue_10_15 + aux.vs_tp_ue_16_25 + aux.vs_tp_ue_26_35)
    WHEN u.d_max > 6006 THEN  ((aux.vs_tp_ue_26_35 * (u.d_max - 6006)) / (8346 - 6006) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9 + aux.vs_tp_ue_10_15 + aux.vs_tp_ue_16_25)
    WHEN u.d_max > 3666 THEN  ((aux.vs_tp_ue_16_25 * (u.d_max - 3666)) / (6006 - 3666) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9 + aux.vs_tp_ue_10_15)
    WHEN u.d_max > 2262 THEN  ((aux.vs_tp_ue_10_15 * (u.d_max - 2262)) / (3666 - 2262) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9)
    WHEN u.d_max > 1326 THEN  ((aux.vs_tp_ue_6_9 * (u.d_max - 1326)) / (2262 - 1326) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5)
    WHEN u.d_max > 1092 THEN  ((aux.vs_tp_ue_5 * (u.d_max - 1092)) / (1326 - 1092) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4)
    WHEN u.d_max > 858 THEN  ((aux.vs_tp_ue_4 * (u.d_max - 858)) / (1092 - 858) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3)
    WHEN u.d_max > 624 THEN  ((aux.vs_tp_ue_3 * (u.d_max - 624)) / (858 - 624) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2)
    WHEN u.d_max > 390 THEN  ((aux.vs_tp_ue_2 * (u.d_max - 390)) / (624 - 390) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1)
    WHEN u.d_max > 156 THEN  ((aux.vs_tp_ue_1 * (u.d_max - 156)) / (390 - 156) + aux.vs_tp_ue_0)
    WHEN u.d_max >= 0 THEN  ((aux.vs_tp_ue_0 * (u.d_max - 0)) / (156 - 0) + 0)
	ELSE 0
    END,
n_min_samples = CASE WHEN u.d_min > 13026 THEN  ((aux.vs_tp_ue_more55 * (u.d_min - 13026)) / (30000 - 13026) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9 + aux.vs_tp_ue_10_15 + aux.vs_tp_ue_16_25 + aux.vs_tp_ue_26_35 + aux.vs_tp_ue_36_55)
    WHEN u.d_min > 8346 THEN  ((aux.vs_tp_ue_36_55 * (u.d_min - 8346)) / (13026 - 8346) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9 + aux.vs_tp_ue_10_15 + aux.vs_tp_ue_16_25 + aux.vs_tp_ue_26_35)
    WHEN u.d_min > 6006 THEN  ((aux.vs_tp_ue_26_35 * (u.d_min - 6006)) / (8346 - 6006) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9 + aux.vs_tp_ue_10_15 + aux.vs_tp_ue_16_25)
    WHEN u.d_min > 3666 THEN  ((aux.vs_tp_ue_16_25 * (u.d_min - 3666)) / (6006 - 3666) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9 + aux.vs_tp_ue_10_15)
    WHEN u.d_min > 2262 THEN  ((aux.vs_tp_ue_10_15 * (u.d_min - 2262)) / (3666 - 2262) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5 + aux.vs_tp_ue_6_9)
    WHEN u.d_min > 1326 THEN  ((aux.vs_tp_ue_6_9 * (u.d_min - 1326)) / (2262 - 1326) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4 + aux.vs_tp_ue_5)
    WHEN u.d_min > 1092 THEN  ((aux.vs_tp_ue_5 * (u.d_min - 1092)) / (1326 - 1092) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3 + aux.vs_tp_ue_4)
    WHEN u.d_min > 858 THEN  ((aux.vs_tp_ue_4 * (u.d_min - 858)) / (1092 - 858) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2 + aux.vs_tp_ue_3)
    WHEN u.d_min > 624 THEN  ((aux.vs_tp_ue_3 * (u.d_min - 624)) / (858 - 624) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1 + aux.vs_tp_ue_2)
    WHEN u.d_min > 390 THEN  ((aux.vs_tp_ue_2 * (u.d_min - 390)) / (624 - 390) + aux.vs_tp_ue_0 + aux.vs_tp_ue_1)
    WHEN u.d_min > 156 THEN  ((aux.vs_tp_ue_1 * (u.d_min - 156)) / (390 - 156) + aux.vs_tp_ue_0)
    WHEN u.d_min >= 0 THEN  ((aux.vs_tp_ue_0 * (u.d_min - 0)) / (156 - 0) + 0)
	ELSE 0
    END
from
common_gis.overshooting_umts_aux as aux
where u.nrnc=aux.rnc and u.ncellid=aux.cellid and aux.dateday=u.dateday;

update common_gis.coverage_intersections_tmp 
set  
samples_in_nearest_dist = (n_max_samples-n_min_samples), 
samples_in_intersection = round(( (n_max_samples-n_min_samples) * intersection_area / nearest_dist_area ) / 48);


select cellname, azimuth, grid, pd_85, ncellname, n_azimuth, n_pd85, samples_in_intersection
from common_gis.coverage_intersections_tmp order by samples_in_intersection desc;


$$ LANGUAGE SQL;
