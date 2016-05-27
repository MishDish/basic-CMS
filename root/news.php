<?php require("../includes/overall/header.php");?>
<?php require ("../includes/users/connect.php");?>
<script type="text/javascript" src="javascript/jquery-2.0.3.min.js"></script>
<link rel="stylesheet" href="javascript/nivo-slider/nivo-slider.css" type="text/css" />
<link rel="stylesheet" href="javascript/nivo-slider/themes/default/default.css" type="text/css" />
<script type="text/javascript" src="javascript/nivo-slider/jquery.nivo.slider.js"></script>


<div class="member_content">   
<?php 
$page_id='';
if(isset($_GET['id'])){
$page_id = $_GET['id'];}
echo get_content_by_id($page_id); 

if(isset($_SESSION ['user_id'])){
	if($page_id==2){
	$articles = mysqli_query($mysqli,"select *  from news");
	while($post = mysqli_fetch_array($articles)){
	echo "<div style='border:1px solid gray; width:auto; margin:20px 20px 20px 20px;padding:10px;'><span style='float:right;font-weight:bolder;color:#1E90FF; text-decoration:underline;'>Posted: {$post['Time']}</span><h4 style='float:left;font-weight:bold;'>{$post['Title']}</h4><p style='clear:both;text-align:justify;'>{$post['Content']}</p></div>";
	} 
    }elseif($page_id==3){
    	
	echo "<div style='width:680px;height:280px; margin:100px auto 0px auto;'class='slider-wrapper theme-default'>";
    echo  "<div class=\"ribbon\"></div>";
    echo  "<div style='width:680px;height:280px;' id='slider' class='nivoSlider'>";
    $dir = "images/";
		if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
             //echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
             // if($file !=="."||$file !==".."){
             // 	continue;
             // }
             echo "<img src='images/{$file}'/>";            
          }
        closedir($dh);
       }
     }else{
    	echo "not ok";
       }
   echo  "</div>";
   echo "</div>";
               	  
    }
 }
?>	
<script type="text/javascript" >
$("#slider").nivoSlider();
</script>

</div>
<?php require("../includes/overall/footer.php");?>