<?php
$config = array(
/**
*login validation  

*/
	'login'=>array(
		array(
			'field'=>'txtusername',
			'lable'=>'Username',
			'rules'=>'required|trim|xss_clean'
		),
			array(
			'field'=>'txtpassword',
			'lable'=>'Password',
			'rules'=>'required|trim|xss_clean'
		)
		
	),
	
	/**
	* offer_registration form validation
	*/
	
	'offer_registration' => array(
		array(
			'field' => 'txtoffername',
			'label' => 'Offer name',
			'rules' => 'trim|required|xss_clean'
		),
		array(
			'field' => 'txtdescription',
			'label' => 'Offer Description',
			'rules' => 'trim|required|xss_clean'
		),
		array(
			'field' => 'txtstartdate',
			'label' => 'Start Date',
			'rules' => 'trim|required|xss_clean'
		),
		array(
			'field' => 'txtenddate',
			'label' => 'End Date',
			'rules' => 'trim|required|xss_clean'
		)
		
	),
);





?>
