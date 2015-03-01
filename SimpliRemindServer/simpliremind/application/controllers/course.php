<?php
class Course extends CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('CourseModel');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		//$this->load->library('upload');
		
    }
	
		public function index(){		
			
			$this->data['message'] = $this->session->flashdata('message');	
			
			$this->session->userdata('item');
		}
	

	
	function courselist(){
		$data = array(
		'title' => 'Course List',
			'content' => 'admin/courselist'
		);
		$data['userID'] = $this->session->userdata('userID');
		 
		$data['query'] = $this->CourseModel->get_all();
		$this->load->view('admin/template',$data);
		
	}
	function courseregistration(){
		
		$userID = $_GET['userid'];
		$CourseID = $_GET['courseid'];			
		$data=array(
					'UserID'=>$userID,
					'CourseID'=>$CourseID,
					'UserInterestLevel' => 1
				);
		
		$this->CourseModel->course_registeration($data);
		$data['success'] = 1;
		$this -> courselist();
		}
		
	function coursedetails(){
		$data = array(
		'title' => 'Course List',
			'content' => 'admin/coursedetails'
		);
		$data['userID'] = $this->session->userdata('userID');
		 
		$data['query'] = $this->CourseModel->get_all();
		
		
		$this->load->view('admin/template',$data);
		}
		
	function studentdetails(){
		$data = array(
		'title' => 'Course List',
			'content' => 'admin/studentdetails'
		);		
		$corseid = $this->input->post('courseid');		
		$data['row']['query'] = $this->CourseModel->getallstudent($corseid);
		
		
			
		$this->load->view('admin/template',$data);
		}
		
		
		
		
		
		
	function demo(){
		
		$this->load->view('admin/alarm');
		
		}
	function demo2(){
		$data = array(
		'title' => 'Course List',
			'content' => 'admin/alarm23'
		);	
		if(isset($_GET['userID']))
		{
			$userID	= $_GET['userID'];
		}
		$this->load->view('admin/template',$data);
		
		}
	
	
/*

automation script function
*/	
	
	
	
	
	
	
		

}
 ?>