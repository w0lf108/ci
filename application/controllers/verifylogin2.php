<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifylogin2 extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
  }

  public function index()
  {
    $username = $this->input->post('username');

    echo $username;
  }

}

/* End of file verifylogin2.php */
/* Location: ./application/controllers/verifylogin2.php */