<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quickreport_test extends CI_Controller {
	
	
	public function index(){
			
		$this->load->helper('form');
			
		$this->load->view('view_header_baseline');
		$this->load->view('view_nav_kpi_customize');
		$this->load->view('view_kpi_customize_teste');

	}

}	
?>
	