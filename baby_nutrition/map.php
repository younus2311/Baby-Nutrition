<?php include_once("mapSearch.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hospital Maps</title>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB_q5OQblNFn9uGd2XfIYqO2y_RrmgcsJU&sensor=false">
</script>

<script type="text/javascript">
	function initialize() {
		var latlng = new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $long; ?>);
		var myOptions = {
			zoom:15,
			center:latlng,
			mapTypeId:google.maps.MapTypeId.ROADMAP		
		};
		
		var map = new google.maps.Map(document.getElementById("map_canvas"),
		myOptions);
		
		var point = new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $long; ?>);
		var marker = new google.maps.Marker({
			position:point,
			map:map,
			title:'<?php echo $hospital; ?>',
			draggable:true,	
		})
	}
</script>

<!--------Bootstrap CSS---------->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>

<body onLoad="initialize()">

	<!-------Carousel Slide and menu-bar--------->
	<?php include_once("header.php"); ?>
	
    <?php include_once("sideBar.php"); ?>
    
    <div style="float:left; height:334px; width:290px; border:1px solid black;margin-top: 356px;margin-left: -288px; background-image:url(image/smallLoginBackGround.jpg); background-size:cover; background-repeat:no-repeat;">
        	<form action="babyNutrition.php" method="post" style="float:left; margin-left:30px;">
            
                <strong style="float:left; margin-bottom:10px; width:100%;color: whitesmoke;">লগইন করুনঃ</strong><br/>
                
                <strong style="color: whitesmoke;">ইউজারনেমঃ</strong><br/>
                
                <input type="text" name="username" value=""><br/>
                
                <strong style="color: whitesmoke;">পাসওয়ার্ডঃ</strong><br/>
                
                <input type="password" name="pass" value="" style="margin-top:5px;"><br/>
                
                <input class="btn btn-primary btn-sm" type="submit" name="submit" value="লগইন" style="margin-top: 5px;margin-left: 133px;"><br/>
                
			</form>
            
            <div style="float:left; margin-left:30px;">
            
                <strong style="width:100%; float:left; margin-bottom:5px;color: whitesmoke;">বিজ্ঞাপন:</strong>
                
                <img src="image/ad1.jpg" style="width:264px; height:135px;    margin-left: -18px;">
                
            </div>
        
        </div> 
	
    <div style="float:left;margin-left: 242px;">
        	<h2    style="font-size: 33px;color: maroon;">নিকটতম হাসপাতালের অনুসন্ধানঃ </h2>
     </div>
    <!----------Google Map Search DIV----------->
    <div class="map-search" style="float:left;width:890px; height:600px;margin-top: 24px;margin-left: 15px; border-radius:15px;margin-bottom: -45px;">
        <form style="float:left;margin-top: -20px;margin-left: 470px;margin-bottom: 5px;" action="map.php" method="get">
            <input style="float:left; width:300px; height: 30px;border: 1px solid black;border-radius: 5px;margin-left: 31px;" type="search" name="m">
            <input name="map" class="btn btn-primary btn-md" type="submit" value="Search" style="margin-left: 5px;height: 31px; float:left;">
        </form>
        
        <!---------Google Map Division------------>
        <div id="map_canvas" style="width:880px; height:585px; float:left; border-radius:15px;">
        </div>
    
    </div>
        
    <?php include_once("footer.php"); ?>