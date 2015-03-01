<?php
class UserModel extends CI_Model{
	
	function get_all() {
			$this->db->select();
			$query = $this->db->get('user');
	
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
	
	function get_user($UserID) {
			$this->db->select();
			$this->db->where('UserID', $UserID);
			$query = $this->db->get('user');
			return $query->row_array();
		}
		
		function insert_user($data){
			$this->db->insert('user',$data);
			return $this->db->insert_id();				
		}
		
		function delete_user($UserID){
			$this->db->where('UserID',$UserID);
			$this->db->delete('user');
	
		}
		
		function update_user($UserID,$data){
			$this->db->where('UserID',$UserID);
			$this->db->update('user',$data);
			return $this->db->affected_rows();
		
		}
		
	
	}
?>