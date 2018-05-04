<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class cellov extends CI_Controller {
	
	
public function index()
{
 
		$this->load->model('model_overshooting');
		
 
		$cellname='UACRBO10A';
		$cellname2='';
		$cellid=-1;
		$rnc='RNCRNC';
		$resno=15;
		$showweekend=false;
		$usenearest=false;
		$tech='2g';
		
		if ($this->input->post('cell'))  {
			$cellname = $this->input->post('cell');
			$cellname=strtoupper($cellname);
		}
		
		 if (strpos($cellname, ',') !== false) 
		 {
		 	$cellname2=explode(',',$cellname)[1];
		 	$cellname=explode(',',$cellname)[0];
		 }
 		
		if ($this->input->post('resno'))  {
			$resno = $this->input->post('resno');
		}
		if ($this->input->post('showweekend'))  {
			$showweekend = $this->input->post('showweekend');
		}
		if ($this->input->post('usenearest'))  {
			$usenearest = $this->input->post('usenearest');
		}
		
		
		//determine which tech we are working with - 3G or 4G
		$res = $this->model_overshooting->getCellTech($cellname);
		if ($res) $tech= $res[0]->tech; //3g or 4g 
	  
		$res = $this->model_overshooting->getRFSRData($cellname, $tech, $resno, $cellname2);
	    //s1 - over/undershoot distance, s2 - RF Shaping Rate
		// TODO: error check
		
		$data['tableHTML']=array();
 
		if (!$res) { 
		echo "no data found for ".$tech." cell ".$cellname." for last ".$resno." days <br>";
		return;
		}
 
		$data['cellname']=$res[0]->cellname;
		$data['rnc']=$res[0]->rnc;
		$data['cellid']=$res[0]->cellid;
		$data['mindate']=$res[0]->dateday;
		$data['resno']=$resno;
		$data['showweekend']=$showweekend;
		$data['usenearest']=$usenearest;
		$data['tech']=$tech;
 
		
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
				if (!$usenearest)
				{
					// default mode - using grid
					array_push($data['s1'], $row->distance);
					array_push($data['colors'], $row->isovershooter == 'YES' ? '#C7754C' : '#00749F');
				}
				else
				{
					//using nearest instead of grid
					array_push($data['s1'], $row->distance_nr);
					array_push($data['colors'], $row->pd_85 > $row->nearest ? '#C7754C' : '#00749F');
				}
				
				
				array_push($data['s2'], $row->rfsr);
				
				array_push($data['ticks'], $row->tick); //$row->distance);
				//array_push($data['s1'], $row->distance);
				array_push($data['tableHTML'], '<tr><td>'.$row->cellname.'</td>
				<td>'.$row->dateday.'</td><td>'.$row->pd_85.'</td>
				<td>'.($usenearest ? $row->nearest : $row->grid).'</td>
				<td>'.round($row->pd_85 - ($usenearest ? $row->nearest : $row->grid),2).'</td><td>'.$row->sitesincov.'</td>
				<td>'.round($row->x1,2).'</td><td>'.round($row->x2,2).'</td><td>'.round($row->x3,2).'</td>
				<td>'.round($row->x4,2).'</td><td>'.round($row->x5,2).'</td><td>'.round($row->rfsr,2).'</td>
				</tr>');
				$data['maxdate']=$row->dateday;
			}
			
		} 

		
		if ($tech=='3g') {
 	
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
		
		//todo: for 4g select some diferent KPIs
	 
			$data['maxRadar'] = max($data['sho']) + 0.3;
			$data['minRadar'] = min($data['sho']) - 0.3;
		}
		else
		{
			$data['maxRadar'] = 10;
			$data['minRadar'] = 0;
		}
	 
		//$data['s1'] = array(292.66,278.66,358.23,450.26,376.71,492.45,326.57,306.74,557.07,493.38,414.45,307.31,421.09,476.8,330.77,508.24,380.94,232.95,73.16,374.63,385.39,281.64,309.9,342.83);
		//$data['s2'] = array(80.5,80.43,78.99,75.55,79.89,73.66,79.78,79.96,73.18,73.51,74.97,79.98,75.32,73.35,79.71,72.66,78.53,80.97,100,79.43,79.16,80.34,79.97,79.26);
		//$data['colors'] = array('#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#00749F','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C');
		
		//$data['sho'] = array(0,0,0); //array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5.42,5.06);
		//$data['users'] = array(0,0,0); //array(13,15,16,15,12,12,14,11,10,12,14,14,14,13,13,11,13,12,11,12,12,12,12,16);
		//$data['ticks'] = array('Sep-27','Sep-28','Sep-29','Oct-02','Oct-03','Oct-04','Oct-05','Oct-06','Oct-09','Oct-10','Oct-11','Oct-13','Oct-16','Oct-17','Oct-18','Oct-19','Oct-20','Oct-23','Oct-24','Oct-25','Oct-26','Oct-27','Oct-30','Oct-31');
		
		$this->load->view('view_header');
		$this->load->view('view_cell_overshooting.php',$data);

}


