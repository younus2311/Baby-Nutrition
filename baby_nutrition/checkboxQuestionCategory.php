<!-----Starting SESSION--------->
<?php session_start(); ?>

<!-------If disease is checked------>
<?php 
	if(isset($_POST["checkboxSubmit"])) {  
	
		if(isset($_POST["disease"])) { 
			$_SESSION["disease"] = "disease";
		}
		else {
			$_SESSION["disease"] = "";
		}
		
		if(isset($_POST["nfb"])) { 
			$_SESSION["nfb"] = "nfb";
		}
		else {
			$_SESSION["nfb"] = "";
		}
		
		if(isset($_POST["hom"])) { 
			$_SESSION["hom"] = "hom";
		}
		else {
			$_SESSION["hom"] = "";
		}
		
		if(isset($_POST["nfm"])) { 
			$_SESSION["nfm"] = "nfm";
		}
		else {
			$_SESSION["nfm"] = "";
		}
		
		header("location: patientForum.php");
	}//-----if(isset($_POST["checkbox"]) && isset($_POST["disease"]))------->
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>

<body>

<!------Carousel Slide--------->
<?php include_once("header.php"); ?>

<!-------Including Sidebar------->
<?php include_once("sideBar.php"); ?>

<!--------Question Category Checkbox-------->
<div class="checkboxes" style="float:left; margin: 50px 0px 0px 310px;">

	<strong style="float: left;margin-left: -75px;">প্রশ্ন করার জন্য নিচের যেকোন একটি চেকবক্স নির্বাচন করুন </strong><br/>
    <strong style="float: left;margin-left: -75px;">যদি কোন প্রশ্ন করতে না চান শুধুমাত্র "GO" ক্লিক করুন: </strong><br/><br/>
    
	<form action="checkBoxQuestionCategory.php" method="post">
        <input type="checkbox" name="disease" value="disease"> রোগ<br/><br/>
        <input type="checkbox" name="nfb" value="nfb"> শিশুর পুষ্টি<br/><br/>
        <input type="checkbox" name="hom" value="hom"> মায়ের স্বাস্থ্য<br/><br/>
        <input type="checkbox" name="nfm" value="nfm"> মায়ের পুষ্টি<br/><br/>
        
        <input class="btn btn-primary btn-md" style="height:40px; width:115px;" type="submit" name="checkboxSubmit" value="GO"><br/><br/>
	</form>
    
</div><!-------Checkboxes DIV--------->

</body>
</html>