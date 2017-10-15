<?php
 
if (!defined('BASEPATH')) exit('No direct script access allowed');
 
/**
*
* @author http://roytuts.com
*/
class Charts extends CI_Controller {
 
	function __construct() {
		parent::__construct();
		$this->load->model('chart_model');
		$this->load->library('form_validation');
	}	
 
	function event_guards_charts() {
		$x['data']=$this->chart_model->data_chart_booking_yearly_eg();
		$x['data1']=$this->chart_model->data_chart_income_yearly_eg();
		$this->load->view('pages/charts/event-guards',$x);
	}
	
	function home_guards_charts(){
		$x['booking_yhg']=$this->chart_model->data_chart_booking_yearly_hg();
		$x['income_yhg']=$this->chart_model->data_chart_income_yearly_hg();
		$this->load->view('pages/charts/home-guards',$x);
	}	
}
/* End of file highchart.php */
/* Location: ./application/controllers/highchart.php */
