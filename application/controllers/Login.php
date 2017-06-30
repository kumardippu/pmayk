<?php
class Login extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model(array('user_model'));
    }
    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	function index(){
		if($this->session->userdata('is_logged_in')){
			redirect('admin/user');
        }else{
        	$this->load->view('admin/login');
        }				
	}
    /**
    * encript the password 
    * @return mixed
    */	
    function __encrip_password($password) {
        return md5($password);
    }	

    /**
    * check the username and the password with the database
    * @return void
    */
	function validate_credentials(){	
		$user_name = $this->input->post('user_name');
		
		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->user_model->validate($user_name, $password);
        $userdata['userdata'] = $this->user_model->get_admin_by_id($is_valid);
        $isadmin = FALSE;
        $array =   array_filter($userdata); 
        if(!empty($array)){
			$user_type =  $userdata['userdata']->user_type;
            
            if($user_type==1){
				$isadmin = TRUE;
            }
        }

		if($is_valid && $isadmin){
			$data = array(
				'user_name' => $user_name,
				'is_logged_in' => true,
                'userid'       => $is_valid,
                'access'       => $userdata['userdata']->user_type
			);
	 				
			$this->session->set_userdata($data);					
			redirect('admin/user');
		}
		else // incorrect username or password
		{
			$data['message_error'] = TRUE;
			$this->load->view('admin/login', $data);	
		}
	}	

	/**
    * Destroy the session, and logout the user.
    * @return void
    */		
	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

}