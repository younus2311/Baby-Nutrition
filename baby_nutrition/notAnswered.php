<?php session_start(); ?>
<?php include_once("header.php"); ?>
<?php include_once("sideBar.php"); ?>
<?php $con = mysqli_connect("localhost","root","","baby_nutrition"); ?>

<?php
	
	$occ = $_SESSION["occ"];
	if($occ == "1" && isset($_GET["answer"])) {
		$id = $_GET["id"];
		$txtans = $_GET["txtans"];
		$doc_name = $_SESSION["username"];
		if($txtans) {
			$nullCheck = "SELECT answer FROM comment WHERE id=$id ";
			$resultNull = mysqli_query($con,$nullCheck);
			$row = mysqli_fetch_assoc($resultNull);
			if($row["answer"] == NULL) {
				$insertques = "UPDATE comment SET answer='{$txtans}',doc_name='{$doc_name}' WHERE id=$id";
				mysqli_query($con,$insertques);
			}
			//header("location: forum.php");
			//exit;
		}
	}
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Not Answered</title>
</head>

<body style="background-color:grey;">
	<div style="float:left; font-size: 35px; font-family: cursive; width:700px;">
    	<?php echo $_SESSION["username"]; ?>
    </div>
    
     <!--------LogOut Button--------->
    <a style="float:left;" class="btn btn-danger btn-md" href="logout.php">Logout</a>
    
     <!-----------COMMENT-BOXES DIV---------->
    <div class="comment-boxes" style="width:900px; margin-left:245px;" style="float:left">
	<?php
	
		$select = "SELECT * FROM comment ORDER BY id DESC";
		$result = mysqli_query($con,$select);
		
		while($row = mysqli_fetch_assoc($result)) {
				$id = $row["id"];
	?>
    <?php if($row["answer"] == NULL) { ?>
    	<div style="margin-bottom: 5px;margin-left: 74px;width:900px; float:left; min-height:125px; border:2px solid blue; border-radius: 16px;">
		<?php
				
					echo "<strong style='font-size:17px;margin-left: 11px;float: left;'>".$row["name"]."</strong><br/><br/>";
					echo "<span style='float: left;margin-left: 12px;'><strong>Question:</strong> ".$row["comment"]."</span>"."<br/><br/>";
					echo "<a class='btn btn-primary btn-xs' href='deleteComment.php?id=$id' style='float: left; margin-left:13px;'>Delete</a><br/><br/>";
					echo "<strong style='font-size:17px;margin-left: 11px;float: left; width:850px;'>".$row["doc_name"]."</strong><br/><br/>";
					echo "<span style='margin-left:12px; float:left; width:850px'><strong>Answer:</strong> ".$row["answer"]."</span><br/>
					<br/>";
        ?>
        <?php if($_SESSION["occ"] == 1 && $row["answer"] == NULL) {?>
            <form action="notAnswered.php" method="get">
                <strong style="margin-left:12px; float:left; width:850px;">Answer:</strong> <textarea name="txtans" rows="2" style="margin-left:12px;width:850px; float:left; border:2px solid blue; border-radius: 12px;" placeholder="Put your answer"></textarea><br/>
                <input class="btn btn-success btn-sm" style="float:left;margin-left: 800px;" type="submit" name="answer" value="answer">
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
            </form>
        <?php } ?>
        
       </div><br/><br/>
       
    <?php } ?><!-------if($row["answer"] == NULL)------->
    
    <?php
		} /************while loop************/
	?>
    </div>
</body>
</html>