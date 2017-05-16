<?php
class login_model extends CI_Model{
	public $user;
	public $password;
	public $label=[];
	
	public function __construct(){
		parent::__construct();
		$this->labels=$this->_attributeLabels();
		$this->load->database();
	}
	
	public function cek_log(){
		$sql=sprintf("SELECT * FROM user WHERE user='%s' AND password='%s'",
		$this->user,
		$this->password);
		$query=$this->db->query($sql);
		//$row=$query->row_array();
		//return $row['cnt']==1;
		return $query->result();
	}
	
	private function _attributeLabels(){
		return [
		'user'=>'User : ',
		'password'=>'Password : '
		];
	}
}
?>