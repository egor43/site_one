<?php   
    class Input extends CI_Controller{ 
               
        function index()   
        {   
            $this->load->helper('form');
        //загружаем модель helloworld_model 
            $this->load->model('input_model');   
            $login = $this->input->post('login');
            $password = $this->input->post('password');
            echo "!" + $login + "@";
            echo "$" + $password + "%";
            $data['content'] = $this->input_model->getData($login, $password);    
 
              
        }   

        function create()
        {
            $this->load->helper('form');
            $this->load->model('input_model');

            if (!$this->input->post('login') && !$this->input->post('password') )
            {
                $this->load->view('input_form');
            }
            else
            {
                $this->input_model->getData();
                $this->load->view('input_view');
            }
        }
    }
?>