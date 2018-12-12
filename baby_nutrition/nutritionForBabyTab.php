<!---------Inserting Questions into database--------->
<?php
	if(isset($_POST["questionNfb"])) {
		$pat_name = $_SESSION["username"];
		$question = $_POST["question"];
		$question = mysqli_real_escape_string($connection,$question);
		
		$insertNfb = "INSERT INTO nutrition_for_baby (pat_name,question) ";
		$insertNfb .= "VALUES ('{$pat_name}' , '{$question}')";	
		
		$result = mysqli_query($connection,$insertNfb);
		header("location: patientForum.php");
	}
?>

<!-------If disease is checked------>
<?php if($_SESSION["nfb"] == "nfb") { ?>
		
	<!----------Qusetion Box---------->
	<form class="question" style="float:left;margin-top: 43px;margin-left: 55px;" action="patientForum.php" method="post">
	
		<strong style="float:left;">প্রশ্ন:</strong> <textarea name="question" style="background-color: black; float:left;margin-left: 8px;margin-top: 5px;width: 635px;height: 89px;"></textarea>
		<br/><br/><br/><br/>
		<input class="btn btn-primary btn-md" style="float:left; margin-left:625px;" type="submit" name="questionNfb" value="প্রশ্ন">
	</form>
		
<?php } ?> <!-----if($_SESSION["nfb"] == "nfb")------->

<!---------Comment-holder DIV---------->
<div class="comment-holder" style="float:left;margin-top: 20px;margin-left: -27px;">
	<?php
		$questionSelect = "SELECT * FROM nutrition_for_baby ORDER BY id DESC";
		$resultQuestionSelect = mysqli_query($connection,$questionSelect);
		
		while($row = mysqli_fetch_assoc($resultQuestionSelect)) {
	?>
			<div class="comments" style="float:left; width:750px; border:2px solid black; margin-bottom:8px;margin-left: 85px;">
				<strong style="font-size:17px;float: left; width:740px;"><?php echo $row["pat_name"]; ?></strong>
				<span style="float: left; width:745px;"><strong style="color:red; margin-right:5px;">প্রশ্ন:</strong>
				<?php echo $row["question"]; ?></span>
                
				<?php if(!$row["answer"] == NULL) { ?>
					<strong style="font-size:17px; width:745px;"><?php echo $row["doc_name"]; ?></strong>
					<span style="float:left; width:745px"><strong style="color:green; margin-right:5px;">উত্তর:</strong>
					<?php echo $row["answer"]; ?></span>
				<?php } ?>
				
			</div><!--------comments---------->
	
	<?php
		}//-----while($row = mysqli_fetch_assoc($result))
	?>
</div><!------comment-holder--------->