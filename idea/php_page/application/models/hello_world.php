<?php   
class Helloworld_model extends Model {   
 
    function Helloworld_model()   
    {   
        // Вызов конструктора  
        parent::Model();   
    }   
 
    function getData()   
        {   
            //Выбираем все данные из таблицы tdata  
            $query = $this->db->get('users'); 
            //Возвращаем результат   
            return $query->result();      
        }   
 
}   
?>