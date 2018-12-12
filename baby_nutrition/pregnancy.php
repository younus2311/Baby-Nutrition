<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>প্রসূতিকালীন সময়</title>
</head>

<body>

<!-----include header.php------->
<?php include_once("header.php"); ?><br/>

<!------row class------->

<div class="col-lg-12 content" style="float:left;">

<!--------include sideBar.php-------->
<?php include_once("sideBar.php"); ?>


   <div class="col-lg-9" style="float:left"> 
       <div class="col-lg-12" style="float:left;">
            <h1 style="color:maroon; font-family:cursive;">প্রসূতিকালীন সময়</h1>
            
            <!------Login Button---------->
            <?php if(empty($_SESSION)) { ?>
                <a class="btn btn-primary btn-lg" style="float: left;margin-top: -47px; margin-left: 765px;height: 40px;width: 112px;font-size: 15px;" href="logIn.php">Login</a>
            <?php } ?>
            
            <!------Logout Button---------->
            <?php if(!empty($_SESSION)) { ?>
                <a class="btn btn-primary btn-lg" style="float: left;margin-top: -47px; margin-left: 765px;height: 40px;width: 112px;
                font-size: 15px;" href="logout.php">Logout</a>
            <?php } ?>
            
            <p style="font-family:'Century Gothic','Muli',sans-serif; float:left;">মায়ের স্বাস্থ্য ও পুষ্টির ওপর গর্ভস্থ সন্তানের স্বাস্থ্য নির্ভর করে। এ সময় অপর্যাপ্ত খাদ্য ও অপুষ্টি, মা ও শিশুর জন্য মারাত্মক হতে পারে। অপুষ্টিতে আক্রান্ত মায়েরা যে সন্তানের জন্ম দেয়, তাদের জন্ম ওজন কম হয়, বুদ্ধির বিকাশ ব্যাহত হয় ও স্বাস্থ্য ভালো থাকে না। গর্ভাবস্থায় মা নিজের দেহ থেকে প্রয়োজনীয় পুষ্টি উপাদান সরবরাহ করে গর্ভের শিশুকে যথাযথভাবে গড়ে তুলে। এক্ষেত্রে মায়ের দেহে যে ক্ষয় হয় তা পূরণ করা না হলে মায়ের স্বাস্থ্যহানি ঘটে।</p>

            
        </div><!------col-lg-12------->
        
        <!----------Nutrition for young pregnant women (under 20 years old) LINK-------->
        
        <div class="col-lg-12" style="margin-top:45px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/bangladeshi pregnant women.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style="float:left; font-family:'Century Gothic','Muli',sans-serif;margin-top: 26px;"><a href="pregnancyYoungPregnant.php">অল্পবয়সী গর্ভবতী নারীদের জন্য পুষ্টি
