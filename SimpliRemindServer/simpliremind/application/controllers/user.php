<?php
class User extends CI_Controller{
	
	
	public function __construct()
	{
		parent::__construct();

		$this->load->model('UserModel');
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
	}
	
	public function index(){
		
		$this->data['offer'] = $this->UserModel->get_all();
		$this->data['message'] = $this->session->flashdata('message');
		
		}
	
	
	function userregistration(){
	$data = array(
		'title' => 'User Registration',
		'content' => 'admin/userregistration',
		'success'=>'null',
		'error'=>NULL
		);
		
		//if ($this->form_validation->run('offer_registration') == true){
			
			if($_POST) {
				$product=array(
					'FirstName'=>$this->input->post('txtfname'),
					'MiddleName'=>$this->input->post('txtmname'),
					'LastName'=>$this->input->post('txtlname'),
					'UserName'=>$this->input->post('txtusername'),
					'Password'=>$this->input->post('txtpassword'),
					'SecurityQuestion'=>$this->input->post('txtseq'),
					'Answer'=>$this->input->post('txtans'),
					'EmailID'=>$this->input->post('txtemailid'),
					'Gender'=>$this->input->post('radiogender'),
					'BirthDate'=>$this->input->post('txtbdate'),
					'ContactNo'=>$this->input->post('txtcontactno'),
					'Address'=>$this->input->post('txtaddress'),
					'City'=>$this->input->post('txtcity'),
					'State'=>$this->input->post('txtstate'),
					'Country'=>$this->input->post('txtcountry'),
					'Role'=>'student'
				);
				$this->UserModel->insert_user($product);
				$data['success'] = 1;
			}
			
			 if($data['success']==1)
					  redirect('login');
	//	}
		else{
			$data['error']=validation_errors();
		}
		$this->load->view('admin/userregistration');
	}
	
	function userlist(){
		$data = array(
		'title' => 'User List',
			'content' => 'admin/userlist'
		);
	 $data['query'] = $this->UserModel->get_all();
		$this->load->view('admin/template',$data);
		
	}
	
	function usermanagement($UserID){
		$data = array(
		'success' => NULL,
		'title' => 'User Manage',
			'content' => 'admin/usermanagement'
		);
	  	if($_POST) {
					$data=array(
					'FirstName'=>$this->input->post('txtfname'),
					'MiddleName'=>$this->input->post('txtmname'),
					'LastName'=>$this->input->post('txtlname'),
					'EmailID'=>$this->input->post('txtemailid'),
					'Gender'=>$this->input->post('radiogender'),
					'BirthDate'=>$this->input->post('txtbdate'),
					'ContactNo'=>$this->input->post('txtcontactno'),
					'Address'=>$this->input->post('txtaddress'),
					'City'=>$this->input->post('txtcity'),
					'State'=>$this->input->post('txtstate'),
					'Country'=>$this->input->post('txtcountry'),
					'Role'=>$this->input->post('txtrole'),
					'Department'=>$this->input->post('txtdepartment'),
					'Image'=>$this->do_upload()
					);
					$this->UserModel->update_user($UserID,$data);
				 	$data['success']=1; 
			 	 }
				 if($data['success']==1)
					  redirect('user/userlist');
				$data['query'] = $this->UserModel->get_user($UserID);
			 	$this->load->view('admin/template',$data);
		
	}
	
	function delete_user($UserID) {
		$this->UserModel->delete_user($UserID);
		$this->session->set_flashdata('message', '<p>Offer was successfully deleted!</p>');
		redirect(base_url().'user/userlist');
	}
	
	function do_upload()
		{
			$config['upload_path'] = './assets/uploads/user';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '1000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$this->load->library('upload');
			if (!$this->upload->do_upload()) {
				$error = array('upload_error' => $this->upload->display_errors());
				//$this->load->view('upload_form', $error);
			}
			else {
				$data = $this->upload->data();
				$this->resize($data['full_path'],$data['file_name']);
				return $data['file_name'];		
			}
		}
		
		function resize($path, $file) {
		$config = array(
			'image_library' => 'gd2',
			'source_image' => $path,
			'create_thumb' => TRUE,
			'maintain_ratio' => TRUE,
			'width' => 150,
			'height' => 75,
			'new_image' => './assets/uploads/user/'.$file
		);
		$this->load->library('image_lib',$config);
		$this->image_lib->resize();
	}	
	
	
	
}

 ?>