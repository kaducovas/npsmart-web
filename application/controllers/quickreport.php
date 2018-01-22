<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class quickreport extends CI_Controller {
	
	
public function index()
{

		$this->load->helper('form');
		//$this->load->model('model_monitor');
		//$this->load->model('model_mainkpis');
		$this->load->model('model_kpi_customize');
		//$this->load->model('model_cellsinfo');
		
		$data['kpi_customize_db_gsm'] = $this->model_kpi_customize->kpi_customize_gsm();
		$data['kpi_customize_db_umts'] = $this->model_kpi_customize->kpi_customize_umts();
		$data['kpi_customize_db_lte'] = $this->model_kpi_customize->kpi_customize_lte();
		/////////////////////////////////////////////////////////////////////////////////////////////
		$data['counter_customize_db_umts'] = $this->model_kpi_customize->counter_customize_umts();
		$data['counter_customize_db_gsm'] = $this->model_kpi_customize->counter_customize_gsm();
		$data['counter_customize_db_lte'] = $this->model_kpi_customize->counter_customize_lte();
		////////////////////////////////////////////////////////////////////////////////////////////////////////////
		//$data['celulas_kpi_customize'] = $this->model_kpi_customize->cells_kpi_customize();
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
		$this->load->view('view_nav_kpi_customize',$data);
		$this->load->view('view_kpi_customize',$data);

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
}	
?>
	