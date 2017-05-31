<?php

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model('Home_model');
		$this->model = $this->Home_model;
		$this->load->library('session');
		$this->load->database();
	}

	public function index(){
		$nama=$this->session->userdata('user');
		$query =$this->db->query("SELECT * FROM penjual where email_penjual='$nama'");
		$row1 = $query->row();
		$this->model->nama = $row1->nama_catering;
		$this->model->id = $row1->id_penjual;
		$this->model->foto = $row1->foto_catering;
		$row=$this->model->list_barang($this->model->id);
		$this->load->view('penjual/header',['model'=>$this->model]);
		$this->load->view('penjual/v_edit_paket',['row'=>$row]);
	}
	public function edit(){
		if($_FILES['image']['name']){
			$target="./assets/";
			$target_file=$target.basename($_FILES['image']['name']);
			$upload=1;
			$image_file=pathinfo($target_file, PATHINFO_EXTENSION);
			if(move_uploaded_file($_FILES['image']['tmp_name'], $target_file)){
				$this->model->id = $_POST['id'];
				$this->model->nama = $_POST['nama'];
				$this->model->telp = $_POST['telp'];
				$this->model->email = $_POST['email'];
				$this->model->alamat = $_POST['alamat'];
				$this->model->foto = $_FILES['image']['name'];
				@unlink("./assets/".$_POST['fotolama']);
				$this->model->update();
				redirect('home/edit_profil');
			}else{
				echo "error";
			}
		}else{
			$this->model->id = $_POST['id'];
			$this->model->nama = $_POST['nama'];
			$this->model->telp = $_POST['telp'];
			$this->model->email = $_POST['email'];
			$this->model->alamat = $_POST['alamat'];
			$this->model->foto = $_POST['fotolama'];
			$this->model->update();
			redirect('home/edit_profil');
		}
	}
	public function edit_profil() {
		$nama=$this->session->userdata('user');
		$query =$this->db->query("SELECT * FROM penjual where email_penjual='$nama'");
		$row = $query->row();
		$this->model->id = $row->id_penjual;
		$this->model->user = $row->username_penjual;
		$this->model->nama = $row->nama_catering;
		$this->model->password = $row->password_penjual;
		$this->model->email = $row->email_penjual;
		$this->model->telp = $row->telp_penjual;
		$this->model->alamat = $row->alamat_penjual;
		$this->model->foto = $row->foto_catering;
		$this->load->view('penjual/header',['model'=>$this->model]);
		$this->load->view('penjual/content_edit', ['model'=>$this->model]);
	}
		public function tambah_barang(){
		$nama=$this->session->userdata('user');
		$query =$this->db->query("SELECT * FROM penjual where email_penjual='$nama'");
		$row = $query->row();
		$this->data['list'] = $this->db->get("paket");
		//$this->session->set_userdata('user', $this->model->user);
		$this->model->id = $row->id_penjual;
		$this->model->nama = $row->nama_catering;
		$this->model->foto = $row->foto_catering;
		$this->load->view('penjual/header',['model'=>$this->model]);
		$this->load->view('penjual/v_update_paket', $this->data);
	}
	public function upload_process(){
		$query=$this->db->query("SELECT kode_paket FROM paket where nama_paket='$_POST[paket]'");
		$row1 = $query->row();
		$paket = $row1->kode_paket;
		$config['upload_path'] = './assets/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= 2097152; //in kb
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('image')){

			$data['message'] =  $this->upload->display_errors();
			$this->load->view('notification_view', $data);
		}else{

			$data_insert = array(
					            'id_penjual' => $this->input->post('id'),
								'nama_barang' => $this->input->post('nama'),
								'deskripsi_barang' => $this->input->post('deskripsi'),
								'jumlah_barang' => $this->input->post('stok'),
								'foto_barang' => $this->upload->data('file_name'),
								'kode_paket' => $paket
					        );
			$this->db->insert('barang', $data_insert);
			//$data['message'] =  'Your file was successfully uploaded!';
			$this->session->set_flashdata("pesan", 
			"<div class='alert alert-success text-center'> 
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			berhasil menambahkan</div>");
			$this->tambah_barang();
		}
	}
	public function hapus_paket($id){
		$this->model->id=$id;
		$this->model->delete();
		redirect('Home');
	}
}	