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
	



function setlevel
{
	$sum = 0;
//	$avgcourses[noofcourses]
	
	for ( $a = select courseID from usercourseInfo )
	{
		$noofusers = count userID form usercourseInfo where coursID = a[index];
		
		for($u = select usersID from usercourseInfo where coursID = a[index])
		{
			$tempweek = select usercurrentweek from usercourseInfo where (coursID = a[index] and userID = u[index])
			$sum = $sum + $tempweek
		}
		
		$avg = $sum + noofusers
		
		//$avgcourses[a[index]] = $avg;
		$alarmlevel = 0;
		
		for ($u = select userID from usercourseInfo where courseID = a[index])
		{
		$tempweek = select usercurrentweek from usercourseInfo where (coursID = a[index] and userID = u[index])
		$templevel = select currentcoursesetlvel from usercourseInfo where (courseID = a[index] and userID = u[index])
		
			if((tempweek > avg ) && (templevel == 0))
			{
				$alarmlevel = 0;
			}
			else if ((tempweek == avg && (templevel == 0))
			{
				$alarmlevel = 2;	
			}
			else if((tempweek < avg && (templevel == 0))
			{
				$alarmlevel = 3;
			}
			else if ((tempweek > avg ) && (templevel == 1))
			{
				$alarmlevel = 4;
			}
			else if ((tempweek == avg ) && (templevel == 1))
			{
				$alarmlevel = 5;
			}
			else if (tempweek < avg && (templevel == 0)
			{
				$alarmlevel = 6;
			}
			
			update table usercourseInfo where (course = a[index] && userId = u[index] ) set alarmlevel = $alarmlevel;

		
		}
			
	}

}

//on a given day this function runs 8 times
// a global variable should be set which maintains the count of this running

timings would be : 00 03 06 09 12 15 18 21
					1  2  3  4  5  6  7  8

make a table which has the alarm level and timings for it

for alarm level 0 : 1 time : 4
for alarm level 1 : 2 time : 4, 8
for alarm level 2 : 3 time : 3, 5 ,7
for alarm level 4 : 2 time : 4, 8
for alarm level 5 : 4 time : 3, 5,7,8
for alarm level 6 : 8 times : 1, 2, 3, 4,5 ,6 ,8

function raisealarm
{

		for ($u = select userID from usercourseInfo)
		{
			$tempalarm = select useralarmlevel from usercourseInfo ;
			
			$a = select * from alarmtable where alarmlevel = tempalarm;
			
			if(a[globalcounter + 3] == true)
			{
				sendnotification();
			}
		
		}
		
}

}
?>