<?php
	if(isset($_GET["deleteNfm1"])) {
		$id = $_GET["idNfm1"];
		$queryDelete = "UPDATE nutrition_for_mother SET answer=NULL,doc_name=NULL WHERE id=$id";
		
		mysqli_query($connection,$queryDelete);
	}
?>

<?php
	
	if(isset($_POST["editNfmSubmit"])) {
		$id = $_POST["idEditNfm"];
		$editedAns = $_POST["editNfm"];
		$editedAns = mysqli_real_escape_string($connection, $editedAns);
		
		$queryUpdate = "UPDATE nutrition_for_mother SET answer='{$editedAns}' WHERE id=$id";
		mysqli_query($connection,$queryUpdate);
	}

?>

<!---------Comment-holder DIV---------->
<div class="comment-holder" style="float:left; margin-top: 20px; margin-left: -27px;">
	<?php
		$nrDiseaseSelect = "SELECT * FROM nutrition_for_mother ORDER BY id DESC";
		$resultNrDiseaseSelect = mysqli_query($connection,$nrDiseaseSelect);
		
		while($row = mysqli_fetch_assoc($resultNrDiseaseSelect)) {
	?>
    		
            <!-------if($row["answer"] != NULL)--------->
    		<?php if($row["answer"] != NULL) { ?>
            
			<div class="comments" style="float:left; width:750px; border:2px solid black; margin-bottom:8px;margin-left: 85px;">
            	
                	<?php $id=$row["id"]; ?>
                    <strong style="font-size:17px;float: left; width:740px;"><?php echo $row["pat_name"]; ?></strong>
                    <span style="float: left; width:745px; margin-bottom:5px;"><strong style="color:red; margin-right:5px;">প্রশ্ন:</strong><?php echo $row["question"]; ?></span>
                    
                    <div class="answer" style="border: 2px solid black; float:left; width:630px; margin-left:3px; margin-bottom:3px; ">
                        <strong style="font-size:17px;float: left; width:740px;"><?php echo $row["doc_name"]; ?></strong>
                        <span style="float: left; width:745px;"><strong style="color:red; margin-right:5px;">উত্তর:</strong><?php echo $row["answer"]; ?></span><br/>
                        
                        <!------Delete Button--------->
                        <form action="replied.php" method="get">
                        	<input class="btn-primary btn btn-xs" type="submit" value="ডিলিট" name="deleteNfm1" style="float:left; margin-left:530px;">
                            <input type="hidden" name="idNfm1" value="<?php echo $id; ?>">
                        </form>
                        
                        <!---------Edit BUtton--------->
                        <button class="btn btn-success btn-xs" id="editButtonNfm<?php echo $id; ?>" style=" margin-left:5px;float:left; margin-bottom:17px;">এডিট</button><br/>
                        
                        <!-------Edit Comment Box---------->
                        <form style="float:left; display:none;" id="editNfm<?php echo $id; ?>" action="replied.php" method="post">
                            <textarea name="editNfm" style="width:585px; float:left; height:21px; color:black; margin-left:3px;"></textarea>
                            <!-------Edit Button------->
                            <input style="float:left;margin-top: -15px; " class="btn btn-success btn-xs" type="submit" name="editNfmSubmit" value="এডিট">
                            <input type="hidden" name="idEditNfm" value="<?php echo $id; ?>" >
						</form>
                        
                    </div>
                    
                    <!-------jQuery to edit comment------->
                    <script>
						$(document).ready(function() {
                            $("#editButtonNfm<?php echo $id; ?>").click(function(){
								$("#editNfm<?php echo $id; ?>").slideToggle("slow");
							});
                        });
					</script>
                   
				
			</div><!--------comments DIV---------->
            
            <?php }//-------if($row["answer"] != NULL)------ ?>
	
	<?php
		}//-----while($row = mysqli_fetch_assoc($result))
	?>
    
</div><!------comment-holder--------->

