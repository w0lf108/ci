<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifyregister extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
  }

  public function index()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    if (!$this->form_validation->run()) {
      $this->load->view('view_register');
      echo 'username or password is invalid';
      return false;
    } else {
      $query_reg = $this->user->register($username, $password);
      if($query_reg){
        redirect('home','refresh');
      } else{
        echo 'username is already in use';
        return false;
      }

    }

  }

}

/* End of file verifyregister.php */
/* Location: ./application/controllers/verifyregister.php */