<!DOCTYPE html>
<html>
<head>
	<title>Slider</title>
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/html-elements.css">
<script type="text/javascript" src="javascript/jquery-2.0.3.min.js"></script>
<link rel="stylesheet" href="javascript/nivo-slider/nivo-slider.css" type="text/css" />
<link rel="stylesheet" href="javascript/nivo-slider/themes/default/default.css" type="text/css" />
<script type="text/javascript" src="javascript/nivo-slider/jquery.nivo.slider.js"></script>
</head>
<body>

	
<h1>Home</h1>
<div style='width:680px;height:280px;'class="slider-wrapper theme-default">
<div class="ribbon"></div>
<div style='width:680px;height:280px;' id="slider" class="nivoSlider">
<?php
$dir = "images/";
		if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
             //echo "filename: $file : filetype: " . filetype($dir . $file) . "\n";
             // if($file !="."||$file !==".."){
             // 	continue;
             // }
             echo "<img src='images/{$file}'/>";            
        }
        closedir($dh);
    }
}else{
    	echo "not ok";
    }

	?>
	<?php
	// echo "<img src='images/desert.jpg'/>";
	
	?>
	<!-- <img src="images/chrys.jpg" />
	<img src="images/hydra.jpg" /> -->
	
</div>
</div>
               
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>

</body>
</html>