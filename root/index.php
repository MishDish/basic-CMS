<?php require("../includes/overall/header_index.php");?>
<?php require ("../includes/users/connect.php");?>
<?php include("login_processor.php");?>
<div class="content">
    <?php
     
     if(empty($errors) && !empty($_POST['submit'])){
          echo "Unfortunately , we can't log you in this moment,Please try again later!";
     }else{
    	  echo output_errors($errors); 
    }
    ?> 
    <?php include('widgets/login.php');?>
   

</div>
<?php require("../includes/overall/footer.php");?>