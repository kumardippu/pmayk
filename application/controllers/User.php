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
        $config["total_rows"] = $this->user_model->get_users(null,null,TRUE);        
        $config["per_page"] = 7;
        $config["uri_segment"] = 3; 
        $this->pagination->initialize($config); 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $config['per_page']."->".$page."<->";print_r($config);exit;
        $data["users"] = $this->user_model->get_users($config["per_page"], $page,FALSE);
        //print_r(count($data['users']) );exit;
        $data["links"] = $this->pagination->create_links();
        //print_r($data['links']);exit;
		$data['main_content'] = 'admin/user/list';
        $this->load->view('admin/includes/template', $data);  

	}

}