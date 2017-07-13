<?php 
class Agent_model extends CI_Model {

        public function storeAgent($data){
                $insert = $this->db->insert('tbl_admin', $data);
                return $insert;
        }

        public function get_agents($limit_start=null, $limit_end=null,$count,$status=1,$usertype=2)
        {
             if($count){                    
                      $this->db->select('*');
                      $this->db->from('tbl_admin');
                      $this->db->where('status',$status);
                      $this->db->where('user_type',$usertype);
                      $this->db->limit($limit_start, $limit_end);
                      $query = $this->db->get();
                      return $query->num_rows(); 
                  
              }else{
                    $this->db->select('*');
                    $this->db->from('tbl_admin');
                    $this->db->where('status',$status);
                    $this->db->where('user_type',$usertype);
                    $this->db->limit($limit_start, $limit_end);                  
                    $this->db->order_by('id','DESC');
                    $query = $this->db->get();
                    return $query->result();  
              }
        }

        
        public function agent_search($limit_start=null, $limit_end=null,$count,$usertype=2,$term=null){
              if( !empty($term) ){
                      if($count){
                             $this->db->select('*');
                             $this->db->from('tbl_admin');
                             $this->db->where('user_type',$usertype);
                             if(!empty($term)){
                               $this->db->where('(name LIKE "%'.$term.'%" OR agent_code LIKE "%'.$term.'%" OR email LIKE "%'.$term.'%" OR mobile LIKE "%'.$term.'%")');
                             }
                             $query = $this->db->get();
                             return $query->num_rows();   
                      }else{
                             $this->db->select('*');
                             $this->db->from('tbl_admin');
                             $this->db->where('user_type',$usertype);
                             if(!empty($term)){
                                   $this->db->where('(name LIKE "%'.$term.'%" OR agent_code LIKE "%'.$term.'%" OR email LIKE "%'.$term.'%" OR mobile LIKE "%'.$term.'%")');
                             }
                             $this->db->limit($limit_start, $limit_end);                 
                             $this->db->order_by('id','ASC');
                             $query = $this->db->get();
                             return $query->result();           
                      } 
              } 
        }

        function update_agent($id, $data){
                $this->db->where('id', $id);
                $this->db->update('tbl_admin', $data);
                $report = array();
               // $report['error'] = $this->db->_error_number();
                //$report['message'] = $this->db->_error_message();
                if($report !== 0){
                        return true;
                }else{
                        return false;
                }
        }

        function isMobileExist($mobile){
          $this->db->select('id');
          $this->db->from('tbl_admin');
          $this->db->where('mobile',$mobile);
          $count = $this->db->count_all_results();
          if($count>0){
            return true;
          }else{return false;}
        }

        function isEmailExist($email){
          $this->db->select('id');
          $this->db->from('tbl_admin');
          $this->db->where('email',$email);
          $count = $this->db->count_all_results();
          if($count>0){
            return true;
          }else{return false;}
        }
        
        function isAgentCodeExist($code){
          $this->db->select('id');
          $this->db->from('tbl_admin');
          $this->db->where('agent_code',$code);
          $count = $this->db->count_all_results();
          if($count>0){
            return true;
          }else{return false;}
        }

        function get_agent_by_id( $id ) {     
          $this->db->where('id', $id);
          $query = $this->db->get('tbl_admin');
          return $query->row();
        }       
          
}