<?php 
class Admin extends CI_Controller{
	function home(){		
		//$this->load->view("admin/include/header");
		//$this->load->view("admin/include/sidebar");
		//$this->load->view("admin/home");
		$data['content'] = 'admin/home';
		$data['title'] = 'Dashboard';
		$this->load->view("admin/template",$data);
		
		//$this->load->view("admin/include/footer");
	}	
	
}
?>