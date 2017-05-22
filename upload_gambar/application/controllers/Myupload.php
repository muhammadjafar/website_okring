<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Myupload extends CI_Controller{

	public function __construct(){
		parent::__construct();	
	}

	public function index(){
		$this->load->view('myupload_view');
	}

	public function upload_process(){
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '524288'; //in kb
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';

		$this->upload->initialize($config);

		//if upload failed
		if ( ! $this->upload->do_upload('image')){

			$data['message'] =  $this->upload->display_errors();
			$this->load->view('notification_view', $data);
		//if upload success
		}else{

			$data_insert = array(
					            'first_name' => $this->input->post('first_name'),
					            'last_name' => $this->input->post('last_name'),
					            'image' => $this->upload->data('file_name')
					        );
			//query to insert into myupload table
			$this->db->insert('myupload', $data_insert);

			$data['message'] =  'Your file was successfully uploaded!';
			$this->load->view('notification_view', $data);
		}
	}
}	