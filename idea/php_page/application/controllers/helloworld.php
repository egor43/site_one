<?php   
    class Helloworld extends CI_Controller{   
        function index()   
        {   
		//загружаем модель helloworld_model 
            $this->load->model('helloworld_model');   
 
            $data['content'] = $this->helloworld_model->getData();   
            $data['page_title'] = "Пользователи";   
 
            $this->load->view('helloworld_view',$data);   
        }   
    }   
?>