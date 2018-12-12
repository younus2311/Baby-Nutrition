<!---------Starting SESSION----------------->
<?php session_start(); ?>

<!------Creating Database Connection-------->
<?php include_once("dbConnector.php"); ?>

<!-------Including Validation Functions------->
<?php include_once("validationFunctions.php"); ?>

<!------When the login button is clicked-------->
<?php 

	if(isset($_POST["submit"])) {
		$un = $_POST["username"];
		$pass = $_POST["password"];	
	}
	
	else {
		$un = "";
		$pass = "";	
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log In Page</title>

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
        
        div.content {
            margin-top: 100px;
        }

        div.content > form > input {
            margin-bottom: 30px;	
        }
    
    </style>

    <link rel="stylesheet" type="text/css" href="Assets For Modal/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="Assets For Modal/css/bootstrap-theme.min.css">

</head>

	<body>
    	<div style="float:left;" class="col-lg-6 col-lg-offset-3 content">
        	<div class="col-lg-12 heading" style="color:#A0A0A0; font-size:80px; float:left; text-align:center; font-family:fantasy; ">লগ ইন</div><br/><br/>
            
            <form action="logIn.php" style="float:left" class="col-lg-12" method="post">
            	
                <!------Username------->
                <strong>ইউজারনেম: </strong><br/>
                <input style="background:white; float:left; border-radius:8px; height:45px;" class="col-lg-12" type="text" 
                name="username" value="<?php echo $un; ?>" placeholder="ইউজারনেম এন্টার করুন"><br/><br/>
                
                <!-------Username can't be blank------->
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
                
                <!-------Password------->
                <strong>পাসওয়ার্ড: </strong><br/>
                <input style="background:white; float:left; border-radius:8px; height:45px;" class="col-lg-12" type="password" 
                name="password" value="<?php echo $pass; ?>" placeholder="পাসওয়ার্ড এন্টার করুন"><br/><br/><br/>
                
                <!------Password can't be blank-------->
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
                
                <!-------Log in Button-------->
                <input style="float:left" class="col-lg-2 btn btn-success btn-md" type="submit" name="submit" value="লগ ইন"><br/>
                
             </form><br/>
             
             <div class="col-lg-12 need-sign-up" style="border-radius: 10px; margin-top: 20px;float: left;background: black;">
             	<p class="col-lg-4 col-lg-offset-3" style="color: white;text-align: center; margin-top: 10px;">একাউন্ট প্রয়োজন? </p><span class="col-lg-3" style="margin-left: -20px; margin-top: 10px;float:left;color:#3399FF"><a href="signUp.php">এখন ই সাইনআপ করুন!!</a></span>
             </div>
             
        </div>
        
        <!--------Matching Username & Password taking data from database--------->
        
        <?php
			
			/*if(isset($_POST["submit"]) && empty($error)) {
			$query = "SELECT username,password FROM signup";
			$result = mysqli_query($connection,$query);
			
				while ($row = mysqli_fetch_assoc($result)) {
					if($un == $row["username"] && $pass == $row["password"]) {
						header("location: forum.php");
						exit;	
					}
				}
				
				$message = "Username and Password doesn't match!";
			}*/
			
			//---------Log in Condition-----------
			if(isset($_POST["submit"]) && empty($error)) {
				$username = $_POST["username"];
				$password = $_POST["password"];
				$query = "SELECT * FROM signup WHERE username='{$username}' AND password='{$password}'";
				$result = mysqli_query($connection,$query);
				
				if(mysqli_num_rows($result) == 1) {
					$row = mysqli_fetch_assoc($result);
					$_SESSION["occ"] = $row["occupation"];
					$_SESSION["username"] = $username;
					header("location: babyNutrition.php");
					exit;	
				}
				
				else {
					$message = "Username and Password doesn't match!";
				}
			}
			
		?>
        
			<div class="col-lg-6 col-lg-offset-3" style="margin-top: 12px;color:red;float:left;">
			<?php
                if(isset($_POST["submit"]) && isset($message)) {
                    echo $message;	
                }
            ?>
        </div>
        		


<!-------Bootstrap JS--------->
<script src="Assets For Modal/js/bootstrap.min.js"></script>
<script src="Assets For Modal/js/jquery-1.12.0.min.js"></script>
</body>
</html>



