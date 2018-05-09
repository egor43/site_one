<?php   
class Input_model extends CI_Model  {   
    public function __construct (){
        parent::__construct ();
    }
 
    function getData()   
        {   
            $data = array(
                'login' => $this->input->post('login'),
                'password' => md5($this->input->post('password'))
            );
        
            return $this->db->insert('user', $data);    
        }   
 
}   
?>