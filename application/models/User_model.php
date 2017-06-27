<?php 
class User_model extends CI_Model {

        public function storeUser($data)
        {
                $insert = $this->db->insert('tbl_users', $data);
                return $insert;
        }

        public function get_users($limit_start=null, $limit_end=null,$count)
        {       
                if($count){                    
                        $this->db->select('*');
                        $this->db->from('tbl_users');
                        $this->db->limit($limit_start, $limit_end);
                        $query = $this->db->get();
                        return $query->num_rows(); 
                    
                }else{
                      $this->db->select('*');
                      $this->db->from('tbl_users');
                      $this->db->limit($limit_start, $limit_end);                  
                      $this->db->order_by('id','DESC');
                      $query = $this->db->get();
                      return $query->result();  
                }
        }

        public function user_search($limit_start=null, $limit_end=null,$count,$usertype=null,$term=null)
        {
                if((!empty($term))||(!empty($usertype))){
                        if($count){
                               $this->db->select('*');
                               $this->db->from('tbl_users');
                               if(!empty($term)){
                                 $this->db->where('(f_name LIKE "%'.$term.'%" OR l_name LIKE "%'.$term.'%" OR email LIKE "%'.$term.'%" OR mobile LIKE "%'.$term.'%"  OR aadhar_no LIKE "%'.$term.'%")');
                               }else{
                                 $this->db->where('access',$usertype);
                               }
                               $query = $this->db->get();
                               return $query->num_rows();   
                        }else{
                               $this->db->select('*');
                               $this->db->from('users');
                               if(!empty($term)){
                                          $this->db->where('(f_name LIKE "%'.$term.'%" OR l_name LIKE "%'.$term.'%" OR email LIKE "%'.$term.'%" OR mobile LIKE "%'.$term.'%"  OR aadhar_no LIKE "%'.$term.'%")');
                               }else{
                                $this->db->where('access',$usertype);
                               }
                               $this->db->limit($limit_start, $limit_end);                 
                               $this->db->order_by('name','ASC');
                               $query = $this->db->get();
                               return $query->result();           
                        } 
                } 
        }

        function update_user($id, $data)
        {
                $this->db->where('id', $id);
                $this->db->update('tbl_users', $data);
                $report = array();
                $report['error'] = $this->db->_error_number();
                $report['message'] = $this->db->_error_message();
                if($report !== 0){
                        return true;
                }else{
                        return false;
                }
        }

        function isMobileExist($mobile){
          $this->db->select('id');
          $this->db->from('tbl_users');
          $this->db->where('mobile',$mobile);
          $count = $this->db->count_all_results();
          if($count>0){
            return true;
          }else{return false;}
        }
        function isAadharExist($mobile){
          $this->db->select('id');
          $this->db->from('tbl_users');
          $this->db->where('aadhar_no',$mobile);
          $count = $this->db->count_all_results();
          if($count>0){
            return true;
          }else{return false;}
        }

        /**
          * Validate the login's data with the database
          * @param string $user_name
          * @param string $password
          * @return void
        */
        function validate($user_name, $password){
          $this->db->where('email', $user_name);
          $this->db->where('password', $password);
          $query = $this->db->get('tbl_admin');
          //print_r($this->db->affected_rows());
          if($query->num_rows() == 1){            
            $rec = $query->row();
            $data = array(
              'user_id' => $rec->id,
              'login_time' => date("Y-m-d H:i:s")
             );
            $this->db->insert('tbl_last_activity',$data);
            return $rec->id;
          }
          //return false;   
        }


        function get_user_by_id( $id ) {     
          $this->db->where('id', $id);
          $query = $this->db->get('tbl_admin');
          return $query->row();
        }       

}