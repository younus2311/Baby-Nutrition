<!-------Inserting Answer in Hom--------->
<?php
	if(isset($_POST["answerHomSubmit"])) {
		$doc_name = $_SESSION["username"];
		$answerHom = $_POST["answerHom"];
		$answerHom = mysqli_real_escape_string($connection,$answerHom);
		$idHom = $_POST["idHom"];
		
		$updateAnswerHom = "UPDATE health_of_mother SET doc_name = '{$doc_name}',answer = '{$answerHom}' WHERE id = $idHom";
		$result = mysqli_query($connection,$updateAnswerHom);
	}
?>

<!---------Comment-holder DIV---------->
<div class="comment-holder" style="float:left;margin-top: 20px;margin-left: -27px;">
	<?php
		$nrHomSelect = "SELECT * FROM health_of_mother ORDER BY id DESC";
		$resultNrHomSelect = mysqli_query($connection,$nrHomSelect);
		
		while($row = mysqli_fetch_assoc($resultNrHomSelect)) {
	?>
    		
            <!-------if($row["answer"] == NULL)--------->
    		<?php if($row["answer"] == NULL) { ?>
            
			<div class="comments" style="float:left; width:750px; border:2px solid black; margin-bottom:8px;margin-left: 85px;">
            	
                	
					<?php $id=$row["id"]; ?>
                    <strong style="font-size:17px;float: left; width:740px;"><?php echo $row["pat_name"]; ?></strong>
                    <span style="float: left; width:745px;"><strong style="color:red; margin-right:5px;">প্রশ্ন:</strong><?php echo $row["question"]; ?></span>
                    <!---------Reply Button------->
                    <div style="float:left; width:700px;"><button style="float:left; margin-bottom:3px;" class="btn btn-primary btn-xs" id="homReply<?php echo $id; ?>">রিপ্লাই</button></div><br/>
                    
                    <!-----jQuery to SlideToggle answer Box----->
                    <script>
                        $(document).ready(function() {
                            $("#homReply<?php echo $id; ?>").click(function(){
                                $("#nrAnswerHom<?php echo $id; ?>").slideToggle("slow");
                            });
                        });
                    </script>
                    
                    <!-----Doctor Answer Box------->
                    <form style="float:left; display:none;" action="notReplied.php" method="post" id="nrAnswerHom<?php echo $id; ?>" >
                        <textarea style="width: 690px;color:black; float:left;margin-top: 0px;margin-left: 0px; height: 25px;" name="answerHom" type="text" value=""></textarea>
                        <input style="width: 45px;height: 24px;float: left;font-size: 12px;margin-left: 3px;padding: 0px;border-radius: 0px;" class="btn btn-success" type="submit" name="answerHomSubmit" value="উত্তর">
                        <input type="hidden" name="idHom" value="<?php echo $id; ?>" >
                    </form>
				
			</div><!--------comments DIV---------->
            
            <?php }//-------if($row["answer"] == NULL)------ ?>
	
	<?php
		}//-----while($row = mysqli_fetch_assoc($result))
	?>
</div><!------comment-holder--------->

