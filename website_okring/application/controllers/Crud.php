<?php
class Crud extends CI_Controller {
	
	public $model = NULL;
	
	public function __construct() {
		parent::__construct();
		//load model, gunakan fungsi
		$this->load->model('Barang_model');
		$this->model = $this->Barang_model;
		
		$this->load->database();
		$this->load->helper('url'); //sebagai redirect
	}
	
	public function index() {
		$this->read();//gunakan $this untuk menrefer atau menunjuk pada function read()..
	}
	
	public function create() {
		if(isset($_POST['btnSubmit'])) {
			$this->model->id = $_POST['id'];
			$this->model->username = $_POST['username'];
			$this->model->password= $_POST['password'];
			$this->model->email = $_POST['email'];
			$this->model->stok = $_POST['stok'];
			$this->model->insert();
			redirect('crud');
			}else{
				$this->load->view('crud_create_view', ['model'=>$this->model]);
				}
			}
			
			public function read() {
				$rows = $this->model->read();
				$this->load->view('crud_read_view', ['rows'=>$rows]);
			}
			
			public function update($id_up) {
				if(isset($_POST['btnSubmit'])) {
				$this->model->id = $_POST['id'];
				$this->model->username = $_POST['username'];
				$this->model->password = $_POST['password'];
				$this->model->email = $_POST['email'];
				$this->model->stok = $_POST['stok'];
				$this->model->update();
				redirect('crud');
				}else{
					$query = $this->db->query("SELECT * FROM barang WHERE id='$id_up'");
					$row = $query->row();
					$this->model->id = $row->id;
					$this->model->username = $row->username;
					$this->model->password = $row->password;
					$this->model->email = $row->email;
					$this->model->stok = $row->stok;
					$this->load->view('crude_update_view', ['model'=>$this->model]);
					}
				}
					public function delete($id_del) {
						$this->model->id = $id_del;
						$this->model->delete();
						redirect('crud');
					}
				}
				
			?>	
					