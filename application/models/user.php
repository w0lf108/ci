<?php 
Class User extends CI_Model
{
  function login($username, $password)
  {
    $this->db->select('id, username, password');
    $this->db->from('users');
    $this->db->where(array('username' => $username, 'password' => $password));
    $this->db->limit(1);
    // $query = $this->db->query("SELECT id, username, password FROM users WHERE username = 'admin' AND password ='admin' LIMIT 1;");

    $query = $this->db->get();
    //echo $query->num_rows();
    if ($query->num_rows() == 1) {
      return $query->result();
    } else{
      return false;
    }
  }

  function register($username, $password)
  {
    $this->db->select('username');
    $this->db->from('users');
    $this->db->where(array('username' => $username));
    $this->db->limit(1);

    $check_username = $this->db->get();

    if($check_username->num_rows() == 1){
      return false;
    } else {
      $insert_data = array(
      'username' => $username,  
      'password' => $password
    );

    $query_insert = $this->db->insert('users',$insert_data);

    // echo $query_insert;

    }
  }

  public function change_password($uid, $password)
  {

    $this->db->set('password', $password);
    $this->db->where('id', $uid);
    $this->db->update('users');

    // $this->db->get();

    // echo $this->db->get();
  }
}
