<?php
class tools_model extends CI_Model
{

	function __construct()
	{
		// Call the Model constructor
                parent::__construct();
	}

    public function get_tools()
    {
    	$returning = array();
    	
    	$tools_query = $this->db
    		->order_by('name')
    		->get('tools');
    	
    	return $tools_query;
    }

		
}
?>
