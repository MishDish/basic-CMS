<?php
session_start();
 // error_reporting(0);

include('connect.php');
include('general_functions.php');
// if(logged_in()==true){
// $session_user_id =$_SESSION['user_id'];
// $user_data=user_data($session_user_id,'first_name','last_name','email','password','active');
// }
$errors=array();
$notifications=array();

?>