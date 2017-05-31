<?php 
class Home_model extends CI_Model{
	public $id,$user,$foto,$nama,$telp,$password,$email,$alamat,$deskripsi,$stok,$paket;
	public $labels =[];
	
	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database();//fungsi untuk memuat database (libarary)
		$this->load->library('session');
	}
	public function update() {
		$sql = sprintf("UPDATE penjual SET nama_catering='%s',email_penjual='%s', telp_penjual='%s', foto_catering='%s', alamat_penjual='%s' WHERE id_penjual='%s'",
			$this->nama,
			$this->email,
			$this->telp,
			$this->foto,
			$this->alamat,
			$this->id);
		$this->db->query($sql);
	}
	public function tambah_barang(){
		$sql = sprintf("insert into barang (id_penjual, nama_barang, foto_barang, deskripsi_barang) values('%s','%s','%s','%s')",
			$this->id,
			$this->nama,
			$this->foto,
			$this->deskripsi);
		$this->db->query($sql);
	}
	public function list_barang($id) {
		$sql =sprintf("SELECT b.*, p.nama_paket FROM barang b join paket p on b.kode_paket=p.kode_paket where b.id_penjual='%s' order by b.id_barang desc", $this->id);
		$query=$this->db->query($sql);
		return $query->result();
	}
	public function delete() {
		$sql = sprintf("DELETE FROM barang WHERE id_barang = '%s'", $this->id);
		$this->db->query($sql);
	}
	private function _attributeLabels() {
		return  [
			'id'=>'Id: ',
			'username'=>'Username: ',
			'password'=>'Password: ',
			'email'=>'Email: ',
			'stok'=>'Stok: ',
			];
		}
	}
?>