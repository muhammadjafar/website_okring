<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class register extends CI_Controller{
	
	public $model = NULL;
	
	public function __construct(){
		parent::__construct();
		$this->load->model('registermodel');
		$this->model = $this->registermodel;
		
		$this->load->database();
		$this->load->helper('url');//redirect
	}
	
	public function index(){
		if (isset($_POST['register'])){
			$this->model->nama=$_POST['nama'];
			$this->model->username=$_POST['username'];
			$this->model->alamat=$_POST['alamat'];
			$this->model->telp=$_POST['telp'];
			$this->model->email=$_POST['email'];
			$this->model->pass=$_POST['pass'];
			$this->model->insert();
			/*if($this->model->insert()){
				echo "berhasil";
			}else{
				echo "gagal";
			}*/
			redirect('register');
		}else{
			$this->load->view('registerview', ['model'=>$this->model]);
		}
	}
}

?>