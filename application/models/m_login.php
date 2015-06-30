<?php
  
 class M_login extends CI_Model {
   
  function __construct()
  {
   parent::__construct();
  }
   
  function login($username, $password)
  {
  $p = md5($password);
   $this -> db -> select('username, password');
   $this -> db -> from('ad_user');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $p);
   $this -> db -> limit(1);
    
   $query = $this -> db -> get();
    
   if($query -> num_rows() == 1)
   {
     
    $result = $query->result();
     
    return $result;
   }
   else
   {
    return false;
   }
  }
   
 }