<?php include('../../../includes/users/session.php');?>
<?php 
$fields=array('title','content');
foreach ($fields as  $field) {
if(!isset($_POST[$field])|| empty($_POST[$field])){
	$errors[]=$field;
}
}
if(!empty($errors)){
	redirect_to('../home.php?id=3');
}
$title = $_POST['title'];
$content = $_POST['content'];
add_article($title,$content);  
?>	
<?php $mysqli->close(); ?>

  