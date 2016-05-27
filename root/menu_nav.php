<?php include('../includes/users/session.php');?>
<?php 
  $page_id='';
  if(isset($_GET['id'])){
  $page_id = $_GET['id'];
 }
?>
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
    <?php if(logged_in()==true){
    	   $session= '';
         if(!empty($_SESSION['user_id'])){$session= $_SESSION['user_id'];}
         echo get_name_by_session($session);
         echo "<p class='p' style='float:right;font-weight:bold;color:white;'><a href='logout.php'>Log Out</a></p>";
     }
    	?>
</div><!--/.nav-collapse -->