<!-------Inserting Answer in Database--------->
<?php
	if(isset($_POST["answerDiseaseSubmit"])) {
		$doc_name = $_SESSION["username"];
		$answerDisease = $_POST["answerDisease"];
		$answerDisease = mysqli_real_escape_string($connection,$answerDisease);
		$idDisease = $_POST["idDisease"];
		
		$updateAnswerDisease = "UPDATE disease SET doc_name = '{$doc_name}',answer = '{$answerDisease}' WHERE id = $idDisease";
		$result = mysqli_query($connection,$updateAnswerDisease);
	}
?>

<!---------Comment-holder DIV---------->
<div class="comment-holder" style="float:left;margin-top: 20px;margin-left: -27px;">
	<?php
		$nrDiseaseSelect = "SELECT * FROM disease ORDER BY id DESC";
		$resultNrDiseaseSelect = mysqli_query($connection,$nrDiseaseSelect);
		
		while($row = mysqli_fetch_assoc($resultNrDiseaseSelect)) {
	?>
    		
            <!-------if($row["answer"] == NULL)--------->
    		<?php if($row["answer"] == NULL) { ?>
            
			<div class="comments" style="float:left; width:750px; border:2px solid black; margin-bottom:8px;margin-left: 85px;">
            	
                	
					<?php $id=$row["id"]; ?>
                    <strong style="font-size:17px;float: left; width:740px;"><?php echo $row["pat_name"]; ?></strong>
                    <span style="float: left; width:745px;"><strong style="color:red; margin-right:5px;">প্রশ্ন:</strong><?php echo $row["question"]; ?></span>
                    <!---------Reply Button------->
                    <div style="float:left; width:700px;"><button style="float:left; margin-bottom:3px;" class="btn btn-primary btn-xs" id="diseaseReply<?php echo $id; ?>">রিপ্লাই </button></div><br/>
                    
                    <!-----jQuery to SlideToggle answer Box----->
                    <script>
                        //$(document).ready(function() {
                            $("#diseaseReply<?php echo $id; ?>").click(function(){
                                $("#nrAnswer<?php echo $id; ?>").slideToggle("slow");
                            });
                        //});
                    </script>
                    
                    <!-----Doctor Answer Box------->
                    <form style="float:left; display:none;" action="notReplied.php" method="post" id="nrAnswer<?php echo $id; ?>" >
                        <textarea style="width: 690px;color:black ;margin-top: 0px;margin-left: 0px;height: 25px; float:left;" name="answerDisease" type="text" value=""></textarea>
                        <input style="width: 45px;height: 24px;float: left;font-size: 12px;margin-left: 3px;padding: 0px;border-radius: 0px;" class="btn btn-success" type="submit" name="answerDiseaseSubmit" value="উত্তর">
                        <input type="hidden" name="idDisease" value="<?php echo $id; ?>" >
                    </form>
				
			</div><!--------comments DIV---------->
            
            <?php }//-------if($row["answer"] == NULL)------ ?>
	
	<?php
		}//-----while($row = mysqli_fetch_assoc($result))
	?>
</div><!------comment-holder--------->



