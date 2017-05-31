<?php
class tampilankatering extends CI_Controller{
		public $model=NULL;
		
		public function __construct(){
			parent::__construct();
			$this->load->model('tampilankateringmodel');
			$this->model = $this->tampilankateringmodel;
			
			$this->load->database();
			$this->load->helper('url');
		}
		
		public function read(){
			$rows = $this->model->read();
			$this->load->view('tampilankateringview', ['rows'=>$rows]);
		}
		
		public function delete($kode_del){
			$this->model->kode = $kode_del;
			$this->model->delete();
			redirect('tampilankatering');
		}
}
?>
