<?php 
	class Edit_model extends CI_Model{
	
	public $id, $username, $password, $email, $stok,$user, $alamat;
	public $labels =[];
	
	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database();//fungsi untuk memuat database (libarary)
		$this->load->library('session');
	}
		
	public function insert() {
		$sql = sprintf("INSERT INTO user VALUES ('%s','%s','%f','%s','%d')",
			$this->id,
			$this->username,
			$this->password,
			$this->email,
			$this->stok);
		$this->db->query($sql);
	}
	public function update() {
		$sql = sprintf("UPDATE user SET username='%s',password='%f',email='%s',stok='%d' WHERE id='%s'",
			$this->username,
			$this->password,
			$this->email,
			$this->stok,
			$this->id);
		$this->db->query($sql);
	}
	public function delete() {
		$sql = sprintf("DELETE FROM user WHERE id = '%s'", $this->id);
		$this->db->query($sql);
	}
	
	public function read() {
		//$this->user=$this->session->set_userdata('user');
		$sql =sprintf("SELECT * FROM user where username='%s'", $this->user=$this->session->set_userdata('user'));
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