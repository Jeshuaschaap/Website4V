<!doctype html>
<html>
<head>
    <?php
            $cssFiles = ["Font Awesome"];
            require "php/headinformation.php";
    ?>
    <style>
        :root {
        --pictextrow-height: 300px;
        }    
    </style>
</head>
<body>
<!--The navbar area starts here-->
<?php require "php/navbar.php"?>

<!--Here comes the header with information-->
<div class="textboxhead"> 
    <div class="textinfo">
        <h1 class="headtextinfo"> Some basic information!</h1>
        <div class="whiteline"></div>
        <br>
        <p>
            My name is Jeshua Timothy Schaap
            <br>
            I'm 15 years old and I live in Alphen aan den Rijn.
            I have a brother, his name is Thobian and he is 17 years old, I have got a dog and a couple of cats.
            I also like to play volleybal and play computer games, but I will come back to this later on. 
            My parents are divorced so I switch houses a lot, but I'm used to it by now. In this project I will be telling some
            stuff about myself and about my friends. I hope you enjoy! And dont forget to ask if you have any questions regarding
            me or my website!
        </p>
    </div>
</div>

<!--And here comes the main information -->

<!-- First row-->    
<div class="pictextcolumn">
    <div class="pictext-row bgwhite"> 
        <div class="pictext-row-text heightAdjustMaster textone">  
            <div class="rowtitle">
                First of all...
            </div>
            <div class="blackline"></div>
            This is my brother, Thobian Jeremy Schaap. As i said, he is 17 years old and also graduated on Groene Hart Lyceum. 
            Later this year he will be attending the TIO in Rotterdam, he will be studying Hotel and Event managing. I started with
            my brother because he is the person I have know for the longest period of time, obviously.
        </div>
        <div class="pictext-row-img-wrapper heightAdjustChild">
            <div class="pictext-row-img" id="pic1"></div>
        </div>
    </div>
    <div class="pictext-row bglightblack">
        <div class="pictext-row-img-wrapper  heightAdjustChild">
            <div class="pictext-row-img" id="pic2"></div>
        </div>    

        <div class="pictext-row-text heightAdjustMaster texttwo">
            <div class="rowtitle">
                My classmates and me!
            </div>
            <div class="whitelinetwo"></div>
            These are some of my classmates that I attend class with. In this image we had to visit a Church and make a report of that church,
            we also had to descripe how we experienced everything. Initially I wanted to use our classphoto for my website, but unfortunately I
            lost that photo. So here we are!
        </div>
    </div>
    <div class="pictext-row bgwhite">
        <div class="pictext-row-text heightAdjustMaster textone">
            <div class="rowtitle">
                Things I do in my free time...
            </div>
            <div class="blackline"></div>
            I like to do a lot of different things in my freetime, things like volleybal, gaming, making music and more...
            Volleybal for me is nothing but stress-relief. When I play volleybal I can empty my head and can just be myself, and 
            thats what I like about the sport. I also like programming and gaming a lot, because this is just relaxing and it calms me. 
        </div>
        <div class="pictext-row-img-wrapper heightAdjustChild">
            <div class="pictext-row-img" id="pic3"></div>
        </div>
    </div>
    <div class="pictext-row bglightblack">
        <div class="pictext-row-img-wrapper heightAdjustChild">
            <div class="pictext-row-img" id="pic4"></div>
        </div>
        <div class="pictext-row-text heightAdjustMaster texttwo">
            <div class="rowtitle">
                Making music with friends!
            </div>
            <div class="whitelinetwo"></div>
            I started playing guitar when I was really young, but I quit when I was 12, after that I only played when I felt 
            like it. But recently I started making music with a couple of friends in school and outside of school. Music is just like
            gaming and volleybal for me, it's stress-relief and it makes me happy. Both of my parents are artist and make music quite
            a lot, and my brother loves to make music too. So you can say I have a very musically oriented family. Fun-fact: the guitar
            you see on the left is my actual electric guitar, I also have 2 different ones.
        </div>
    </div>
</div>

<!-- Social media -->
<div class="socialmediafoot">
<div class="foottitle">My social media!</div>
<br>
<br>
<br>

<!-- Box one -->
<center>
<div class="snapchat">Snapchat</div>
<a href="https://www.snapchat.com/add/jeshua2004" target="_blank" class="fab fa-snapchat-ghost"></a>

<br>
<br>
<br>

<div class="instagram">Instagram</div>
<a href="https://www.instagram.com/jeshua0172._/?hl=nl" target="_blank" class="fab fa-instagram"></a>

<br>
<br>
<br>

<div class="email">Gmail</div>
<a href="https://mail.google.com/mail/u/0/?view=cm&amp;fs=1&amp;to=37007@youscope.nl&amp;tf=1" target="_blank" class="fab fa-google"></a>
</center>
<br>

<script src="js/heightadjust.js"></script>
<?php include "php/footer.php" ?>
</body>
</html>