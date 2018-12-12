<?php
	if(isset($_GET["deleteNfb1"])) {
		$id = $_GET["idNfb1"];
		$queryDelete = "UPDATE nutrition_for_baby SET answer=NULL WHERE id=$id";
		
		mysqli_query($connection,$queryDelete);
	}
?>

<?php
	
	if(isset($_POST["editNfbSubmit"])) {
		$id = $_POST["idEditNfb"];
		$editedAns = $_POST["editNfb"];
		$editedAns = mysqli_real_escape_string($connection, $editedAns);
		
		$queryUpdate = "UPDATE nutrition_for_baby SET answer='{$editedAns}' WHERE id=$id";
		mysqli_query($connection,$queryUpdate);
	}

?>

<!---------Comment-holder DIV---------->
<div class="comment-holder" style="float:left; margin-top: 20px; margin-left: -27px;">
	<?php
		$nrDiseaseSelect = "SELECT * FROM nutrition_for_baby ORDER BY id DESC";
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
                        <span style="float: left; width:745px;"><strong style="color:green; margin-right:5px;">উত্তর:</strong><?php echo $row["answer"]; ?></span><br/>
                        
                        <!------Delete Button--------->
                        <form action="replied.php" method="get">
                        	<input class="btn-primary btn btn-xs" type="submit" value="ডিলিট" name="deleteNfb1" style="float:left; margin-left:530px;">
                            <input type="hidden" name="idNfb1" value="<?php echo $id; ?>">
                        </form>
                        
                        <!---------Edit BUtton--------->
                        <button class="btn btn-success btn-xs" id="editButtonNfb<?php echo $id; ?>" style=" margin-left:5px;float:left; margin-bottom:17px;">এডিট</button><br/>
                        
                        <!-------Edit Comment Box---------->
                        <form style="float:left; display:none;" id="editNfb<?php echo $id; ?>" action="replied.php" method="post">
                            <textarea name="editNfb" style="width:585px; float:left; height:21px; color:black; margin-left:3px;"></textarea>
                            <!-------Edit Button------->
                            <input style="float:left;margin-top: -15px; " class="btn btn-success btn-xs" type="submit" name="editNfbSubmit" value="এডিট">
                            <input type="hidden" name="idEditNfb" value="<?php echo $id; ?>" >
						</form>
                        
                    </div>
                    
                    <!-------jQuery to edit comment------->
                    <script>
						$(document).ready(function() {
                            $("#editButtonNfb<?php echo $id; ?>").click(function(){
								$("#editNfb<?php echo $id; ?>").slideToggle("slow");
							});
                        });
					</script>
                   
				
			</div><!--------comments DIV---------->
            
            <?php }//-------if($row["answer"] != NULL)------ ?>
	
	<?php
		}//-----while($row = mysqli_fetch_assoc($result))
	?>
    
</div><!------comment-holder--------->

