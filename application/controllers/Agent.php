<?php
class Agent extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('is_logged_in')){
            redirect('admin/login');
        }
        $this->load->model(array('agent_model'));
    }
    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	function index(){
        $userid      = $this->session->userdata('userid');
        $user_access = $this->session->userdata('access'); //1-admin , 2-agent

        $config = array();
        $config["base_url"] = base_url() . "admin/user";        
        $config["per_page"] = 10;
        $config["uri_segment"] = 3;
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        if ($this->input->server('REQUEST_METHOD') === 'POST'){
            //print_r($this->input->post());exit;
            $term = $this->input->post('term');
            $config["total_rows"] = $this->agent_model->agent_search(null,null,TRUE,2,$term);
            $data["agents"] = $this->agent_model->agent_search($config["per_page"], $page,FALSE,2,$term);                
        }else{
            $config["total_rows"] = $this->agent_model->get_agents(null,null,TRUE,1);
            $data["agents"] = $this->agent_model->get_agents($config["per_page"], $page,FALSE,1);            
        }

        //print_r(count($data['users']) );exit;        

        $this->pagination->initialize($config); 
        $data["links"] = $this->pagination->create_links();
        //print_r($data['links']);exit;
		$data['main_content'] = 'admin/agent/list';
        $this->load->view('admin/includes/template', $data);  
	}

    /**
    * Add
    * @return void
    */
    public function add(){

        $this->load->library('form_validation'); 
        $id = $this->uri->segment(3);

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST'){
          //print_r($this->input->post());exit;
            //form validation
            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email|callback_isEmailExist');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]|callback_isMobileExist');
            $this->form_validation->set_rules('agent_code', 'Agent Code', 'required|xss_clean|callback_isAgentCodeExist');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');


            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');

            //if the form has passed through the validation
            if ( $this->form_validation->run() ){
                    $save['name']       = $this->input->post('name');
                    $save['email']      = $this->input->post('email');
                    $save['mobile']     = $this->input->post('mobile');
                    $save['agent_code'] = $this->input->post('agent_code');
                    $save['password']   = md5($this->input->post('password'));
                    $save['user_type']  = $this->input->post('user_type');
                    $save['status']     = 1;
                    $save['updated_on'] = date("Y-m-d H:i:s");
                    
                    if($this->agent_model->storeAgent($save) == TRUE){
                       $this->session->set_flashdata('flash_message', 'Save successfully');
                       /*if($pass){
                         $to = $save['email'];
                         $message = "Dear ".$save['name'].",<br>";                    
                         $message .= "Your password has been changed!<br>";                    
                         $message .= "New Password is  -> ".$new_pass;
                        
                         $this->load->library('Emailcontrol');
                         $this->emailcontrol->SendEmail($to,'tech.help@micromaxinfo.com','dippu.kumar@micromaxinfo.com', $this->config->item('Email_DefaultSender'),'User details of Micromax KBM',null,$message,null);
                   
                       }*/
                    }else{
                        $this->session->set_flashdata('flash_message', 'not_updated');
                    }
                    redirect('admin/agent');
                
            }

        }
        //$data['l3user'] = $this->users_model->get_user_by_id( $id );
        //$data['agent'] = $this->agent_model->get_agent_by_id( $id );
        //print_r($data['users']);exit;
        //load the view
        $data['main_content'] = 'admin/agent/add';
        $this->load->view('admin/includes/template', $data);  

        /*$data['main_content'] = 'admin/administrator/edit';
        $this->load->view('includes/template', $data);            
        */
    }//Add

    /**
    * Update /view item by  id
    * @return void
    */
    public function view(){        
        $this->load->library('form_validation'); 
        $id = $this->uri->segment(3);

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST'){
          //print_r($this->input->post());exit;
            //form validation
            $this->form_validation->set_rules('name', 'Name', 'required|xss_clean');
            $this->form_validation->set_rules('email', 'Email', 'required|xss_clean|valid_email');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]');
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');

            //if the form has passed through the validation
            if ( $this->form_validation->run() ){
                    $save['name']       = $this->input->post('name');
                    $save['email']      = $this->input->post('email');
                    $save['mobile']     = $this->input->post('mobile');
                    $save['user_type']  = $this->input->post('user_type');
                    $save['status']     = 1;
                    $save['updated_on'] = date("Y-m-d H:i:s");
                    
                    if($this->agent_model->update_agent($id, $save) == TRUE){
                       $this->session->set_flashdata('flash_message', 'updated');
                       /*if($pass){
                         $to = $save['email'];
                         $message = "Dear ".$save['name'].",<br>";                    
                         $message .= "Your password has been changed!<br>";                    
                         $message .= "New Password is  -> ".$new_pass;
                        
                         $this->load->library('Emailcontrol');
                         $this->emailcontrol->SendEmail($to,'tech.help@micromaxinfo.com','dippu.kumar@micromaxinfo.com', $this->config->item('Email_DefaultSender'),'User details of Micromax KBM',null,$message,null);
                   
                       }*/
                    }else{
                        $this->session->set_flashdata('flash_message', 'not_updated');
                    }
                    redirect('agent/view/'.$id);
                
            }

        }
        //$data['l3user'] = $this->users_model->get_user_by_id( $id );
        $data['agent'] = $this->agent_model->get_agent_by_id( $id );
        //print_r($data['users']);exit;
        //load the view
        $data['main_content'] = 'admin/agent/view';
        $this->load->view('admin/includes/template', $data);  

        /*$data['main_content'] = 'admin/administrator/edit';
        $this->load->view('includes/template', $data);            
        */
    }//update

    public function delete(){
        
        $id = $this->uri->segment(3);
        $data['status'] = 2;
        
        $data['updated_on'] = date('Y-m-d H:i:s');
        $this->agent_model->updateUser($id,$data);
        redirect('admin/user');
    }//delete

    function isMobileExist($str){
        $count = $this->agent_model->isMobileExist($str);//$this->auth->check_email($str, $this->admin_id);
        if ($count){
            $this->form_validation->set_message('isMobileExist', 'Mobile already exist');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    function isEmailExist($str){
        $count = $this->agent_model->isEmailExist($str);//$this->auth->check_email($str, $this->admin_id);
        if ($count){
            $this->form_validation->set_message('isEmailExist', 'Email already exist');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    function isAgentCodeExist($str){
        $count = $this->agent_model->isAgentCodeExist($str);//$this->auth->check_email($str, $this->admin_id);
        if ($count){
            $this->form_validation->set_message('isAgentCodeExist', 'Agent Code already exist');
            return FALSE;
        }else{
            return TRUE;
        }
    }

}