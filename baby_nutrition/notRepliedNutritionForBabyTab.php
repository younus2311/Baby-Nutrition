<!-------Inserting Answer in Nfb--------->
<?php
	if(isset($_POST["answerNfbSubmit"])) {
		$doc_name = $_SESSION["username"];
		$answerNfb = $_POST["answerNfb"];
		$answerNfb = mysqli_real_escape_string($connection,$answerNfb);
		$idNfb = $_POST["idNfb"];
		
		$updateAnswerNfb = "UPDATE nutrition_for_baby SET doc_name = '{$doc_name}',answer = '{$answerNfb}' WHERE id = $idNfb";
		$result = mysqli_query($connection,$updateAnswerNfb);
	}
?>

<!---------Comment-holder DIV---------->
<div class="comment-holder" style="float:left;margin-top: 20px;margin-left: -27px;">
	<?php
		$nrNfbSelect = "SELECT * FROM nutrition_for_baby ORDER BY id DESC";
		$resultNrNfbSelect = mysqli_query($connection,$nrNfbSelect);
		
		while($row = mysqli_fetch_assoc($resultNrNfbSelect)) {
	?>
    		
            <!-------if($row["answer"] == NULL)--------->
    		<?php if($row["answer"] == NULL) { ?>
            
			<div class="comments" style="float:left; width:750px; border:2px solid black; margin-bottom:8px;margin-left: 85px;">
            	
                	
					<?php $id=$row["id"]; ?>
                    <strong style="font-size:17px;float: left; width:740px;"><?php echo $row["pat_name"]; ?></strong>
                    <span style="float: left; width:745px;"><strong style="color:red; margin-right:5px;">প্রশ্ন:</strong><?php echo $row["question"]; ?></span>
                    <!---------Reply Button------->
                    <div style="float:left; width:700px;"><button style="float:left; margin-bottom:3px;" class="btn btn-primary btn-xs" id="nfbReply<?php echo $id; ?>">রিপ্লাই</button></div><br/>
                    
                    <!-----jQuery to SlideToggle answer Box----->
                    <script>
                        $(document).ready(function() {
                            $("#nfbReply<?php echo $id; ?>").click(function(){
                                $("#nrAnswerNfb<?php echo $id; ?>").slideToggle("slow");
                            });
                        });
                    </script>
                    
                    <!-----Doctor Answer Box------->
                    <form style="float:left; display:none;" action="notReplied.php" method="post" id="nrAnswerNfb<?php echo $id; ?>" >
                        <textarea style="width: 690px;color:black; float:left;margin-top: 0px; margin-left: 0px; height: 25px;" name="answerNfb" type="text" value=""></textarea>
                        <input style="width: 45px;height: 24px;float: left;font-size: 12px;margin-left: 3px;padding: 0px;border-radius: 0px;" class="btn btn-success" type="submit" name="answerNfbSubmit" value="উত্তর">
                        <input type="hidden" name="idNfb" value="<?php echo $id; ?>" >
                    </form>
				
			</div><!--------comments DIV---------->
            
            <?php }//-------if($row["answer"] == NULL)------ ?>
	
	<?php
		}//-----while($row = mysqli_fetch_assoc($result))
	?>
</div><!------comment-holder--------->

