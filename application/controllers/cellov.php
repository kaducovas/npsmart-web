<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cellov extends CI_Controller {
	
	
public function index()
{
 
		$this->load->model('model_overshooting');
		
 
		$cellname='UACRBO10A';
		$cellid=-1;
		$rnc='RNCRNC';
		$resno=15;
		$showweekend=false;
		
		if ($this->input->post('cell'))  {
			$cellname = $this->input->post('cell');
			$cellname=strtoupper($cellname);
		}
		if ($this->input->post('resno'))  {
			$resno = $this->input->post('resno');
		}
		if ($this->input->post('showweekend'))  {
			$showweekend = $this->input->post('showweekend');
		}
		
			

	  
		$res = $this->model_overshooting->getRFSRData($cellname, $resno);
	    //s1 - over/undershoot distance, s2 - RF Shaping Rate
		// TODO: error check
		
		$data['tableHTML']=array();
 
		if (!$res) { 
		echo "no data found for cell ".$cellname." for last ".$resno." days <br>";
		return;
		}
 
		$data['cellname']=$res[0]->cellname;
		$data['rnc']=$res[0]->rnc;
		$data['cellid']=$res[0]->cellid;
		$data['mindate']=$res[0]->dateday;
		$data['resno']=$resno;
		$data['showweekend']=$showweekend;
 
		
		$data['s1'] = array();
		$data['s2'] = array();
		$data['sho'] = array();
		$data['colors'] = array();
		$data['users'] = array();
		$data['ticks'] = array();
		$data['ticks2'] = array();
 	
 		
		foreach($res as $row){
			if ($row->dateday!='') {
				if (!$showweekend)
				{
					if (date('N', strtotime($row->dateday)) >= 6) continue;
				}
				array_push($data['s1'], $row->distance);
				array_push($data['s2'], $row->rfsr);
				array_push($data['colors'], $row->isovershooter == 'YES' ? '#C7754C' : '#00749F');
				array_push($data['ticks'], $row->tick); //$row->distance);
				//array_push($data['s1'], $row->distance);
				array_push($data['tableHTML'], '<tr><td>'.$row->cellname.'</td>
				<td>'.$row->dateday.'</td><td>'.$row->pd_85.'</td><td>'.$row->grid.'</td>
				<td>'.($row->pd_85 - $row->grid).'</td><td>0</td><td>'.$row->sitesincov.'</td>
				<td>'.round($row->x1,2).'</td><td>'.round($row->x2,2).'</td><td>'.round($row->x3,2).'</td>
				<td>'.round($row->x4,2).'</td><td>'.round($row->x5,2).'</td><td>'.round($row->rfsr,2).'</td>
				</tr>');
				$data['maxdate']=$row->dateday;
			}
			
		} 

 	
		$res = $this->model_overshooting->getRFSRKPIs($cellname, $data['rnc'], $data['cellid'], $data['mindate'], $data['maxdate']);
	    
		
		if ($res) { 
			foreach($res as $row){
			if ($row->dateday!='') {
				if (!$showweekend)
				{
					if (date('N', strtotime($row->dateday)) >= 6) continue;
				}
				array_push($data['sho'], $row->sho_overhead_radar_score);
				array_push($data['users'], $row->hsdpa_users);
				array_push($data['ticks2'], $row->tick);  
			}
			
		} 	
		}
	 
		$data['maxRadar'] = max($data['sho']) + 0.3;
		$data['minRadar'] = min($data['sho']) - 0.3;
	 
		//$data['s1'] = array(292.66,278.66,358.23,450.26,376.71,492.45,326.57,306.74,557.07,493.38,414.45,307.31,421.09,476.8,330.77,508.24,380.94,232.95,73.16,374.63,385.39,281.64,309.9,342.83);
		//$data['s2'] = array(80.5,80.43,78.99,75.55,79.89,73.66,79.78,79.96,73.18,73.51,74.97,79.98,75.32,73.35,79.71,72.66,78.53,80.97,100,79.43,79.16,80.34,79.97,79.26);
		//$data['colors'] = array('#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#00749F','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C');
		
		//$data['sho'] = array(0,0,0); //array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5.42,5.06);
		//$data['users'] = array(0,0,0); //array(13,15,16,15,12,12,14,11,10,12,14,14,14,13,13,11,13,12,11,12,12,12,12,16);
		//$data['ticks'] = array('Sep-27','Sep-28','Sep-29','Oct-02','Oct-03','Oct-04','Oct-05','Oct-06','Oct-09','Oct-10','Oct-11','Oct-13','Oct-16','Oct-17','Oct-18','Oct-19','Oct-20','Oct-23','Oct-24','Oct-25','Oct-26','Oct-27','Oct-30','Oct-31');
		
		$this->load->view('view_header');
		$this->load->view('view_cell_overshooting.php',$data);

}

	function showCharts(){
	$this->load->view('getuser');	
	}
		
	function showCelulas(){
	$this->load->view('view_showCells');	
	}

	function showCounter(){
	$this->load->view('check_type_counter');	
	}
	
	function completeName() {
		$this->load->model('model_overshooting');
		$name=$this->model_overshooting->completeName(trim(strtoupper($this->input->post('partialname'))));
		if ($name) {
			echo  $name[0]->cell; // json_encode($name); //"test"; //$name;
		}
		//return $name;
	}
	
	function completeTerm() {

		$this->load->model('model_overshooting');
		$name=$this->model_overshooting->completeName(trim(strtoupper($_GET['term'])));
			
		foreach($name as $row){
			$data[] = $row->cell;
		}

	//return json data
    echo json_encode($data);
	}

	function overshooting()
	{
		$this->load->model('model_overshooting');
		$last4weeks = [3,2,1,52];
		$regions = ['BASE','CO','ES','MG','NE','PRSC'];
		$data['regions'] = $regions;
		$data['seriesCode'] = array();
		$data['last4weeks'] = $last4weeks;
		
		//load data per week
		for ($i=3;$i>=0;$i--)
		{
			$res= $this->model_overshooting->getRegionOvershootersWk($last4weeks[$i]);
			//Wk Region	<40			40<60		60<95		>95
			//1	"BASE"	"0.2349"	"1.6873"	"6.8774"	"91.2003"
			//...6 lines always ordered by week, region - regions are in alphabetical order
 
			
			$cat_less_40 = array();
			$cat_40_60 = array();
			$cat_60_95 = array();
			$cat_more_95 = array();
			
			
			
			foreach($res as $row){
				if (($row->week!='') && ($last4weeks[$i]==$row->week)) {
					$cat_less_40[$row->region]=$row->cat_less_40;
					$cat_40_60[$row->region]=$row->cat_40_60;
					$cat_60_95[$row->region]=$row->cat_60_95;
					$cat_more_95[$row->region]=$row->cat_more_95;
					 	
				}
			
			} 			
			
			
				//Need to generate data in following format:
				//generate columns
				//series: [{
				//name: '<40%',
				//color: 'red',
				//data: [0,0.11,0,0,0.33,0],
				//stack: 'W50'
				//}
				
				//simplest way is just to generate data string in previou step while reading from database
				//but if for some reason regions order will get mixed, or perhaps data for some region won't be available in db,
				//it will mess up all chart ... so need to perform little bit more complex step:
				
				$str_less_40=array();
				$str_40_60=array();
				$str_60_95=array();
				$str_more_95=array();
		 		
				//basically string will be formed explicitly following regions order
				//and if for some reason data were not retrieved, 0 will be assigned
				
				for ($k=0;$k<count($regions)-1;$k++) 
				{
					// < 40%	
					if (array_key_exists($regions[$k], $cat_less_40))
					{
						array_push($str_less_40, $cat_less_40[$regions[$k]]);
					}
					else
					{
						array_push($str_less_40, 0);
						
					}
					
					// 40 .. 60 %
					
					if (array_key_exists($regions[$k], $cat_40_60))
					{
						array_push($str_40_60, $cat_40_60[$regions[$k]]);
					}
					else
					{
						array_push($str_40_60, 0);
						
					}
					
					// 60 .. 95 %
					if (array_key_exists($regions[$k], $cat_60_95))
					{
						array_push($str_60_95, $cat_60_95[$regions[$k]]);
					}
					else
					{
						array_push($str_60_95, 0);
						
					}
					
					//	> 95 %		
					if (array_key_exists($regions[$k], $cat_more_95))
					{
						array_push($str_more_95, $cat_more_95[$regions[$k]]);
					}
					else
					{
						array_push($str_more_95, 0);
						
					}
					
				}
				
				//weekly series code for < 40% 
				array_push($data['seriesCode'], ( $i==3 ? "series: [" : "," ) . "{".chr(13)."name: '<40%',".chr(13)."color: 'red',".chr(13).
				"data: [".join(',',$str_less_40)."],".chr(13)."stack: 'W".$last4weeks[$i]."'". ( $i==3 ? "" : ",".chr(13)."showInLegend: false").
				chr(13)."}");
				
				//weekly series code for 40 < 60% 
				array_push($data['seriesCode'], ", {".chr(13)."name: '40<60%',".chr(13)."color: '#ff8533',".chr(13).
				"data: [".join(',',$str_40_60)."],".chr(13)."stack: 'W".$last4weeks[$i]."'". ( $i==3 ? "" : ",".chr(13)."showInLegend: false").
				chr(13)."}");
		        
				//weekly series code for 60 < 95% 
				array_push($data['seriesCode'], ", {".chr(13)."name: '60<95%',".chr(13)."color: 'yellow',".chr(13).
				"data: [".join(',',$str_60_95)."],".chr(13)."stack: 'W".$last4weeks[$i]."'". ( $i==3 ? "" : ",".chr(13)."showInLegend: false").
				chr(13)."}");
				
				////weekly series code for >95% 
				//array_push($data['seriesCode'], ", {".chr(13)."name: '>95%',".chr(13)."color: 'red',".chr(13).
				//"data: [".join(',',$str_more_95)."],".chr(13)."stack: 'W".$last4weeks[$i]."'". ( $i==3 ? "" : ",".chr(13).",showInLegend: false").
				//chr(13)."}");
 
		}
			
		array_push($data['seriesCode'], "]");
	
		
		$this->load->view('view_header');
		 $this->load->view('view_network_overshooting.php',$data);
		
	}
	
	function clusters_ne()
	{
		//
		$this->load->model('model_overshooting');
		$last4weeks = [3,2,1,52];
		$regions = ['CAMPINA GRANDE', 'RECIFE', 'CARUARU', 'PARNAMIRIM', 'JOÃO PESSOA', 'NATAL'];
		$data['seriesCode'] = array();
		$data['last4weeks'] = $last4weeks;
		$data['regions'] = $regions;
		
		//load data per week
		for ($i=3;$i>=0;$i--)
		{
			$res= $this->model_overshooting->getClusterOvershootersWk_tmp($last4weeks[$i]);
			//Wk Region	<40			40<60		60<95		>95
			//1	"BASE"	"0.2349"	"1.6873"	"6.8774"	"91.2003"
			//...6 lines always ordered by week, region - regions are in alphabetical order
 
			
			$cat_less_40 = array();
			$cat_40_60 = array();
			$cat_60_95 = array();
			$cat_more_95 = array();
			
			
			
			foreach($res as $row){
				if (($row->week!='') && ($last4weeks[$i]==$row->week)) {
					$cat_less_40[$row->cluster]=$row->cat_less_40;
					$cat_40_60[$row->cluster]=$row->cat_40_60;
					$cat_60_95[$row->cluster]=$row->cat_60_95;
					$cat_more_95[$row->cluster]=$row->cat_more_95;
					 	
				}
			
			} 			
			
			
				//Need to generate data in following format:
				//generate columns
				//series: [{
				//name: '<40%',
				//color: 'red',
				//data: [0,0.11,0,0,0.33,0],
				//stack: 'W50'
				//}
				
				//simplest way is just to generate data string in previou step while reading from database
				//but if for some reason regions order will get mixed, or perhaps data for some region won't be available in db,
				//it will mess up all chart ... so need to perform little bit more complex step:
				
				$str_less_40=array();
				$str_40_60=array();
				$str_60_95=array();
				$str_more_95=array();
		 		
				//basically string will be formed explicitly following regions order
				//and if for some reason data were not retrieved, 0 will be assigned
				
				for ($k=0;$k<count($regions)-1;$k++) 
				{
					// < 40%	
					if (array_key_exists($regions[$k], $cat_less_40))
					{
						array_push($str_less_40, $cat_less_40[$regions[$k]]);
					}
					else
					{
						array_push($str_less_40, 0);
						
					}
					
					// 40 .. 60 %
					
					if (array_key_exists($regions[$k], $cat_40_60))
					{
						array_push($str_40_60, $cat_40_60[$regions[$k]]);
					}
					else
					{
						array_push($str_40_60, 0);
						
					}
					
					// 60 .. 95 %
					if (array_key_exists($regions[$k], $cat_60_95))
					{
						array_push($str_60_95, $cat_60_95[$regions[$k]]);
					}
					else
					{
						array_push($str_60_95, 0);
						
					}
					
					//	> 95 %		
					if (array_key_exists($regions[$k], $cat_more_95))
					{
						array_push($str_more_95, $cat_more_95[$regions[$k]]);
					}
					else
					{
						array_push($str_more_95, 0);
						
					}
					
				}
				
				//weekly series code for < 40% 
				array_push($data['seriesCode'], ( $i==3 ? "series: [" : "," ) . "{".chr(13)."name: '<40%',".chr(13)."color: 'red',".chr(13).
				"data: [".join(',',$str_less_40)."],".chr(13)."stack: 'W".$last4weeks[$i]."'". ( $i==3 ? "" : ",".chr(13)."showInLegend: false").
				chr(13)."}");
				
				//weekly series code for 40 < 60% 
				array_push($data['seriesCode'], ", {".chr(13)."name: '40<60%',".chr(13)."color: '#ff8533',".chr(13).
				"data: [".join(',',$str_40_60)."],".chr(13)."stack: 'W".$last4weeks[$i]."'". ( $i==3 ? "" : ",".chr(13)."showInLegend: false").
				chr(13)."}");
		        
				//weekly series code for 60 < 95% 
				array_push($data['seriesCode'], ", {".chr(13)."name: '60<95%',".chr(13)."color: 'yellow',".chr(13).
				"data: [".join(',',$str_60_95)."],".chr(13)."stack: 'W".$last4weeks[$i]."'". ( $i==3 ? "" : ",".chr(13)."showInLegend: false").
				chr(13)."}");
				
				////weekly series code for >95% 
				//array_push($data['seriesCode'], ", {".chr(13)."name: '>95%',".chr(13)."color: 'red',".chr(13).
				//"data: [".join(',',$str_more_95)."],".chr(13)."stack: 'W".$last4weeks[$i]."'". ( $i==3 ? "" : ",".chr(13).",showInLegend: false").
				//chr(13)."}");
 
		}
			
		array_push($data['seriesCode'], "]");
	
		
		$this->load->view('view_header');
		 $this->load->view('view_network_overshooting.php',$data);
		
		
	}
	function overshcsv()
	{
		//ini_set('memory_limit', '2048M');
		$p_week=1;
		if ($this->input->post('week')) {
			$p_week = $this->input->post('week');
		}
 
		
		//save to npsmart/output
		$this->load->model('model_overshooting');
		$res= $this->model_overshooting->getRawOvershooters($p_week);
		 
		$fileName= 'overshooters_wk'.$p_week.'_'.time().'.csv';
		//$fileName='overshooters_wk1_1516392608.csv';
 
		  $fp = fopen(__DIR__."/../../output/".$fileName, 'w');
		//var_dump($fp);
			
	
		$finfo = "cellname,week,azimuth,pd_85,grid,isovershooter,sitesincov,sites_str,X1,X2,X3,X4,X5,RF Shaping Rate\n";
		fwrite($fp,  $finfo);
	 	
		foreach($res as $row){
				$rowAsArray = (array)$row;
				fputcsv($fp, $rowAsArray);
			
			} 	
		 	
		 fclose($fp);
		
		echo $fileName;
		
	}
}	
?>
	