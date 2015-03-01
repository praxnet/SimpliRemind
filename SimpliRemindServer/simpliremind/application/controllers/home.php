<?php 
class Home extends CI_Controller {

	 function index() {
		 $data = array(
		 	'title' => 'Admin Home',
			'content' => 'admin/blank'
		 );
		 $this->load->view('admin/template',$data);
	}
}


?>
