<?php
class registermodel extends CI_Model{
	public $nama;
	public $username;
	public $email;
	public $pass;
	public $alamat;
	public $telp;
	public $labels = [];
	
	public function __construct(){
		parent:: __construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database(); //untuk memuat database
	}
	
	public function insert() {
	$sql = sprintf("INSERT INTO penjual(id_penjual, nama_catering, password_penjual, email_penjual, telp_penjual, alamat_penjual) 
	VALUES (NULL,'%s','%s','%s','%s','%s')",
		$this->nama,
		md5($this->pass),
		$this->email,
		$this->telp,
		$this->alamat);
	$this->db->query($sql);
	}
	
	private function _attributeLabels(){
		return [
		'nama'=>'Nama: ',
		'username'=>'Username: ',
		'email'=>'Email : ',
		'pass'=>'Password: ',
		'telp'=>'No Telepon: ',
		'alamat'=>'Alamat: '
		];
	}
}

?>