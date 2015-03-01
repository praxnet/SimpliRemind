<?php

class CourseModel extends CI_Model {

			function get_all(){
					$this->db->select('CourseID, CourseName, CourseTotalWeek, CourseCategory, CourseLevel');
					$query = $this->db->get('course');
					return $query->result_array();
					 // returns the query as an array of objects
					if($query->num_rows()>0)
					{
						foreach ($query->result() as $row) {
							$data[] = $row; // equates the array of objects to an array variable
						}
						return $data; 
					}
					else
					{
						return "nothing";
					}
				}
				
			function course_registeration($data){
				
				$this->db->insert('usercourseinfo',$data);
				  return  $this->db->insert_id();		
				  	
			}
			
			function getallstudent($corseid){				
				$query = $this->db->query('SELECT uc . * , u.UserID, u.FirstName, u.LastName FROM usercourseinfo AS uc
						INNER JOIN user AS u ON uc.UserID = u.UserID WHERE uc.CourseID ='.$corseid);
						
						
				if ( $query->num_rows() > 0 )
					{
						$row = $query->result_array();						
						return $row;
					}
					
				}
				
			 /**
     * Storing new user
     * returns user details
     */
    public function storeUser($name, $email, $gcm_regid) {
        // insert user into database
        $result = mysql_query("INSERT INTO gcm_users(name, email, gcm_regid, created_at) VALUES('$name', '$email', '$gcm_regid', NOW())");
        // check for successful store
        if ($result) {
            // get user details
            $id = mysql_insert_id(); // last inserted id
            $result = mysql_query("SELECT * FROM gcm_users WHERE id = $id") or die(mysql_error());
            // return user details
            if (mysql_num_rows($result) > 0) 
			{
                return mysql_fetch_array($result);
            } else 
			{
                return false;
            }
        } else {
            return false;
        }
    }
 
    /**
     * Getting all users
     */
    public function getAllUsers() {
        $result = mysql_query("select * FROM gcm_users");
        return $result;
    }
	
	public function getoneuser($id){
		$result = mysql_query("select * FROM gcm_users where id = $id");
		if (mysql_num_rows($result) > 0) 
			{
                return mysql_fetch_array($result);
            }
		//return $result;
		}

	
}

?>