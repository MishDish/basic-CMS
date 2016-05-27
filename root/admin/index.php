<?php include('overall/header.php');?>
<?php include('login_process.php');?>
<body class='body'>
<div class='admin_header'>
	<form class='admin_form' action='' method='POST'>
		<input style='width:200px;height:25px;' type='text' name='email' placeholder='Your email'/>
		<input style='width:200px;height:25px;'type='password' name='password' placeholder='Your Password'/>
		<input type='submit' name='submit' value='Log in'>
		<label style='color:white; margin-top:10px;'>Not an administrator?Please log in as a user <a style='color:red;'href='../index.php'>here!</a></label>
	</form>	
</div>
<div class='sidebar'>		
</div>
<div class='admin_content'> 
 <?php    
if(empty($errors) && !empty($_POST['submit'])){
      echo "Unfortunately , we can't log you in this moment,Please try again later!";
 }else{
	  echo output_errors($errors); 
}   
?>           
</div>
<?php include('overall/footer.php');?>