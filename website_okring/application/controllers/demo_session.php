<?php
	class Demo_session extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('session');
		}
		public function index(){
			$this->session->set_userdata('username', 'admin');
			$this->load->view('session_view');
		}
		public function halaman1(){
			$this->load->view('session_view1');
		}
		public function halaman2(){
			$this->load->view('session_view3');
		}
	}
?>