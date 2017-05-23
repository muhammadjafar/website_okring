<?php 
	class Barang_model extends CI_Model{
	
	public $id, $username, $password, $email, $stok;
	public $label =[];
	
	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database();//fungsi untuk memuat database (libarary)
	}
		
	public function insert() {
		$sql = sprintf("INSERT INTO barang VALUES ('%s','%s','%f','%s','%d')",
			$this->id,
			$this->username,
			$this->password,
			$this->email,
			$this->stok);
		$this->db->query($sql);
	}
	public function update() {
		$sql = sprintf("UPDATE barang SET username='%s',password='%f',email='%s',stok='%d' WHERE id='%s'",
			$this->username,
			$this->password,
			$this->email,
			$this->stok,
			$this->id);
		$this->db->query($sql);
	}
	public function delete() {
		$sql = sprintf("DELETE FROM barang WHERE id = '%s'", $this->id);
		$this->db->query($sql);
	}
	
	public function read() {
		$sql = "SELECT * FROM barang ORDER BY id";
		$query = $this->db->query($sql);
		return $query->result();
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