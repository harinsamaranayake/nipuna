<?php

/**
 * Created by PhpStorm.
 * User: SKR
 * Date: 10/27/2017
 * Time: 7:30 AM
 */
class Login extends CI_Controller
{
    public function loginUser()
    {
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('psw','password','required|min_length[5]');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }
        else
        {
            $this->load->model('Model_user');
            $result = $this->Model_user->loginUser();

            if($result != false)
            {
                $user_data = array(
                    'user_nic'=>$result->nic,
                    'name'=>$result->name,
                    'mobile'=>$result->mobile,
                    'telephone'=>$result->telephone,
                    'addressOne'=>$result->addressOne,
                    'addressTwo'=>$result->addressOne,
                    'addressThree'=>$result->addressOne,
                    'email'=>$result->email,
                    'loggedin'=>TRUE
                );

                $this->session->set_userdata($user_data);
                redirect('User/index');
            }
            else
            {
                $this->session->set_flashdata('errmsg','wrong email or password');
                redirect('Home/login');
            }

        }


    }
}