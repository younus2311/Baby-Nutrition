<!------Starting SESSION----------->
<?php session_start(); ?>
<!-------Database Connection------->
<?php include_once("dbConnector.php"); ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Replied</title>
<link rel="stylesheet" type="text/css" href="CSS/styleTestForum.css">
</head>

<body>

<!-------Including Carousel Slide------->
<?php include_once("header.php"); ?>

<!---------Including Side Bar------------>
<?php include_once("sideBar.php"); ?>

	<!--------Content DIV-------->
    <div class="content" style="float: left;width: 915px; min-height:500px; border: 2px solid black;margin-left: 13px;margin-top: 11px; background-image:url(image/logInBackGround.jpg); background-repeat:no-repeat; background-size:cover; color:white;">
    
    	<!-------Username-------->
    	<div class="username" style="float: left;font-size: 40px; width:440px; font-family: fantasy;color: seashell; font-weight:bold;">
		<?php echo $_SESSION["username"]; ?></div>
    
    	<!--------LogOut Button---------->
        <a style="float:left;margin-left: 385px;" class="btn btn-primary btn-md" href="logout.php">লগআউট</a>
        
        <!-------Tabbable-Menu------->
        <div class="tabbable-menu" style="float: left;width: 910px;margin-top: 17px;">
        
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a style="margin-left:380px;" href="#disease" aria-controls="disease" role="tab" data-toggle="tab">রোগ</a></li>
                
                <li role="presentation"><a href="#nutritionForBaby" aria-controls="nutritionForBaby" role="tab" data-toggle="tab">শিশুর পুষ্টি</a></li>
                <li role="presentation"><a href="#healthOfMother" aria-controls="healthOfMother" role="tab" data-toggle="tab">মায়ের স্বাস্থ্য</a></li>
                <li role="presentation"><a href="#nutritionForMother" aria-controls="nutritionForMother" role="tab" 
                data-toggle="tab">মায়ের পুষ্টি</a></li>
            </ul>
            
            <!-- tab-content DIV -->
            <div class="tab-content" style="float:left;">
            
            	<!-------disease Tab-------->
                <div role="tabpanel" class="tab-pane active" id="disease">
                	<?php include_once("repliedDiseaseTab.php"); ?>
                </div><!------Disease id DIV------>
                
                <!-----NutritionForBaby Tab------>
                <div role="tabpanel" class="tab-pane" id="nutritionForBaby">
                	<?php include_once("repliedNutritionForBabyTab.php"); ?>
                </div>
                
                <!-----HealthOfMother Tab------>
                <div role="tabpanel" class="tab-pane" id="healthOfMother">
                	<?php include_once("repliedHealthOfMotherTab.php"); ?>
                </div>
                
                <!-----NutritionForBaby Tab------>
                <div role="tabpanel" class="tab-pane" id="nutritionForMother">
                	<?php include_once("repliedNutritionForMotherTab.php"); ?>
                </div>
                
        	</div><!------tab-content DIV-------->
        
        </div><!-------tabbable-menu------->
        
    </div><!------Content DIV------>

</body>
</html>