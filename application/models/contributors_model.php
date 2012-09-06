<?php
class contributors_model extends CI_Model
{

	function __construct()
	{
		// Call the Model constructor
                parent::__construct();
	}

    public function get_contributors()
    {
    	$returning = array();
    	
    	$departments_query = $this->db->select()
    									->get('departments');
    	
    	foreach($departments_query->result() as $result)
    	{
	    	$people_query = $this->db->select()
	    								->where('department_id', $result->id)
	    								->get('contributors');
	    	
	    	$returning[] = array('department' => $result, 'people' => $people_query->result());
    	}
    	
    	return $returning;
    }

		
}
?>
