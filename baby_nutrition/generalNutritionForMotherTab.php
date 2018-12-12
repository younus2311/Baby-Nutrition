<!---------Comment-holder DIV---------->
<div class="comment-holder" style="float:left;margin-top: 20px;margin-left: -27px;">
	<?php
		$questionSelect = "SELECT * FROM nutrition_for_mother ORDER BY id DESC";
		$resultQuestionSelect = mysqli_query($connection,$questionSelect);
		
		while($row = mysqli_fetch_assoc($resultQuestionSelect)) {
	?>
			<div class="comments" style="float:left; width:750px; border:2px solid black; margin-bottom:8px;margin-left: 85px;">
				<strong style="font-size:17px;float: left; width:740px;"><?php echo $row["pat_name"]; ?></strong>
				<span style="float: left; width:745px;"><strong style="color:red; margin-right:5px;">প্রশ্ন:</strong>
				<?php echo $row["question"]; ?></span>
                
				<?php if($row["answer"] != NULL) { ?>
					<strong style="font-size:17px; width:745px;"><?php echo $row["doc_name"]; ?></strong>
					<span style="float:left; width:745px"><strong style="color:green; margin-right:5px;">উত্তর:</strong>
					<?php echo $row["answer"]; ?></span>
				<?php } ?>
				
			</div><!--------comments---------->
	
	<?php
		}//-----while($row = mysqli_fetch_assoc($result))
	?>
</div><!------comment-holder--------->