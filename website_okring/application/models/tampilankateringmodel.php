<?php
class tampilankateringmodel extends CI_Model{
	public $namakatering;
	public $foto;
	public $kodekatering;
	public $label=[];
	
	public function __construct(){
		parent::__construct();
		$this->labels = $this->_attributeLabels();
		$this->load->database();
	}
	
	public function read(){
		$sql = "SELECT * FROM katering ORDER BY kodekatering";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	private function _attributeLabels(){
		return[
			'namakatering'=>'',
			'foto'=>'',
			'kodekatering'=>'kodekatering : '
			];
	}
}
?>