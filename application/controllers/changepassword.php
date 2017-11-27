<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
  }
  
  public function index()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('txtPasswordChange', 'Password', 'required');
    $this->form_validation->run();

    if(!$this->form_validation->run()){
      $this->session->set_flashdata('empty_password', 'password cannot be empty');
      var_dump($this->session->flashdata('empty_password'));
    } else{
      $uid = $this->input->post('txtUserID');
      $password = $this->input->post('txtPasswordChange');
      $this->user->change_password($uid, $password);
      redirect('home','refresh');
    }

  }

}

/* End of file changepassword.php */
/* Location: ./application/controllers/changepassword.php */