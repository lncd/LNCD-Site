<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tools extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('tools_model');
		$data['tools'] = $this->tools_model->get_tools();
		$this->load->helper('markdown');
		$output = $this->load->view('header_view', '', TRUE);
		$output.= $this->load->view('tools', $data, TRUE);
		$output.= $this->load->view('footer_view', '', TRUE);
			
		$this->output->set_output($output);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */