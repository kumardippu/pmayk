<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model(array('user_model'));
    }	
	public function index(){
		//$this->load->helper('url'); //autoloaded
		
		//$this->load->view('welcome_message');
		$data[] = array();

        if ($this->input->server('REQUEST_METHOD') === 'POST'){
            $term = $this->input->post('search');
            $user = $this->user_model->end_user_search(null,null,FALSE,$term);
            $data['user'] = $user;
            $data['is_searched'] = TRUE;
        }

		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['main_content'] = 'home';
        /*$data['refrence_no'] = '4555';
        $data['main_content'] = 'thanks';*/
        $this->load->view('includes/template', $data);
	}
    public function search(){
        print_r($this->input->post());
    }
	public function registration(){
        $this->load->library('form_validation'); 
        // $this->load->helper('security'); // Used for xss_clean
        $refrenc_no = "";
		if ($this->input->server('REQUEST_METHOD') === 'POST'){
            $value = $this->input->post('email',TRUE); //where TRUE enables the xss filtering
            $this->form_validation->set_rules('fname', 'First Name', 'required|xss_clean');
            $this->form_validation->set_rules('lname', 'Last Name', 'required|xss_clean');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]|callback_isMobileExist');

            $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email');
            $this->form_validation->set_rules('aadhar', 'Aadhar No', 'required|numeric|min_length[12]|max_length[16]|callback_isAadharExist');
           /* $this->form_validation->set_rules('uname', 'User Name', 'required|xss_clean');
            $this->form_validation->set_rules('region', 'Region', 'required|xss_clean');
            $this->form_validation->set_rules('profile', 'Profile', 'required|xss_clean');
            $this->form_validation->set_rules('access', 'User Type', 'required|xss_clean');
            $this->form_validation->set_rules('email', 'lang:email', 'trim|required|valid_email|max_length[128]|callback_check_email');
            $this->form_validation->set_rules('rsm_email', 'lang:rsm email', 'trim|valid_email|max_length[128]|callback_check_email');
            if ($this->input->post('password') != '' || $this->input->post('confirm') != '' || !$id)
            {
                $this->form_validation->set_rules('password', 'Password', 'required|md5');
                $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
            }    
            */
            $this->form_validation->set_error_delimiters('<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>', '</strong></div>');
			$data['isValidated'] = FALSE; 
            //print_r($this->input->post());exit;
            if ( $this->form_validation->run() ){  
                    $refrenc_no    = "PMAY".time();                  
					$data_to_store = array(
						'f_name' 	=> $this->input->post('fname'),
						'l_name' 	=> $this->input->post('lname'),
						'father' 	=> $this->input->post('father'),
						'mother' 	=> $this->input->post('mother'),
                        'email' 	=> $this->input->post('email'),
						'mobile' 	=> $this->input->post('mobile'),
						'aadhar_no'	=> $this->input->post('aadhar'),
                        'area_type' => $this->input->post('area'),
                        'current_house' => $this->input->post('current_house'),
						//'agent_ref'	=> $this->input->post('agent'),
						'created_on'=> date('Y-m-d H:i:s'),
                        'status'=> 1,
                        'refrence_no'=>$refrenc_no
					);
			
                //if the insert has returned true then we show the flash message
                if($this->user_model->storeUser($data_to_store)){
                    $data['flash_message'] = TRUE;   
                    
                    /*$to = $this->input->post('email');
                    $from = 'tech.help@micromaxinfo.com';
                    $name = $this->input->post('fname');
                    $username = $this->input->post('uname');
                    //$password = $this->input->post('password');
                    $message = "Dear ".$name.",<br>";
                    $message .= "Congratulation! Your account has been created on ".base_url().".<br>";
                    $message .= "Your Login details are following -><br>";
                    $message .= "User name -> ".$username."<br>";
                    $message .= "Password -> ".$password;
                    $this->load->library('Emailcontrol');
                    //SendEmail($to, $cc, $bcc, $from, $subject, $html, $text, $attachments = null);
                    $this->emailcontrol->SendEmail($to,'tech.help@micromaxinfo.com','dippu@jayintech.com', $this->config->item('Email_DefaultSender'),'User details of Micromax KBM',null,$message,null);
                    */
                    
                   $data['refrence_no'] = $refrenc_no;
                    /*$data['header'] = 'includes/header';
                    $data['footer'] = 'includes/footer';
                    $data['main_content'] = 'thanks';
                    
                    $this->load->view('includes/template', $data);*/
                }else{
                     
                    $data['flash_message'] = FALSE; 
                }

            }

        }
        $data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		if($refrenc_no!=''){
            $data['main_content'] = 'thanks';    
        }else{
            $data['main_content'] = 'home';    
        }
        
        $this->load->view('includes/template', $data);
	}

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
            $this->form_validation->set_message('isAadharExist', 'Aadhar no already exist');
            return FALSE;
        }else{
            return TRUE;
        }
    }


}
