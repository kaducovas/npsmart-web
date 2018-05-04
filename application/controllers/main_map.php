<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_map extends CI_Controller {

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
		$this->load->view('view_header_main_map');
		$this->load->view('view_nav_main_map');
		$this->load->view('view_main_map');
	}
	
	public function map_region_umts()
	{
		#############################HEADER#####################
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
		
		$data['no_elements'] = $this->model_cellsinfo->no_elements_umts();
		
		$this->load->view('view_header_main_map',$data);
		$this->load->view('view_nav_map_region_umts',$data);
		$this->load->view('view_map_region',$data);
	}

	public function map_region_lte()
	{
		#############################HEADER#####################
		$this->load->model('model_cellsinfo');		
		$data['no_elements'] = $this->model_cellsinfo->no_elements_lte();
		
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
		
		
		$referencedate = $this->model_cellsinfo->reference_date_lte($node);
		#$referencedate = $this->model_cellsinfo->reference_date_daily($node);
		#echo $referencedate;
		
		//Set Date and Weeknum
		if($this->input->post('reportdate')){
			$reportdate = $this->input->post('reportdate');
			//$referencedate = date('Y-m-d', strtotime($referencedate.' -1 day'));
			if(strtotime($reportdate) > strtotime($referencedate)){ //IF the date if greater than yesterday then it changes to yesterday as currently lte only calculates kpi in the following day.
				$reportdate = $referencedate;
			}
		} 
		else {
			$reportdate = $referencedate;
		}
		#print($referencedate);
		#$reportdate = '2016-12-22';
		$date = new DateTime($reportdate);
		$weeknum = $date->format("W");
		$data['weeknum'] = $weeknum;
		$data['reportdate'] = $reportdate;
		$data['reportagg'] = 'weekly';
		$data['reportkpi'] = 'all';		
		#echo $weeknum;
		
		

		#echo $node;
		
		#$node = $this->input->post('node');

		#$data['rncs'] = $this->model_cellsinfo->rncs();
		$data['ufs'] = $this->model_cellsinfo->ufs_lte();
		$data['regional'] = $this->model_cellsinfo->regional_lte();
		$data['cidades'] = $this->model_cellsinfo->cidades_lte();
		$data['clusters'] = $this->model_cellsinfo->clusters_lte();
		$data['enodebs'] = $this->model_cellsinfo->enodebs();
		
		$this->load->view('view_header_main_map',$data);
		$this->load->view('view_nav_map_region_lte',$data);
		$this->load->view('view_map_region_lte',$data);
	}

	public function map_region_gsm()
	{
		#############################HEADER#####################
		$this->load->model('model_cellsinfo');		
		$data['no_elements'] = $this->model_cellsinfo->no_elements_gsm();
		
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
		
		$referencedate = $this->model_cellsinfo->reference_date_gsm($node);
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
		
		$data['bsc'] = $this->model_cellsinfo->bsc();
		$data['regional_gsm'] = $this->model_cellsinfo->regional_gsm();
		$data['cidades_gsm'] = $this->model_cellsinfo->cidades_gsm();
		#$data['clusters'] = $this->model_cellsinfo->clusters();
		#$data['cells'] = $this->model_cellsinfo->cells();
		$data['bts'] = $this->model_cellsinfo->bts();
		$data['ufs'] = $this->model_cellsinfo->ufs_gsm();
		
		$this->load->view('view_header_main_map',$data);
		$this->load->view('view_nav_map_region_gsm',$data);
		$this->load->view('view_map_region_gsm',$data);
	}
		
}
