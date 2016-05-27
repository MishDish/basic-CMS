<?php
if(empty($_POST)==false){
  $email=$_POST['email'];
  $password =md5($_POST['password']);
if(empty($email)==true || empty($password)== true){
  $errors[]='You need to enter email and password!'; 
 }elseif(login_email_exists($email)==false){
  $errors[]= 'You are not registered .Please register!';		
 }elseif(user_active($email)==false){
	$errors[] = 'You haven\'t activated your account!';
 }else {
	  $login=login($email,$password);
	  if($login==false){
		$errors[]='Incorrect email or password / or combinaton of them!';		
        }else {
          $_SESSION['user_id']= $login;
          header("Location:news.php?id=2");
    	    exit();    	
     }
}
}
?>
