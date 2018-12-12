<!---------Connecting To Database--------->
<?php include_once("dbConnector.php"); ?>


<!--------Including Validation Functions-------->
<?php require_once("validationFunctions.php"); ?>


<?php

$error = array();

//When The button is clicked--------------------
if(isset($_POST["submit"])) {

	$fn = $_POST["fn"];
	$ln = $_POST["ln"];
	$un = $_POST["username"];
	$pass = $_POST["password"];	
	$cp = $_POST["cp"];
	
	if(isset($_POST["occ"])) {
		$occ = $_POST["occ"];
	}
	
	else {
		$occ = "";	
	}
	
	$email = $_POST["email"];
	$mob = $_POST["mob"];
	
}

else {
	
	$fn = "";
	$ln = "";
	$un = "";
	$pass = "";
	$cp = "";	
	$occ = "";
	$email = "";
	$mob = "";
	
}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sign Up Page</title>

	<style>
    
        body {
            height:700px;
            background: url(image/logInBackGround.jpg);
            background-position:center center;
            background-repeat:no-repeat;
            background-size:cover;
        }
        
        div.content > form > strong {
            color: white;	
        }

        div.content > form > input {
            margin-bottom: 10px;	
        }
    
    </style>

    <link rel="stylesheet" type="text/css" href="Assets For Modal/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Assets For Modal/css/bootstrap-theme.min.css">

