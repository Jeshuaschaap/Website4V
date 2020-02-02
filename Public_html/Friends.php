<!doctype html>
<html>
<head>
    <?php
        require "php/headinformation.php";
    ?>
</head>
<body>
<?php require "php/navbar.php"?>

<div class="textboxhead">
    <div class="textinfo">
        <h1 class="headtextinfo">The subject Computer science</h1>
        <div class="whiteline"></div>
        <br>
        <p>
            And more usefull information about my school
            <br>
            As I have already said I had to make this website as a assignment for our subject
            Computer science. But I also made this website because I like coding and I like to
            learn new things that are usefull for your future. The 3 links that you see a bit 
            further down will redirect you to the website of my school, to my assignments
            I had to make for computer science, and to the website of the computer science study we attend to. 
        </p>
    </div>
</div>

<!-- Here are some buttons-->
<div class="threeboxcontainer">
    <!-- first box-->
    <div class="firstbox">
        <h1 class="boxtitlefirst">Groene Hart Lyceum</h1>
        <br>
        <p class="boxtextfirst">This is the link to the highschool I go to!<br>
        You can click the button here to be redirected.</p>
        <br>
        <br>
        <a class="buttonlink" href="https://groenehartscholen.nl/lyceum" role="button">Groene Hart Lyceum</a>
    </div>


    <!-- second box -->
    <div class="secondbox">
        <h1 class="boxtitlesecond">My assignments</h1>
        <br>
        <p class="boxtextsecond">This is the link to my assignments that I
        had to make for computer science, enjoy!</p>
        <br>
        <br>
        <a class="buttonlinksecond" href="https://drive.google.com/open?id=1X_yYue8m3FrGn-NkKC6WZLXbMHvyceq4" role="button">My assignments on drive</a>
    </div>

    <!-- Third box-->
    <div class="thirdbox">
        <h1 class="boxtitlethird">Informatica actief</h1>
        <br>
        <p class="boxtextthird">This is the website of the computer science study we use in our lessons.</p>
        <br>
        <br>
        <a class="buttonlinkthird" href="https://moodle.informatica-actief.nl/login/index.php" role="button">Informatica actief</a>
    </div>
</div>
<?php include "php/footer.php"?>
</body>
</html>