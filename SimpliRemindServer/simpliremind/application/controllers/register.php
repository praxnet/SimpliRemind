<?php
 define("GOOGLE_API_KEY", "AIzaSyCs8QGDfPeH0CHOLrlMKNNq1JFU-cK4Ogk"); // Place your Google API Key 
 
class register extends CI_Controller{
	
	function __construct() {
		parent::__construct();
		$this->load->model('CourseModel');
		//$this->load->library('form_validation');
		//$this->load->helper(array('form', 'url'));
		//$this->load->library('upload');
		
    }
	
	
	public function index(){
	
	}
	public function registernew(){
		
	
		
	
		// response json
//$json = array();
 
/**
 * Registering a user device
 * Store reg id in users table
 */
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["regId"])) {
    $name = $_POST["name"];	
    $email = $_POST["email"];
    $gcm_regid = $_POST["regId"]; // GCM Registration ID
    // Store user details in db  
   
    $res = $this->CourseModel->storeUser($name, $email, $gcm_regid); 
	
	
    $registatoin_ids = array($gcm_regid);
	
    $message = array("product" => "shirt"); 
    $result = $this->send_notification($registatoin_ids, $message);
 	
    echo $result;
} else {
    // user details missing
}
		
		}
		
	 /**
     * Sending Push Notification
     */
    public function send_notification($registatoin_ids, $message) {
        // include config
       
 
        // Set POST variables
        $url = 'https://android.googleapis.com/gcm/send';
 
        $fields = array(
            'registration_ids' => $registatoin_ids,
            'data' => $message,
        );
 
        $headers = array(
            'Authorization: key=' . GOOGLE_API_KEY,
            'Content-Type: application/json'
        );
        // Open connection
        $ch = curl_init();
 
        // Set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
 
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 
        // Execute post
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
 
        // Close connection
        curl_close($ch);
        echo $result;
    }

}
?>