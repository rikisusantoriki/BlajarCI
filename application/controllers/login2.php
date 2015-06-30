<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
//nama class harus sama dengan nama file dan diawali dengan huruf besar
class Login2 extends CI_Controller {
    public function index()
    {
		$this->load->library('session');
        $this->load->helper('url');
		$this->load->helper('form');
        //jika seasson login belum ada maka tampilkan login
        if(!$this->session->userdata('login')){
			$this->load->view('v_login');
			}else
            {
                //jika seasson ada direct ke home
                redirect('home','refresh');
            }
    }
	
	public function logout(){
      $this->load->library('session');
      $this->load->helper('url');
      $this->session->unset_userdata('login');
      redirect('login2','refresh');
  }
}