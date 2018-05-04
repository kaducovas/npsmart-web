<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Umts extends CI_Controller {

	public function index()
	{
		
		$this->main();
		// $ddate = date("Y-m-d");
		// $date = new DateTime($ddate);
		// $weeknum = $date->format("W");
		// #$week = $week -2;
		// #echo "Weeknummer: $week";
		// $this->load->model('model_monitor');
		// $this->load->model('model_mainkpis');
		// #$data['cells'] = $this->model_monitor->cells();
		// $data['weeknum'] = $weeknum;
		// $data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
		// $data['node_daily_report'] = $this->model_mainkpis->network_daily_report($weeknum);	
		// $this->load->view('view_header');
		// $this->load->view('view_nav',$data);
		// $this->load->view('view_mainkpis_chart',$data);
		// $this->load->view('view_mainkpis',$data);
	}
	
		public function pointer()
	{
		
	}	
		public function main()
	{
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		
 		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		#echo $netype;
		
		$referencedate = $this->model_cellsinfo->reference_date_($node);
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		#echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			#echo $reportdate;
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
			#echo $reportdate;
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		#$data['cells'] = $this->model_cellsinfo->cells();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->network_daily_report($reportdate);
			#$data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region') {
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->region_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report_rncinput($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->rnc_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'nodeb'){
			$data['node_weekly_report'] = $this->model_mainkpis->nodeb_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->nodeb_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cell'){
			$data['node_weekly_report'] = $this->model_mainkpis->cell_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->cell_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'uf'){
			$data['node_weekly_report'] = $this->model_mainkpis->uf_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->uf_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}			
		elseif($netype == 'cidade'){
			$data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cluster'){
			$data['node_weekly_report'] = $this->model_mainkpis->cluster_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->cluster_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'custom'){
			$data['node_weekly_report'] = $this->model_mainkpis->user_cluster_weekly_report_dash($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->cluster_daily_report($node,$reportdate);
		}			
		elseif($netype == 'other'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->other_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// $data['reportnetype'] = 'city';
			// }
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		#$this->load->view('view_theme_dark_unica');
		$this->load->view('view_mainkpis_chart',$data);
		$this->load->view('view_mainkpis',$data);
	}
	
		public function daily()
	{
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		#$data['cells'] = $this->model_monitor->cells();
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
				
		$data['reportnename'] = $node;
		
		//Set Type
				if($this->input->post('reportnetype')){
					$netype = $this->input->post('reportnetype');
				} else {
					$netype = 'network';
				}
				$data['reportnetype'] = $netype;
				#echo $netype;		
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		#echo $referencedate;
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} else {
			$reportdate = $referencedate;
		}	
#echo $reportdate;
		$data['reportdate'] = $reportdate;		
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'all';		
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_daily_report_dash($reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->network_hourly_report($reportdate);	
			$data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->region_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_rncinput_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->rnc_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'nodeb'){
			$data['node_weekly_report'] = $this->model_mainkpis->nodeb_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->nodeb_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cell'){
			$data['node_weekly_report'] = $this->model_mainkpis->cell_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cell_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		elseif($netype == 'uf'){
			$data['node_weekly_report'] = $this->model_mainkpis->uf_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->uf_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cidade'){
			$data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cluster'){
			$data['node_weekly_report'] = $this->model_mainkpis->cluster_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'custom'){
			$data['node_weekly_report'] = $this->model_mainkpis->user_cluster_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
			
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);#cidade_daily_report_dash
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);#cidade_hourly_report
			// $data['reportnetype'] = 'city';
		// }
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		$this->load->view('view_mainkpis_chart',$data);
		if (($netype == 'nodeb' or $netype == 'cell') and strtotime($reportdate) == strtotime($referencedate)){
		$this->load->view('view_mainkpis_daily',$data);
		}
		else{
		$this->load->view('view_mainkpis',$data);
		}
	}

		public function monthly()
	{
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		#$data['cells'] = $this->model_monitor->cells();
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
						
		//Set Type
				if($this->input->post('reportnetype')){
					$netype = $this->input->post('reportnetype');
				} else {
					$netype = 'network';
				}
				$data['reportnetype'] = $netype;
				#echo $netype;		
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} else {
			$reportdate = $referencedate;
		}	

		$date = new DateTime($reportdate);
		$monthnum = $date->format("M");
		$data['monthnum'] = $monthnum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'monthly';
		$data['reportkpi'] = 'all';
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
				
		if($netype == 'network'){
			$data['node_weekly_report'] = $this->model_mainkpis->network_monthly_report($reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->network_weekly_report_graph($reportdate);
			$data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_monthly_report($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->region_weekly_report_graph($node,$reportdate);
			$data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_monthly_report($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->rnc_weekly_report_graph($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'nodeb'){
			$data['node_weekly_report'] = $this->model_mainkpis->nodeb_monthly_report($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->nodeb_weekly_report_graph($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cell'){
			$data['node_weekly_report'] = $this->model_mainkpis->cell_monthly_report($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cell_weekly_report_graph($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		elseif($netype == 'uf'){
			$data['node_weekly_report'] = $this->model_mainkpis->uf_monthly_report($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->uf_weekly_report_graph($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cidade'){
			$data['node_weekly_report'] = $this->model_mainkpis->cidade_monthly_report($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cidade_weekly_report_graph($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cluster'){
			$data['node_weekly_report'] = $this->model_mainkpis->cluster_monthly_report($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cluster_weekly_report_graph($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}

		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);#cidade_daily_report_dash
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);#cidade_hourly_report
			// $data['reportnetype'] = 'city';
		// }
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		$this->load->view('view_mainkpis_chart',$data);
		$this->load->view('view_mainkpis',$data);
	}	
	
	
public function ch()
	{
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
				
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} else {
			$reportdate = $referencedate;
		}	
		
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
	

		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($node == 'NETWORK'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->network_commercial_hour_report($reportdate);	
			$data['reportnetype'] = 'network';
		}
		elseif (in_array($node, $regions)) {
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->region_commercial_hour_report($node,$reportdate);
			$data['reportnetype'] = 'region';
		}
		elseif(substr($node,0,3) == 'RNC'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report_rncinput($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->rnc_commercial_hour_report($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		else{
			if(substr($node,2,1) == '-'){
				$nodes = explode("-", $node);
				$node = $nodes[1];
			}
			$data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			$data['reportnetype'] = 'city';
			}
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		$this->load->view('view_mainkpis_chart',$data);
		$this->load->view('view_mainkpis',$data);
	}	
	
	public function cidades()
		{
			$this->load->helper('form');
			$this->load->model('model_monitor');
			$this->load->model('model_mainkpis');
			
			//Set Date and Weeknum
			if($this->input->post('reportdate')){
				$reportdate = $this->input->post('reportdate');
			} else {
				$reportdate = date("Y-m-d");
			}
			$date = new DateTime($reportdate);
			$weeknum = $date->format("W");
			$data['weeknum'] = $weeknum;
			$data['reportdate'] = $reportdate;
			#echo $weeknum;
			
			
			//Set Node
			if($this->input->post('reportnename')){
				$node = $this->input->post('reportnename');
			} else {
				$node = 'NETWORK';
			}
			$node = 'FLORIANÓPOLIS';
			$data['reportnename'] = $node;
			#echo $node;
			
			#$node = $this->input->post('node');

			#$data['cells'] = $this->model_monitor->cells();
			
			$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
			
			if($node == 'NETWORK'){
				$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
				$data['node_daily_report'] = $this->model_mainkpis->network_daily_report($reportdate);	
			}
			elseif (in_array($node, $regions)) {
				$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report($node,$weeknum);
				$data['node_daily_report'] = $this->model_mainkpis->region_daily_report($node,$reportdate);
			}
			elseif(substr($node,0,3) == 'RNC'){
				$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report_rncinput($node,$weeknum);
				$data['node_daily_report'] = $this->model_mainkpis->rnc_daily_report($node,$reportdate);
			}
			else{
				$data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
				$data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			}
			
			$this->load->view('view_header');
			$this->load->view('view_nav',$data);
			$this->load->view('view_mainkpis_chart',$data);
			$this->load->view('view_mainkpis',$data);
		}	
	
		public function dailyold()
	{
		$ddate = date("Y-m-d");
		$date = new DateTime($ddate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$node = $this->input->post('node');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		#$data['cells'] = $this->model_monitor->cells();
		
		if(substr($node,0,3) == 'RNC'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report_rncinput($node);
			$data['node_daily_report'] = $this->model_mainkpis->rnc_hourly_report($node);
		} else {
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report($node);
			$data['node_daily_report'] = $this->model_mainkpis->region_daily_report($node);
		}
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		$this->load->view('view_mainkpis_chart',$data);
		$this->load->view('view_mainkpis',$data);
	}	
	
		public function welcome()
	{
		#$this->load->view('welcome_message');
		#$this->load->view('view_testeweek');
		$this->load->view('view_selectbox');
	}

		public function capacity()
	{
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_capacity');
		$this->load->model('model_cellsinfo');
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();	
		$data['nodebs'] = $this->model_cellsinfo->nodebs();		
		$data['ufs'] = $this->model_cellsinfo->ufs();
		
		
		//Set Date and Weeknum
		$maxdate = $this->model_capacity->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$yearnum = $date->format("o");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		$data['reportagg'] = 'weekly';
		#$node = $this->input->post('node');

		#$data['cells'] = $this->model_monitor->cells();
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($node == 'NETWORK'){
			$data['dash_capacity'] = $this->model_capacity->network_capacity_dash($yearnum,$weeknum);
			$data['dash_histogram'] = $this->model_capacity->network_capacity_histogram($yearnum,$weeknum);
			$data['reportnetype'] = 'network';
		}
		elseif (in_array($node, $regions)) {
			$data['dash_capacity'] = $this->model_capacity->region_capacity_dash($yearnum,$weeknum,$node);
			$data['dash_histogram'] = $this->model_capacity->region_capacity_histogram($yearnum,$weeknum,$node);
			$data['reportnetype'] = 'region';
		}
		elseif(substr($node,0,3) == 'RNC'){
			$data['dash_capacity'] = $this->model_capacity->rnc_capacity_dash($yearnum,$weeknum,$node);
			$data['dash_histogram'] = $this->model_capacity->rnc_capacity_histogram($yearnum,$weeknum,$node);
			$data['reportnetype'] = 'rnc';
		}
		
		$this->load->view('view_header_capacity');
		$this->load->view('view_nav_cell_nodeb_capacity',$data);
		$this->load->view('view_capacity_chart',$data);
		$this->load->view('view_capacity',$data);
	}	
		
	public function cfg()
	{
		
		ini_set('memory_limit', '2048M');
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->library('table');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_configuration');
		$this->load->library('Datatables');
		$data['reportnetype'] = 'network';
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		
		//SET MO
		
		if($this->input->post('reportmo')){
			$mo = $this->input->post('reportmo');
		} else {
			$mo = 'ucellsetup';
		}
		$data['reportmo'] = $mo;
		
		#$node = $this->input->post('node');

		#$data['rncs'] = $this->model_cellsinfo->rncs();
		#$data['regional'] = $this->model_cellsinfo->regional();
		#$data['cidades'] = $this->model_cellsinfo->cidades();
		#$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['mos'] = $this->model_cellsinfo->mos();
		$data['schema'] = "umts_configuration.";
		$data['element'] = "rnc";
		
		#############################HEADER#####################	
		
		#$data['results'] = $this->model_configuration->rnc_cfg();
		#$data['cells'] = $this->model_configuration->cells();
		
		
		$this->load->view('view_header');
		$this->load->view('view_nav_cfg_umts',$data);
		$this->load->view('view_configuration',$data);
	}
	
public function nodeb()
	{
		
		ini_set('memory_limit', '2048M');
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->library('table');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_configuration');
		$this->load->library('Datatables');
		$data['reportnetype'] = 'network';
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		
		//SET MO
		
		if($this->input->post('reportmo')){
			$mo = $this->input->post('reportmo');
		} else {
			$mo = 'retsubunit';
		}
		$data['reportmo'] = $mo;
		$data['mos'] = $this->model_cellsinfo->nodeb_mos();
		$data['schema'] = "umts_nodeb_configuration.";
		$data['element'] = "rnc";
		
		#############################HEADER#####################	
		
		#$data['results'] = $this->model_configuration->rnc_cfg();
		#$data['cells'] = $this->model_configuration->cells();
		
		
		$this->load->view('view_header');
		$this->load->view('view_nav_cfg_umts',$data);
		$this->load->view('view_configuration',$data);
	}
	
public function nodebcfg()
	{
		
		ini_set('memory_limit', '2048M');
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->library('table');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_configuration');
		$this->load->library('Datatables');
		$data['reportnetype'] = 'network';
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		
		//SET MO
		
		if($this->input->post('reportmo')){
			$mo = $this->input->post('reportmo');
		} else {
			$mo = 'retsubunit';
		}
		$data['reportmo'] = $mo;
		$data['mos'] = $this->model_cellsinfo->nodeb_mo();
		$data['schema'] = "nodeb_configuration.";
		$data['element'] = "nodeb";
		
		#############################HEADER#####################	
		
		#$data['results'] = $this->model_configuration->rnc_cfg();
		#$data['cells'] = $this->model_configuration->cells();
		
		
		$this->load->view('view_header');
		$this->load->view('view_nav_cfg_umts',$data);
		$this->load->view('view_configuration',$data);
	}	
	
public function enodebcfg()
	{
		
		ini_set('memory_limit', '2048M');
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->library('table');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_configuration');
		$this->load->library('Datatables');
		$data['reportnetype'] = 'network';
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		
		//SET MO
		
		if($this->input->post('reportmo')){
			$mo = $this->input->post('reportmo');
		} else {
			$mo = 'enodebcell';
		}
		$data['reportmo'] = $mo;
		$data['mos'] = $this->model_cellsinfo->enodeb_mo();
		$data['schema'] = "enodeb_configuration.";
		$data['element'] = "enodeb";
		
		#############################HEADER#####################	
		
		#$data['results'] = $this->model_configuration->rnc_cfg();
		#$data['cells'] = $this->model_configuration->cells();
		
		
		$this->load->view('view_header');
		$this->load->view('view_nav_cfg_lte',$data);
		$this->load->view('view_configuration',$data);
	}
	
public function srancfg()
	{
		
		ini_set('memory_limit', '2048M');
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->library('table');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_configuration');
		$this->load->library('Datatables');
		$data['reportnetype'] = 'network';
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		
		//SET MO
		
		if($this->input->post('reportmo')){
			$mo = $this->input->post('reportmo');
		} else {
			$mo = 'cell';
		}
		$data['reportmo'] = $mo;
		$data['mos'] = $this->model_cellsinfo->sran_mo();
		$data['schema'] = "sran_configuration.";
		$data['element'] = "sran";
		
		#############################HEADER#####################	
		
		#$data['results'] = $this->model_configuration->rnc_cfg();
		#$data['cells'] = $this->model_configuration->cells();
		
		
		$this->load->view('view_header');
		$this->load->view('view_nav_cfg_umts_lte',$data);
		$this->load->view('view_configuration',$data);
	}	

public function rfpar()
	{
		
		ini_set('memory_limit', '2048M');
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->library('table');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_configuration');
		$this->load->library('Datatables');
		$data['reportnetype'] = 'network';
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		
		//SET MO
		
		if($this->input->post('reportmo')){
			$mo = $this->input->post('reportmo');
		} else {
			$mo = 'cell';
		}
		$data['reportmo'] = 'cell_database_v7';
		$data['mos'] = $this->model_cellsinfo->sran_mo();
		$data['schema'] = "common_gis.";
		$data['element'] = "view";
		
		#############################HEADER#####################	
		
		#$data['results'] = $this->model_configuration->rnc_cfg();
		#$data['cells'] = $this->model_configuration->cells();
		
		
		$this->load->view('view_header');
		$this->load->view('view_nav_cells_database',$data);
		$this->load->view('view_configuration',$data);
	}
	
public function alarm()
	{
		
		ini_set('memory_limit', '2048M');
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->library('table');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_configuration');
		$this->load->library('Datatables');
		$data['reportnetype'] = 'network';
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = '';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		
		//SET MO
		
		if($this->input->post('reportmo')){
			$mo = $this->input->post('reportmo');
		} else {
			$mo = 'cell';
		}
		$data['reportmo'] = 'alarm_log';
		$data['mos'] = $this->model_cellsinfo->sran_mo();
		$data['schema'] = "alarm.";
		$data['element'] = "view";
		
		#############################HEADER#####################	
		
		#$data['results'] = $this->model_configuration->rnc_cfg();
		#$data['cells'] = $this->model_configuration->cells();
		
		
		$this->load->view('view_header');
		$this->load->view('view_nav_alarm',$data);
		$this->load->view('view_configuration',$data);
	}


public function inventory()
	{
		
		ini_set('memory_limit', '2048M');
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->library('table');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_configuration');
		$this->load->library('Datatables');
		$data['reportnetype'] = 'network';
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		
		//SET MO
		
		if($this->input->post('reportmo')){
			$mo = $this->input->post('reportmo');
		} else {
			$mo = 'cell';
		}
		$data['reportmo'] = 'vw_umts_board_detail';
		$data['mos'] = $this->model_cellsinfo->sran_mo();
		$data['schema'] = "umts_inventory.";
		$data['element'] = "view";
		
		#############################HEADER#####################	
		
		#$data['results'] = $this->model_configuration->rnc_cfg();
		#$data['cells'] = $this->model_configuration->cells();
		
		
		$this->load->view('view_header');
		$this->load->view('view_nav_umts_lte',$data);
		$this->load->view('view_configuration',$data);
	}		

public function action_plan()
	{
		
		ini_set('memory_limit', '2048M');
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->library('table');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_configuration');
		$this->load->library('Datatables');
		$data['reportnetype'] = 'network';
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		#echo $node;
		
		//SET MO
		
		if($this->input->post('reportmo')){
			$mo = $this->input->post('reportmo');
		} else {
			$mo = 'cell';
		}
		$data['reportmo'] = 'action_plan';
		$data['mos'] = $this->model_cellsinfo->sran_mo();
		$data['schema'] = "common_control.";
		$data['element'] = "view";
		
		#############################HEADER#####################	
		
		#$data['results'] = $this->model_configuration->rnc_cfg();
		#$data['cells'] = $this->model_configuration->cells();
		
		
		$this->load->view('view_header');
		$this->load->view('view_nav_umts_lte',$data);
		$this->load->view('view_configuration',$data);
	}	
	
function datatable()
    {
		ini_set('memory_limit', '2048M');
		$this->load->model('model_configuration');
		// $this->load->library('Datatables');
		// $fields = $this->db->list_fields('rnc_info');
		// $keystring = implode(",", $fields);
		// $this->datatables->select($keystring)->from('umts_control.rnc_info');
		// echo $this->datatables->generate();
		
		#$results = $this->model_configuration->rnc_cfg();
		#$arr = array('data' => $results);
		#echo json_encode($arr); 
		$users = array();
		$users = $results;
		#$keystring[] = implode(",", $users);
		#echo $users;
		
		// foreach($results as $row){
			// $keystring[] = $row;#implode(",", $row);
			// $keystring2[] ='"' . implode('", "', $row) . '"';
		// }
		// //echo $keystring2[0];
		 echo json_encode($users); 
		
    }	
	
		public function nqi()
	{
#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_nqi');
		$this->load->model('model_cellsinfo');
		  // echo $this->input->post('reportnename');
		  // echo $this->input->post('reportkpi');
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;

		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;		
		
		//Set KPI
		if($this->input->post('kpi')){
			$nekpi = $this->input->post('kpi');
		} else {
			$nekpi = 'nqihs';
		}
		#echo $nekpi;
		$data['reportnetype'] = $netype;		
		
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		$referencedate = $this->model_cellsinfo->reference_date($node);
		//echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = $nekpi;
		#echo $weeknum;

		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		#$data['nodebs'] = $this->model_cellsinfo->nodebs_cells_db();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_network($reportdate,$nekpi);
			#$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
			$data['node_daily_report'] = $this->model_nqi->network_daily_report($reportdate);	
			// $data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region') {
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_region($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->region_daily_report($node,$reportdate);
			// $data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_rnc($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->rnc_daily_report($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'nodeb'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_nodeb($node,$reportdate);
			$data['node_daily_report'] = $this->model_nqi->nqi_daily_nodeb($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cell'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_cell($node,$reportdate);
			$data['node_daily_report'] = $this->model_nqi->nqi_daily_cell($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'uf'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_uf($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->nqi_daily_uf($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cidade'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_cidade($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->nqi_daily_cidade($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cluster'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_cluster($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->nqi_daily_cluster($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}			
		// else{
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// // $data['reportnetype'] = 'city';
			// }
		
		

		#$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_region();
		#$data['cells'] = $this->model_monitor->cells();
		$this->load->view('view_header');	
		$this->load->view('view_nav_nqi',$data);
		#$this->load->view('view_weekjs');
		#$this->load->view('view_sitejs');
		#$this->load->view('view_networkelementsjs');
		if($nekpi == 'nqihs'){
			$this->load->view('view_nqi_chart',$data);
			$this->load->view('datatables',$data);
		}elseif($nekpi == 'nqics'){
		$this->load->view('view_nqics_chart',$data);
		$this->load->view('view_nqics',$data);
		}
		
	}
	
		public function nqi_monthly()
	{
#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_nqi');
		$this->load->model('model_cellsinfo');
		  // echo $this->input->post('reportnename');
		  // echo $this->input->post('reportkpi');
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;

		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;		
		
		//Set KPI
		if($this->input->post('kpi')){
			$nekpi = $this->input->post('kpi');
		} else {
			$nekpi = 'nqihs';
		}
		#echo $nekpi;
		$data['reportnetype'] = $netype;		
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		//echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		$date = new DateTime($reportdate);
		$monthnum = $date->format("M");
		$data['monthnum'] = $monthnum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'monthly';
		$data['reportkpi'] = $nekpi;
		#echo $weeknum;


		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs_cells_db();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_monthly_network($reportdate,$nekpi);
			#$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
			$data['node_daily_report'] = $this->model_nqi->network_weekly_report_graph($reportdate);	
			// $data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region') {
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_monthly_region($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->region_weekly_report_graph($node,$reportdate);
			// $data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_monthly_rnc($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->rnc_weekly_report_graph($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'nodeb'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_monthly_nodeb($node,$reportdate);
			$data['node_daily_report'] = $this->model_nqi->nodeb_weekly_report_graph($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cell'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_monthly_cell($node,$reportdate);
			$data['node_daily_report'] = $this->model_nqi->cell_weekly_report_graph($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'uf'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_monthly_uf($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->uf_weekly_report_graph($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cidade'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_monthly_cidade($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->cidade_weekly_report_graph($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cluster'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_monthly_cluster($node,$reportdate,$nekpi);
			$data['node_daily_report'] = $this->model_nqi->cluster_weekly_report_graph($node,$reportdate);
			// $data['reportnetype'] = 'rnc';
		}			
		// else{
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// // $data['reportnetype'] = 'city';
			// }
		
		

		#$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_region();
		#$data['cells'] = $this->model_monitor->cells();
		$this->load->view('view_header');	
		$this->load->view('view_nav_nqi',$data);
		#$this->load->view('view_weekjs');
		#$this->load->view('view_sitejs');
		#$this->load->view('view_networkelementsjs');
		if($nekpi == 'nqihs'){
			$this->load->view('view_nqi_chart',$data);
			$this->load->view('datatables',$data);
		}elseif($nekpi == 'nqics'){
		$this->load->view('view_nqics_chart',$data);
		$this->load->view('view_nqics',$data);
		}
		
	}	
	
		public function nqics()
	{
#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_nqi');
		$this->load->model('model_cellsinfo');
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;		
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		
		$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		//echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'nqics';
		#echo $weeknum;
		


		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs_cells_db();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($node == 'NETWORK'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_network($reportdate);
			#$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
			$data['node_daily_report'] = $this->model_nqi->network_daily_report($reportdate);	
			$data['reportnetype'] = 'network';
		}
		elseif (in_array($node, $regions)) {
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_region($node,$reportdate);
			$data['node_daily_report'] = $this->model_nqi->region_daily_report($node,$reportdate);
			$data['reportnetype'] = 'region';
		}
		elseif(substr($node,0,3) == 'RNC'){
			$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_rnc($node,$reportdate);
			$data['node_daily_report'] = $this->model_nqi->rnc_daily_report($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		else{
			$data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			$data['reportnetype'] = 'city';
			}		
		

		#$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_region();
		#$data['cells'] = $this->model_monitor->cells();
		$this->load->view('view_header');	
		$this->load->view('view_nav_capacity',$data);
		#$this->load->view('view_weekjs');
		#$this->load->view('view_sitejs');
		#$this->load->view('view_networkelementsjs');
		$this->load->view('view_nqics',$data);
		$this->load->view('view_nqics_chart',$data);
	}	

	
	public function nqirnc()
	{
		$this->load->model('model_nqi');
		$data['nqi_weekly_region'] = $this->model_nqi->nqi_weekly_rnc();
		$this->load->view('datatables',$data);
	}
	
		public function autocomplete()
	{
		$this->load->view('teste');
	}
	
		public function test()
	{
	$this->load->view('view_header');
	$this->load->view('view_sparklines_new');
	$this->load->view('view_testesparklines');
	}
	
		public function detail()
	{
		$this->load->view('view_detail');
	}
	
		public function maps()
	{
		$this->load->model('model_gis');
		$data['cells'] = $this->model_gis->cells();
		$this->load->view('view_maps',$data);
	}	
	
		public function geojson()
	{
		#$this->load->model('model_gis');
		#$data['cells'] = $this->model_gis->cells();
		$this->load->view('view_geojson');
	}
	
	public function monitor()
	{
		#$this->load->view('welcome_message');
		$this->load->model('model_worstcells');
		$this->load->model('model_monitor');
		$rnc_query = $this->input->post('rnc');
		$cellid_query = $this->input->post('cellid');
		$cluster_query = $this->input->post('cluster');
		$cidade_query = $this->input->post('cidade');
		$kpi = $this->input->post('kpi');
		$daterange = $this->input->post('daterange');
		$daterangeinput = explode(" - ", $daterange);
		if($this->input->post('daterange')){
		$inidate = date('Y-m-d', strtotime($daterangeinput[0]));
		$findate = date('Y-m-d', strtotime($daterangeinput[1]));
		}
		$data['cells'] = $this->model_monitor->cells();
		if($this->input->post('rnc') &&  $this->input->post('cellid') && $cellid_query != "undefined"){
			if($kpi == 'Accessibility'){
				#$data['result'] = $this->model_worstcells->rncaccrrc($rnc_query,'2015-09-24','2015-09-30');
				$data['result'] = $this->model_monitor->cellacc($rnc_query,$cellid_query,$inidate,$findate);
				#$data['result'] = $this->model_monitor->rnckpi($rnc_query);
			} elseif ($kpi == 'Traffic'){
				$data['result'] = $this->model_monitor->celltraffic($rnc_query,$cellid_query,$inidate,$findate);
			}
	
			#$data['result'] = $this->model_monitor->cellkpi($rnc_query,$cellid_query);
			#$data['result'] = $this->model_monitor->cellacc($rnc_query,$cellid_query,$inidate,$findate);
			$data['level'] = 'Cell';
			$data['kpi'] = $kpi;
			$data['ne'] = $cellid_query;
			$data['necellid'] = $cellid_query;
			$data['nernc'] = $rnc_query;
			$data['daterange'] = $daterange;
			//$data['inidate'] = $inidate;
			//$data['findate'] = $findate;
			#echo $data['level'];
		} elseif($this->input->post('cluster')){
			$data['result'] = $this->model_monitor->clusterkpi($cluster_query);
			$data['level'] = 'Cluster';
			$data['ne'] = $cluster_query;
		}
		  elseif($this->input->post('cidade')){
			$data['result'] = $this->model_monitor->cidadekpi($cidade_query);
			$data['level'] = 'Cidade';
			$data['ne'] = $cidade_query;			
		} elseif($this->input->post('rnc')){
			if($kpi == 'Accessibility'){
				#$data['result'] = $this->model_monitor->rncaccrrc($rnc_query,'2015-10-01','2015-10-16');
				$data['result'] = $this->model_monitor->rncaccrrc($rnc_query,$inidate,$findate);
				#$data['result'] = $this->model_monitor->rnckpi($rnc_query);
			} elseif ($kpi == 'Traffic'){
				$data['result'] = $this->model_monitor->rnctraffic($rnc_query,$inidate,$findate);
			}
			$data['level'] = 'RNC';
			$data['kpi'] = $kpi;
			$data['ne'] = $rnc_query;
			$data['nernc'] = $rnc_query;
			$data['daterange'] = $daterange;
			#$data['inidate'] = $inidate;
			#$data['findate'] = $findate;
		} 
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		///
		///$this->load->view('view_theme_dark_unica');
		if($this->input->post('rnc') || $this->input->post('cluster') || $this->input->post('cidade')){
			if($kpi == 'Accessibility'){
				//$this->load->view('view_theme_sand_signika');
				$this->load->view('view_accessibility',$data);
			} elseif ($kpi == 'Traffic'){
				#echo "worked";
				//$this->load->view('view_theme_dark_blue');
				$this->load->view('view_traffic2',$data);
			}			
		}
		$this->load->view('view_home',$data);
	}
	
		public function wc()
	{

		$this->load->model('model_worstcells');
		#$rnc_query = $this->input->post('rnc');
		#$cellid_query = $this->input->post('cellid');
		#$cluster_query = $this->input->post('cluster');
		#$cidade_query = $this->input->post('cidade');
		#$data['cells'] = $this->model_monitor->cells();
		$data['wc'] = $this->model_worstcells->rncwc('RNCMS02','2015-09-27','2015-10-03');
		$this->load->view('view_worstcells',$data);
	}
	
		public function worstcells()
	{
		ini_set('memory_limit', '2048M');
		$this->load->model('model_worstcells');
		$this->load->model('model_monitor');
		$this->load->model('model_cellsinfo');
		if($this->input->post('node')){
			$rnc_query = $this->input->post('node');
		} else {
			$rnc_query = $this->input->post('reportnename');
		}
		if($this->input->post('date')){
			$daterange = $this->input->post('date');
		} else {
			$daterange = $this->input->post('reportdate');
		}		

		$reportnename = $this->input->post('reportnename');
		$reportdate = $this->input->post('reportdate');
		$reportnetype = $this->input->post('reportnetype');	
		$timeagg = $this->input->post('timeagg');	
		#$inidate = date('Y-m-d', strtotime($daterange.' -6 day'));
		#$findate = date('Y-m-d', strtotime($daterange));
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		###Map kpi
		$data['reportagg'] = $timeagg;
		$data['reportdate'] = $reportdate;	
		$data['reportnename'] = $reportnename;
		$data['reportnetype'] = $reportnetype;
		$data['reportkpi'] = $this->input->post('kpi');
		#echo $this->input->post('kpi');
		$kpi = preg_replace('/\s+/', '', $this->input->post('kpi'));
		$kpi = strtolower($kpi);
		$kpimap = [
			"rrcacc" => "acc_rrc",
			"psacc" => "acc_ps_rab",
			"csacc" => "acc_cs_rab",
			"hsacc" => "acc_hs",
			#"hsacc" => "acc_hs_f2h",
			"retainabilitycs" => "drop_cs",
			"retainabilityps" => "drop_ps",
			"retainabilityhsdpa" => "hsdpa_drop",
			"retainabilityhsupa" => "hsupa_drop",
			"r99dltraffic" => "traffic",
			"r99ultraffic" => "traffic",
			"hsdpatraffic" => "traffic",
			"hsupatraffic" => "traffic",
			"hsdpaues" => "traffic",
			"hsupaues" => "traffic",
			"r99ues" => "traffic",
			"hsdpathp" => "thp_hsdpa",
			"hsupathp" => "thp_hsupa",
			"csretention" => "retention_cs",
			"psretention" => "retention_ps",
			"softho" => "soft_hand_succ_rate",
			"cshhointrafreq" => "cs_hho_intra_freq_succ",
			"pshhointrafreq" => "ps_hho_intra_freq_succ",
			"hhointerfreq" => "hho_inter_freq_succ",
			"irathocs" => "iratho_cs_succ",
			"irathops" => "iratho_ps_succ",
			"shooverhead" => "coverage",
			"availability" => "availability",
			"rtwp" => "rtwp",
			"qdahs" => "qda_ps_f2h",
			"qdrhs" => "qdr_ps",
			"3g-retentionps" => "nqi_retention_ps",
			"3g-retentionhs" => "nqi_retention_ps",
			"3g-retentioncs" => "nqi_retention_cs",
			"weighted-availability" => "availability",#"nqi_availability",
			"userthroughput" => "throughput",
			#"hsdpausersratio" => "hsdpausersratio",
			#"nqips" => "rtwp",
			"qdacs" => "qda_cs",
			"qdrcs" => "qdr_cs",
		];
		
		$kpi_family_map = [
			"rrcacc" => "accessibility",
			"psacc" => "accessibility",
			"csacc" => "accessibility",
			"hsacc" => "accessibility",
			"retainabilitycs" => "retainability",
			"retainabilityps" => "retainability",
			"retainabilityhsdpa" => "retainability",
			"retainabilityhsupa" => "retainability",
			"r99dltraffic" => "traffic",
			"r99ultraffic" => "traffic",
			"hsdpatraffic" => "traffic",
			"hsupatraffic" => "traffic",
			"hsdpaues" => "traffic",
			"hsupaues" => "traffic",
			"r99ues" => "traffic",
			"hsdpathp" => "service_integrity",
			"hsupathp" => "service_integrity",
			"csretention" => "mobility",
			"psretention" => "mobility",
			"softho" => "mobility",
			"cshhointrafreq" => "mobility",
			"pshhointrafreq" => "mobility",
			"hhointerfreq" => "mobility",
			"irathocs" => "mobility",
			"irathops" => "mobility",
			"shooverhead" => "coverage",
			"availability" => "availability",
			"rtwp" => "coverage",
			"qdahs" => "nqi",
			"qdrhs" => "nqi",
			"3g-retentionps" => "nqi",
			"3g-retentionhs" => "nqi",
			"3g-retentioncs" => "nqi",
			"weighted-availability" => "availability",
			"userthroughput" => "nqi",
			#"hsdpausersratio" => "hsdpausersratio",
			#"nqips" => "rtwp",
			"qdacs" => "nqi",
			"qdrcs" => "nqi"		
		];

		$data['kpi_family'] = $kpi_family_map[$kpi];
	
	$kpis_group1 = array("accessibility", "mobility"); //KPIs with num and den
	$kpis_group2 = array("availability",'nqi_availability', "traffic"); //KPIs without num and den		
	$kpis_group3 = array("service_integrity", "coverage"); //KPIs without num and den		

	
		###query para retorno de indicador e falhas para demonstração gráfica na tela de wost cells
		
		// if($reportnetype == 'cell')){
			// $cellid_array = $this->model_worstcells->find_cellid($this->input->post('cellname'));
			// $cellid = $cellid_array[0]->cellid;
			// $cell_family = "cell_".$kpi_family_map[$kpi];
			// $data['result'] = $this->model_monitor->$cell_family($reportnename,$cellid,$reportdate,$reportdate);
			// $data['ne'] = $this->input->post('cellname');
		// } 
		// elseif($reportnetype == 'cluster'){
			// $data['result'] = $this->model_monitor->clusterkpi($cluster_query);
			// $data['ne'] = $cluster_query;
		// }
		  
		  // elseif($reportnetype == 'cidade'){
			// $data['result'] = $this->model_monitor->cidadekpi($cidade_query);
			// $data['ne'] = $cidade_query;			
		// } 
		//if($reportnetype == 'rnc'){
		#echo $reportnetype; 	
		if($kpi_family_map[$kpi] !== "nqi" and $reportnetype !='cell' and $reportnetype !='custom'){
			$rnc_family = "rnc_main_kpis";

		}
		elseif($kpi_family_map[$kpi] !== "nqi" and $reportnetype == 'custom'){
			$rnc_family = "custom_main_kpis";
		}
		elseif($kpi_family_map[$kpi] !== "nqi" and $reportnetype == 'cell'){
			$rnc_family = "cell_main_kpis";
		}
		
		else{
			$rnc_family = "node_nqi";
		}
			
			$data['result'] = $this->model_monitor->$rnc_family($reportnename,$reportdate,$timeagg,$reportnetype);
			$data['ne'] = $reportnename;
		//}
		
		
		###query para retorno das worst cells dependendo do indicador selecionado
			if(strpos($kpimap[$kpi], 'retention') !== FALSE && $kpi_family_map[$kpi] !== "nqi"){ #FOR RETENTION KPIs not from nqi we use the same methodology as the retainability kpi (1 - num/den)
				$data['wc'] = $this->model_worstcells->rncwc_retainability($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			}
			elseif(in_array($kpi_family_map[$kpi], $kpis_group1)){
				#echo "ola";
				$data['wc'] = $this->model_worstcells->rncwc($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			}
			 elseif (in_array($kpi_family_map[$kpi], $kpis_group2)) {
				 #echo "ola2";
				 $data['wc'] = $this->model_worstcells->rncwcalt($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			 }
			 elseif (in_array($kpi_family_map[$kpi], $kpis_group3)) {
				 #echo "ola2";
				 $data['wc'] = $this->model_worstcells->rncwcalt2($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			 }			 
			 elseif ($kpi_family_map[$kpi] == "retainability"){
				 #echo "ola3";
				 $data['wc'] = $this->model_worstcells->rncwc_retainability($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			 }
			 elseif (strpos($kpimap[$kpi], 'nqi_retention') !== FALSE && $kpi_family_map[$kpi] == "nqi"){
				 #echo "ola3";
				 #$data['wc'] = $this->model_worstcells->rncwc_nqi_retention($kpimap[$kpi],$rnc_query,$kpi_family_map[$kpi],$inidate,$findate);
				 $data['wc'] = $this->model_worstcells->rncwc_retainability($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			 }			 
			 elseif ($kpi_family_map[$kpi] == "nqi"){
				 #echo "ola3";
				 $data['wc'] = $this->model_worstcells->rncwc_nqi($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
				 #$data['wc'] = $this->model_worstcells->rncwc_nqi($kpimap[$kpi],$rnc_query,$kpi_family_map[$kpi],$inidate,$findate);
			 }
			

		#} 
		
		$this->load->view('view_header');
		$this->load->view('view_nav_wc',$data);
		#$trimmed = preg_replace('/\s+/', '', $this->input->post('kpi'));
		#echo $this->input->post('wcdate');
		#echo $this->input->post('rnc');
		#echo $trimmed;
		#$this->load->view('view_theme_sand_signika');
		#$this->load->view('view_theme_dark_unica');
		#$this->load->view('view_sparklines',$data);
		$this->load->view('view_sparklines_new',$data);
		$this->load->view('view_menu');
		
		//if($this->input->post('rnc') || $this->input->post('cluster') || $this->input->post('cidade')){
			$wc_view = "view_wc_".$kpimap[$kpi];
			#echo $wc_view;
			#$this->load->view('vw_wc_rrc',$data);
			$this->load->view($wc_view,$data);
		//}
		if (in_array($kpi_family_map[$kpi], $kpis_group3)) {
			$this->load->view('view_wc_kpigroup3',$data);
		}
		elseif ($kpi_family_map[$kpi] == "nqi"){
			$this->load->view('view_wc_nqi',$data);
		}
		else{
			$this->load->view('view_wc',$data);		
		}


		$this->load->view('view_footer');
	 }

public function weeklyworstcells()
	{
		$this->load->model('model_worstcells');
		$this->load->model('model_monitor');
		$node_query = $this->input->post('node');
		$daterange = $this->input->post('week');
		
		$data['weeknum'] = $daterange;
		
		###Map kpi
		$data['reportagg'] = 'weekly';
		$data['reportnename'] = $node_query;
		$data['reportnetype'] = 'region';
		
		$kpi = preg_replace('/\s+/', '', $this->input->post('kpi'));
		$kpi = strtolower($kpi);
		$kpimap = [
			"rrcacc" => "acc_rrc",
			"psacc" => "acc_ps_rab",
			"csacc" => "acc_cs_rab",
			"hsacc" => "acc_hs_f2h",
			"retainabilitycs" => "drop_cs",
			"retainabilityps" => "drop_ps",
			"retainabilityhsdpa" => "hsdpa_drop",
			"retainabilityhsupa" => "hsupa_drop",
			"r99dltraffic" => "traffic",
			"r99ultraffic" => "traffic",
			"hsdpatraffic" => "traffic",
			"hsupatraffic" => "traffic",
			"hsdpaues" => "traffic",
			"hsupaues" => "traffic",
			"r99ues" => "traffic",
			"hsdpathp" => "thp_hsdpa",
			"hsupathp" => "thp_hsupa",
			"csretention" => "retention_cs",
			"psretention" => "retention_ps",
			"softho" => "soft_hand_succ_rate",
			"cshhointrafreq" => "cs_hho_intra_freq_succ",
			"pshhointrafreq" => "ps_hho_intra_freq_succ",
			"hhointerfreq" => "hho_inter_freq_succ",
			"irathocs" => "iratho_cs_succ",
			"irathops" => "iratho_ps_succ",
			"shooverhead" => "coverage",
			"availability" => "availability",
			"rtwp" => "rtwp",
			"qdahs" => "qda_ps",
			"qdrhs" => "qdr_ps",
			"3g-retentionps" => "retention_ps",
			"3g-retentioncs" => "retention_cs",
			"weighted-availability" => "availability",
			"userthroughput" => "throughput",
			#"hsdpausersratio" => "hsdpausersratio",
			#"nqips" => "rtwp",
			"qdacs" => "qda_cs",
			"qdrcs" => "qdr_cs",
		];
		
		$kpi_family_map = [
			"rrcacc" => "accessibility",
			"psacc" => "accessibility",
			"csacc" => "accessibility",
			"hsacc" => "accessibility",
			"retainabilitycs" => "retainability",
			"retainabilityps" => "retainability",
			"retainabilityhsdpa" => "retainability",
			"retainabilityhsupa" => "retainability",
			"r99dltraffic" => "traffic",
			"r99ultraffic" => "traffic",
			"hsdpatraffic" => "traffic",
			"hsupatraffic" => "traffic",
			"hsdpaues" => "traffic",
			"hsupaues" => "traffic",
			"r99ues" => "traffic",
			"hsdpathp" => "service_integrity",
			"hsupathp" => "service_integrity",
			"csretention" => "mobility",
			"psretention" => "mobility",
			"softho" => "mobility",
			"cshhointrafreq" => "mobility",
			"pshhointrafreq" => "mobility",
			"hhointerfreq" => "mobility",
			"irathocs" => "mobility",
			"irathops" => "mobility",
			"shooverhead" => "coverage",
			"availability" => "availability",
			"rtwp" => "coverage",
			"qdahs" => "nqi",
			"qdrhs" => "nqi",
			"3g-retentionps" => "nqi",
			"3g-retentioncs" => "nqi",
			"weighted-availability" => "availability",
			"userthroughput" => "nqi",
			#"hsdpausersratio" => "hsdpausersratio",
			#"nqips" => "rtwp",
			"qdacs" => "nqi",
			"qdrcs" => "nqi"		
		];
		
		$data['kpi_family'] = $kpi_family_map[$kpi];
	
	$kpis_group1 = array("accessibility", "mobility"); //KPIs with num and den
	$kpis_group2 = array("availability", "traffic"); //KPIs without num and den		
	$kpis_group3 = array("service_integrity", "coverage"); //KPIs without num and den		
		
		#echo $kpimap[$kpi];
		#if($this->input->post('rnc') &&  $this->input->post('cellid') && $cellid_query != "undefined"){
		if($this->input->post('cellname')){
			$cellid_array = $this->model_worstcells->find_cellid($this->input->post('cellname'));
			$cellid = $cellid_array[0]->cellid;
			$cell_family = "cell_".$kpi_family_map[$kpi];
			$data['result'] = $this->model_monitor->$cell_family($rnc_query,$cellid,$daterange,$daterange);
			$data['level'] = 'Cell';
			$data['ne'] = $this->input->post('cellname');
		} elseif($this->input->post('cluster')){
			$data['result'] = $this->model_monitor->clusterkpi($cluster_query);
			$data['level'] = 'Cluster';
			$data['ne'] = $cluster_query;
		}
		  elseif($this->input->post('cidade')){
			$data['result'] = $this->model_monitor->cidadekpi($cidade_query);
			$data['level'] = 'Cidade';
			$data['ne'] = $cidade_query;			
		} elseif($this->input->post('rnc')){
			$rnc_family = "rnc_".$kpi_family_map[$kpi];
			$data['result'] = $this->model_monitor->$rnc_family($rnc_query,$daterange,$daterange);
			$data['ne'] = $rnc_query;
		} elseif($this->input->post('node')){
			$node_family = "region_weekly_".$kpi_family_map[$kpi];
			$data['result'] = $this->model_monitor->$node_family($node_query,$daterange,$daterange);
			$data['ne'] = $node_query;
		}
			if(strpos($kpimap[$kpi], 'retention') !== FALSE && $kpi_family_map[$kpi] !== "nqi"){ #FOR RETENTION KPIs not from nqi we use the same methodology as the retainability kpi (1 - num/den)
				$data['wc'] = $this->model_worstcells->regionwc_weekly($kpimap[$kpi],$node_query,$kpi_family_map[$kpi],$inidate,$findate);
			}
			elseif(in_array($kpi_family_map[$kpi], $kpis_group1)){
				$data['wc'] = $this->model_worstcells->regionwc_weekly($kpimap[$kpi],$node_query,$kpi_family_map[$kpi],$inidate,$findate);
			}
			 elseif (in_array($kpi_family_map[$kpi], $kpis_group2)) {
				 $data['wc'] = $this->model_worstcells->regionwc_weeklyalt($kpimap[$kpi],$node_query,$kpi_family_map[$kpi],$inidate,$findate);
			 }
			 elseif (in_array($kpi_family_map[$kpi], $kpis_group3)) {
				 $data['wc'] = $this->model_worstcells->regionwc_weeklyalt2($kpimap[$kpi],$node_query,$kpi_family_map[$kpi],$inidate,$findate);
			 }			 
			 elseif ($kpi_family_map[$kpi] == "retainability"){
				 $data['wc'] = $this->model_worstcells->regionwc_weekly_retainability($kpimap[$kpi],$node_query,$kpi_family_map[$kpi],$inidate,$findate);
			 }
			 elseif (strpos($kpimap[$kpi], 'retention') !== FALSE && $kpi_family_map[$kpi] == "nqi"){
				 $data['wc'] = $this->model_worstcells->regionwc_weekly_nqi_retention($kpimap[$kpi],$node_query,$kpi_family_map[$kpi],$daterange,$daterange);
			 }			 
			 elseif ($kpi_family_map[$kpi] == "nqi"){
				 $data['wc'] = $this->model_worstcells->regionwc_weekly_nqi($kpimap[$kpi],$node_query,$kpi_family_map[$kpi],$daterange,$daterange);
			 }

		$this->load->view('view_header');
		$this->load->view('view_nav_wc',$data);
		$this->load->view('view_sparklines_new',$data);
		$this->load->view('view_menu');
		
		if($this->input->post('node') || $this->input->post('cluster') || $this->input->post('cidade')){
			$wc_view = "view_wc_".$kpimap[$kpi];
			#echo $wc_view;
			#$this->load->view('vw_wc_rrc',$data);
			$this->load->view($wc_view,$data);
		}
		if (in_array($kpi_family_map[$kpi], $kpis_group3)) {
			$this->load->view('view_wc_kpigroup3',$data);
		}
		elseif ($kpi_family_map[$kpi] == "nqi"){
			$this->load->view('view_wc_weekly_nqi',$data);
		}
		else{
			$this->load->view('view_wc_weekly',$data);		
		}


		$this->load->view('view_footer');
	}
	
public function feature_phase2()
	{
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_npm_reports');
		$this->load->model('model_cellsinfo');
		#$data['cells'] = $this->model_monitor->cells();
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} else {
			$reportdate = $referencedate;
		}	

		$data['reportdate'] = $reportdate;		
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'all';		
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($node == 'NETWORK'){
			#$data['node_weekly_report'] = $this->model_mainkpis->region_daily_report_dash($reportdate);
			$data['node_daily_report'] = $this->model_npm_reports->network_hourly_report($reportdate);	
			$data['reportnetype'] = 'network';
		}
		elseif (in_array($node, $regions)) {
			#$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_dash($node,$reportdate);
			#$data['node_daily_report'] = $this->model_mainkpis->region_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'region';
		}
		elseif(substr($node,0,3) == 'RNC'){
			#$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_rncinput_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_npm_reports->rnc_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		else{
			if(substr($node,2,1) == '-'){
				#$nodes = explode("-", $node);
				#$node = $nodes[1];
			}
			#$data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);#cidade_daily_report_dash
			#$data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);#cidade_hourly_report
			#$data['reportnetype'] = 'city';
		}
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		$this->load->view('view_npm_reports_chart',$data);
		$this->load->view('view_npm_reports',$data);
	}
		public function gis()
	{
		$this->load->model('model_gis');
		$data['nodebs'] = $this->model_gis->search_nodeb();
		#$data['cells'] = $this->model_gis->cells();
		$this->load->view('view_maps2',$data);
	}

		public function overshooters()
	{
		
#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_gis');
		$this->load->model('model_cellsinfo');
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;		
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
		} else {
			$reportdate = date("Y-m-d");
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'overshooter';
		#echo $weeknum;

		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();		
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		$this->load->view('view_header');	
		
		if($node == 'NETWORK'){
			$data['overshooters_count'] = $this->model_gis->weekly_overshooters_count($reportdate);
			#$data['node_daily_report'] = $this->model_nqi->network_daily_report($reportdate);	
			$data['reportnetype'] = 'network';
			$this->load->view('view_theme_dark_unica');
			$this->load->view('view_overshooters_chart',$data);
		}
		elseif (in_array($node, $regions)) {
			$data['overshooters_count'] = $this->model_gis->region_weekly_overshooters_count($node,$reportdate);
			#$data['node_daily_report'] = $this->model_nqi->region_daily_report($node,$reportdate);
			$data['reportnetype'] = 'region';
			$this->load->view('view_theme_dark_unica');
			$this->load->view('view_overshooters_chart',$data);
		}
		elseif(substr($node,0,3) == 'RNC'){
			$data['overshooters_count'] = $this->model_gis->nqi_weekly_rnc();
			#$data['node_daily_report'] = $this->model_nqi->rnc_daily_report($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		// else{
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// $data['reportnetype'] = 'city';
			// }		
		
		$this->load->view('view_nav',$data);

		$this->load->view('view_overshooters',$data);
	}
		public function show_tp()
	{
		$this->load->model('model_gis');
		$data['nodebs'] = $this->model_gis->search_nodeb();
		#$data['cells'] = $this->model_gis->cells();
		$this->load->view('view_overshooters',$data);
	}	

		public function baseline_check()
	{
		#echo "ola";
		$this->load->view('baseline');
	}	
	
		public function clusters_check()
	{
		$this->load->view('clusters');
	}	
	
	
		public function rules_check()
	{
		$this->load->view('rules');
	}
	
public function BLMain()
	{
				#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
	//	$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		
//Set Node
			$node = 'NETWORK';
		$data['reportnename'] = $node;
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		#echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}
		date_default_timezone_set("GMT");
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		
		#############################HEADER#####################	
		
		$data['node_weekly_report']=null;
		$data['node_daily_report'] = null;
		$data['reportnetype'] = 'rnc';
			
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		ini_set('memory_limit', '2048M');
		$this->load->library('table');
		

		$this->load->view('view_header_baseline');
		$this->load->view('view_nav_baseline',$data);
	//	$this->load->view('view_mainkpis_chart',$data);
	//	$this->load->view('view_mainkpis',$data);
		
	}

public function txintegrity()
	{
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_npm_reports');
		$this->load->model('model_cellsinfo');
		#$data['cells'] = $this->model_monitor->cells();
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} else {
			$reportdate = $referencedate;
		}	

		$data['reportdate'] = $reportdate;		
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'all';		
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['adjnode'] = $this->model_cellsinfo->adjnode();
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($node == 'NETWORK'){
			#$data['node_weekly_report'] = $this->model_mainkpis->region_daily_report_dash($reportdate);
			$data['node_daily_report'] = $this->model_npm_reports->network_tx_hourly_report($reportdate);	
			$data['reportnetype'] = 'network';
		}
		elseif (in_array($node, $regions)) {
			#$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_dash($node,$reportdate);
			#$data['node_daily_report'] = $this->model_mainkpis->region_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'region';
		}
		elseif(substr($node,0,3) == 'RNC'){
			#$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_rncinput_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_npm_reports->rnc_tx_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		else{
			if(substr($node,2,1) == '-'){
				#$nodes = explode("-", $node);
				#$node = $nodes[1];
			}
			#$data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);#cidade_daily_report_dash
			$data['node_daily_report'] = $this->model_npm_reports->nodeb_tx_hourly_report($node,$reportdate);#cidade_hourly_report
			$data['reportnetype'] = 'nodeb';
		}
		
		$this->load->view('view_header');
		$this->load->view('view_nav_tx',$data);
		$this->load->view('view_txintegrity_chart',$data);
		$this->load->view('view_npm_reports',$data);
	}
public function event()
	{
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		#$data['cells'] = $this->model_monitor->cells();
		//Set Node
		
		#echo($this->input->get('reportnename'));
		if($this->input->get('reportnename')){
			$node = $this->input->get('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		#print($this->input->get('reportnetype'));
				if($this->input->get('reportnetype')){
					$netype = $this->input->get('reportnetype');
				} else {
					$netype = 'network';
				}

				$data['reportnetype'] = $netype;
				#echo $netype;		
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		
		//Set Date and Weeknum
		if($this->input->get('reportdate')){
			$reportdate = $this->input->get('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} else {
			$reportdate = $referencedate;
		}
		
		$max_date = $this->model_cellsinfo->find_max_datetime_from_main_kpis();
		$reportdate = $max_date[0]->datetime;	
		
		$data['reportdate'] = $reportdate;		
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'all';		
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_daily_report_dash($reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->network_hourly_report($reportdate);	
			$data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->region_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_rncinput_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->rnc_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'nodeb'){
			$data['node_weekly_report'] = $this->model_mainkpis->nodeb_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->nodeb_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cell'){
			$data['node_weekly_report'] = $this->model_mainkpis->cell_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cell_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		elseif($netype == 'uf'){
			$data['node_weekly_report'] = $this->model_mainkpis->uf_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->uf_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cidade'){
			$data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cluster'){
			$data['node_weekly_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
			#$data['node_weekly_report'] = $this->model_mainkpis->user_cluster_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);#cidade_daily_report_dash
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);#cidade_hourly_report
			// $data['reportnetype'] = 'city';
		// }
		
		$this->load->view('view_header_txintegrity');
		$this->load->view('view_nav_event',$data);
		$this->load->view('view_mainkpis_chart',$data);
		#$this->load->view('view_mainkpis',$data);
		$this->load->view('view_other',$data);		
	}
	
public function event2()
	{
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		#$data['cells'] = $this->model_monitor->cells();
		//Set Node
		
		#echo($this->input->get('reportnename'));
		if($this->input->get('reportnename')){
			$node = $this->input->get('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		#print($this->input->get('reportnetype'));
				if($this->input->get('reportnetype')){
					$netype = $this->input->get('reportnetype');
				} else {
					$netype = 'network';
				}

				$data['reportnetype'] = $netype;
				#echo $netype;		
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		
		//Set Date and Weeknum
		if($this->input->get('reportdate')){
			$reportdate = $this->input->get('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} else {
			$reportdate = $referencedate;
		}
		
		$max_date = $this->model_cellsinfo->find_max_datetime_from_main_kpis();
		$reportdate = $max_date[0]->datetime;	
		
		$data['reportdate'] = $reportdate;		
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'all';		
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		#echo($reportdate);
		if($netype == 'network'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_daily_report_dash($reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->network_hourly_report($reportdate);	
			$data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->region_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_rncinput_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->rnc_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'nodeb'){
			$data['node_weekly_report'] = $this->model_mainkpis->nodeb_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->nodeb_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cell'){
			$data['node_weekly_report'] = $this->model_mainkpis->cell_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cell_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		elseif($netype == 'uf'){
			$data['node_weekly_report'] = $this->model_mainkpis->uf_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->uf_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cidade'){
			$data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cluster'){
			$data['node_weekly_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
			#$data['node_weekly_report'] = $this->model_mainkpis->user_cluster_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);#cidade_daily_report_dash
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);#cidade_hourly_report
			// $data['reportnetype'] = 'city';
		// }
		
		$this->load->view('view_header_txintegrity');
		$this->load->view('view_nav_event',$data);
		$this->load->view('view_mainkpis_chart2',$data);
		#$this->load->view('view_mainkpis',$data);
		$this->load->view('view_other2',$data);		
	}	
	
public function event3()
	{
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		#$data['cells'] = $this->model_monitor->cells();
		//Set Node
		
		#echo($this->input->get('reportnename'));
		if($this->input->get('reportnename')){
			$node = $this->input->get('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		#print($this->input->get('reportnetype'));
				if($this->input->get('reportnetype')){
					$netype = $this->input->get('reportnetype');
				} else {
					$netype = 'network';
				}

				$data['reportnetype'] = $netype;
				#echo $netype;		
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		
		//Set Date and Weeknum
		if($this->input->get('reportdate')){
			$reportdate = $this->input->get('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} else {
			$reportdate = $referencedate;
		}
		
		$max_date = $this->model_cellsinfo->find_max_datetime_from_main_kpis();
		$reportdate = $max_date[0]->datetime;	
		
		$data['reportdate'] = $reportdate;		
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'all';		
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		#echo($reportdate);
		if($netype == 'network'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_daily_report_dash($reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->network_hourly_report($reportdate);	
			$data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->region_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_daily_report_rncinput_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->rnc_hourly_report($node,$reportdate);
			$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'nodeb'){
			$data['node_weekly_report'] = $this->model_mainkpis->nodeb_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->nodeb_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cell'){
			$data['node_weekly_report'] = $this->model_mainkpis->cell_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cell_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		elseif($netype == 'uf'){
			$data['node_weekly_report'] = $this->model_mainkpis->uf_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->uf_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cidade'){
			$data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);
			$data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cluster'){
			$data['node_weekly_report'] = $this->model_mainkpis->cluster_hourly_report_last($node,$reportdate);
			#$data['node_weekly_report'] = $this->model_mainkpis->user_cluster_daily_report_dash($node,$reportdate);
			#$data['node_daily_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_daily_report_dash($node,$reportdate);#cidade_daily_report_dash
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_hourly_report($node,$reportdate);#cidade_hourly_report
			// $data['reportnetype'] = 'city';
		// }
		
		$this->load->view('view_header');
		$this->load->view('view_nav_event',$data);
		#$this->load->view('view_mainkpis_chart2',$data);
		$this->load->view('view_mainkpis2',$data);
		#$this->load->view('view_other2',$data);		
	}	
	
public function event_worstcells()
	{
		ini_set('memory_limit', '2048M');
		$this->load->model('model_worstcells');
		$this->load->model('model_monitor');
		$this->load->model('model_cellsinfo');
		if($this->input->get('node')){
			$rnc_query = $this->input->get('node');
		} else {
			$rnc_query = $this->input->get('reportnename');
		}
		if($this->input->get('date')){
			$daterange = $this->input->get('date');
		} else {
			$daterange = $this->input->get('reportdate');
		}

		$max_date = $this->model_cellsinfo->find_max_datetime_from_main_kpis();
		$reportdate = $max_date[0]->datetime;			

		$reportnename = $this->input->get('reportnename');
		#$reportdate = $this->input->get('reportdate');
		$reportnetype = $this->input->get('reportnetype');	
		$timeagg = 'daily';#$this->input->post('timeagg');	
		#$inidate = date('Y-m-d', strtotime($daterange.' -6 day'));
		#$findate = date('Y-m-d', strtotime($daterange));
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		
		###Map kpi
		$data['reportagg'] = $timeagg;
		$data['reportdate'] = $reportdate;	
		$data['reportnename'] = $reportnename;
		$data['reportnetype'] = $reportnetype;
		$data['reportkpi'] = $this->input->get('kpi');
		
		$kpi = preg_replace('/\s+/', '', $this->input->get('kpi'));
		$kpi = strtolower($kpi);
		$kpimap = [
			"rrcacc" => "acc_rrc",
			"psacc" => "acc_ps_rab",
			"csacc" => "acc_cs_rab",
			"hsacc" => "acc_hs",
			#"hsacc" => "acc_hs_f2h",
			"retainabilitycs" => "drop_cs",
			"retainabilityps" => "drop_ps",
			"retainabilityhsdpa" => "hsdpa_drop",
			"retainabilityhsupa" => "hsupa_drop",
			"r99dltraffic" => "traffic",
			"r99ultraffic" => "traffic",
			"hsdpatraffic" => "traffic",
			"hsupatraffic" => "traffic",
			"hsdpaues" => "traffic",
			"hsupaues" => "traffic",
			"r99ues" => "traffic",
			"hsdpathp" => "thp_hsdpa",
			"hsupathp" => "thp_hsupa",
			"csretention" => "retention_cs",
			"psretention" => "retention_ps",
			"softho" => "soft_hand_succ_rate",
			"cshhointrafreq" => "cs_hho_intra_freq_succ",
			"pshhointrafreq" => "ps_hho_intra_freq_succ",
			"hhointerfreq" => "hho_inter_freq_succ",
			"irathocs" => "iratho_cs_succ",
			"irathops" => "iratho_ps_succ",
			"shooverhead" => "coverage",
			"availability" => "availability",
			"rtwp" => "rtwp",
			"qdaps" => "qda_ps_f2h",
			"qdrps" => "qdr_ps",
			"3g-retentionps" => "retention_ps",
			"3g-retentioncs" => "retention_cs",
			"weighted-availability" => "availability",
			"userthroughput" => "throughput",
			#"hsdpausersratio" => "hsdpausersratio",
			#"nqips" => "rtwp",
			"qdacs" => "qda_cs",
			"qdrcs" => "qdr_cs",
		];
		
		$kpi_family_map = [
			"rrcacc" => "accessibility",
			"psacc" => "accessibility",
			"csacc" => "accessibility",
			"hsacc" => "accessibility",
			"retainabilitycs" => "retainability",
			"retainabilityps" => "retainability",
			"retainabilityhsdpa" => "retainability",
			"retainabilityhsupa" => "retainability",
			"r99dltraffic" => "traffic",
			"r99ultraffic" => "traffic",
			"hsdpatraffic" => "traffic",
			"hsupatraffic" => "traffic",
			"hsdpaues" => "traffic",
			"hsupaues" => "traffic",
			"r99ues" => "traffic",
			"hsdpathp" => "service_integrity",
			"hsupathp" => "service_integrity",
			"csretention" => "mobility",
			"psretention" => "mobility",
			"softho" => "mobility",
			"cshhointrafreq" => "mobility",
			"pshhointrafreq" => "mobility",
			"hhointerfreq" => "mobility",
			"irathocs" => "mobility",
			"irathops" => "mobility",
			"shooverhead" => "coverage",
			"availability" => "availability",
			"rtwp" => "coverage",
			"qdaps" => "nqi",
			"qdrps" => "nqi",
			"3g-retentionps" => "nqi",
			"3g-retentioncs" => "nqi",
			"weighted-availability" => "availability",
			"userthroughput" => "nqi",
			#"hsdpausersratio" => "hsdpausersratio",
			#"nqips" => "rtwp",
			"qdacs" => "nqi",
			"qdrcs" => "nqi"		
		];

		$data['kpi_family'] = $kpi_family_map[$kpi];
	
	$kpis_group1 = array("accessibility", "mobility"); //KPIs with num and den
	$kpis_group2 = array("availability", "traffic"); //KPIs without num and den		
	$kpis_group3 = array("service_integrity", "coverage"); //KPIs without num and den		

	
		###query para retorno de indicador e falhas para demonstração gráfica na tela de wost cells
		
		// if($reportnetype == 'cell')){
			// $cellid_array = $this->model_worstcells->find_cellid($this->input->post('cellname'));
			// $cellid = $cellid_array[0]->cellid;
			// $cell_family = "cell_".$kpi_family_map[$kpi];
			// $data['result'] = $this->model_monitor->$cell_family($reportnename,$cellid,$reportdate,$reportdate);
			// $data['ne'] = $this->input->post('cellname');
		// } 
		// elseif($reportnetype == 'cluster'){
			// $data['result'] = $this->model_monitor->clusterkpi($cluster_query);
			// $data['ne'] = $cluster_query;
		// }
		  
		  // elseif($reportnetype == 'cidade'){
			// $data['result'] = $this->model_monitor->cidadekpi($cidade_query);
			// $data['ne'] = $cidade_query;			
		// } 
		//if($reportnetype == 'rnc'){
			$rnc_family = "rnc_main_kpis";
			$data['result'] = $this->model_monitor->$rnc_family($reportnename,$reportdate,$timeagg,$reportnetype);
			$data['ne'] = $reportnename;
		//}
		
		
		###query para retorno das worst cells dependendo do indicador selecionado
			if(strpos($kpimap[$kpi], 'retention') !== FALSE && $kpi_family_map[$kpi] !== "nqi"){ #FOR RETENTION KPIs not from nqi we use the same methodology as the retainability kpi (1 - num/den)
				$data['wc'] = $this->model_worstcells->rncwc_retainability_event($kpimap[$kpi],$reportnename,$reportnetype);
			}
			elseif(in_array($kpi_family_map[$kpi], $kpis_group1)){
				#echo "ola";
				$data['wc'] = $this->model_worstcells->rncwc_event($kpimap[$kpi],$reportnename,$reportnetype);
			}
			 elseif (in_array($kpi_family_map[$kpi], $kpis_group2)) {
				 #echo "ola2";
				 $data['wc'] = $this->model_worstcells->rncwcalt($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			 }
			 elseif (in_array($kpi_family_map[$kpi], $kpis_group3)) {
				 #echo "ola2";
				 $data['wc'] = $this->model_worstcells->rncwcalt2($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			 }			 
			 elseif ($kpi_family_map[$kpi] == "retainability"){
				 #echo "ola3";
				 $data['wc'] = $this->model_worstcells->rncwc_retainability_event($kpimap[$kpi],$reportnename,$reportnetype);
			 }
			 elseif (strpos($kpimap[$kpi], 'retention') !== FALSE && $kpi_family_map[$kpi] == "nqi"){
				 #echo "ola3";
				 $data['wc'] = $this->model_worstcells->rncwc_nqi_retention($kpimap[$kpi],$rnc_query,$kpi_family_map[$kpi],$inidate,$findate);
			 }			 
			 elseif ($kpi_family_map[$kpi] == "nqi"){
				 #echo "ola3";
				 $data['wc'] = $this->model_worstcells->rncwc_nqi($kpimap[$kpi],$rnc_query,$kpi_family_map[$kpi],$inidate,$findate);
			 }
			

		#} 
		
		$this->load->view('view_header');
		$this->load->view('view_nav_event',$data);
		#$trimmed = preg_replace('/\s+/', '', $this->input->post('kpi'));
		#echo $this->input->post('wcdate');
		#echo $this->input->post('rnc');
		#echo $trimmed;
		#$this->load->view('view_theme_sand_signika');
		#$this->load->view('view_theme_dark_unica');
		#$this->load->view('view_sparklines',$data);
		$this->load->view('view_sparklines_new',$data);
		$this->load->view('view_menu');
		
		//if($this->input->post('rnc') || $this->input->post('cluster') || $this->input->post('cidade')){
			$wc_view = "view_wc_".$kpimap[$kpi];
			#echo $wc_view;
			#$this->load->view('vw_wc_rrc',$data);
			$this->load->view($wc_view,$data);
		//}
		if (in_array($kpi_family_map[$kpi], $kpis_group3)) {
			$this->load->view('view_wc_kpigroup3',$data);
		}
		elseif ($kpi_family_map[$kpi] == "nqi"){
			$this->load->view('view_wc_nqi',$data);
		}
		else{
			$this->load->view('view_wc',$data);		
		}


		$this->load->view('view_footer');
	 }	
	 
public function alert_worstcells()
	{
		ini_set('memory_limit', '2048M');
		$this->load->model('model_worstcells');
		$this->load->model('model_monitor');
		$this->load->model('model_cellsinfo');
		if($this->input->get('node')){
			$rnc_query = $this->input->get('node');
		} else {
			$rnc_query = $this->input->get('reportnename');
		}
		if($this->input->get('date')){
			$daterange = $this->input->get('date');
		} else {
			$daterange = $this->input->get('reportdate');
		}

		$max_date = $this->model_cellsinfo->find_max_datetime_from_main_kpis();
		$reportdate = $max_date[0]->datetime;			

		$reportnename = $this->input->get('reportnename');
		#$reportdate = $this->input->get('reportdate');
		$reportnetype = $this->input->get('reportnetype');	
		$timeagg = 'daily';#$this->input->post('timeagg');	
		#$inidate = date('Y-m-d', strtotime($daterange.' -6 day'));
		#$findate = date('Y-m-d', strtotime($daterange));
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		###Map kpi
		$data['reportagg'] = $timeagg;
		$data['reportdate'] = $reportdate;	
		$data['reportnename'] = $reportnename;
		$data['reportnetype'] = $reportnetype;
		$data['reportkpi'] = $this->input->get('kpi');
		
		$kpi = preg_replace('/\s+/', '', $this->input->get('kpi'));
		$kpi = strtolower($kpi);
		$kpimap = [
			"rrcacc" => "acc_rrc",
			"psacc" => "acc_ps_rab",
			"csacc" => "acc_cs_rab",
			"hsacc" => "acc_hs",
			#"hsacc" => "acc_hs_f2h",
			"retainabilitycs" => "drop_cs",
			"retainabilityps" => "drop_ps",
			"retainabilityhsdpa" => "hsdpa_drop",
			"retainabilityhsupa" => "hsupa_drop",
			"r99dltraffic" => "traffic",
			"r99ultraffic" => "traffic",
			"hsdpatraffic" => "traffic",
			"hsupatraffic" => "traffic",
			"hsdpaues" => "traffic",
			"hsupaues" => "traffic",
			"r99ues" => "traffic",
			"hsdpathp" => "thp_hsdpa",
			"hsupathp" => "thp_hsupa",
			"csretention" => "retention_cs",
			"psretention" => "retention_ps",
			"softho" => "soft_hand_succ_rate",
			"cshhointrafreq" => "cs_hho_intra_freq_succ",
			"pshhointrafreq" => "ps_hho_intra_freq_succ",
			"hhointerfreq" => "hho_inter_freq_succ",
			"irathocs" => "iratho_cs_succ",
			"irathops" => "iratho_ps_succ",
			"shooverhead" => "coverage",
			"availability" => "availability",
			"rtwp" => "rtwp",
			"qdaps" => "qda_ps_f2h",
			"qdrps" => "qdr_ps",
			"3g-retentionps" => "retention_ps",
			"3g-retentioncs" => "retention_cs",
			"weighted-availability" => "availability",
			"userthroughput" => "throughput",
			#"hsdpausersratio" => "hsdpausersratio",
			#"nqips" => "rtwp",
			"qdacs" => "qda_cs",
			"qdrcs" => "qdr_cs",
		];
		
		$kpi_family_map = [
			"rrcacc" => "accessibility",
			"psacc" => "accessibility",
			"csacc" => "accessibility",
			"hsacc" => "accessibility",
			"retainabilitycs" => "retainability",
			"retainabilityps" => "retainability",
			"retainabilityhsdpa" => "retainability",
			"retainabilityhsupa" => "retainability",
			"r99dltraffic" => "traffic",
			"r99ultraffic" => "traffic",
			"hsdpatraffic" => "traffic",
			"hsupatraffic" => "traffic",
			"hsdpaues" => "traffic",
			"hsupaues" => "traffic",
			"r99ues" => "traffic",
			"hsdpathp" => "service_integrity",
			"hsupathp" => "service_integrity",
			"csretention" => "mobility",
			"psretention" => "mobility",
			"softho" => "mobility",
			"cshhointrafreq" => "mobility",
			"pshhointrafreq" => "mobility",
			"hhointerfreq" => "mobility",
			"irathocs" => "mobility",
			"irathops" => "mobility",
			"shooverhead" => "coverage",
			"availability" => "availability",
			"rtwp" => "coverage",
			"qdaps" => "nqi",
			"qdrps" => "nqi",
			"3g-retentionps" => "nqi",
			"3g-retentioncs" => "nqi",
			"weighted-availability" => "availability",
			"userthroughput" => "nqi",
			#"hsdpausersratio" => "hsdpausersratio",
			#"nqips" => "rtwp",
			"qdacs" => "nqi",
			"qdrcs" => "nqi"		
		];

		$data['kpi_family'] = $kpi_family_map[$kpi];
	
	$kpis_group1 = array("accessibility", "mobility"); //KPIs with num and den
	$kpis_group2 = array("availability", "traffic"); //KPIs without num and den		
	$kpis_group3 = array("service_integrity", "coverage"); //KPIs without num and den		

	
		###query para retorno de indicador e falhas para demonstração gráfica na tela de wost cells
		
		// if($reportnetype == 'cell')){
			// $cellid_array = $this->model_worstcells->find_cellid($this->input->post('cellname'));
			// $cellid = $cellid_array[0]->cellid;
			// $cell_family = "cell_".$kpi_family_map[$kpi];
			// $data['result'] = $this->model_monitor->$cell_family($reportnename,$cellid,$reportdate,$reportdate);
			// $data['ne'] = $this->input->post('cellname');
		// } 
		// elseif($reportnetype == 'cluster'){
			// $data['result'] = $this->model_monitor->clusterkpi($cluster_query);
			// $data['ne'] = $cluster_query;
		// }
		  
		  // elseif($reportnetype == 'cidade'){
			// $data['result'] = $this->model_monitor->cidadekpi($cidade_query);
			// $data['ne'] = $cidade_query;			
		// } 
		//if($reportnetype == 'rnc'){
			$rnc_family = "rnc_main_kpis";
			$data['result'] = $this->model_monitor->$rnc_family($reportnename,$reportdate,$timeagg,$reportnetype);
			$data['ne'] = $reportnename;
		//}
		
		
		###query para retorno das worst cells dependendo do indicador selecionado
			if(strpos($kpimap[$kpi], 'retention') !== FALSE && $kpi_family_map[$kpi] !== "nqi"){ #FOR RETENTION KPIs not from nqi we use the same methodology as the retainability kpi (1 - num/den)
				$data['wc'] = $this->model_worstcells->rncwc_retainability_event($kpimap[$kpi],$reportnename,$reportnetype);
			}
			elseif(in_array($kpi_family_map[$kpi], $kpis_group1)){
				#echo "ola";
				$data['wc'] = $this->model_worstcells->rncwc($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			}
			 elseif (in_array($kpi_family_map[$kpi], $kpis_group2)) {
				 #echo "ola2";
				 $data['wc'] = $this->model_worstcells->rncwcalt($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			 }
			 elseif (in_array($kpi_family_map[$kpi], $kpis_group3)) {
				 #echo "ola2";
				 $data['wc'] = $this->model_worstcells->rncwcalt2($kpimap[$kpi],$reportnename,$reportdate,$reportnetype,$timeagg);
			 }			 
			 elseif ($kpi_family_map[$kpi] == "retainability"){
				 #echo "ola3";
				 $data['wc'] = $this->model_worstcells->rncwc_retainability_event($kpimap[$kpi],$reportnename,$reportnetype);
			 }
			 elseif (strpos($kpimap[$kpi], 'retention') !== FALSE && $kpi_family_map[$kpi] == "nqi"){
				 #echo "ola3";
				 $data['wc'] = $this->model_worstcells->rncwc_nqi_retention($kpimap[$kpi],$rnc_query,$kpi_family_map[$kpi],$inidate,$findate);
			 }			 
			 elseif ($kpi_family_map[$kpi] == "nqi"){
				 #echo "ola3";
				 $data['wc'] = $this->model_worstcells->rncwc_nqi($kpimap[$kpi],$rnc_query,$kpi_family_map[$kpi],$inidate,$findate);
			 }
			

		#} 
		
		#$this->load->view('view_header');
		$this->load->view('view_header_txintegrity');
		#$this->load->view('view_nav_event',$data);
		#$trimmed = preg_replace('/\s+/', '', $this->input->post('kpi'));
		#echo $this->input->post('wcdate');
		#echo $this->input->post('rnc');
		#echo $trimmed;
		#$this->load->view('view_theme_sand_signika');
		#$this->load->view('view_theme_dark_unica');
		#$this->load->view('view_sparklines',$data);
		$this->load->view('view_sparklines_new',$data);
		$this->load->view('view_menu');
		
		//if($this->input->post('rnc') || $this->input->post('cluster') || $this->input->post('cidade')){
			$wc_view = "view_wc_".$kpimap[$kpi];
			#echo $wc_view;
			#$this->load->view('vw_wc_rrc',$data);
			$this->load->view($wc_view,$data);
		//}
		if (in_array($kpi_family_map[$kpi], $kpis_group3)) {
			$this->load->view('view_wc_kpigroup3',$data);
		}
		elseif ($kpi_family_map[$kpi] == "nqi"){
			$this->load->view('view_wc_nqi',$data);
		}
		else{
			$this->load->view('view_wc',$data);		
		}


		$this->load->view('view_footer');
	 }	 
		
		public function umts_dark()
	{
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		
 		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		#echo $netype;
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		#echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			#echo $reportdate;
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
			#echo $reportdate;
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		#$data['cells'] = $this->model_cellsinfo->cells();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->network_daily_report($reportdate);
			#$data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region') {
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->region_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report_rncinput($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->rnc_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'nodeb'){
			$data['node_weekly_report'] = $this->model_mainkpis->nodeb_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->nodeb_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cell'){
			$data['node_weekly_report'] = $this->model_mainkpis->cell_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->cell_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'uf'){
			$data['node_weekly_report'] = $this->model_mainkpis->uf_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->uf_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}			
		elseif($netype == 'cidade'){
			$data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}
		elseif($netype == 'cluster'){
			$data['node_weekly_report'] = $this->model_mainkpis->cluster_weekly_report($node,$weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->cluster_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// $data['reportnetype'] = 'city';
			// }
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		$this->load->view('view_theme_dark_unica');
		$this->load->view('view_mainkpis_chart',$data);
		$this->load->view('view_mainkpis',$data);
	}
		public function baseline()
	{
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_baseline');
		
 		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		
		
		if($this->input->post('reportmoname')){
			$reportmoname = $this->input->post('reportmoname');
		} else {
			$reportmoname = false;
			
		}
		
		#echo $netype;
		$maxdate = $this->model_baseline->maxdate();
		$referencedate = $maxdate[0]->date;
		//$referencedate = $this->model_cellsinfo->reference_date($node);
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		#echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			#echo $reportdate;
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
			#echo $reportdate;
		}
		$date = new DateTime($reportdate);
		$data['reportdate'] = $reportdate;
		$data['reportmoname'] = $reportmoname;
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'baseline'; 
		#echo $weeknum;
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		#$data['cells'] = $this->model_cellsinfo->cells();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		$data['maxdate'] = $this->model_baseline->maxdate();
		$data['mos'] = $this->model_baseline->mos($reportdate);
		
		if($netype == 'network'){
			$data['baseline_by_mo'] = $this->model_baseline->baseline_by_mo($reportdate);
			$data['parameters_mo'] = $this->model_baseline->parameters_mo($reportdate,$reportmoname);
			$data['ne_discrepancies'] = $this->model_baseline->ne_discrepancies($reportdate,$reportmoname);
			//$data['baseline_by_rnc'] = $this->model_baseline->baseline_by_rnc($reportdate);
			//$data['reportnetype'] = 'network';
		 }
		 // elseif($netype == 'rncs'){
			// $data['baseline_by_mo'] = $this->model_baseline->rnc_baseline_by_mo($reportdate,$node);
			// $data['parameters_mo'] = $this->model_baseline->parameters_mo($reportmoname);
			// $data['ne_discrepancies'] = $this->model_baseline->ne_discrepancies($reportmoname);
			// //$data['baseline_by_rnc'] = $this->model_baseline->baseline_by_rnc($reportdate);
			// //$data['reportnetype'] = 'network';
		 // }
		 elseif ($netype == 'region') {
			$data['baseline_by_mo'] = $this->model_baseline->region_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline->region_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline->region_ne_discrepancies($reportdate,$reportmoname,$node);
		 }
		 elseif($netype == 'rnc'){
			$data['baseline_by_mo'] = $this->model_baseline->rnc_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline->rnc_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline->rnc_ne_discrepancies($reportdate,$reportmoname,$node);
			//$data['reportnetype'] = 'rnc';
		 }
		 elseif($netype == 'nodeb'){
			$data['baseline_by_mo'] = $this->model_baseline->nodeb_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline->nodeb_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline->nodeb_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }
		 elseif($netype == 'cell'){
			$data['baseline_by_mo'] = $this->model_baseline->cell_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline->cell_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline->cell_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }
		 elseif($netype == 'uf'){
			$data['baseline_by_mo'] = $this->model_baseline->uf_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline->uf_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline->uf_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }			
		 elseif($netype == 'cidade'){
			$data['baseline_by_mo'] = $this->model_baseline->cidade_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline->cidade_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline->cidade_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }
		 elseif($netype == 'cluster'){
			$data['baseline_by_mo'] = $this->model_baseline->cluster_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline->cluster_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline->cluster_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }
		// elseif($netype == 'custom'){
			// $data['node_weekly_report'] = $this->model_mainkpis->user_cluster_daily_report_dash($node,$reportdate);
			// $data['node_daily_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
		// }			
		
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// $data['reportnetype'] = 'city';
			// }
		
		$this->load->view('view_header');
		$this->load->view('view_nav_baseline',$data);
		#$this->load->view('view_theme_dark_blue');
		$this->load->view('view_theme_sand_signika');
		#$this->load->view('view_theme_dark_unica');
		#$this->load->view('view_theme_grid');
		#$this->load->view('view_baseline_chart',$data);
		
		
		if ($reportmoname) {
			$this->load->view('view_baseline_mo_chart',$data);
		}
		$this->load->view('view_baseline_disc_chart',$data);
		$this->load->view('view_baseline',$data);
		#$this->load->view('view_mainkpis',$data);
	}

		public function baseline_nodeb()
	{
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_baseline_nodeb');
		
 		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		
		
		if($this->input->post('reportmoname')){
			$reportmoname = $this->input->post('reportmoname');
		} else {
			$reportmoname = false;
			
		}
		
		#echo $netype;
		
		$maxdate = $this->model_baseline_nodeb->maxdate();
		$referencedate = $maxdate[0]->date;
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		#echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			#echo $reportdate;
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
			#echo $reportdate;
		}
		$date = new DateTime($reportdate);
		$data['reportdate'] = $reportdate;
		$data['reportmoname'] = $reportmoname;
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'baseline_nodeb';
		#echo $weeknum;
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		#$data['cells'] = $this->model_cellsinfo->cells();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		$data['maxdate'] = $this->model_baseline_nodeb->maxdate();
		$data['mos'] = $this->model_baseline_nodeb->mos($reportdate);
		
		if($netype == 'network'){
			$data['baseline_by_mo'] = $this->model_baseline_nodeb->baseline_by_mo($reportdate);
			$data['parameters_mo'] = $this->model_baseline_nodeb->parameters_mo($reportdate,$reportmoname);
			$data['ne_discrepancies'] = $this->model_baseline_nodeb->ne_discrepancies($reportdate,$reportmoname);
			//$data['baseline_by_rnc'] = $this->model_baseline->baseline_by_rnc($reportdate);
			//$data['reportnetype'] = 'network';
		 }
		 elseif ($netype == 'region') {
			$data['baseline_by_mo'] = $this->model_baseline_nodeb->region_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline_nodeb->region_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline_nodeb->region_ne_discrepancies($reportdate,$reportmoname,$node);
			
			
			// #$data['reportnetype'] = 'region';
		 }
		 elseif($netype == 'rnc'){
			$data['baseline_by_mo'] = $this->model_baseline_nodeb->rnc_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline_nodeb->rnc_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline_nodeb->rnc_ne_discrepancies($reportdate,$reportmoname,$node);
			//$data['reportnetype'] = 'rnc';
		 }
		 elseif($netype == 'nodeb'){
			$data['baseline_by_mo'] = $this->model_baseline_nodeb->nodeb_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline_nodeb->nodeb_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline_nodeb->nodeb_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }
		 elseif($netype == 'cell'){
			$data['baseline_by_mo'] = $this->model_baseline_nodeb->cell_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline_nodeb->cell_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline_nodeb->cell_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }
		 elseif($netype == 'uf'){
			$data['baseline_by_mo'] = $this->model_baseline_nodeb->uf_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline_nodeb->uf_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline_nodeb->uf_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }			
		 elseif($netype == 'cidade'){
			$data['baseline_by_mo'] = $this->model_baseline_nodeb->cidade_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline_nodeb->cidade_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline_nodeb->cidade_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }
		 elseif($netype == 'cluster'){
			$data['baseline_by_mo'] = $this->model_baseline_nodeb->cluster_baseline_by_mo($reportdate,$node);
			$data['parameters_mo'] = $this->model_baseline_nodeb->cluster_parameters_mo($reportdate,$reportmoname,$node);
			$data['ne_discrepancies'] = $this->model_baseline_nodeb->cluster_ne_discrepancies($reportdate,$reportmoname,$node);
			// #$data['reportnetype'] = 'rnc';
		 }
		// elseif($netype == 'custom'){
			// $data['node_weekly_report'] = $this->model_mainkpis->user_cluster_daily_report_dash($node,$reportdate);
			// $data['node_daily_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
		// }			
		
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// $data['reportnetype'] = 'city';
			// }
		
		$this->load->view('view_header');
		$this->load->view('view_nav_baselinenodeb',$data);
		#$this->load->view('view_theme_dark_blue');
		$this->load->view('view_theme_sand_signika');
		#$this->load->view('view_theme_dark_unica');
		#$this->load->view('view_theme_grid');
		#$this->load->view('view_baseline_chart',$data);
		
		
		if ($reportmoname) {
			$this->load->view('view_baseline_mo_chart',$data);
		}
		$this->load->view('view_baseline_disc_chart',$data);
		$this->load->view('view_baseline_nodeb',$data);
		#$this->load->view('view_mainkpis',$data);
	}	
		public function baseline_old()
	{
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_baseline_old');
		
 		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		#echo $netype;
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		#echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			#echo $reportdate;
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
			#echo $reportdate;
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		#$data['cells'] = $this->model_cellsinfo->cells();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['baseline_by_mo'] = $this->model_baseline_old->baseline_by_mo($reportdate);
			$data['baseline_by_rnc'] = $this->model_baseline_old->baseline_by_rnc($reportdate);
			#$data['reportnetype'] = 'network';
		 }
		// elseif ($netype == 'region') {
			// $data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->region_daily_report($node,$reportdate);
			// #$data['reportnetype'] = 'region';
		// }
		// elseif($netype == 'rnc'){
			// $data['node_weekly_report'] = $this->model_mainkpis->rnc_weekly_report_rncinput($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->rnc_daily_report($node,$reportdate);
			// #$data['reportnetype'] = 'rnc';
		// }
		// elseif($netype == 'nodeb'){
			// $data['node_weekly_report'] = $this->model_mainkpis->nodeb_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->nodeb_daily_report($node,$reportdate);
			// #$data['reportnetype'] = 'rnc';
		// }
		// elseif($netype == 'cell'){
			// $data['node_weekly_report'] = $this->model_mainkpis->cell_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cell_daily_report($node,$reportdate);
			// #$data['reportnetype'] = 'rnc';
		// }
		// elseif($netype == 'uf'){
			// $data['node_weekly_report'] = $this->model_mainkpis->uf_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->uf_daily_report($node,$reportdate);
			// #$data['reportnetype'] = 'rnc';
		// }			
		// elseif($netype == 'cidade'){
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// #$data['reportnetype'] = 'rnc';
		// }
		// elseif($netype == 'cluster'){
			// $data['node_weekly_report'] = $this->model_mainkpis->cluster_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cluster_daily_report($node,$reportdate);
			// #$data['reportnetype'] = 'rnc';
		// }
		// elseif($netype == 'custom'){
			// $data['node_weekly_report'] = $this->model_mainkpis->user_cluster_daily_report_dash($node,$reportdate);
			// $data['node_daily_report'] = $this->model_mainkpis->cluster_hourly_report($node,$reportdate);
		// }			
		
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// $data['reportnetype'] = 'city';
			// }
		
		$this->load->view('view_header');
		$this->load->view('view_nav_baseline',$data);
		#$this->load->view('view_theme_dark_blue');
		#$this->load->view('view_theme_sand_signika');
		$this->load->view('view_theme_grid_light');
		#$this->load->view('view_theme_dark_unica');
		$this->load->view('view_baseline_chart',$data);
		$this->load->view('view_baseline_old',$data);
		#$this->load->view('view_mainkpis',$data);
	}

		public function baseline_lte()
	{
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		$this->load->model('model_baseline');
		
 		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		#echo $netype;
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		#echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			#echo $reportdate;
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
			#echo $reportdate;
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		#$data['cells'] = $this->model_cellsinfo->cells();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['baseline_by_mo'] = $this->model_baseline->baseline_by_mo($reportdate);
			$data['baseline_by_rnc'] = $this->model_baseline->baseline_by_rnc($reportdate);
			#$data['reportnetype'] = 'network';
		 }
		
		$this->load->view('view_header');
		$this->load->view('view_nav_baseline',$data);
		#$this->load->view('view_theme_dark_blue');
		$this->load->view('view_theme_sand_signika');
		#$this->load->view('view_theme_dark_unica');
		$this->load->view('view_baseline_chart',$data);
		$this->load->view('view_baseline',$data);
		#$this->load->view('view_mainkpis',$data);
	}	
	
		public function other()
	{
		#############################HEADER#####################
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_cellsinfo');
		
 		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'other';
		}
		$data['reportnetype'] = $netype;
		#echo $netype;
		
		$referencedate = $this->model_cellsinfo->reference_date($node);
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		#echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			#echo $reportdate;
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
			#echo $reportdate;
		}
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		#$data['cells'] = $this->model_cellsinfo->cells();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();
		
		#############################HEADER#####################		
		
		if($netype == 'other'){
			$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
			$data['node_daily_report'] = $this->model_mainkpis->other_daily_report($node,$reportdate);
			#$data['reportnetype'] = 'rnc';
		}		
		// else{
			// if(substr($node,2,1) == '-'){
				// $nodes = explode("-", $node);
				// $node = $nodes[1];
			// }
			// $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// $data['reportnetype'] = 'city';
			// }
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		$this->load->view('view_theme_dark_unica');
		$this->load->view('view_mainkpis_chart',$data);
		$this->load->view('view_mainkpis',$data);
	}

public function radar()
	{
		ini_set('memory_limit', '1024M');
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_radar');
		$this->load->model('model_cellsinfo');
		  // echo $this->input->post('reportnename');
		  // echo $this->input->post('reportkpi');
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;

		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;		

			// Set KPI
		if($this->input->post('kpi')){
			$nekpi = $this->input->post('kpi');
		} else {
			$nekpi = 'radar';
		}
		
		#echo $nekpi;
		$data['nekpi'] = $nekpi;		
		
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		//$referencedate = $this->model_cellsinfo->reference_date_($node);
		//echo $referencedate;
		$maxdate = $this->model_radar->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = $nekpi;
		#echo $weeknum;

		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		#$data['nodebs'] = $this->model_cellsinfo->nodebs_cells_db();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['radar_weekly_region'] = $this->model_radar->radar_weekly_network($reportdate, $nekpi);
			$data['chart_weekly'] = $this->model_radar->chart_weekly_network($reportdate);
			$data['node_daily_report'] = $this->model_radar->network_daily_report($reportdate);
			#$data['node_weekly_report'] = $this->model_mainkpis->region_weekly_report($weeknum);
			// $data['node_daily_report'] = $this->model_radar->network_daily_report($reportdate);	
			// $data['reportnetype'] = 'network';
		}
		elseif ($netype == 'region') {
			$data['radar_weekly_region'] = $this->model_radar->radar_weekly_region($node,$reportdate, $nekpi);
			$data['chart_weekly'] = $this->model_radar->chart_weekly_region($node,$reportdate);
			$data['node_daily_report'] = $this->model_radar->region_daily_report($node,$reportdate);
			// $data['node_daily_report'] = $this->model_radar->region_daily_report($node,$reportdate);
			// // $data['reportnetype'] = 'region';
		}
		elseif($netype == 'rnc'){
			$data['radar_weekly_region'] = $this->model_radar->radar_weekly_rnc($node,$reportdate, $nekpi);
			$data['chart_weekly'] = $this->model_radar->chart_weekly_rnc($node,$reportdate);
			$data['node_daily_report'] = $this->model_radar->rnc_daily_report($node,$reportdate);
			$data['extra_info'] = $this->model_radar->extra_info($node,$reportdate,$nekpi,$netype);
			// $data['node_daily_report'] = $this->model_radar->rnc_daily_report($node,$reportdate);
			// // $data['reportnetype'] = 'rnc';
		 }
		// elseif($netype == 'nodeb'){
			// $data['nqi_weekly_region'] = $this->model_radar->nqi_weekly_nodeb($node,$reportdate);
			// $data['node_daily_report'] = $this->model_radar->nqi_daily_nodeb($node,$reportdate);
			// // $data['reportnetype'] = 'rnc';
		// }
		elseif($netype == 'cell'){
			$data['radar_weekly_region'] = $this->model_radar->radar_weekly_cell($node,$reportdate, $nekpi);
			$data['node_daily_report'] = $this->model_radar->cell_daily_report($node,$reportdate);
			$data['extra_info'] = $this->model_radar->extra_info($node,$reportdate,$nekpi,$netype);
		}
		elseif($netype == 'wc'){
			$data['radar_weekly_region'] = $this->model_radar->radar_weekly_wc($node,$reportdate, $nekpi);
			$data['node_daily_report'] = $this->model_radar->region_daily_report($node,$reportdate);
			$data['extra_info'] = $this->model_radar->extra_info($node,$reportdate,$nekpi,$netype);
		}
			//$data['node_daily_report'] = $this->model_radar->nqi_daily_cell($node,$reportdate);
			// // $data['reportnetype'] = 'rnc';
		 //}
		// elseif($netype == 'uf'){
			// $data['nqi_weekly_region'] = $this->model_radar->nqi_weekly_uf($node,$reportdate,$nekpi);
			// $data['node_daily_report'] = $this->model_radar->nqi_daily_uf($node,$reportdate);
			// // $data['reportnetype'] = 'rnc';
		// }
		// elseif($netype == 'cidade'){
			// $data['nqi_weekly_region'] = $this->model_radar->nqi_weekly_cidade($node,$reportdate,$nekpi);
			// $data['node_daily_report'] = $this->model_radar->nqi_daily_cidade($node,$reportdate);
			// // $data['reportnetype'] = 'rnc';
		// }
		// elseif($netype == 'cluster'){
			// $data['nqi_weekly_region'] = $this->model_radar->nqi_weekly_cluster($node,$reportdate,$nekpi);
			// $data['node_daily_report'] = $this->model_radar->nqi_daily_cluster($node,$reportdate);
			// // $data['reportnetype'] = 'rnc';
		// }			
		// // else{
			// // $data['node_weekly_report'] = $this->model_mainkpis->cidade_weekly_report($node,$weeknum);
			// // $data['node_daily_report'] = $this->model_mainkpis->cidade_daily_report($node,$reportdate);
			// // // $data['reportnetype'] = 'city';
			// // }
		
		$this->load->view('view_header_radar');	
		$this->load->view('view_nav_radar',$data);
		if($netype == 'network' or $netype == 'region' or $netype == 'rnc' or $netype == 'cell' or $netype == 'wc'){
		if($nekpi == 'radar'){
			$this->load->view('view_radar_chart',$data);
			$this->load->view('view_radar',$data);	
		}else if(($nekpi ==  'rf_health_index')or($nekpi ==  'worst_aging_factor')or($nekpi ==  'baseline')
			or($nekpi ==  'throughput')or($nekpi ==  'retention_3g')or($nekpi ==  'ps_call_completion')or
			($nekpi ==  'cs_call_completion')or($nekpi ==  'availability')or($nekpi ==  'traffic_load')or
			($nekpi ==  'hardware_nodeb')or($nekpi ==  'air_interface_ul')or($nekpi ==  'air_interface_dl')or
			($nekpi ==  'sho_overhead')or($nekpi ==  'overshooters')or($nekpi ==  'cpich_power_ratio')or
			($nekpi ==  'sw_releases_features')or($nekpi ==  'composite')){
			$this->load->view('view_radar_chart_daily',$data);				
			$this->load->view('view_radar_wc',$data);
		}	
		else{			
			$this->load->view('view_radar_all',$data);
		}	
		}
		else{
			$this->load->view('view_radar_error',$data);
		}
	}

public function rnc_capacity()
	{
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_rnc_capacity');
		$this->load->model('model_cellsinfo');
		  // echo $this->input->post('reportnename');
		  // echo $this->input->post('reportkpi');
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;

		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;		
		
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		$referencedate = $this->model_cellsinfo->reference_date($node);
		//echo $referencedate;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;

		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		#$data['nodebs'] = $this->model_cellsinfo->nodebs_cells_db();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();		
		#############################HEADER#####################		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		$data['rnc_capacity_weekly'] = $this->model_rnc_capacity->rnc_capacity_weekly($node,$reportdate);
		$data['node_report'] = $this->model_rnc_capacity->rnc_capacity_report($node,$reportdate);
		
		$this->load->view('view_header');	
		$this->load->view('view_nav_rnc_capacity',$data);
		if ($netype == 'rnc') {
		$this->load->view('view_rnc_capacity_chart',$data);
		}
		$this->load->view('view_rnc_capacity',$data);	
	}	
	
public function unbalance()
	{
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_unbalance');
		$this->load->model('model_cellsinfo');
		  // echo $this->input->post('reportnename');
		  // echo $this->input->post('reportkpi');
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;

		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;		
		
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		//$referencedate = $this->model_cellsinfo->reference_date_($node);
		//echo $referencedate;
		
		$maxdate = $this->model_unbalance->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';
		#echo $weeknum;

		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		#$data['nodebs'] = $this->model_cellsinfo->nodebs_cells_db();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();		
		#############################HEADER#####################		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
		$data['unbalance_weekly'] = $this->model_unbalance->unbalance_network($reportdate);
		$data['unbalance_chart'] = $this->model_unbalance->unbalance_chart($reportdate);
		}
		elseif($netype == 'region'){
		$data['unbalance_weekly'] = $this->model_unbalance->unbalance_region($node,$reportdate);
		}
		elseif($netype == 'rnc'){
		$data['unbalance_weekly'] = $this->model_unbalance->unbalance_rnc($node,$reportdate);
		}
		elseif($netype == 'nodeb'){
		$data['unbalance_weekly'] = $this->model_unbalance->unbalance_nodeb($node,$reportdate);
		$data['unbalance_daily'] = $this->model_unbalance->unbalance_daily($node,$reportdate);
		}
		elseif($netype == 'cell'){
		$data['unbalance_weekly'] = $this->model_unbalance->unbalance_cell($node,$reportdate);
		//$data['unbalance_cell_daily'] = $this->model_unbalance->unbalance_cell_daily($node,$reportdate);
		}
		
		$this->load->view('view_header');	
		$this->load->view('view_nav_unbalance',$data);
		if($netype == 'network'){
		$this->load->view('view_unbalance_chart',$data);
		$this->load->view('view_unbalance_menu',$data);		
		}
		else{
		if($netype == 'nodeb'){
		$this->load->view('view_unbalance_chart_daily',$data);
		}
		$this->load->view('view_unbalance',$data);	
		}
	}

public function triage()
	{
		ini_set('memory_limit', '2048M');
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_triage');
		$this->load->model('model_cellsinfo');
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;

		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;		

			// Set KPI
		if($this->input->post('kpi')){
			$nekpi = $this->input->post('kpi');
		} else {
			$nekpi = 'overview';
		}
		
		#echo $nekpi;
		$data['nekpi'] = $nekpi;		

		//Set CELL
		if($this->input->post('reportcell')){
			$reportcell = $this->input->post('reportcell');
		} else {
			$reportcell = 'KPIOK';
		}
		$data['reportcell'] = $reportcell;	
		
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		//$referencedate = $this->model_cellsinfo->reference_date_($node);
		//echo $referencedate;
		
		$maxdate = $this->model_triage->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = $nekpi;
		#echo $weeknum;

		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		#$data['nodebs'] = $this->model_cellsinfo->nodebs_cells_db();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
		$data['triage_chart'] = $this->model_triage->triage_network_chart($reportdate,$nekpi);
		$data['triage_week'] = $this->model_triage->triage_network($reportdate);
		}
		elseif($netype == 'region'){
		$data['triage_chart'] = $this->model_triage->triage_region_chart($node,$reportdate,$nekpi);
		$data['triage_week'] = $this->model_triage->triage_region($node,$reportdate);
		}
		elseif($netype == 'rnc'){
		$data['triage_chart'] = $this->model_triage->triage_rnc_chart($node,$reportdate,$nekpi);
		$data['triage_week'] = $this->model_triage->triage_rnc($node,$reportdate);
		}
		elseif($netype == 'nodeb'){
		$data['triage_chart'] = $this->model_triage->triage_nodeb_chart($node,$reportdate,$nekpi);
		$data['triage_week'] = $this->model_triage->triage_nodeb($node,$reportdate);
		}
		elseif($netype == 'uf'){
		$data['triage_chart'] = $this->model_triage->triage_uf_chart($node,$reportdate,$nekpi);
		$data['triage_week'] = $this->model_triage->triage_uf($node,$reportdate);
		}
		elseif($netype == 'cidade'){
		$data['triage_chart'] = $this->model_triage->triage_cidade_chart($node,$reportdate,$nekpi);
		$data['triage_week'] = $this->model_triage->triage_cidade($node,$reportdate);
		}
		elseif($netype == 'cluster'){
		$data['triage_chart'] = $this->model_triage->triage_cluster_chart($node,$reportdate,$nekpi);
		$data['triage_week'] = $this->model_triage->triage_cluster($node,$reportdate);
		}
		elseif($netype == 'cell'){
		if($reportcell){
		$this->model_triage->update_form($node,$reportdate,$reportcell);
		}
		$data['triage_week'] = $this->model_triage->triage_cell($node,$reportdate);	
		}
		
		$this->load->view('view_header_triage');	
		$this->load->view('view_nav_triage',$data);
		if($nekpi == 'overview' or $nekpi == 'kpi_ok' or $nekpi == 'kpi_nok'){
			$this->load->view('view_theme_triage');
			$this->load->view('view_triage_chart',$data);
			$this->load->view('view_triage_chart_evolution',$data);	
			$this->load->view('view_triage_chart_otm',$data);
			$this->load->view('view_triage_overview',$data);		 
		}
		else{
			$this->load->view('view_triage_cellmapping_form',$data);
		}
	}

public function tx_integrity()
	{
		ini_set('memory_limit', '2048M');
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_txintegrity');
		$this->load->model('model_cellsinfo');
		
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;

		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;		

			// Set KPI
		if($this->input->post('kpi')){
			$nekpi = $this->input->post('kpi');
		} else {
			$nekpi = 'overview';
		}
		
		#echo $nekpi;
		$data['nekpi'] = $nekpi;		

		//Set CELL
		if($this->input->post('reportcell')){
			$reportcell = $this->input->post('reportcell');
		} else {
			$reportcell = false;
		}
		$data['reportcell'] = $reportcell;	
		
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		//$referencedate = $this->model_cellsinfo->reference_date_($node);
		//echo $referencedate;
		
		$maxdate = $this->model_txintegrity->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = $nekpi;
		#echo $weeknum;

		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		#$data['nodebs'] = $this->model_cellsinfo->nodebs_cells_db();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		if($netype == 'nodeb'){
		$data['txintegrity_daily'] = $this->model_txintegrity->txintegrity_nodeb_daily($node,$reportdate);
		}
		
		if($netype == 'network'){
		$data['txintegrity_chart'] = $this->model_txintegrity->txintegrity_network_chart($reportdate);
		$data['txintegrity_week'] = $this->model_txintegrity->txintegrity_network($reportdate);
		}
		elseif($netype == 'region'){
		$data['txintegrity_chart'] = $this->model_txintegrity->txintegrity_region_chart($node,$reportdate);
		$data['txintegrity_week'] = $this->model_txintegrity->txintegrity_region($node,$reportdate);
		}
		elseif($netype == 'rnc'){
		$data['txintegrity_chart'] = $this->model_txintegrity->txintegrity_rnc_chart($node,$reportdate);
		$data['txintegrity_week'] = $this->model_txintegrity->txintegrity_rnc($node,$reportdate);
		}
		elseif($netype == 'nodeb'){
		$data['txintegrity_chart'] = $this->model_txintegrity->txintegrity_nodeb_chart($node,$reportdate);
		$data['txintegrity_week'] = $this->model_txintegrity->txintegrity_nodeb($node,$reportdate);
		}
		elseif($netype == 'uf'){
		$data['txintegrity_chart'] = $this->model_txintegrity->txintegrity_uf_chart($node,$reportdate);
		$data['txintegrity_week'] = $this->model_txintegrity->txintegrity_uf($node,$reportdate);
		}
		elseif($netype == 'cidade'){
		$data['txintegrity_chart'] = $this->model_txintegrity->txintegrity_cidade_chart($node,$reportdate);
		$data['txintegrity_week'] = $this->model_txintegrity->txintegrity_cidade($node,$reportdate);
		}
		elseif($netype == 'cluster'){
		$data['txintegrity_chart'] = $this->model_txintegrity->txintegrity_cluster_chart($node,$reportdate);
		$data['txintegrity_week'] = $this->model_txintegrity->txintegrity_cluster($node,$reportdate);
		}
		
		$this->load->view('view_header_txintegrity');	
		$this->load->view('view_nav_txintegrity',$data);
		if($nekpi == 'overview'){
			//$this->load->view('view_txintegrity_chart_new',$data);
			$this->load->view('view_txintegrity_chart_pie',$data);
			$this->load->view('view_txintegrity_overview',$data);		 
		}
		else{
			
			if($netype == 'nodeb'){
			$this->load->view('view_txintegrity_chart_daily',$data);
			}
			$this->load->view('view_txintegrity',$data);
		}
	}	
	
	public function capacity_wc()
	{
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_capacity_wc');
		$this->load->model('model_cellsinfo');
		
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;

		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;		

			// Set KPI
		if($this->input->post('kpi')){
			$nekpi = $this->input->post('kpi');
		} else {
			$nekpi = false;
		}
		
		#echo $nekpi;
		$data['nekpi'] = $nekpi;		
		
		//Set Date and Weeknum
		$maxdate = $this->model_capacity_wc->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}

		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$yearnum = $date->format("o");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = $nekpi;
		#echo $weeknum;

		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		#$data['nodebs'] = $this->model_cellsinfo->nodebs_cells_db();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();		
		#############################HEADER#####################		
		
		
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['capacity'] = $this->model_capacity_wc->network_capacity($yearnum,$weeknum,$nekpi);
		}
		elseif ($netype == 'region') {
			$data['capacity'] = $this->model_capacity_wc->region_capacity($yearnum,$weeknum,$node,$nekpi);
		}
		elseif($netype == 'rnc'){
			$data['capacity'] = $this->model_capacity_wc->rnc_capacity($yearnum,$weeknum,$node,$nekpi);
		}
		elseif($netype == 'node'){
			$data['capacity'] = $this->model_capacity_wc->node_capacity($yearnum,$weeknum,$node,$nekpi);
			$data['capacity_daily'] = $this->model_capacity_wc->node_capacity_daily($reportdate,$node,$nekpi);
		}
		
		$this->load->view('view_header_capacity');
		$this->load->view('view_nav_cell_nodeb_capacity',$data);
		if($netype == 'node'){
		$this->load->view('view_capacity_wc_chart_daily',$data);
		}
		$this->load->view('view_capacity_wc',$data);
	}

	public function process_monitoring(){
		
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_process_monitoring');
		$this->load->model('model_cellsinfo');
				
		//Set Date and Weeknum
		$reportdate = date("Y-m-d");
		$maxdate = $this->model_process_monitoring->maxdate($reportdate);
		$referencedate = $maxdate[0]->date;

		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}
				
		$date = new DateTime($reportdate);
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'daily';
		
		$data['main_monitoring'] = $this->model_process_monitoring->main_monitoring($reportdate);
		$data['quant_of_files'] = $this->model_process_monitoring->quant_files($reportdate);
		$data['quant_of_all_files'] = $this->model_process_monitoring->all_files();
		
		$this->load->view('view_header_monitoring_processing');
		$this->load->view('view_nav_monitoring_processing',$data);
		$this->load->view('view_monitoring_processing',$data);

	}

	public function baseline_configuration(){
		
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_baseline_configuration');
		$this->load->model('model_cellsinfo');
				
		// //Set Date and Weeknum
		$reportdate = date("Y-m-d");
		$referencedate = $reportdate;

		// //Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}
				
		$date = new DateTime($reportdate);
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'daily';
		
		$data['main_rules'] = $this->model_baseline_configuration->main_rules();
		$data['all_id'] = $this->model_baseline_configuration->all_id();
		$data['last_row_id'] = $this->model_baseline_configuration->last_row_id();

		$this->load->view('view_header_baseline_configuration');
		$this->load->view('view_nav_baseline_configuration',$data);
		$this->load->view('view_baseline_configuration',$data);

	}
	
	public function ajax_baseline(){
		
		$this->load->view('ajax_baseline_configuration');	
		
	}	

	public function check_neighborhood(){


		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_check_neigh_umts');
		$this->load->model('model_cellsinfo');
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		
		
		$maxdate = $this->model_check_neigh_umts->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}
		
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'neighbor_umts';
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();	
	
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['main'] = $this->model_check_neigh_umts->network($reportdate,$node);
			$data['external'] = $this->model_check_neigh_umts->external_network($reportdate,$node);
			$data['external_lte_to_lte'] = $this->model_check_neigh_umts->external_network_lte_to_lte($reportdate,$node);
			$data['coSites_lte_to_umts'] = $this->model_check_neigh_umts->coSites_network_lte_to_umts($reportdate,$node);
			$data['names_external_lte_to_umts'] = $this->model_check_neigh_umts->names_external_network_lte_to_umts($reportdate,$node);
			$data['conf_blind_lte_to_umts'] = $this->model_check_neigh_umts->conf_blind_network_lte_to_umts($reportdate,$node);
			$data['coSites_inter_lte_to_umts'] = $this->model_check_neigh_umts->coSites_inter_network_lte_to_umts($reportdate,$node);
			$data['tabela'] = $this->model_check_neigh_umts->tabela_network($reportdate,$node);
		 }
		 elseif ($netype == 'region') {
			$data['main'] = $this->model_check_neigh_umts->region($reportdate,$node);
			$data['external'] = $this->model_check_neigh_umts->external_region($reportdate,$node);
			$data['external_lte_to_lte'] = $this->model_check_neigh_umts->external_region_lte_to_lte($reportdate,$node);
			$data['coSites_lte_to_umts'] = $this->model_check_neigh_umts->coSites_region_lte_to_umts($reportdate,$node);
			$data['names_external_lte_to_umts'] = $this->model_check_neigh_umts->names_external_region_lte_to_umts($reportdate,$node);
			$data['conf_blind_lte_to_umts'] = $this->model_check_neigh_umts->conf_blind_region_lte_to_umts($reportdate,$node);
			$data['coSites_inter_lte_to_umts'] = $this->model_check_neigh_umts->coSites_inter_region_lte_to_umts($reportdate,$node);
			$data['tabela'] = $this->model_check_neigh_umts->tabela_region($reportdate,$node);
		 }
		 // elseif($netype == 'nodeb'){
			// $data['main'] = $this->model_check_neigh_umts->nodebs($reportdate,$node);
			// $data['external'] = $this->model_check_neigh_umts->external_nodebs($reportdate,$node);
			// $data['external_lte_to_lte'] = $this->model_check_neigh_umts->external_nodebs_lte_to_lte($reportdate,$node);
			// $data['coSites_lte_to_umts'] = $this->model_check_neigh_umts->coSites_nodebs_lte_to_umts($reportdate,$node);
			// $data['names_external_lte_to_umts'] = $this->model_check_neigh_umts->names_external_nodebs_lte_to_umts($reportdate,$node);
			// $data['conf_blind_lte_to_umts'] = $this->model_check_neigh_umts->conf_blind_nodebs_lte_to_umts($reportdate,$node);
			// $data['coSites_inter_lte_to_umts'] = $this->model_check_neigh_umts->coSites_inter_nodebs_lte_to_umts($reportdate,$node);
			// $data['tabela'] = $this->model_check_neigh_umts->tabela_nodebs($reportdate,$node);
		 // }
		 elseif($netype == 'uf'){
			$data['main'] = $this->model_check_neigh_umts->uf($reportdate,$node);
			$data['external'] = $this->model_check_neigh_umts->external_uf($reportdate,$node);
			$data['external_lte_to_lte'] = $this->model_check_neigh_umts->external_uf_lte_to_lte($reportdate,$node);
			$data['coSites_lte_to_umts'] = $this->model_check_neigh_umts->coSites_uf_lte_to_umts($reportdate,$node);
			$data['names_external_lte_to_umts'] = $this->model_check_neigh_umts->names_external_uf_lte_to_umts($reportdate,$node);
			$data['conf_blind_lte_to_umts'] = $this->model_check_neigh_umts->conf_blind_uf_lte_to_umts($reportdate,$node);
			$data['coSites_inter_lte_to_umts'] = $this->model_check_neigh_umts->coSites_inter_uf_lte_to_umts($reportdate,$node);
			$data['tabela'] = $this->model_check_neigh_umts->tabela_uf($reportdate,$node);
		 }			
		 elseif($netype == 'cidade'){
			$cidade_aux = $this->model_cellsinfo->find_cidade_info_lte($node);
			$ibge = $cidade_aux[0]->ibge;
			$uf = $cidade_aux[0]->uf;
			$data['main'] = $this->model_check_neigh_umts->city($reportdate,$ibge,$uf);
			$data['external'] = $this->model_check_neigh_umts->external_cidades($reportdate,$ibge,$uf);
			$data['external_lte_to_lte'] = $this->model_check_neigh_umts->external_cidades_lte_to_lte($reportdate,$ibge,$uf);
			$data['coSites_lte_to_umts'] = $this->model_check_neigh_umts->coSites_cidades_lte_to_umts($reportdate,$ibge,$uf);
			$data['names_external_lte_to_umts'] = $this->model_check_neigh_umts->names_external_cidades_lte_to_umts($reportdate,$ibge,$uf);
			$data['conf_blind_lte_to_umts'] = $this->model_check_neigh_umts->conf_blind_cidades_lte_to_umts($reportdate,$ibge,$uf);
			$data['coSites_inter_lte_to_umts'] = $this->model_check_neigh_umts->coSites_inter_cidades_lte_to_umts($reportdate,$ibge,$uf);
			$data['tabela'] = $this->model_check_neigh_umts->tabela_cidades($reportdate,$ibge,$uf);
		 }
		 elseif($netype == 'cluster'){
			$data['main'] = $this->model_check_neigh_umts->cluster($reportdate,$node);
			$data['external'] = $this->model_check_neigh_umts->external_cluster($reportdate,$node);
			$data['external_lte_to_lte'] = $this->model_check_neigh_umts->external_clusters_lte_to_lte($reportdate,$node);
			$data['coSites_lte_to_umts'] = $this->model_check_neigh_umts->coSites_clusters_lte_to_umts($reportdate,$node);
			$data['names_external_lte_to_umts'] = $this->model_check_neigh_umts->names_external_clusters_lte_to_umts($reportdate,$node);
			$data['conf_blind_lte_to_umts'] = $this->model_check_neigh_umts->conf_blind_clusters_lte_to_umts($reportdate,$node);
			$data['coSites_inter_lte_to_umts'] = $this->model_check_neigh_umts->coSites_inter_clusters_lte_to_umts($reportdate,$node);
			$data['tabela'] = $this->model_check_neigh_umts->tabela_clusters($reportdate,$node);
		 }
		 elseif($netype == 'rnc'){
			$data['main'] = $this->model_check_neigh_umts->rnc($reportdate,$node);
			$data['external'] = $this->model_check_neigh_umts->external_rnc($reportdate,$node);
			$data['external_lte_to_lte'] = $this->model_check_neigh_umts->external_rnc_lte_to_lte($reportdate,$node);
			$data['coSites_lte_to_umts'] = $this->model_check_neigh_umts->coSites_rnc_lte_to_umts($reportdate,$node);
			$data['names_external_lte_to_umts'] = $this->model_check_neigh_umts->names_external_rnc_lte_to_umts($reportdate,$node);
			$data['conf_blind_lte_to_umts'] = $this->model_check_neigh_umts->conf_blind_rnc_lte_to_umts($reportdate,$node);
			$data['coSites_inter_lte_to_umts'] = $this->model_check_neigh_umts->coSites_inter_rnc_lte_to_umts($reportdate,$node);
			$data['tabela'] = $this->model_check_neigh_umts->tabela_rnc($reportdate,$node);
		 }
		
		$this->load->view('view_header_check_neighborhood_lte');
		$this->load->view('view_nav_check_neighborhood_umts',$data);
		$this->load->view('view_theme_sand_signika');
		$this->load->view('view_check_neighborhood_umts',$data);

	}
	
	public function printscreen(){


		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_cellsinfo');
		
		$this->load->view('view_PrintScreen');

	}
	
	public function genarate_ppt(){
		
		$this->load->helper('form');
		
		$this->load->model('model_cellsinfo');
		$this->load->model('model_ppt');
		
		$referencedate = $this->model_ppt->maxdate();
		
		if($this->input->post('reportweek')){
			
			$reportyear = $this->input->post('reportyear');
			$reportweek = $this->input->post('reportweek');
						
			$year = (int)$reportyear;
			$w1 = (int)$reportweek;
			$w4 = $w1 - 3;
			
			$data['weeknum'] = $w1;
			
			$data['w1'] = $w1;
			$data['w2'] = $w1 - 1;
			$data['w3'] = $w1 - 2;
			$data['w4'] = $w1 - 3;
						
			//PRIMEIRO GRÁFICO (SLIDES 3,4,5,6,7,8)
			$data['gsm_number_of_sites'] = $this->model_ppt->gsm_number_of_sites();
			$data['umts_number_of_sites'] = $this->model_ppt->umts_number_of_sites();
			$data['lte_number_of_sites'] = $this->model_ppt->lte_number_of_sites();
			
			$data['lte_2600_sites'] = $this->model_ppt->lte_2600_sites();
			$data['lte_1800_sites'] = $this->model_ppt->lte_1800_sites();
			$data['lte_700_sites'] = $this->model_ppt->lte_700_sites();
			
			//SEGUNDO, TERCEIRO E QUARTO GRÁFICO (SLIDES 3,4,5,6,7,8)
			$data['lte_cities_dashboard'] = $this->model_ppt->lte_cities_dashboard($year,$w1,$w4);
			
			//TODOS OS GRÁFICOS DO SLIDE 9 
			$data['lte_cities_nqi'] = $this->model_ppt->lte_cities_nqi($year,$w1,$w4);
			$data['umts_cities_nqi_hs'] = $this->model_ppt->umts_cities_nqi_hs($year,$w1,$w4);
			
			//TRÊS TABELAS DE CQI (SLIDES 11,12,13)
			$data['umts_kpi_cs'] = $this->model_ppt->umts_kpi_cs($year,$w1,$w4);
			$data['umts_kpi_hs'] = $this->model_ppt->umts_kpi_hs($year,$w1,$w4);
			$data['cqi_lte'] = $this->model_ppt->cqi_lte($year,$w1,$w4);

			//TRÊS GRÁFICOS DE COLUNA DO CELL MAPPING (SLIDES 11,12,13)
			$data['vw_cqi_cs'] = $this->model_ppt->vw_cqi_cs($year,$w1,$w4);
			$data['vw_cqi_hs'] = $this->model_ppt->vw_cqi_hs($year,$w1,$w4);
			$data['vw_cqi_lte'] = $this->model_ppt->vw_cqi_lte($year,$w1,$w4);
			
			//PIZZA (SLIDES 11,12,13)
			// $data['vw_cell_maping_cs'] = $this->model_ppt->vw_cell_maping_cs($year,$w1,$w4);
			// $data['vw_cell_maping_hs'] = $this->model_ppt->vw_cell_maping_hs($year,$w1,$w4);
			// $data['vw_cell_maping_lte'] = $this->model_ppt->vw_cell_maping_lte($year,$w1,$w4);
			
			//PIZZA (SLIDE 14,15,16)
			$data['cidades_cs'] = $this->model_ppt->cidades_cs($year,$w1,$w4);
			$data['cidades_hs'] = $this->model_ppt->cidades_hs($year,$w1,$w4);
			$data['cidades_lte'] = $this->model_ppt->cidades_lte($year,$w1,$w4);
			
			//GRAFICO (SLIDE 15)
			$data['total_degradations'] = $this->model_ppt->total_degradations($year,$w1,$w4);
			
			//TABELA (SLIDE 15)
			$data['nqi_impact_table'] = $this->model_ppt->nqi_impact_table($year,$w1,$w4);
			
			$this->load->view('view_header_ppt');
			$this->load->view('view_theme_sand_signika');
			$this->load->view('view_nav_ppt',$data);
			$this->load->view('view_ppt',$data);			
		} 
	}
	
	public function kpis_anatel(){
		
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_main_kpis_anatel');
		$this->load->model('model_cellsinfo');
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		
		
		$maxdate = $this->model_main_kpis_anatel->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}
		
		$date = date('Y-m-d', strtotime($reportdate.' - 5 day'));
		
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'daily';
		$data['reportkpi'] = 'main_kpis_anatel';
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();	
	
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['smp'] = $this->model_main_kpis_anatel->network($date,$reportdate);
		 }
		 elseif ($netype == 'region') {
			$data['smp'] = $this->model_main_kpis_anatel->region($date,$reportdate,$node);
		 }
		 elseif($netype == 'nodeb'){
			$data['smp'] = $this->model_main_kpis_anatel->nodeb($date,$reportdate,$node);
		 }
		 elseif($netype == 'uf'){
			$data['smp'] = $this->model_main_kpis_anatel->uf($date,$reportdate,$node);
		 }			
		 elseif($netype == 'cidade'){ 
			$cidade_aux = $this->model_cellsinfo->find_cidade_info($node);
			$ibge = $cidade_aux[0]->ibge;
			$uf = $cidade_aux[0]->uf;
			$data['smp'] = $this->model_main_kpis_anatel->cidade($date,$reportdate,$ibge,$uf);
		 }
		 elseif($netype == 'cluster'){
			$cluster_aux = $this->model_cellsinfo->find_cluster_info($node);
			$cluster_id = $cluster_aux[0]->cluster_id;
			$uf = $cluster_aux[0]->uf;
			$data['smp'] = $this->model_main_kpis_anatel->cluster($year,$week,$final_year,$final_week,$cluster_id,$uf);  
		 }
		 elseif($netype == 'rnc'){
			$data['smp'] = $this->model_main_kpis_anatel->rnc($date,$reportdate,$node); 
		 }
		
		$this->load->view('view_header_check_neighborhood_lte');
		$this->load->view('view_nav_main_kpis_anatel',$data);
		$this->load->view('view_theme_sand_signika');
		$this->load->view('view_main_kpis_anatel',$data);
		
	}

	public function kpis_anatel_weekly(){
		
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_main_kpis_anatel');
		$this->load->model('model_cellsinfo');
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		
		
		$maxdate = $this->model_main_kpis_anatel->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}
		
		$date = date('Y-m-d', strtotime($reportdate.' -25 day'));
		
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'main_kpis_anatel';
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();	
	
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['smp'] = $this->model_main_kpis_anatel->weekly_network($date,$reportdate);
		 }
		 elseif ($netype == 'region') {
			$data['smp'] = $this->model_main_kpis_anatel->weekly_region($date,$reportdate,$node);
		 }
		 elseif($netype == 'nodeb'){
			$data['smp'] = $this->model_main_kpis_anatel->weekly_nodeb($date,$reportdate,$node);
		 }
		 elseif($netype == 'uf'){
			$data['smp'] = $this->model_main_kpis_anatel->weekly_uf($date,$reportdate,$node);
		 }			
		 elseif($netype == 'cidade'){ 
			$cidade_aux = $this->model_cellsinfo->find_cidade_info($node);
			$ibge = $cidade_aux[0]->ibge;
			$uf = $cidade_aux[0]->uf;
			$data['smp'] = $this->model_main_kpis_anatel->weekly_cidade($date,$reportdate,$ibge,$uf);
		 }
		 elseif($netype == 'cluster'){
			$cluster_aux = $this->model_cellsinfo->find_cluster_info($node);
			$cluster_id = $cluster_aux[0]->cluster_id;
			$uf = $cluster_aux[0]->uf;
			$data['smp'] = $this->model_main_kpis_anatel->weekly_cluster($year,$week,$final_year,$final_week,$cluster_id,$uf);  
		 }
		 elseif($netype == 'rnc'){
			$data['smp'] = $this->model_main_kpis_anatel->weekly_rnc($date,$reportdate,$node); 
		 }
		
		$this->load->view('view_header_check_neighborhood_lte');
		$this->load->view('view_nav_main_kpis_anatel',$data);
		$this->load->view('view_theme_sand_signika');
		$this->load->view('view_main_kpis_anatel',$data);
		
	}	

	public function kpis_anatel_monthly(){
		
		$this->load->helper('form');
		$this->load->model('model_monitor');
		$this->load->model('model_main_kpis_anatel');
		$this->load->model('model_cellsinfo');
		
		
		//Set Node
		if($this->input->post('reportnename')){
			$node = $this->input->post('reportnename');
		} else {
			$node = 'NETWORK';
		}
		$data['reportnename'] = $node;
		
		
		//Set Type
		if($this->input->post('reportnetype')){
			$netype = $this->input->post('reportnetype');
		} else {
			$netype = 'network';
		}
		$data['reportnetype'] = $netype;
		
		
		$maxdate = $this->model_main_kpis_anatel->maxdate();
		$referencedate = $maxdate[0]->date;
		
		//Set Date and Weeknumkp
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to the reference date
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}
		
		$date = date('Y-m-d', strtotime($reportdate.' - 30 week'));
		
		$new_date = new DateTime($date);
		$week = $new_date->format("W");
		$year = $new_date->format("Y");
		
		$end = new DateTime($reportdate);
		$final_week = $end->format("W");
		$final_year = $end->format("Y");
		
		$data['weeknum'] = $final_week;
							
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'monthly';
		$data['reportkpi'] = 'main_kpis_anatel';
		
		$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['regional'] = $this->model_cellsinfo->regional();
		$data['cidades'] = $this->model_cellsinfo->cidades();
		$data['clusters'] = $this->model_cellsinfo->clusters();
		$data['nodebs'] = $this->model_cellsinfo->nodebs();
		$data['ufs'] = $this->model_cellsinfo->ufs();
		$data['custom'] = $this->model_cellsinfo->custom();	
	
		$regions = array("CO", "PRSC", "NE", "BASE","ES","MG");
		
		if($netype == 'network'){
			$data['smp'] = $this->model_main_kpis_anatel->monthly_network($year,$week,$final_year,$final_week);
		 }
		 elseif ($netype == 'region') {
			$data['smp'] = $this->model_main_kpis_anatel->monthly_region($year,$week,$final_year,$final_week,$node);
		 }
		 elseif($netype == 'nodeb'){
			$data['smp'] = $this->model_main_kpis_anatel->monthly_nodeb($year,$week,$final_year,$final_week,$node);
		 }
		 elseif($netype == 'uf'){
			$data['smp'] = $this->model_main_kpis_anatel->monthly_uf($year,$week,$final_year,$final_week,$node);
		 }			
		 elseif($netype == 'cidade'){ 
			$cidade_aux = $this->model_cellsinfo->find_cidade_info($node);
			$ibge = $cidade_aux[0]->ibge;
			$uf = $cidade_aux[0]->uf;
			$data['smp'] = $this->model_main_kpis_anatel->monthly_cidade($year,$week,$final_year,$final_week,$ibge,$uf);
		 }
		 elseif($netype == 'cluster'){
			$cluster_aux = $this->model_cellsinfo->find_cluster_info($node);
			$cluster_id = $cluster_aux[0]->cluster_id;
			$uf = $cluster_aux[0]->uf;
			$data['smp'] = $this->model_main_kpis_anatel->monthly_cluster($year,$week,$final_year,$final_week,$cluster_id,$uf); 
		 }
		 elseif($netype == 'rnc'){
			$data['smp'] = $this->model_main_kpis_anatel->monthly_rnc($year,$week,$final_year,$final_week,$node); 
		 }
		
		$this->load->view('view_header_check_neighborhood_lte');
		$this->load->view('view_nav_main_kpis_anatel',$data);
		$this->load->view('view_theme_sand_signika');
		$this->load->view('view_main_kpis_anatel',$data);
		
	}
	
}