</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">যেকোনো দেশের নাগরিকদের সামগ্রিক স্বাস্থ্যব্যবস্থার উন্নতি করতে হলে প্রথমেই মায়েদের স্বাস্থ্যের উন্নতি করতে হবে। ভবিষ্যতের নাগরিকদের সুস্বাস্থ্য নিশ্চিত করতে হলে গর্ভাবস্থায়ই নারীর স্বাস্থ্য পরিচর্যা করতে হবে। এতে নবজাতকের সুস্বাস্থ্য তথা ভবিষ্যতে একজন স্বাস্থ্যবান নাগরিক পাওয়ার আশা করা যেতে পারে।আমাদের দেশের জন্যও তা অক্ষরে অক্ষরে ঠিক।অর্থনৈতিক দৈন্যের সাথে ধর্মীয় ও সামাজিক গোঁড়ামি ও কুসংস্কার ...</p>
                <a class="btn btn-primary" href="pregnancyYoungPregnant.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----------Food allergy advice for you and your baby LINK------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/food_allergy.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style="float:left;margin-top: 26px;"><a href="pregnancyFoodAllergyContent.php">আপনার এবং আপনার শিশুর জন্য এলার্জি পরামর্শ</a></h2>
                <p style="float:left; ">আপনার একটি মেডিক্যাল খাদ্য এলার্জি থাকে,আপনার নিশ্চিত করতে হবে যে আপনি প্রয়োজনীয় পুষ্টির পাচ্ছেন যখন আপনি গর্ভবতী .এটা মনে রাখতে হবে যে খাদ্য intolerances এবং ...</p>
                <a class="btn btn-primary" href="pregnancyFoodAllergyContent.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----------Nutrition and supplements during pregnancy LINK--------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/nutrition_and_suppliments.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style="float:left;margin-top: 26px;"><a href="pregnancyNutritionSuppliments.php">প্রসূতিকালীন পুষ্টি</a></h2>
                <p style="float:left;">আপনি শুনেছেন বা ফলিক এসিড সাপ্লিমেন্ট গ্রহণ বা আরো folate খাওয়া প্রয়োজন সম্পর্কে পড়তে হতে পারে ( এই কি সবুজ শাকসজীতে প্রাপ্ত অ্যাসিড বলা হয় যখন তার প্রাকৃতিকভাবে খাবারে বর্তমান) . এই বিভাগে আপনি জানেন কেন এই গুরুত্বপূর্ণ দিন হবে ...</p>
                <a class="btn btn-primary" href="pregnancyNutritionSuppliments.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----Healthy weight in pregnancy LINK----->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/healthy_weight.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style="margin-top: 26px; font-family:'Century Gothic','Muli',sans-serif;float:left;"><a href="pregnancyHealthyWeight.php">প্রসূতিকালীন সাস্থ্যকর ওজোন</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">প্রত্যেকেরই এর গর্ভাবস্থায় শরীরের আকৃতি ভিন্ন এবং সম্ভবত পরিবর্তন আপনার শরীর ঘটমান আপনি আরো এই পার্থক্যের সচেতন করেছেন. আকার এবং আপনার আচমকা অবস্থান, ওজন বৃদ্ধি বা আপনার শরীরের অন্যান্য এলাকায় আকৃতি পরিবর্তন সব ব্যক্তি থেকে ব্যক্তি বিভিন্ন রকমের হতে পারে....</p>
                <a class="btn btn-primary" href="pregnancyHealthyWeight.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!----col-lg-12 LINK----->
        
       <!--------Physical activity in pregnancy LINK----->
    
   <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
    	<a href="#"><img src="image/physical_activity.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
        <div class="col-lg-9" style="margin-top:-23px;float:left;">
        	<h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;margin-top: 26px;"><a href="pregnancyPhysicalActivity.php">প্রসুতিকালীন শারীরিক কার্যকলাপ</a></h2>
            <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">গর্ভাবস্থায় ফিটনেসের উন্নত যেমন স্থায়িভাবে স্ফীত বা বর্ধিত শিরা হিসেবে সাধারণ গর্ভাবস্থার অভিযোগ , পা ও পায়ের মধ্যে ফোলা কমানো , কম ব্যথা এবং ক্লান্তিগর্ভাবস্থার ডায়াবেটিস এবং...</p>
            <a class="btn btn-primary" href="pregnancyPhysicalActivity.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div><!----col-lg-9 LINK----->
    
    <!------Food safety in pregnancy------>
    
    <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
    	<a href="#"><img src="image/food_safety.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
        <div class="col-lg-9" style="margin-top:-23px;float:left;">
        	<h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;margin-top: 26px;"><a href="pregnancyFoodSafety.php">প্রসুতিকালীন খাবার</a></h2>
            <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">হ্যান্ডলিং এবং খাবার তৈরীর আগে এবং, কাঁচা খাবার (বিশেষত মাংস) স্পর্শ টয়লেটে যাচ্ছে বা nappies পরিবর্তন, (গৃহপালিত সহ) প্রাণী ও স্পর্শ বিন স্পর্শ পরে - সাবান এবং গরম জল দিয়ে আপনার হাত ধুয়ে এবং তাদের শুকিয়ে.ক্লিন কাজ আপনার চপিং বোর্ড এবং পাত্রে পুঙ্খানুপুঙ্খভাবে আগে এবং...</p>
            <a class="btn btn-primary" href="pregnancyFoodSafety.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div><!----col-lg-9 LINK----->
    
    <!----What not to eat when pregnant------>
    
  	<div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
    	<a href="#"><img src="image/what_not_to_eat.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
        <div class="col-lg-9" style="margin-top:-23px;float:left;">
        	<h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;margin-top: 26px;"><a href="pregnancyWhatNotToEat.php">অন্তঃসত্বা অবস্থায় যে সকল খাবার খাবেন না</a></h2>
            <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">গর্ভকালীন সময়ে মায়ের চাই বিশেষ যত্ন। মহিলাদের গর্ভধারনের পূর্বেই নিজের স্বাস্থ্য, গর্ভধারণ ও সন্তান পালন সংক্রান্ত বিষয়ে সচেতন হওয়া দরকার। কারণ একজন সুস্থ্য মা-ই পারে একটি সু্স্থ ও স্বাভাবিক শিশুর জন্ম দিতে। তাই গর্ভবতী মায়ের জন্য প্রয়োজন সঠিক যত্ন ও পরিচর্যা। অন্তঃসত্বা অবস্থায় খাওয়া দাওয়ার ব্যাপারে একটু সাবধানতা অবলম্বন করা উচিত। আজ আমরা জানবো গর্ভবতীর কি কি  খাবার খাওয়া উচিত না সেই সম্পর্কে...</p>
            <a class="btn btn-primary" href="pregnancyWhatNotToEat.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div><!----col-lg-9 LINK------->
    
    </div> <!------col-lg-9 class------->
    
</div><!------row class------->



<?php include_once("footer.php"); ?>