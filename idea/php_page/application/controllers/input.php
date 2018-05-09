<?php   
    class Input extends CI_Controller{ 
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