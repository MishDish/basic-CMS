<?php include('../../includes/users/session.php');?>
<?php
$notifications=array();

echo $file = $_FILES['file']['name'];
// $size=  $_FILES['file']['size'];
 $tmp_name=$_FILES['file']['tmp_name'];
if(isset($file)){
	if(!empty($file)){ 
     $folder="../../images/";
     if(move_uploaded_file($tmp_name,$folder.$file)){
     	redirect_to('../home.php?id=4');
     }else{
     	echo "Something is wrong";
     }
	}else{
	$notificatons[]= "Please choose an image";
}
}
?>	
