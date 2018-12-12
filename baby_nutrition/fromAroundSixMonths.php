<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>মাতৃদুগ্ধ ছাড়ানো</title>
</head>

<body>

<!-----include header.php------->
<?php include_once("header.php"); ?><br/>

<!------row class------->

<div class="col-lg-12 content" style="float:left;">

<!--------include sideBar.php-------->
<?php include_once("sideBar.php"); ?>


   <div class="col-lg-9 " style="float:left"> 
       <div class="col-lg-12" style="float:left;">
            <h1 style="color:maroon; font-family:cursive;">মাতৃদুগ্ধ ছাড়ানো</h1>
            
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
            
            <p style="font-family:'Century Gothic','Muli',sans-serif; float:left;">প্রসূতি মায়ের ভরণ-পোষণ ও যত্নের ওপর শিশুর সুস্বাস্থ্য নির্ভর করে। এ জন্য প্রতিটি শিশুর জন্য জন্মের পর ছয় মাস বয়স পর্যন্ত বুকের শাল দুধ দিতে হবে। এতে মা ও শিশু উভয়ই সমান উপকৃত হবেন। মাতৃদুগ্ধ এমন একটি সুষম খাদ্য, যার কোনো বিকল্প নেই। পূর্ণ দুই বছর শিশুকে তার মা দুধ পান করাবেন। প্রয়োজনে আরও ছয় মাস সময় বাড়ানো যেতে পারে। শিশুকে বুকের শাল দুধ দিলে মায়ের স্তনে ক্যানসার হয় না এবং সাধারণত গর্ভনিরোধ হয়। নবজাত সন্তানকে বুকের দুধ খাওয়ানোর ফলে মায়ের অল্প সময়ের মধ্যে গর্ভধারণ ঝুঁকি থাকে না। এ সম্পর্কে আল্লাহ তাআলা ইরশাদ করেছেন, ‘আমি তো মানুষকে তার পিতা-মাতার প্রতি সদাচরণের নির্দেশ দিয়েছি। জননী সন্তানকে কষ্টের পর কষ্ট বরণ করে গর্ভধারণ করে এবং তার দুধ ছাড়ানো হয় দুই বছরে।’ (সূরা লুকমান, আয়াত: ১৪) অন্য আয়াতে বলা হয়েছে, ‘সন্তানকে গর্ভে ধারণ করতে ও তার দুধ ছাড়াতে লাগে ৩০ মাস।’ (সূরা আল-আহকাফ, আয়াত: ১৫)</p>
        </div><!------col-lg-12------->
        
        <!----------When to wean LINK-------->
        
        <div class="col-lg-12" style="margin-top:45px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/weaning babies.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style="float:left; font-family:'Century Gothic','Muli',sans-serif;margin-top: 26px;"><a href="fasmWhenToWean.php">শিশুর দুধ পান ছাড়ান</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">এটা খুবই গুরুত্বপূর্ণ যে দুধ পান করাতে অনেক 6 মাস পরেও বিলম্বিত না হয় . এই কারণ যেমন লোহা যেমন অপরিহার্য পুষ্টির দোকানে ঘাটতি পুনরায় পূরণ করা প্রয়োজন হয় . এই পুষ্টির আপনার শিশুর বৃদ্ধি প্রয়োজনীয়তা একা দুধ দ্বারা উপলব্ধ করা যাবে না . এছাড়াও , এই...</p>
                <a class="btn btn-primary" href="fasmWhenToWean.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----------The introduction of first foods (around 6 months) LINK------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/6 months.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;margin-top: 26px;"><a href="fasmFirstFoods.php">প্রথম খাবার ( প্রায় 6 মাস) এ</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">আপনি আপনার শিশুর স্বাভাবিক স্তন বা সূত্র দুধ সঙ্গে নিম্নলিখিত খাবার এক এক চায়ের চামচ মিশিয়ে শুরু করতে পারেন.যেমন শিশুর চাল যেমন অ গম সিরিয়াল,ভর্তা বা puréed ফল: যেমন কলা বা আভাকাডো, বা এই ধরনের নাশপাতি বা আপেল যেমন...</p>
                <a class="btn btn-primary" href="fasmFirstFoods.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----------Introducing more tastes and textures (around 7 months) LINK--------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/7 months.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;margin-top: 26px;"><a href="fasmSevenMonths.php">প্রায় 7 মাসে</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">6 মাস পর শিশু দুগ্ধজাত খাবার *, গম এবং প্রোটিন বৈচিত্রময় সূত্র ধারণকারী খাবার চালু করা যেতে পারে.একবার তারা সহজ খাবার অভ্যস্ত হয়েছে, আপনি তাদের যেমন রান্না করা মাংস, মাছ, পাস্তা, নুডুলস, রুটি, চাপাটি, গম, মসুরি, ভর্তা ভাত হিসাবে খাবার দিতে পারে. এছাড়াও আপনি ভাল রান্না ডিম, এবং পনির, দই ...</p>
                <a class="btn btn-primary" href="fasmSevenMonths.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----Getting ready for family foods (from around 9 months) LINK----->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/9 months.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;margin-top: 26px;"><a href="fasmNineMonths.php">( প্রায় 9 মাস থেকে) পরিবার খাবার জন্য প্রস্তুত হচ্ছে</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">এই সময়ের মধ্যে আপনার শিশুর, তিনটি খাওয়ার একটি দিন থাকার স্বাস্থ্যকর খাবার সেইসাথে স্তন বা সূত্র দুধ ছাড়াও প্রতি চলন্ত হবে. জল একটি খোলা কাপ বা প্রতিটি খাবার সঙ্গে একটি মুক্ত প্রবাহ ঢাকনাওয়ালা পানপাত্র দেওয়া হবে.এটা গুরুত্বপূর্ণ যে আপনি তাই খাবার আদর্শভাবে কাটা বা এই পর্যায়ে কিমা করা উচিত, lumpier খাবার তাদের চর্বণ শিখতে উৎসাহিত করার জন্য আপনার শিশুর দিতে হয়...</p>
                <a class="btn btn-primary" href="fasmNineMonths.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!----col-lg-12 LINK----->
        
        <!----------Suitable drinks LINK------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/suitable_drinks.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;margin-top: 26px;"><a href="page2fasmSuitableDrinks.php">উপযোগী পানীয়</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">আপনার শিশুর এখনও বয়স 12 মাস (প্রতি দিন অন্তত 500-600ml সূত্র) পর্যন্ত বুকের দুধ বা প্রধান পানীয় হিসাবে সূত্র দেওয়া উচিত.পুরো গরুর দুধ বয়স 12 মাস পর পর্যন্ত একটা ড্রিংক হিসেবে উপযুক্ত নয়, কিন্তু এটা 6 মাস পরে রান্না ব্যবহার করা যেতে পারে.সেমি-স্কিম মিল্ক বয়স 2 বসর শিশু এবং ...</p>
                <a class="btn btn-primary" href="page2fasmSuitableDrinks.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
            
        <!----------Keeping your baby safe when weaning (foods to avoid, food safety and choking) LINK-------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/weaning babies.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style="float:left; font-family:'Century Gothic','Muli',sans-serif;margin-top: 26px;"><a href="fasmKeepSafe.php">মাতৃদুগ্ধ ছাড়ানোর সময় শিশুর সুস্বাস্থ্য </a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">হিমায়িত খাদ্য সরাইয়া ফেলা, এবং refreeze না মনে রাখবেন. যতক্ষণ না এটা গরম সব পথ মাধ্যমে বংশীধ্বনিতুল্য হয় খাদ্য পুঙ্খানুপুঙ্খভাবে গরম করা উচিত. এটা ঠাণ্ডা করা যাক এবং আপনি আপনার শিশুর দেবার আগে তাপমাত্রা পরীক্ষা নিশ্চিত করা. খাদ্য একবারের বেশি reheated করা উচিত নয়. দূরে কোন অবশেষ খাদ্য খাওয়া না হয় নিক্ষেপ....</p>
                <a class="btn btn-primary" href="fasmKeepSafe.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----------Special groups (vegan and vegetarian diets, food allergies) LINK------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/special group.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;margin-top: 26px;"><a href="fasmSpecialGroup.php">বিশেষ গ্রুপ</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;">কিছু খাবার খাদ্য এলার্জি ট্রিগার হতে পারে এবং 6 মাস আগে কখনও দেওয়া উচিত হয় . এর মধ্যে রয়েছে...</p>
                <a class="btn btn-primary" href="fasmSpecialGroup.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->
        
        <!----------Supplements LINK--------->
        
        <div class="col-lg-12" style="margin-top:8px;margin-left: 15px;border:1px solid grey;float:left;">
            <a href="#"><img src="image/suppliments.jpg" class="img-responsive col-lg-2" style="margin-left:-30px;width:215px;float:left;height:180px;"></a>
            <div class="col-lg-9" style="margin-top:-23px;float:left;">
                <h2 style=" font-family:'Century Gothic','Muli',sans-serif;float:left;"><a href="fasmSuppliments.php">সম্পূরক</a></h2>
                <p style="float:left; font-family:'Century Gothic','Muli',sans-serif;margin-top: 26px;">আপনি এখনও স্তন্যপান করানো হয়, তাহলে এটি বাঞ্ছনীয় যে আপনি আপনার শিশুর 6 মাস বয়স থেকে ভিটামিন এবং D একটি সম্পূরক দিতে . ভিটামিন সহ ভিটামিন এ, সি এবং ডি কম আয়ের পরিবারের জন্য স্বাস্থ্যকর স্টার্ট স্কিম মাধ্যমে পাওয়া যায় ড্রপ. আরও বিস্তারিত জানার জন্য ...</p>
                <a class="btn btn-primary" href="fasmSuppliments.php" style="float:left;">আরও পড়ুন <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div><!------col-lg-12 LINK------->

    </div> <!------col-lg-9 class------->
    
</div><!------row class------->



<?php include_once("footer.php"); ?>