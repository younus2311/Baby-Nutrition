 <style>
	 div.list-group > a.list-group-item {
		color: white;
		font-size: 17px;
		margin-top: 5px;
	}
 </style>
 
 <?php //session_start(); ?>
 <link href="Assets/css/bootstrap.min.css">
 <link href="Assets/css/bootstrap-theme.min.css">

<div class="list-group" style="float:left;margin-top:20px; width:290px;">
    <a style="color: white;font-size: 17px;margin-top: 5px;width: 290px;height: 50px;" class="btn btn-success" href="babyNutrition.php"><strong>হোম</strong></a>
    <a style="color: white;font-size: 17px;margin-top: 5px;width: 290px;height: 50px;" class="btn btn-success" href="pregnancy.php"><strong>প্রসূতি</strong></a>
    <a style="color: white;font-size: 17px;margin-top: 5px;width: 290px;height: 50px;" class="btn btn-success" href="0To6Months.php"><strong>০-৬ মাস</strong></a>
    <a style="color: white;font-size: 17px;margin-top: 5px;width: 290px;height: 50px;" class="btn btn-success" href="fromAroundSixMonths.php"><strong>৬ মাস এবং তদূর্ধ</strong></a>
    
    <?php if(!empty($_SESSION)) { ?>
    	<!--------If he is an doctor--------->
		<?php if($_SESSION["occ"] == 1) { ?>
            <a style="color: white;font-size: 17px;margin-top: 5px;width: 290px;height: 50px;" class="btn btn-success" href="replied.php"><strong>রিপ্লাইড</strong></a>
            <a style="color: white;font-size: 17px;margin-top: 5px;width: 290px;height: 50px;" class="btn btn-success" href="notReplied.php"><strong>নট রিপ্লাইড</strong></a>
            <!--<a class="btn list-group-item btn-success" href="doctorForum.php">অনুসন্ধান/জিজ্ঞাসা</a>-->
        <?php } ?>
        
        <!--------If he is a patient----->
        <?php if($_SESSION["occ"] == 2) { ?>
        	<!--<a class="btn list-group-item btn-success" href="forum.php"><strong>অনুসন্ধান/জিজ্ঞাসা</strong></a>-->
            <a style="color: white;font-size: 17px;margin-top: 5px;width: 290px;height: 50px;" class="btn btn-success" href="checkBoxQuestionCategory.php"><strong>অনুসন্ধান/জিজ্ঞাসা</strong></a>
        <?php } ?>
    <?php } ?><!--------if the $_SESSION array is not empty--------->
    
    <!---------For the general people---------->
    <?php if(empty($_SESSION)) { ?>
    	<!--<a class="btn list-group-item btn-success" href="login.php"><strong>অনুসন্ধান/জিজ্ঞাসা</strong></a>-->
    	<a style="color: white;font-size: 17px;margin-top: 5px;width: 290px;height: 50px;" class="btn btn-success" href="generalForum.php"><strong>অনুসন্ধান/জিজ্ঞাসা</strong></a>
    <?php } ?>
    
    <a style="color: white;font-size: 17px;margin-top: 5px;width: 290px;height: 50px;" class="btn btn-success" href="map.php"><strong>মানচিত্রে নিকটতম হাসপাতালের খোঁজ</strong></a>
</div>