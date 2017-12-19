<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class QuickReport extends CI_Controller {
	
	
public function index()
{

$this->load->helper('form');
		//$this->load->model('model_monitor');
		$this->load->model('model_mainkpis');
		$this->load->model('model_kpi_customize');
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
		

		$data['kpi_customize_db_gsm'] = $this->model_kpi_customize->kpi_customize_gsm($data);
		$data['kpi_customize_db_umts'] = $this->model_kpi_customize->kpi_customize_umts($data);
		$data['kpi_customize_db_lte'] = $this->model_kpi_customize->kpi_customize_lte($data);
		/////////////////////////////////////////////////////////////////////////////////////////////
		$data['counter_customize_db_umts'] = $this->model_kpi_customize->counter_customize_umts();
		$data['counter_customize_db_gsm'] = $this->model_kpi_customize->counter_customize_gsm();
		$data['counter_customize_db_lte'] = $this->model_kpi_customize->counter_customize_lte();
		////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$data['celulas_kpi_customize'] = $this->model_kpi_customize->cells_kpi_customize();
		////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$data['nqi_kpi_customize_umts'] = $this->model_kpi_customize->nqi_customize_umts();
		$data['nqi_kpi_customize_lte'] = $this->model_kpi_customize->nqi_customize_lte();
		///////////////////////////////////////////////////////////////////////////////////////////////////////
		$data['kpi_customize_UMTS_Elementoos_RNC'] = $this->model_kpi_customize->kpi_customize_UMTS_Elementos_RNC();
		$data['kpi_customize_UMTS_Elementoos_Reg'] = $this->model_kpi_customize->kpi_customize_UMTS_Elementos_Reg();
		$data['kpi_customize_UMTS_Elementoos_UF'] = $this->model_kpi_customize->kpi_customize_UMTS_Elementos_UF();
		$data['kpi_customize_UMTS_Elementoos_City'] = $this->model_kpi_customize->kpi_customize_UMTS_Elementos_City();
		$data['kpi_customize_UMTS_Elementoos_Cluster'] = $this->model_kpi_customize->kpi_customize_UMTS_Elementos_Cluster();
		$data['kpi_customize_UMTS_Elementoos_CustomCluster'] = $this->model_kpi_customize->kpi_customize_UMTS_Elementos_CustomCluster();
		$data['kpi_customize_UMTS_Elementoos_NodeB'] = $this->model_kpi_customize->kpi_customize_UMTS_Elementos_NodeB();
		////////////////////////////////////////////////////////////////////////////////////////////////////////////
		$data['kpi_customize_GSM_Elementoos_Reg'] = $this->model_kpi_customize->kpi_customize_GSM_Elementos_Reg();
		$data['kpi_customize_GSM_Elementoos_BSC'] = $this->model_kpi_customize->kpi_customize_GSM_Elementos_BSC();
		$data['kpi_customize_GSM_Elementoos_UF'] = $this->model_kpi_customize->kpi_customize_GSM_Elementos_UF();
		$data['kpi_customize_GSM_Elementoos_City'] = $this->model_kpi_customize->kpi_customize_GSM_Elementos_City();
		$data['kpi_customize_GSM_Elementoos_BTS'] = $this->model_kpi_customize->kpi_customize_GSM_Elementos_BTS();
		/////////////////////////////////////////////////// TESTE //////////////////////////////////////////////////
		$data['kpi_customize_LTE_Elementoos_City'] = $this->model_kpi_customize->kpi_customize_LTE_Elementos_City();
		$data['kpi_customize_LTE_Elementoos_Reg'] = $this->model_kpi_customize->kpi_customize_LTE_Elementos_Reg();
		$data['kpi_customize_LTE_Elementoos_UF'] = $this->model_kpi_customize->kpi_customize_LTE_Elementos_UF();
		$data['kpi_customize_LTE_Elementoos_eNodeB'] = $this->model_kpi_customize->kpi_customize_LTE_Elementos_eNodeB();
		$data['kpi_customize_LTE_Elementoos_Cluster'] = $this->model_kpi_customize->kpi_customize_LTE_Elementos_Cluster();
		////////////////////////////////////////////////////////////////////////////////////////////////////////////
		
		$this->load->view('view_header');
		$this->load->view('view_nav',$data);
		// $this->load->view('view_theme_dark_blue');
		#$this->load->view('view_theme_sand_signika');
		#$this->load->view('view_theme_dark_unica');
		#$this->load->view('view_theme_grid');
		//$this->load->view('view_kpi_customize_chart',$data);
		//$this->load->view('View_Teste'); 
		$this->load->view('view_kpi_customize',$data);

}
}	
?>
	