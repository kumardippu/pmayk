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
        $config = array();
        $config["base_url"] = base_url() . "admin/user";
        $config["total_rows"] = $this->user_model->get_users(null,null,TRUE,1);        
        $config["per_page"] = 10;
        $config["uri_segment"] = 3; 
        $this->pagination->initialize($config); 
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        //echo $config['per_page']."->".$page."<->";print_r($config);exit;
        $data["users"] = $this->user_model->get_users($config["per_page"], $page,FALSE,1);
        //print_r(count($data['users']) );exit;
        $data["links"] = $this->pagination->create_links();
        //print_r($data['links']);exit;
		$data['main_content'] = 'admin/user/list';
        $this->load->view('admin/includes/template', $data);  
	}

    /**
    * Update item by his id
    * @return void
    */
    public function view(){        
        $this->load->library('form_validation'); 
        $id = $this->uri->segment(3);

        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST'){
          //print_r($this->input->post());exit;
            //form validation
            $this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean');
            $this->form_validation->set_rules('lname', 'Last Name', 'required|xss_clean');
            $this->form_validation->set_rules('father', 'Father Name', 'required|xss_clean');
            $this->form_validation->set_rules('mother', 'Mother Name', 'required|xss_clean');
            //$this->form_validation->set_rules('email', 'lang:email', 'trim|required|valid_email');
            //$this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]|callback_isMobileExist');

            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');

            //if the form has passed through the validation
            if ( $this->form_validation->run() ){
                    $save['f_name'] = $this->input->post('fname');
                    $save['l_name'] = $this->input->post('lname');
                    $save['father'] = $this->input->post('father');
                    $save['mother'] = $this->input->post('mother');
                    //  $save['email'] = $this->input->post('email');
                    //$save['mobile'] = $this->input->post('mobile');
                    $save['is_paid'] = $this->input->post('paid');
                    $save['amount'] = $this->input->post('amount');
                    $save['updated_on'] = date("Y-m-d H:i:s");
                    
                    if($this->user_model->updateUser($id, $save) == TRUE){
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


                    redirect('user/view/'.$id);
                
            }

        }
        //$data['l3user'] = $this->users_model->get_user_by_id( $id );
        $data['users'] = $this->user_model->get_user_by_id( $id );
        //print_r($data['users']);exit;
        //load the view
        $data['main_content'] = 'admin/user/view';
        $this->load->view('admin/includes/template', $data);  

        /*$data['main_content'] = 'admin/administrator/edit';
        $this->load->view('includes/template', $data);            
        */
    }//update

    public function delete(){
        
        $id = $this->uri->segment(3);
        $data['status'] = 2;
        
        $data['updated_on'] = date('Y-m-d H:i:s');
        $this->user_model->updateUser($id,$data);
        redirect('admin/user');
    }//delete

    function isMobileExist($str){
        $count = $this->user_model->isMobileExist($str);//$this->auth->check_email($str, $this->admin_id);
        if ($count){
            $this->form_validation->set_message('isMobileExist', 'Mobile already exist');
            return FALSE;
        }else{
            return TRUE;
        }
    }

    function isAadharExist($str){
        $count = $this->user_model->isAadharExist($str);//$this->auth->check_email($str, $this->admin_id);
        if ($count){
            $this->form_validation->set_message('isMobileExist', 'Aadhar no already exist');
            return FALSE;
        }else{
            return TRUE;
        }
    }

}