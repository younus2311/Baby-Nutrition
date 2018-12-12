<?php session_start(); ?>
<?php include_once("header.php"); ?>
<?php include_once("sideBar.php"); ?>
<!------------Starting SESSION----------->

<?php
	$con = mysqli_connect("localhost","root","","baby_nutrition");
	
	$occ = $_SESSION["occ"];
	if($occ == "2" && isset($_POST["question"])) {
		$name = $_SESSION["username"];
		$comment = $_POST["comment"];
		$comment = mysqli_real_escape_string($con,$comment);
		
		if($name && $comment) {
			$insert = "INSERT INTO comment (name,comment) VALUES ('{$name}','{$comment}')";	
			mysqli_query($con,$insert);
			//header("location: forum.php");
			//exit;
		}
		
		else {
			echo "PLease Fill up all the fields";	
		}
	}
?>

<?php
	
	$occ = $_SESSION["occ"];
	if($occ == "1" && isset($_GET["answer"])) {
		$id = $_GET["id"];
		$txtans = $_GET["txtans"];
		$doc_name = $_SESSION["username"];
		if($txtans) {
			$insertques = "UPDATE comment SET answer='{$txtans}',doc_name='{$doc_name}' WHERE id=$id";
			mysqli_query($con,$insertques);
			header("location: forum.php");
			exit;
		}
	}
	
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comment</title>

<!--------------Bootstrap CSS------------>
<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap-theme.min.css">

<!-------------Bootstrap JS------------->
<script src="Assets/js/jquery-1.12.0.min.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>

</head>

<body style="background-color:grey;">
	<div style="float:left; font-size: 35px; font-family: cursive; width:700px;">
    	<?php echo $_SESSION["username"]; ?>
    </div>
    
    <!--------LogOut Button--------->
    <a style="float:left;" class="btn btn-danger btn-md" href="logout.php">Logout</a>
    
    <!-------Question Form----------->
    
    <?php if($_SESSION["occ"] == 2) { ?>
        <form class="col-lg-12" style="float:left;margin-left: 304px;" action="forum.php" method="post">
            <!--<span style="float:left;">Name:</span> <input type="text" name="name" value="" style="float:left;"><br/><br/>-->
            <span style="float:left;">Question:</span> <textarea name="comment" style="float:left;height:85px; width:600px;"></textarea><br/><br/><br/><br/>
            <input class="btn btn-primary btn-md col-lg-offset-6" style="float:left" type="submit" name="question" value="Question">
        </form>
    <?php } ?>
    
    <!-----------COMMENT-BOXES DIV---------->
    <div class="comment-boxes" style="width:900px; margin-left:245px;" style="float:left">
	<?php
	
		$select = "SELECT * FROM comment ORDER BY id DESC";
		$result = mysqli_query($con,$select);
		
		while($row = mysqli_fetch_assoc($result)) {
				$id = $row["id"];
	?>
    		
    <div style="margin-bottom: 5px;margin-left: 74px;width:900px; float:left; min-height:125px; border:2px solid blue; border-radius: 16px;">
		<?php
				echo "<strong style='font-size:17px;margin-left: 11px;float: left;'>".$row["name"]."</strong><br/><br/>";
                echo "<span style='float: left;margin-left: 12px;'><strong>Question:</strong> ".$row["comment"]."</span>"."<br/><br/>";
				//echo "<a class='btn btn-primary btn-xs' href='deleteComment.php?id=$id' style='float: left; margin-left:13px;'>Delete</a><br/><br/>";
				echo "<strong style='font-size:17px;margin-left: 11px;float: left; width:850px;'>".$row["doc_name"]."</strong><br/><br/>";
				if(!$row["answer"] == NULL) {
					echo "<span style='margin-left:12px; float:left; width:850px'><strong>Answer:</strong> ".$row["answer"]."</span><br/><br/>";
				}
        ?>
        
        <!--------Reply Box For doctors------->
        
        <?php if($_SESSION["occ"] == 1 && $row["answer"] == NULL) {?>
            <form action="forum.php" method="get">
                <strong style="margin-left:12px; float:left; width:850px;">Answer:</strong> <textarea name="txtans" rows="2" style="margin-left:12px;width:850px; float:left; border:2px solid blue; border-radius: 12px;" placeholder="Put your answer"></textarea><br/>
                <input class="btn btn-success btn-sm" style="float:left;margin-left: 800px;" type="submit" name="answer" value="answer">
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
            </form>
        <?php } ?>
    </div><br/><br/>
    
    <?php
		} /************while loop************/
	?>
    </div>
    
</body>
