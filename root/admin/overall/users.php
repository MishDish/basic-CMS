<?php include('../../../includes/users/session.php');?>
<?php 
$fields=array('name','surname','email','password','active','roles');
foreach ($fields as  $field) {
if(!isset($_POST[$field])|| empty($_POST[$field])){
	$errors[]=$field;
}
}
if(!empty($errors)){
	redirect_to('../home.php?id=1');
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password= $_POST['password'];
$active = $_POST['active'];
$role = $_POST['roles'];

insert_new_user($name,$surname,$email,$password,$active,$role);

?>	