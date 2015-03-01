<?php 
class Application extends CI_Controller{
	
	function applicationregistration(){
		
		$data = array(
		'title' => 'Application Registration',
			'content' => 'admin/applicationregistration'
		);
	  $this->load->view('admin/template',$data);

				
	}
		
	function applicationlist(){
		$data = array(
		'title' => 'Application List',
			'content' => 'admin/applicationlist'
		);
	  $this->load->view('admin/template',$data);

	
	
	}
		
	function applicationmanagement(){
			$data = array(
		'title' => 'Application Management',
			'content' => 'admin/applicationmanagement'
		);
	  $this->load->view('admin/template',$data);

		
	}
	
}


?>