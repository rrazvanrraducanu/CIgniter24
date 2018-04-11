<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{
            $data['title'] ="Login form";
            $this->load->view('main_view',$data);
	}
        public function check()
        {
            if((($_POST["text1"]=="user1")&&($_POST["pass1"]=="pass1")))
	{
           $this->session->set_userdata('username',$_POST["text1"]);
        
        return redirect('LoginController/ura');
}
else{
    echo "Wrong input!";
  exit;
    }   
        }
        public function ura()
        {
           if($this->session->userdata('username')){
               $data['uname']=$this->session->userdata('username');
               $this->load->view('ura',$data);
             }
             else{
                 return redirect('LoginController/index');
             }

            
        }
        public function logout()
        {
             $this->session->sess_destroy();
             redirect('LoginController/index');

        }
}