public function sran()
{
 //purpose of this function is to track coverage profile change within modernization
		$this->load->model('model_overshooting');
		
 
		$cellname='UGOGNA79C';
		$cellname2='32S01GOGNA7903';
		$cellid=-1;
		$rnc='RNCRNC';
		$resno=15;
		$showweekend=false;
		$usenearest=false;
		$showpd85=true;
		$tech='2g';
		
		if ($this->input->post('cell'))  {
			$cellname = $this->input->post('cell');
			$cellname=strtoupper($cellname);
		}
		
		if ($this->input->post('cell2'))  {
			$cellname2 = $this->input->post('cell2');
			$cellname2=strtoupper($cellname2);
		}
 		
		if ($this->input->post('resno'))  {
			$resno = $this->input->post('resno');
		}
		if ($this->input->post('showweekend'))  {
			$showweekend = $this->input->post('showweekend');
		}
		if ($this->input->post('usenearest'))  {
			$usenearest = $this->input->post('usenearest');
		}
		if ($this->input->post('showpd85'))  {
			$showpd85 = $this->input->post('showpd85');
		}
		
		
		
		//determine which tech we are working with - 3G or 4G
		$res = $this->model_overshooting->getCellTech($cellname2);
		if ($res) $tech= $res[0]->tech; //3g or 4g 
		
		//first need to find last day where old style name was used - generate serie of days starting 7 days from this day
		// next - find first time new style name has been used - count 7 days in front from this day
		// and the last - find last time new style name has been used - cound 7 days back
		
		$where_dates = array();
		$v_lastDay='';
		$v_lastAvailableDay='';
		$v_firstDay='';
		
		//get last day with old name
		$res = $this->model_overshooting->getLastCellAppearence($cellname, $tech);
		if (!$res) { 
		echo "no data found for ".$tech." cell ".$cellname." for last ".$resno." days <br>";
		return;
		}
		$v_lastDay=$res[0]->d;
		
		$res = $this->model_overshooting->getLastCellAppearence($cellname2, $tech);
		if (!$res) { 
		echo "no data found for ".$tech." cell ".$cellname." for last ".$resno." days <br>";
		return;
		}
		$v_lastAvailableDay=$res[0]->d;
		$rnc=$res[0]->rnc;

		
		//get first day with old name
		$res = $this->model_overshooting->getFirstCellAppearence($cellname2, $tech);
		if (!$res) { 
		echo "no data found for ".$tech." cell ".$cellname." for last ".$resno." days <br>";
		return;
		}
		$v_firstDay=$res[0]->d;
		

		//get 7 days before SRAN	
		$res = $this->model_overshooting->getRFSRDaysBack($cellname, $cellname2, $rnc, $v_lastDay, $tech, 7);
		foreach($res as $row){
			if ($row->dateday!='') {
				array_push($where_dates, $row->dateday);
			}
		}
		
		//get 7 days after SRAN	
		$res = $this->model_overshooting->getRFSRDaysAhead($cellname2, $cellname, $rnc, $v_firstDay, $tech, 7);
		foreach($res as $row){
			if ($row->dateday!='') {
				array_push($where_dates, $row->dateday);
			}
		}
		
		//get last 7 days
		$res = $this->model_overshooting->getRFSRDaysBack($cellname2, $cellname, $rnc, $v_lastAvailableDay, $tech, 7);
		foreach($res as $row){
			if ($row->dateday!='') {
				array_push($where_dates, $row->dateday);
			}
		}
	  
	  
		$res = $this->model_overshooting->getRFSRDataForSRAN($cellname, $cellname2, $rnc, $tech, $where_dates);
	    //s1 - over/undershoot distance, s2 - RF Shaping Rate
		// TODO: error check
		
		$data['tableHTML']=array();
 
		if (!$res) { 
		echo "no data found for ".$tech." cell ".$cellname." for last ".$resno." days <br>";
		return;
		}
		
		$cellid = '0';
		$cellid2 = '0';
		
		$data['sran_happened']=' between '.$v_lastDay.' and '.$v_firstDay.';';
 
		$data['cellname']=$cellname;
		$data['cellname2']=$cellname2;
		$data['rnc']=$res[0]->rnc;
		$data['cellid']=$res[0]->cellid;
		$data['mindate']=$res[0]->dateday;
		$data['resno']=$resno;
		$data['showweekend']=$showweekend;
		$data['usenearest']=$usenearest;
		$data['showpd85']=$showpd85;
		$data['tech']=$tech;
 
		
		$data['s1'] = array();
		$data['s2'] = array();
		$data['ee'] = array();
		$data['colors'] = array();
		$data['throughput'] = array();
		$data['ticks'] = array();
		$data['ticks2'] = array();
 	
 		
		foreach($res as $row){
			if ($row->dateday!='') {
				if (!$showweekend)
				{
					if (date('N', strtotime($row->dateday)) >= 6) continue;
				}
				if (!$usenearest)
				{
					// default mode - using grid
					if (!$showpd85)
					{
						array_push($data['s1'], $row->distance);
					}
					else
					{
						array_push($data['s1'], $row->pd_85);
					}
					
					
					array_push($data['colors'], $row->isovershooter == 'YES' ? '#C7754C' : '#00749F');
				}
				else
				{
					//using nearest instead of grid
					if (!$showpd85)
					{
						array_push($data['s1'], $row->distance_nr);
					}
					else
					{
						array_push($data['s1'], $row->pd_85);
					}
					
					array_push($data['colors'], $row->pd_85 > $row->nearest ? '#C7754C' : '#00749F');
				}
				
				
				array_push($data['s2'], $row->rfsr);
				
				array_push($data['ticks'], $row->tick); //$row->distance);
				//array_push($data['s1'], $row->distance);
				array_push($data['tableHTML'], '<tr><td>'.$row->cellname.'</td>
				<td>'.$row->dateday.'</td><td>'.$row->pd_85.'</td>
				<td>'.($usenearest ? $row->nearest : $row->grid).'</td>
				<td>'.round($row->pd_85 - ($usenearest ? $row->nearest : $row->grid),2).'</td><td>'.$row->sitesincov.'</td>
				<td>'.round($row->x1,2).'</td><td>'.round($row->x2,2).'</td><td>'.round($row->x3,2).'</td>
				<td>'.round($row->x4,2).'</td><td>'.round($row->x5,2).'</td><td>'.round($row->rfsr,2).'</td>
				</tr>');
				$data['maxdate']=$row->dateday;
				
				if ($row->cellname==$cellname) 
				{
					$cellid=$row->cellid;
				}
				if ($row->cellname==$cellname2) 
				{
					$cellid2=$row->cellid;
				}
			}
			
		} 

		
		if ($tech=='3g') {
			$res = $this->model_overshooting->getRFSRKPIsForSRAN($data['rnc'], $cellid, $cellid2, $tech, $where_dates);

			if ($res) { 
				foreach($res as $row){
				if ($row->dateday!='') {
					if (!$showweekend)
					{
						if (date('N', strtotime($row->dateday)) >= 6) continue;
					}
					array_push($data['throughput'], $row->throughput);
					array_push($data['ee'], $row->ee);
					array_push($data['ticks2'], $row->tick);  
				}
				
			} 	
			}
		
		//todo: for 4g select some diferent KPIs
	 
			$data['maxRadar'] = max($data['throughput']) + 0.3;
			$data['minRadar'] = min($data['throughput']) - 0.3;
		}
		else
		{
			$data['maxRadar'] = 10;
			$data['minRadar'] = 0;
		}
	 
		//$data['s1'] = array(292.66,278.66,358.23,450.26,376.71,492.45,326.57,306.74,557.07,493.38,414.45,307.31,421.09,476.8,330.77,508.24,380.94,232.95,73.16,374.63,385.39,281.64,309.9,342.83);
		//$data['s2'] = array(80.5,80.43,78.99,75.55,79.89,73.66,79.78,79.96,73.18,73.51,74.97,79.98,75.32,73.35,79.71,72.66,78.53,80.97,100,79.43,79.16,80.34,79.97,79.26);
		//$data['colors'] = array('#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C','#00749F','#C7754C','#C7754C','#C7754C','#C7754C','#C7754C');
		
		//$data['sho'] = array(0,0,0); //array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5.42,5.06);
		//$data['users'] = array(0,0,0); //array(13,15,16,15,12,12,14,11,10,12,14,14,14,13,13,11,13,12,11,12,12,12,12,16);
		//$data['ticks'] = array('Sep-27','Sep-28','Sep-29','Oct-02','Oct-03','Oct-04','Oct-05','Oct-06','Oct-09','Oct-10','Oct-11','Oct-13','Oct-16','Oct-17','Oct-18','Oct-19','Oct-20','Oct-23','Oct-24','Oct-25','Oct-26','Oct-27','Oct-30','Oct-31');
		
		$this->load->view('view_header');
		$this->load->view('view_cell_overshooting_sran.php',$data);

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
		$last4weeks = [17,16,15,14];
		$regions = ['BASE','CO','ES','MG','NE','PRSC'];
		$data['regions'] = $regions;
		$data['seriesCode'] = array();
		$data['last4weeks'] = $last4weeks;
		$tech='3g';
		
		if (isset($_GET['tech'])) $tech=strtolower($_GET['tech']);
		
		$data['tech'] = $tech;
		
		//load data per week
		for ($i=3;$i>=0;$i--)
		{
			$res= $this->model_overshooting->getRegionOvershootersWk($last4weeks[$i], $tech);
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
				
				for ($k=0;$k<count($regions);$k++) 
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
		$last4weeks = [17,16,15,14];
		$regions = ['CAMPINA GRANDE', 'RECIFE', 'CARUARU', 'PARNAMIRIM', 'JOÃO PESSOA', 'NATAL'];
		$data['seriesCode'] = array();
		$data['last4weeks'] = $last4weeks;
		$data['regions'] = $regions;
		$tech='3g';
		
		if (isset($_GET['tech'])) $tech=strtolower($_GET['tech']);
		
		$data['tech'] = $tech;
				
		//load data per week
		for ($i=3;$i>=0;$i--)
		{
			$res= $this->model_overshooting->getClusterOvershootersWk_tmp($last4weeks[$i], $tech);
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
				
				for ($k=0;$k<count($regions);$k++) 
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
		$p_region='NE';
		$tech='3g';
		
		if ($this->input->post('week')) {
			$p_week = $this->input->post('week');
		}
		if ($this->input->post('region')) {
			$p_region = $this->input->post('region');
			$p_region = strtoupper($p_region);
		}
		if ($this->input->post('regcsv')) {
			$p_region = $this->input->post('regcsv');
			$p_region = strtoupper($p_region);
		}
		if ($this->input->post('tech')) {
			$tech = $this->input->post('tech');
			$tech = strtolower($tech);
		}
 
		//save to npsmart/output
		$this->load->model('model_overshooting');
		$res= $this->model_overshooting->getRawOvershooters($p_week, $p_region, $tech);
		 
		$fileName= 'overshooters_wk'.$p_week.'_'.$p_region.'_'.$tech.'_'.time().'.csv';
		//$fileName='overshooters_wk1_1516392608.csv';
 
		  $fp = fopen(__DIR__."/../../output/".$fileName, 'w');
		//var_dump($fp);
			
	
		$finfo = "region,cellname,week,azimuth,pd_85,grid,isovershooter,sitesincov,sites_str,X1,X2,X3,X4,X5,RF Shaping Rate\n";
		fwrite($fp,  $finfo);
	 	
		foreach($res as $row){
				$rowAsArray = (array)$row;
				fputcsv($fp, $rowAsArray);
			
			} 	
		 	
		 fclose($fp);
		
		echo $fileName;
		
	}
	
	
	function new_site_grid()
	{
		// some random values to use as default
		$p_lat=-16.699186;
		$p_lon=-49.299506;
		$p_azm1=0;
		$p_azm2=120;
		$p_azm3=240;
		$tilt1=10;
		$tilt2=10;
		$tilt3=10;
		
		
		if ($this->input->post('txtLat')) $p_lat = $this->input->post('txtLat');
		if ($this->input->post('txtLon')) $p_lon = $this->input->post('txtLon');
		if ($this->input->post('txtAzm1')) $p_azm1 = $this->input->post('txtAzm1');
		if ($this->input->post('txtAzm2')) $p_azm2 = $this->input->post('txtAzm2');
		if ($this->input->post('txtAzm3')) $p_azm3 = $this->input->post('txtAzm3');
		
		$data['txtLat']=$p_lat;
		$data['txtLon']=$p_lon;
		$data['txtAzm1']=$p_azm1;
		$data['txtAzm2']=$p_azm2;
		$data['txtAzm3']=$p_azm3;
	
		$grid1=30000;
		$grid2=30000;
		$grid3=30000;
		$nearest1=30000;
		$nearest2=30000;
		$nearest3=30000;
		
	
		$this->load->model('model_overshooting');
		$res= $this->model_overshooting->getGridNewSite($p_lat, $p_lon, round($p_azm1), round($p_azm2), round($p_azm3));
 
		
	 	
		foreach($res as $row){
				if ($row->cellname!='') {
					if ($row->cellname=='sector_1') 
					{
						$grid1=$row->grid;
						$nearest1=$row->nearest;
					}
					if ($row->cellname=='sector_2') 
					{
						$grid2=$row->grid;
						$nearest2=$row->nearest;
					}
					if ($row->cellname=='sector_3') 
					{
						$grid3=$row->grid;
						$nearest3=$row->nearest;
					}
				}
			
			} 
			
		$res= $this->model_overshooting->getTiltForGrid($grid1);
		if ($res) $tilt1= $res[0]->tilt; 
		$res= $this->model_overshooting->getTiltForGrid($grid2);
		if ($res) $tilt2= $res[0]->tilt; 
		$res= $this->model_overshooting->getTiltForGrid($grid3);
		if ($res) $tilt3= $res[0]->tilt; 
		
		
		$data['grid1']=$grid1;
		$data['grid2']=$grid2;
		$data['grid3']=$grid3;
		$data['nearest1']=$nearest1;
		$data['nearest2']=$nearest2;
		$data['nearest3']=$nearest3;
		$data['tilt1']=$tilt1;
		$data['tilt2']=$tilt2;
		$data['tilt3']=$tilt3;
		
		
		$this->load->view('view_header');
		$this->load->view('view_grid_new_site.php',$data);
	}
	
	function new_sites()
	{
		$table="";
		$sites=array();
		$this->load->model('model_overshooting');
		$res= $this->model_overshooting->getNewSites();
 
		
	 	
		foreach($res as $row){
				if ($row->nodebname!='') {
					array_push($sites, '<td>'.$row->nodebname.'</td><td>'.$row->latitude.'</td><td>'.$row->longitude.'</td>');
				}
		}

		echo "<b>Sites integrated within last 2-3 days:</b> <br><table border=1><tr><td>Site</td><td>Latitude</td><td>Longitude</td></tr><tr>".join("</tr><tr>",$sites)."</tr></table>";
		
	}
	
	
	function new_sites_lte()
	{
		$table="";
		$sites=array();
		$this->load->model('model_overshooting');
		$res= $this->model_overshooting->getNewSitesLTE();
 
		
	 	
		foreach($res as $row){
				if ($row->site!='') {
					array_push($sites, '<td>'.$row->site.'</td><td>'.$row->latitude.'</td><td>'.$row->longitude.'</td>');
				}
		}

		echo "<b>Sites integrated within last 2-3 days:</b> <br><table border=1><tr><td>Site</td><td>Latitude</td><td>Longitude</td></tr><tr>".join("</tr><tr>",$sites)."</tr></table>";
		
	}
	
	
	
	function who_covers()
	{
		$p_lat=-22.242514;
		$p_lon=-54.809016;
		$p_radius=50;
		$totalCov=0;
		
		if ($this->input->post('txtLat')) $p_lat = $this->input->post('txtLat');
		if ($this->input->post('txtLon')) $p_lon = $this->input->post('txtLon');
		if ($this->input->post('txtRadius')) $p_radius = $this->input->post('txtRadius');
		
		
		$data['txtLat']=$p_lat;
		$data['txtLon']=$p_lon;
		$data['txtRadius']=$p_radius;
		
		$data['cells'] = array();
		$data['azm'] = array();
		$data['grid'] = array();
		$data['nearest'] = array();
		$data['pd_85'] = array();
		$data['dist_to_point'] = array();
		$data['bins_at_point'] = array();
		$data['rscp_at_point'] = array();
		
		$this->load->model('model_overshooting');
		$res= $this->model_overshooting->who_covers($p_lat, $p_lon, $p_radius);
 
		
	 	
		foreach($res as $row){
				if ($row->cellname!='') {
					array_push($data['cells'], $row->cellname);
					array_push($data['azm'], $row->azimuth);
					array_push($data['grid'], $row->grid);
					array_push($data['nearest'], $row->nearest);
					array_push($data['pd_85'], $row->pd_85);
					array_push($data['dist_to_point'], $row->dist_to_point);
					array_push($data['bins_at_point'], $row->bins_at_point);
					array_push($data['rscp_at_point'], $row->rscp_at_point);
				}
		}

		$data['total_bins']=array_sum($data['bins_at_point']);
		$this->load->view('view_header');
		$this->load->view('view_who_covers.php',$data);
		
		
	}
	
	
	
	
	function intersections()
	{
		$p_name='UMGSAV060';
		$totalCov=0;
		
		if ($this->input->post('txtCellName')) $p_name = $this->input->post('txtCellName');
		if ($this->input->post('txtLon')) $p_lon = $this->input->post('txtLon');
		if ($this->input->post('txtRadius')) $p_radius = $this->input->post('txtRadius');
		
		
		$data['txtCellName']=$p_name;
		$data['cell_grid']=0;
		$data['cell_azm']=0;
		$data['cell_pd_85']=0;
					
					
		$data['cells'] = array();
		$data['azm'] = array();
		$data['grid'] = array();
		$data['is_nb'] = array();
		$data['pd_85'] = array();
		$data['dist_to_point'] = array();
		$data['bins_at_point'] = array();
		
		$this->load->model('model_overshooting');
		$res= $this->model_overshooting->intersections($p_name);
 
		if (!$res) { 
		echo "no data found for cell ".$p_name."  <br>";
		return;
		}
		
		
	 	
		foreach($res as $row){
				if ($row->cellname!='') {
					
					$data['cell_grid']=$row->grid;
					$data['cell_azm']=$row->azimuth;
					$data['cell_pd_85']=$row->pd_85;
					
					array_push($data['cells'], $row->ncellname);
					array_push($data['azm'], $row->nb_azimuth);
					array_push($data['grid'], round($row->n_grid,2));
					array_push($data['pd_85'], round($row->n_pd85,2));
					array_push($data['dist_to_point'], round($row->nearest_intersection,2));
					array_push($data['bins_at_point'], $row->samples_in_intersection);
					array_push($data['is_nb'], $row->nb_declared);
				}
		}

		$data['total_bins']=array_sum($data['bins_at_point']);
		$this->load->view('view_header');
		$this->load->view('view_intersection.php',$data);
		
		
	}
	
}	
?>
	