<?php   
    class Helloworld extends Controller{   
        function index()   
        {   
		//загружаем модель hello_world 
            $this->load->model('hello_world');   
 
            $data['content'] = $this->helloworld_model->getData();   
            $data['page_title'] = "CI Hello World App!";   
 
            $this->load->view('hello_world_view',$data);   
        }   
    }   
?>