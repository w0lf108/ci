<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user');
  }

  public function index()
  {
    //Load library validate form và set rules
    $this->load->library('form_validation');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

    if (!$this->form_validation->run()) {
      $this->load->view('view_login');
    } else {
      redirect('home','refresh');
    }
  }

  function check_database($password)
  {
    //Đã validate form -> So sánh database
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    //Query database
    $result = $this->user->login($username, $password);

    if($result){
      foreach($result as $results){
        $session_data = array(
          'id' => $results->id,
          'username' => $results->username
        );
      }
        $this->session->set_userdata('logged_in', $session_data);
      return true;
    } else {
      $this->form_validation->set_message('check_database', 'Invalid username or password');
      return false;
    }
  }

}

/* End of file verifylogin.php */
/* Location: ./application/controllers/verifylogin.php */