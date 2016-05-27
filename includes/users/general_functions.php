<?php

function login_email_exists($email){
	global $mysqli;
	if(!$query = $mysqli->prepare("SELECT COUNT(`user_id`) FROM  users WHERE email = ?")) {
	trigger_error($mysqli->error);
	}
	$query->bind_param('s',$email);
	$query->execute();
	$query->bind_result($count);
	$query->fetch();
	return ($count == 1) ? true : false;
	}

function user_active($email){
   global $mysqli;
   if(!$query = $mysqli->prepare("SELECT COUNT(`user_id`) FROM  users WHERE email = ? and active = 1")) {
	 trigger_error($mysqli->error);
	}
   $query -> bind_param('s',$email);
   $query-> execute();
   $query -> bind_result($count);
   $query -> fetch();
   return ($count== 1)?true : false;
}


function user_id_from_email($email){
    global $mysqli;
    $mysqli->real_query("SELECT `user_id` 
    	                FROM  users WHERE email ='$email'") 
                        or die("couldn't be done!");
	$id = $mysqli->store_result();
	while($niz=$id->fetch_array()){
		return $niz['user_id'];
	}   
}

function login($email,$password){
	global $mysqli;
	$user_id = user_id_from_email($email);
	$user_pass = md5($password);
	if(!$query = $mysqli->prepare("SELECT COUNT(`user_id`) FROM  users WHERE email = ? and password =?")) {trigger_error($mysqli->error);}
	$query -> bind_param('ss',$email,$password);
	$query-> execute();
	$query -> bind_result($count);
	$query -> fetch();
	return ($count == 1)? $user_id : false;
}


 function logged_in(){
	return (isset($_SESSION['user_id']))? true : false;
 	
 	
 }

 function output_errors($errors){
 		$output = array();
 		foreach($errors as  $error) {
 			echo "<p id='errors'>".$error."<p>";
 		}
 }
 function output_notifications($notifications){
 	$output = array();
 		foreach($notificatons as  $noti) {
 			echo "<p id='errors'>".$noti."<p>";
 		}

 }
 /*function array_sanatize(&$item){
 	global $mysqli;
 	$item = mysqli_real_escape_string($mysqli,$item);
 }	

 function register_user($fields){
 	global $mysqli;
 	array_walk($fields,'array_sanatize');
 	$fields['password']=md5($fields['password']);
 	$register='`'. implode('`, `',array_keys($fields)).'`';
 	$data='`'. implode('`, `',$fields).'`';
 	mysqli_query($mysqli,"insert into users ($register) values ($data)")or die('error');
 }*/

 function register_user2($name,$surname,$password,$email){
 	global $mysqli;	
 	mysqli_query($mysqli,"insert into users (`first_name`,`last_name`,`email`,`password`) values ('$name','$surname','$email','$password')")or die('error');   
 	}


function get_name_by_session($session){
	global $mysqli;      
  $name = mysqli_query($mysqli,"select first_name from users where user_id='$session'") or die('error');
	while($row=mysqli_fetch_array($name)){
   echo 'Hi, '.$row['first_name'];
   }	
}

/*function user_data($user_id){
	global $mysqli;
	$data = array();
	$func_num_args= func_num_args();
	$func_get_args = func_get_arg();

	if ($func_num_args>1) {
		unset($func_get_args(0));
		$data_fields='`' . implode('`, `',$func_get_args) . '`';
		$data = mysqli_fetch_assoc(mysqli_query($mysqli,"select $data_fields from  users where `user_id`=$user_id"));
	}
}*/

function member_is_admin($email){
   global $mysqli;
   if(!$query = $mysqli->prepare("SELECT COUNT(`user_id`) FROM  users WHERE email = ? and roles = 'admin'")) {
   trigger_error($mysqli->error);
     }
   $query -> bind_param('s',$email);
   $query-> execute();
   $query -> bind_result($count);
   $query -> fetch();
   return ($count== 1)?true : false;
 }

function get_content_by_id($page_id){
	global $mysqli;
	$query = mysqli_query($mysqli,"select content from pages where page_id='$page_id' ") or trigger_error('Problem occured
		!');
	if($content = mysqli_fetch_assoc($query)){
		return $content ['content'];
		}else{
			return NULL;
		}	

}
function get_content_by_id_admin($page_id){
	global $mysqli;
	global $content;
	$query = mysqli_query($mysqli,"select content from a_pages where page_id='$page_id' ") or trigger_error('Problem occured
		!');
	if($content = mysqli_fetch_assoc($query)){
		return  $content ['content'];
		}else{
			return NULL;
		}	
  }  

function add_article($title,$content){
	global $mysqli;
	$grr =removeApostrophe(orginalText($content)); 
	$query = mysqli_query($mysqli,"insert into news (`Title`,`Content`) values('$title','$grr')");
	if($query){
		redirect_to('../home.php?id=3');
	}else{
		echo "<p>Article creation failed!</p>";
		echo "<p>".mysqli_error()."</p>";

	}
}

function redirect_to( $location = NULL ) {
		if ($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

 function orginalText($string) {
 		$string=removeApostrophe($string);
	    $string = str_replace('<br />', '', $string);
	    $output = nl2br($string);
	    return $output;	 
	}
function removeApostrophe($string){
	$string = str_replace("'","",$string);
	return $string ;

}
function insert_new_user($name,$surname,$email,$password,$active,$role){
	global $mysqli;
	$password=md5($password);
   $query = mysqli_query($mysqli,"insert into users (`first_name`,`last_name`,`email`,`password`,`active`,`roles`) values ('$name','$surname','$email','$password','$active','$role')") or trigger_error('Sorry!Problem occured!'); 
  if(!$query==0){
  	redirect_to('../home.php?id=1');
  }else{
  	echo "<p>Something is wrong</p>";
  }
} 
?>


