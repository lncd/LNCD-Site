<?php
class projects_model extends CI_Model
{

	function __construct()
	{
		// Call the Model constructor
                parent::__construct();
	}

    public function get_current_projects()
    {
    	$query = $this->db->select()
    						->where('projects.active', 1)
    						->order_by('project_name')
    						->get('projects');
    	
    	return $query->result();
    }
    
    public function get_past_projects()
    {
	    $query = $this->db->select()
    						->where('projects.active', 0)
    						->order_by('project_name')
    						->get('projects');
    	
    	return $query->result();
    }

    public function get_case_studies()
    {
	    $query = $this->db->select()
    						->where('projects.case_study', 1)
    						->order_by('project_name')
    						->get('projects');
    	
    	return $query->result();
    }
    
    public function get_project($identifier)
    {
	    $query = $this->db->select()
    						->where('id', $identifier)
    						->get('projects');
    	
    	return $query->result();
    }
		
}
?>
