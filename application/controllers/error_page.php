<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Error_page extends CI_Controller {

	public function index()
	{
		$output = $this->load->view('header_view', '', TRUE);
		$output.= $this->load->view('error_view', '', TRUE);
		$output.= $this->load->view('footer_view', '', TRUE);
			
		$this->output->set_output($output);
	}
}

/* End of file error_page.php */
/* Location: ./application/controllers/error_page.php */