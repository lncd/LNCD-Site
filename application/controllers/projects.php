<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class projects extends CI_Controller {

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
		$this->load->model('projects_model');
		$this->load->helper('markdown');
		$data['projects'] = $this->projects_model->get_current_projects();
		
		$this->load->view('header_view');
		$this->load->view('projects_view', $data);
		$this->load->view('footer_view');
	}
	
	public function past()
	{
		$this->load->model('projects_model');
		$this->load->helper('markdown');
		$data['projects'] = $this->projects_model->get_past_projects();
		$data['project_type'] = 1;
		
		$this->load->view('header_view');
		$this->load->view('projects_view', $data);
		$this->load->view('footer_view');
	}
	
	public function case_studies()
	{
		$this->load->model('projects_model');
		$this->load->helper('markdown');
		$data['projects'] = $this->projects_model->get_case_studies();
		$data['project_type'] = 2;
		
		$this->load->view('header_view');
		$this->load->view('projects_view', $data);
		$this->load->view('footer_view');
	}
	
	public function specific($identifier)
	{
		$this->load->model('projects_model');
		$this->load->helper('markdown');
		$data['project'] = $this->projects_model->get_project($identifier);
		
		$this->load->view('header_view');
		$this->load->view('project_view', $data);
		$this->load->view('footer_view');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */