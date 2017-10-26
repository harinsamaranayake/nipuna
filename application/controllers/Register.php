<?php
class Register extends CI_Controller
{
    public function registerUser()
    {
        //validate fields
        $this->form_validation->set_rules('nic','NIC','required|is_unique[customer.nic]|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('mobile','Mobile','required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('telephone','Telephone','min_length[10]|max_length[10]');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[customer.email]');
        $this->form_validation->set_rules('psw','password','required|min_length[5]');
        $this->form_validation->set_rules('cpsw','password confirmation','required|matches[psw]');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('register');
        }
        else
        {
            $this->load->model('Model_user');
            $response = $this->Model_user->insertUserData();
            if($response){
                $this->session->set_flashdata('msg','Registered succsussfully. please login');
                redirect('Home/login');
            }
        }
    }
}