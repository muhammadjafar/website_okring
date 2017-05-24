<?php
class Edit_profil extends CI_Controller {
	
	public $model = NULL;
	
	public function __construct() {
		parent::__construct();
		//load model, gunakan fungsi
		$this->load->model('Edit_model');
		$this->model = $this->Edit_model;
		$this->load->library('session');
		$this->load->database();
		$this->load->helper('url'); //sebagai redirect
	}
	
	public function index() {
		/*if($_SESSION['user']){
			redirect('Edit_profil');
		}else{
			redirect('Login1');
		}*/
		$nama=$this->session->userdata('user');
		$query = $this->db->query("SELECT * FROM user where username='$nama'");
		$row = $query->row();
		$this->model->telp = $row->telp;
		$this->model->username = $row->username;
		$this->model->password = $row->password;
		$this->model->email = $row->email;
		$this->model->alamat = $row->alamat;
		$this->load->view('edit_read_view', ['model'=>$this->model]);
		//$this->read();//gunakan $this untuk menrefer atau menunjuk pada function read()..
	}
	
	public function create() {
		if(isset($_POST['btnSubmit'])) {
			$this->model->id = $_POST['id'];
			$this->model->username = $_POST['username'];
			$this->model->password= $_POST['password'];
			$this->model->email = $_POST['email'];
			$this->model->stok = $_POST['stok'];
			$this->model->insert();
			redirect('edit_profil');
			}else{
				$this->load->view('edit_create_view', ['model'=>$this->model]);
				}
			}
			
	public function read() {
		//$this->session->set_userdata('user', $this->model->user);
		//$rows = $this->model->read();
		//$id_up=$rows;
		$nama=$this->session->set_userdata('user');
		$query = $this->db->query("SELECT * FROM user WHERE username='$nama'");
		$row = $query->row();
		//$this->model->id = $row->id;
		//$this->model->username = $row->username;
		//$this->model->password = $row->password;
		//$this->model->email = $row->email;
		//$this->model->stok = $row->stok;
		$this->load->view('edit_read_view', ['model'=>$this->model]);
		//$this->load->view('edit_read_view', ['rows'=>$rows]);
	}
	
	public function update($id_up) {
		if(isset($_POST['btnSubmit'])) {
			$this->model->id = $_POST['id'];
			$this->model->username = $_POST['username'];
			$this->model->password = $_POST['password'];
			$this->model->email = $_POST['email'];
			$this->model->stok = $_POST['stok'];
			$this->model->update();
			redirect('edit_profil');
		}else{
			$query = $this->db->query("SELECT * FROM user WHERE id='$id_up'");
			$row = $query->row();
			$this->model->id = $row->id;
			$this->model->username = $row->username;
			$this->model->password = $row->password;
			$this->model->email = $row->email;
			$this->model->stok = $row->stok;
			$this->load->view('edit_update_view', ['model'=>$this->model]);
		}
	}
	public function delete($id_del) {
		$this->model->id = $id_del;
		$this->model->delete();
		redirect('edit_profil');
	}
}
	
?>	
					