<?php 
/* 
 * Description: Login model class
 */
class LoginModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
	
	public function login($username,$password){
		$this->db->select('UserID,UserName,Password,Role');
		$this->db->from('user');
		$this->db->where('UserName',$username);
		$this->db->where('Password',$password);
		
		$query = $this->db->get();
		return $query->first_row('array');
		
	}
   
   
    //this function checks whether the username and the password is in the database or not
    public function check_login($username, $password){
        $this->db->select('UserName, Password, Status');
        $array = array('UserName' => $username, 'Password' => $password,'Status' => 'active');
        $this->db->where($array);
        $query = $this->db->get('user');
        
        if($query->num_rows() == 1) // if the affected number of rows is one
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    //this function returns the status of the user to be used in authentication
    public function user_login_data($username, $password){
        $this->db->select('Status');
        $array = array('UserName' => $username, 'Password' => $password);
        $this->db->where($array);
        $query = $this->db->get('user');
        
        if($query->num_rows() == 1) // if the affected number of rows is one
        {
             $row = $query->row();
             return $row->status;
        }
//        else
//        {
//            return false;
//        }
    }
    
    
    public function user_role($username){ // this function gets the user's role from the database
         $this->db->select('Role');
         $this->db->where('UserName', $username);
         $query = $this->db->get('user');
         $row = $query->row(0);
         
         return $row->role;
    }
    
    public function department($username){ // this function gets the user's department from the database
         $this->db->select('Department');
         $this->db->where('Username', $username);
         $query = $this->db->get('user');
         $row = $query->row(0); // returns the first row with an array of objects that is stored in the row variable
        
         return $row->department;
    }
    
    public function get_user_id($username){ // this function gets the user's department from the database
         $this->db->select('UserID');
         $this->db->where('Username', $username);
         $query = $this->db->get('user');
         $row = $query->row(0); // returns the first row with an array of objects that is stored in the row variable
        
         return $row->userID ;
    }
    
    public function fullname($username){
         $this->db->select('FirstName, LastName');
         $this->db->where('Username', $username);
         $query = $this->db->get('user');
         $row = $query->row(0);
         return $row;
         
//            foreach($query->result() as $row) // returns the query as an array of objects
//           {
//                $data[] = $row; // equates the array of objects to an array variable
//           }
//        
//           return $data;
       // }
    }  
	function get_sec_user($user, $que, $ans) {
		$this->db()->select();
		$this->db->from('user');
		$where = array(
			'UserName' => 'txtusername',
			'SecurityQuestion' => 'txtseq',
			'Answer' => 'txtans'
		);
		$this->db->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
	}
	
	function update_password($username, $data) {
		$this->db->where('UserName', $username);
		$this->db->update('login', $data);
	} 
	
	function get_user_password($username,$password){
		$this->db->select();
		$this->db->from('user');
		$this->db->where('UserName',$username);
		$this->db->where('Password',$password);		
		$query = $this->db->get();
		return $query->num_rows();		
	}
	
	function change_password($username,$password){
		$this->db->where('UserName',$username);
		$this->db->update('user',$password);
		return $this->db->affected_rows();
	
	}
	
	
}
?>
