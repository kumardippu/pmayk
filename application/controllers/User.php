<?php
class User extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
        $this->load->model(array('user_model'));
    }
    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	function index(){

		$data['main_content'] = 'admin/user/list';
        $this->load->view('admin/includes/template', $data);  

	}

}