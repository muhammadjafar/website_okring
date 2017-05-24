<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Login1 extends CI_Controller{
		public $model=NULL;
		public function __construct(){
			parent::__construct();
			$this->load->model('Login_model');
			$this->model=$this->Login_model;
			$this->load->library('session');
			$this->load->helper('url');
		}
		public function index(){
			if(isset($_POST['btnLog'])){
				$this->model->user=$_POST['txt_user'];
				$this->model->password=$_POST['txt_password'];
				if($this->model->cek_log()==TRUE){
					$this->session->set_userdata('user', $this->model->user);
					//$this->load->view('login_succes', ['model'=>$this->model]);
					redirect('Edit_profil');
				}else{
					redirect('Login1');
				}
			}else{
				$this->load->view('login_view', ['model'=>$this->model]);
			}
		}
		public function logout(){
			if($this->session->has_userdata('user')){
				$this->session->sess_destroy();
				//$this->load->view('login_view', ['model'=>$this->model]);
				redirect('Login1');
			}
		}
	}
?>