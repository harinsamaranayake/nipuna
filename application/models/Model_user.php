<?php

class Model_user extends CI_Model
{
    function insertUserData()
    {
        //data insert
        $data = array(
            'nic'=> $this->input->post('nic'),
            'name'=> $this->input->post('name',TRUE),
            'telephone'=> $this->input->post('telephone'),
            'mobile'=> $this->input->post('mobile'),
            'email'=> $this->input->post('email',TRUE),
            'addressOne'=> $this->input->post('address1',TRUE),
            'addressTwo'=> $this->input->post('address2',TRUE),
            'addressThree'=> $this->input->post('address3',TRUE),
            'password'=> sha1($this->input->post('psw')),

        );

        return $this->db->insert('customer',$data);
    }


    function loginUser()
    {
        $email = $this->input->post('email');
        $psw = sha1($this->input->post('psw'));

        $this->db->where('email',$email);
        $this->db->where('password',$psw);
        $respond = $this->db->get('customer');

        if($respond->num_rows()==1)
        {
            return $respond->row(0);
        }
        else
        {
            return false;
        }
    }
}