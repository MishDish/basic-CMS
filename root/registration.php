<?php require("../includes/overall/header.php");?>
<?php require ("../includes/users/connect.php");?>

<div class="content">
<?php  
            $first_name= '';
	    	$last_name= '';
	    	$password= '';
	    	$password_check = '';
	    	$email= '';
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		    $first_name= $_POST['first_name'];
	    	$last_name= $_POST['last_name'];
	    	$password= $_POST['password'];
	    	$password_check = $_POST['password_check'];
	    	$email= $_POST['email'];	    	
	    }	
	    // if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==false) {
	    //   	$errors='Email is not valid!';	      
	    if (login_email_exists($email)==true) {
			$errors = 'This email is already in use! Please enter another!';
		}elseif(strlen($password)  < 6 && strlen($password_check) > 32 ){
			$errors = 'Password must be at least 6 or maximum 32 characters';
		}elseif($password!=$password_check){
			$errors='The password doesn\'t match!';
		}	
	    if (empty($_POST)===false&& empty($errors)==true) {
	  //   	$fields=array(
			//  'first_name' =>$_POST['first_name'],
			//  'last_name' =>$_POST['last_name'],
			//  'password' =>$_POST['password'],
			//  'email'=>$_POST['email']
			// );
			// echo register_user($fields);		
	    	$first_name= $_POST['first_name'];
	    	$last_name= $_POST['last_name']; 
	    	$password= md5($_POST['password']);
	    	$email= $_POST['email'];
            register_user2($first_name,$last_name,$password,$email);
            echo "<p style='font-weight:bold;color:red;'>You are successfully registered. Thank you</p>";
	    }elseif(empty($errors)==false){
	    	print_r($errors);
	    }
 ?>
<?php include('widgets/registration_widget.php');?>
</div>   
<?php require("../includes/overall/footer.php");?>