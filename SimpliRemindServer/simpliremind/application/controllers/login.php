<?php
/**
* Login
*/
class Login extends CI_Controller {
	
	/**
	* Constructur
	*/
	function __construct() {
		parent::__construct();
		$this->load->model('LoginModel');
		$this->load->library('form_validation');

	}
	
	function index() {
		$data = array(
			'title' => 'Login',
			'error' => ''
		);
		$this->load->view('login', $data);
	}
	
	function login_status() {
		$data = array(
			'title' => 'Login',
			'error' => NULL
		);
		if($_POST) {
			$username = $_POST['txtusername'];
			$password = $_POST['txtpassword'];	
			$user = $this->LoginModel->login($username, $password);
			if(!$user) {
				$data['error'] = 'Invalid username';
			} else {
			$this->session->set_userdata('username', $user['UserName']);
			$this->session->set_userdata('userID', $user['UserID']);
			
			$this->session->set_userdata('role', $user['Role']);
			redirect(base_url() . './admin/home');
			}
		}
		$this->load->view('login', $data);
		/*$username = $this->input->post('txtusername', TRUE);
		$password = $this->input->post('txtpassword', TRUE);
		$user = $this->LoginModel->login($username, $password);
		if(!$user) {
			echo 'ndasjkdl';
		}
		else{
			$this->session->set_userdata('username', $user['UserName']);
			$this->session->set_userdata('role', $user['Role']);
			redirect(base_url() . './admin/home');
		}
		$this->load->view('login', $data);*/
	}
	
	 public function validate(){ // this function validates whether a user exists or not
        
        //the following validates the specific form fields ie. username and password
        $this->form_validation->set_rules('txtusername', 'UserName', 'required|trim|max_length[50]|xss_clean');
        $this->form_validation->set_rules('txtpassword', 'Password', 'required|trim|max_length[200]|xss_clean');
        
        
        if($this->form_validation->run() == FALSE) // if the form validation function doesn't run
         {
                $this->load->view('login');
         }
         
         else
         {
                extract($this->input->post()); // get all values from the input fields

                $validate = $this->LoginModel->check_login($username, $password);
                $status = $this->LoginModel->user_login_data($username, $password);
                 //echo $validate->status;
                if(!$validate) // if the login failed
                     {  
                             if ($status == 'leave' || $status == 'suspended') 
                                 {

                                      $this->session->set_flashdata('suspended', TRUE);

                                      redirect('login');
                                 } 
                               else
                                 {
                                      $this->session->set_flashdata('login_error', TRUE);
                 
                                        redirect('login');
                                 }
                     }
               
                else // if the login worked
                     {                     
                        // set up a session and its relevant variables
  
                        $this->session->set_userdata(array(
                                'Logged_in' => TRUE,
                                'Name' =>  $this->input->post('username'),
                                'Role' => $this->LoginModel->user_role($username),
                                'Department' => $this->LoginModel->department($username)
                            ));

                            redirect('login/load_page');

                     }
         } 
    }
	
	
	public function load_page(){ // this function loads a page depending on the user's department

        if($this->session->userdata('Logged_in')) // checks the session to see whether a user is logged in
        {
            // puts the current session's department info into the $dept variable
            $role = $this->session->userdata('Role'); 
             redirect('admin/home'); 
            if( $role == "admin") 
            {
               redirect('admin/home'); 
            }
            elseif( $role == "executive")
            {
               redirect('executive/home'); 
            }
        }        
        else
        {
            redirect('login');
        }
        
    }
	

	  public function logout(){ // this function logs out the user and destroys their session
	  
            //$this->session->unset_userdata();
            $this->session->sess_destroy();

            redirect('login');
    }
	
	function login() {
		
	}
	function forgot_password() {
		$username = $this->session->userdata('username');
		$data = array(
			'title' => '',
			'main_content' => ''
		);
		if($_POST) {
			$question = $this->input->post('txtseq');
			$answer = $this->input->post('txtans');
			$user = $this->LoginModel->get_sec_user($username, $question, $answer);
			if(!$user) {
				echo 'invalid security question answer';
			}
			else {
				$new_password = $this->input->post();
				$update_data = array(
					'Password' => $new_password
				);	
				$this->LoginModel->update_password($username, $update_data);
				echo 'success';
			}
		}
		$this->load->view('template', $data);
	}
	
	function change_password(){
		$data = array(
				'title' => 'Change Password',
				'content' => 'admin/changepassword'
			);
		if($_POST){
			$usename = $this->session->userdata('username');
			$oldpassword = $_POST['oldpassword'];
			$result = $this->LoginModel->get_user_password($usename,$oldpassword);
			if($result == 0)
			echo "Ivalid Old Password";
			else
			{
				$data = array(
					'Password' => $_POST['newpassword']
				);
				$this->LoginModel->change_password($usename,$data);
				echo "<script>alert('Password Changed')</script>";
				 redirect(base_url('login'));
			}
		}
		$this->load->view('admin/changepassword',$data);
		
		
	}
	
}
?>