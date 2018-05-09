<?php   
class Helloworld_model extends CI_Model  {   
    public function __construct (){
        parent::__construct ();
    }
 
    function getData()   
        {   
            //Выбираем все данные из таблицы tdata  
            $query = $this->db->get('user'); 
            //Возвращаем результат   
            return $query->result();      
        }   
 
}   
?>