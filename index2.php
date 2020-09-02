<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../website/css/bootstrap.css">
    <title>Contact form sent to mail</title>
</head>
<body>
<div class="container-fluid" style="background:#333">
    <div class="row">	
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body"  style="background:blue; color:#fff">				
        <h1 class="card-title text-center">Contact form sent to mail</h1>
        <form action="contact.php" method="post">
            <h3 class="card-title text-center">Fill This Form</h3>
            <label for="" class="form-group">Your Name : </label>
            <input type="text" class="form-control" name="yourname" id="" placeholder="Enter your name">
            <label for=""class="form-group">Email : </label>
            <input type="email" class="form-control" name="email" id="" placeholder="Enter your email">
            <label for=""class="form-group">Subject : </label>
            <input type="text" class="form-control" name="subject" id="" placeholder="Enter your subject">
            <label for=""class="form-group">Your Comments : </label>
            <textarea name="comments" class="form-control" id="" cols="40" rows="10" placeholder="What's your mind"></textarea><br>
            <input type="submit" name="" id="" value="Submit" class="btn btn-primary">
        </form>
    </div>
	<p>প্রোগ্রামিংয়ের জন্য তিন অ্যান্ড্রয়েড অ্যাপস – টেক শহরtechshohor.com › প্রোগ্রামিংয়ের-জন্য-তিন
এতদিন প্রোগ্রামিং বিষয়টি কম্পিউটারের মধ্যে সীমাবন্ধ ছিল। প্রোগ্রাম লেখার জন্য প্রোগ্রামাররা ডেক্সটপ কিংবা ল্যাপটপ ব্যবহার করতেন। এ জন্য ডেক্সটপ কিংবা ল্যাপটপের অপারেটিং সিস্টেম অনুযায়ী রয়েছে নানা ধরনের এডিটর, সফটওয়্যার, কম্পাইলার। স্মার্টফোনের ... প্রোগ্রামিং সোর্স কোড এডিটর অ্যাপ্লিকেশনের মধ্যে অন্যতম সেরা হিসাবে বিবেচিত ড্রয়েড এডিট। এটির সাহায্যে জাভা, পাইথন, রুবি, সিশার্প, এইচটিএমএল, জাভাস্ক্রিপ্ট, এসকি ...</p>
<p>১) পাইথন প্রোগ্রামিং - Daily Software Programdailysoftwareprogram.blogspot.com › blog-post
১৪ আগস্ট, ২০১৯ - একই ধরণের কাজ করার জন্য একাধিক প্রোগ্রামিং ভাষা ব্যবহার করা যেতে পারে, আবার একটি প্রোগ্রামিং ভাষা ব্যবহার করে বিভিন্ন সফটওয়্যার বা প্রোগ্রাম তৈরি করা যায় ... তবে অনেকদিন থেকে পাইথন চর্চা করছেন অথবা অন্য কোন ভাষায় দক্ষতা অর্জন করেছেন, তাঁদের উদ্দেশ্যে এটি লেখা হচ্ছে না। ... ওপরের কোডটি আমরা একটি ফাইলে সংরক্ষণ করে চালাতে পারি, অথবা পাইথন টার্মিনালে python লিখে পাইথন ইন্টারপ্রেটর চালু করে সেখানে লাইনগুলো পরপর লিখলে ...</p>
</div>
</div>
</div>
</div>
</body>
</html>


<?php

mail('selim@gmail.com','hello world','hello bangladesh','reza@gmail.com');
echo 'send success';

?>
