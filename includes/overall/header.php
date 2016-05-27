<?php include('../includes/users/session.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web</title>

  <!-- Bootstrap -->
  <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
   <link href="css/bootstrap.min.css" rel="stylesheet">   
   <link href="css/form.css" rel="stylesheet" />   
   <link href="css/layout.css" rel="stylesheet" />   
<?php 
  //  preuzimanje varijable 'id' iz url-a:
  $page_id='';
  if(isset($_GET['id'])){
  $page_id = $_GET['id'];
 }
?>
</head>
<body class='body'>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation"> 
      <?php 
            if(logged_in()==true){
             $session= '';
             if(!empty($_SESSION['user_id'])){$session= $_SESSION['user_id'];}             
             echo "<p class='p'style='color:white;float:right;margin-right:70px; font-weight:bold;'>";echo get_name_by_session($session)." ";echo "<a href='logout.php'>Log Out</a></p>";
             }
          ?>
      <!-- <p class='p'style='color:white;float:right;margin-right:100px;'>jauj</p>      -->
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>         
          <a class="navbar-brand" href="#">Web</a>        
        </div>

     <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">  
         <?php    
          // preuzimanje strane iz baze:
         $pages =mysqli_query($mysqli,'select * from pages') or trigger_error('Sorry!Problem occured!');
         while($page = mysqli_fetch_assoc($pages)){         
           echo"<li"; if($page_id== $page['page_id']){ echo " class=\"active\"";} 
           echo"><a href=\"news.php?id={$page['page_id']}\">{$page['page_name']}</a></li>";      
            }       
        ?>    
        </ul>     
       </div><!--/.nav-collapse -->
         
      </div>
</div>