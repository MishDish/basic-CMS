<?php include('overall/header.php');?>
 <?php  
 // include('overall/news.php');?>
<?php $page_id=''; (isset($_GET['id']))?$page_id = $_GET['id'] : null;
?>
<body class='body'>
	<div class='admin_header'>
		<?php 
		   if(logged_in()==true){
              $session= '';
             if(!empty($_SESSION['user_id'])){$session= $_SESSION['user_id'];}             
             echo "<p class='p'style='color:white;float:right;margin:23px 70px 0px 0px; font-weight:bold;'>";echo get_name_by_session($session)." ";echo "<a style='color:#FF0000;' href='logout.php'>Log Out</a></p>";
             }
          ?> 
	</div>
	<div class='sidebar'>	 
	  <nav class="vnav">
       <ul class="vnav-menu">
    <?php    
  // preuzimanje strane iz baze:

    $pages =mysqli_query($mysqli,'select * from a_pages') or trigger_error('Sorry!Problem occured!');
    while($page = mysqli_fetch_assoc($pages)){         
    echo "<li"; if($page_id==$page['page_id']){echo " class='active'";}echo"><a href=\"home.php?id={$page['page_id']}\" class=\"vnav-item\"><i class=\"icon-friends\"></i>{$page['title']}<span class=\"vnav-counter\">{$page['page_id']}</span></a></li>  "; 
    }       
    ?>      	 
       </ul>
	   </nav>
     </div>	
	<div class='admin_content'> 
    <p></p>
	<?php if(isset($_SESSION['user_id'])){
      echo get_content_by_id_admin($page_id);
      if($page_id==3){
        if(isset($_GET['del'])) {
         $delete_post = $_GET ['del'];
         mysqli_query($mysqli,"DELETE FROM news WHERE post_id= $delete_post");
          }
          echo "<table style='margin:100px 20px 0px 0px;float:right;border:1px solid black;width:700px;float:right;'>";
          echo "<tr>";
          echo "<th style='border:1px solid black;'>Title</th>";
          echo"<th style='border:1px solid black;'>Content</th>";
          echo "</tr>";
      $news =mysqli_query($mysqli,'select * from news') or trigger_error('Sorry!Problem occured!');   
      while($article = mysqli_fetch_assoc($news)){  
            echo "<tr>
                  <td align='center' style='border:1px solid black;'>{$article['Title']}</td>
                  <td  align='center' style='border:1px solid black;'>{$article['Content']}<td/>
                  <td  align='center' style='border:1px solid black;'><a href='?id={$page_id}&&del={$article['post_id']}'>Delete</a></td>
                 </tr>";
            }
         echo "</table>";                           
      }elseif($page_id==1){               
         if(isset($_GET['del'])) {
         $delete_user = $_GET ['del'];
         mysqli_query($mysqli,"DELETE FROM users WHERE user_id= $delete_user");
          }
          echo "<table style='margin:50px 50px 0px 50px;float:left;border:1px solid black;width:800px;'>";
          echo "<tr>";
          echo "<th style='border:1px solid black;'>Id</th>";
          echo"<th style='border:1px solid black;'>First Name</th>";
          echo"<th style='border:1px solid black;'>Last Name</th>";
          echo"<th style='border:1px solid black;'>Email</th>";
          echo"<th style='border:1px solid black;''>Password</th>";
          echo"<th style='border:1px solid black;'>Active</th>";
          echo"<th style='border:1px solid black;'>Roles</th>";
          echo "</tr>";
          echo "</table>";

          echo "<table style='margin:10px 50px 0px 50px;float:left;border:1px solid black;width:800px;'>";
        $users =mysqli_query($mysqli,'select * from users') or trigger_error('Sorry!Problem occured!');   
      while($user = mysqli_fetch_assoc($users)){  
            echo "<tr>
                  <td align='center' style='border:1px solid black;'>{$user['user_id']}</td>
                  <td  align='center' style='border:1px solid black;'>{$user['first_name']}<td/>
                  <td  align='center' style='border:1px solid black;'>{$user['last_name']}<td/>
                  <td  align='center' style='border:1px solid black;'>{$user['email']}<td/>
                  <td  align='center' style='border:1px solid black;'>{$user['password']}<td/>
                  <td  align='center' style='border:1px solid black;'>{$user['active']}<td/>
                  <td  align='center' style='border:1px solid black;'>{$user['roles']}<td/>
                  <td  align='center' style='border:1px solid black;'><a href='?id={$page_id}&&del={$user['user_id']}'>Delete</a></td>                 
                 </tr>";                
            }
         echo "</table>";          
       }elseif($page_id==4){    
       //   upload images process :        
        if(isset($_FILES['file']['tmp_name'])) {
          $file = $_FILES['file']['name'];          
       }             
         // $size=  $_FILES['file']['size'];       
        if(isset($file)){
        if(!empty($file)){  
          $tmp_name=$_FILES['file']['tmp_name'];
           $folder="../images/";
           if(move_uploaded_file($tmp_name,$folder.$file)){
            echo "Successfully uploaded !";
           }else{
            echo "Something is wrong !";
           }
        }else{
            echo"Please choose an image to upload!";      
        }
        }
 //  end of the form !
       }
      }
   ?>
	</div>
<?php include('overall/footer.php');?>