</head>

	<body>
    	<div style="float:left;" class="col-lg-6 col-lg-offset-3 content">
        	<div class="col-lg-12 heading" style="color:#A0A0A0; font-size:80px; float:left; text-align:center; font-family:fantasy; ">একাউন্ট তৈরী করুন</div><br/><br/>
            
            <form style="float:left" class="col-lg-12" action="signUp.php" method="post">
            
            	<!------First Name------->
                <strong class="col-lg-12">প্রথম নাম: </strong><br/>
                <input style="background:white; float:left; border-radius:8px; height:45px; cursor:pointer;" class="col-lg-12" type="text" 
                name="fn" value="<?php echo $fn; ?>" placeholder="প্রথম নাম এন্টার করুন"><br/><br/>
                
					<?php
                        if(isset($_POST["submit"]) && !has_presence($fn)) {
                            $error["fnPresence"] = "First Name can't be blank";
					?>
                    
                    <p class="col-lg-12" style="color:red; float:left;">
						<?php
                             echo $error["fnPresence"];
                        ?>
                    </p><br/>
                    
                    <?php
                        }
                    ?>
                
                <!------Last Name------->
                <strong class="col-lg-12" style="float:left;">শেষ নাম: </strong><br/>
                <input style="background:white; float:left; border-radius:8px; height:45px; cursor:pointer;" class="col-lg-12" type="text" 
                name="ln" value="<?php echo $ln; ?>" placeholder="শেষ নাম এন্টার করুন"><br/><br/>
  
					<?php
                        if(isset($_POST["submit"]) && !has_presence($ln)) {
                            $error["lnPresence"] = "Last Name can't be blank";
                    ?>
                    
                    <p class="col-lg-12" style="color:red;float:left;" >
                        <?php
                                echo $error["lnPresence"];
                        ?>
                    </p>
                    
                    <?php
                        }
                    ?><br/>

            	
                <!------Username------->
                <strong>ইউজারনেম নির্বাচন করুন: </strong><br/>
                <input style="background:white; float:left; border-radius:8px; height:45px; cursor:pointer;" class="col-lg-12" type="text" 
                name="username" value="<?php echo $un; ?>" placeholder="ইউজারনেম এন্টার করুন"><br/><br/>
                
                	<?php
                        if(isset($_POST["submit"]) && !has_presence($un)) {
                            $error["unPresence"] = "Username can't be blank";
					?>
                    
                    <p class="col-lg-12" style="color:red; float:left;">
						<?php
                                echo $error["unPresence"];
                        ?>
                    </p><br/>
                    
                    <?php
                        }
                    ?>
                    
                    <!----------Username is too big------->
                    <?php
						if(isset($_POST["submit"]) && !short($un,31)) {
							$error["big"] = "Username is too big!";
					?>
                    <p class="col-lg-12" style="float:left;color:red">
                    	<?php
							echo $error["big"];
						?>
                    </p>
                    <?php
						}
					?><br/>
                
                <!-------Password------->
                <strong>পাসওয়ার্ড: </strong><br/>
                <input style="background:white; float:left; border-radius:8px; height:45px; cursor:pointer;" class="col-lg-12" type="password"	 				name="password" value="<?php echo $pass; ?>" placeholder="পাসওয়ার্ড এন্টার করুন"><br/><br/><br/>
                
                	<?php
                        if(isset($_POST["submit"]) && !has_presence($pass)) {
                            $error["passPresence"] = "Password can't be blank";
					?>
                    <p class="col-lg-12" style="color:red; float:left;">
						<?php
                                echo $error["passPresence"];
                        ?>
                    </p><br/>
					<?php
                        }
                    ?>
                    
                    <!--------Password is too short------>
                    <?php
						if(isset($_POST["submit"]) && big($pass,5)==false) {
							if(strlen($pass) != 0) {
								$error["short"] = "Password is too short!";	
					?>
                    <p class="col-lg-12" style="color:red;">
						<?php
                                echo $error["short"];
                        ?>
                    </p><br/>
                    <?php 
							}//----!=0---- 
					?>
                    <?php
						}//------Presence----
					?>
                
                <!-------Password Confirmation------->
                <strong>কনফার্ম পাসওয়ার্ড: </strong><br/>
                <input style="background:white; float:left; border-radius:8px; height:45px; cursor:pointer;" class="col-lg-12" type="password" 				name="cp" value="<?php echo $cp; ?>" placeholder="পাসওয়ার্ড কনফার্ম করুন"><br/><br/><br/>

                
                <!-------Password Match--------->
                <?php
				
					if(isset($_POST["submit"]) && $pass == $cp && !empty($pass) && !empty($cp) && !isset($error["short"])) {
				?>
				<p class="col-lg-12" style="float:left;color:green;">
					<?php
						echo "Password Matched";
					?>
                </p>
                <?php
					}
				?>
                <?php	
					if(isset($_POST["submit"]) && $pass != $cp) {
						$error["pMatch"] = "Password doesn't match";	
				?>
                <p class="col-lg-12" style="color:red; float:left;">
					<?php
                        echo $error["pMatch"];
					}
                    ?>
                </p><br/>
                                
                
                <!------Occupation------->
                <strong>পেশা: </strong><br/>
                <div class="col-lg-12">
                    <input style="margin-left: -12px;" type="radio" name="occ" value="1"<?php if(isset($occ) && $occ=="1") { echo "checked"; } ?> > <span style="color:white;
                    margin-right: 20px;">পুষ্টি বিশেশজ্ঞ</span>
                    <input type="radio" name="occ" value="2"<?php if(isset($occ) && $occ=="2") { echo "checked"; } ?> > <span style="color:white;">অনুসন্ধানকারী</span><br/><br/>
                </div>
                
                	<?php
                        if(isset($_POST["submit"]) && !has_presence($occ)) {
                            $error["occPresence"] = "Please select an option";
					?>
                    
                    <p class="col-lg-12" style="color:red; float:left;">
						<?php
                                echo $error["occPresence"];
                        ?>
                    </p><br/>
                    
                    <?php
                        }
                    ?>
                
                <!------Email------->
                <strong>ইমেইল: </strong><br/>
                <input style="background:white; float:left; border-radius:8px; height:45px; cursor:pointer;" class="col-lg-12" type="email" 
                name="email" value="<?php echo $email; ?>" placeholder="ইমেইল এন্টার করুন"><br/><br/>
                
                	<?php
                        if(isset($_POST["submit"]) && !has_presence($email)) {
                            $error["emailPresence"] = "Email can't be blank";
					?>
                    
                    <p class="col-lg-12" style="color:red; float:left;">
						<?php
                                echo $error["emailPresence"];
                        ?>
                    </p><br/>
                    
                    <?php
                        }
                    ?>
                
                <!------Mobile---------->
                <strong>মোবাইল নাম্বার: </strong><br/>
                <input style="background:white; float:left; border-radius:8px; height:45px; cursor:pointer;" class="col-lg-12" type="tel" 
                name="mob" value="<?php echo $mob; ?>" placeholder="্মোবাইল নাম্বার এন্টার করুন"><br/><br/>
                
                	<?php
                        if(isset($_POST["submit"]) && !has_presence($mob)) {
                            $error["mobPresence"] = "Mobile number can't be blank";
					?>
                    
                    <p class="col-lg-12" style="color:red; float:left;">
						<?php
                                echo $error["mobPresence"];
                        ?>
                    </p><br/>
                    
                    <?php
                        }
                    ?>
                
                <!-------Log in Button-------->
                <input style="float:left" class="col-lg-3 btn btn-success btn-md" type="submit" name="submit" value="ক্রিয়েট একাউন্ট"><br/>
                
             </form><br/><br/>
             
             
             
        </div><!-------content-------->
        		
<!--------Insert Into Database(signup table)--------->
	
    	<?php
			
			if(isset($_POST["submit"]) && empty($error)) {
				
				$query = "INSERT INTO signup (fn,ln,username,password,occupation,email,mobile) ";
				$query .= "VALUES ('{$fn}','{$ln}','{$un}','{$pass}','{$occ}','{$email}','{$mob}');";
				
				//-----query Perform----------
				$result = mysqli_query ($connection,$query);
			}
        ?>


<!-------Bootstrap JS--------->
<script src="Assets For Modal/js/bootstrap.min.js"></script>
<script src="Assets For Modal/js/jquery-1.12.0.min.js"></script>
</body>
</html>

<!------Database Connection Close-------->

<?php mysqli_close($connection); ?>