<?php
	class Demo_cookie extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('cookie');
		}
		public function index(){
			set_cookie('myvar', 100, 60000 * 30);
			$this->load->view('cookie_view');
		}
	}
	?>