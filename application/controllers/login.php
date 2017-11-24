<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    $this->load->helper(array('form'));
    $this->load->view('view_login');
  }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */