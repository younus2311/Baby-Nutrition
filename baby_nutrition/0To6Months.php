<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>০-৬ মাস</title>
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
            <h1 style="color:maroon; font-family:cursive;">০-৬ মাস</h1>
            
            <!------Login Button---------->
            <?php if(empty($_SESSION)) { ?>
                <a class="btn btn-primary btn-lg" style="float: left;margin-top: -47px; margin-left: 765px;height: 40px;width: 112px;
                font-size: 15px;" href="logIn.php">Login</a>
            <?php } ?>
            
            <!------Logout Button---------->
            <?php if(!empty($_SESSION)) { ?>
                <a class="btn btn-primary btn-lg" style="float: left;margin-top: -47px; margin-left: 765px;height: 40px;width: 112px;
                font-size: 15px;" href="logout.php">Logout</a>
            <?php } ?>
            
            <p style="font-family:'Century Gothic','Muli',sans-serif; float:left;">এ সময়ে শিশুর পূর্ণাঙ্গ শারীরিক বৃদ্ধি ও মানসিক বিকাশের জন্য প্রয়োজনীয় সব ধরনের পুষ্টি সঠিক পরিমাণে পাওয়া যায় শুধুমাত্র মায়ের বুকের দুধে। তাই শিশুর পূর্ণ ৬ মাস ( ১৮০ দিন ) বয়স পর্যন্ত শুধুমাত্র মায়ের দুধই যথেষ্ট, এ সময় এমনকি আলাদা করে শিশুকে এক ফোঁটা পানিও খাওয়ানোর প্রয়োজন নেই। ০-৬ মাস শিশুকে শুধুমাত্র বুকের দুধ খাওয়ালে মা ও শিশুর উপকারিতা অনেক।</p>
        </div><!------col-lg-12------->
        
        <!----------Healthy eating while breastfeeding LINK-------->
        
        <div class="col-lg-12" style="margin-top:45px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/what to eat and avoid.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style="float:left; font-family:'Century Gothic','Muli',sans-serif;"><a href="0To6HealthyEating.php">সুস্থ খাদক যখন বুকের দুধ</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">ভিটামিন সি এবং ওমেগা আপনার স্তন দুধে 3 চর্বি যেমন পুষ্টির পরিমাণ কত আপনি আপনার খাবার থেকে পেতে উপর নির্ভর করে. সেইসাথে প্রদানের পুষ্টি হিসেবে স্তন্য নতুন স্বাদের সঙ্গে শিশুর উপলব্ধ. বুকের দুধ মধ্যে আপনার খাদ্য স্থানান্তরের থেকে অণু শিশুখাদ্য স্বাদে আপনার খাচ্ছে দিতে এবং ...</p>
                <a class="btn btn-primary" href="0To6HealthyEating.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----------Quick meal and snack ideas LINK------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/Quick meal and snack ideas.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;"><a href="0To6QuickMeal.php">দ্রুত খাবার এবং জলখাবার ধারনা</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">খাবার ধারনা যে আপনি চাপ কিছু বন্ধ নিতে যখন আপনি সুপারমার্কেট বা ডিনার জন্য কি সিদ্ধান্ত নিতে চেষ্টা করছেন একটি তালিকা রাখুন . এখানে কিছু স্বাস্থ্যকর খাবার ধারণা আপনাকে শুরু করতে হয়...</p>
                <a class="btn btn-primary" href="0To6QuickMeal.php" style="float:left;">আরও পড়ুন  <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----------Recipe idea LINK--------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/Recipe idea.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;"><a href="0To6Recipe.php">রেসিপি ধারণা</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">স্পাঘেতি Bolognese, একটি পরিবার প্রিয় - এটা সুস্বাদু এবং পুষ্টিকর , এবং সব বয়সের মানুষের দ্বারা পছন্দ হয়. একটি দ্রুত খাবার জন্য নিখুঁত যখন সময় খুব বেশী নেই - কি আরো বড় সুবিধা হলো এটি বাল্ক মধ্যে করা সহজ এবং ভাল জমে হয় . এটা ভিটামিন A ও দস্তা যা আপনার ইমিউন সিস্টেম দেখাশোনা করার জন্য এবং  ...</p>
                <a class="btn btn-primary" href="0To6Recipe.php" style="float:left;">আরও পড়ুন  <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
    
    </div> <!------col-lg-9 class------->
    
</div><!------row class------->

<?php include_once("footer.php"); ?>