<?php
$us=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="function.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Gentium+Book+Plus:ital,wght@1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="sidenav">
        <p id="title">She/Her</p>
        <a href="main.php?id=<?php 
                            echo $us;                        
                            ?>">Home</a>
        <a href="shopkeeper.php?id=<?php 
                            echo $us;                        
                            ?>">Medical Shop</a>
        <a href="gynaecologist.php?id=<?php 
                            echo $us;                        
                            ?>">Gynaecologist</a>
    </div>
    <div class="main">
        <h1>Safest Route</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0128734944374!2d79.1617560139956!3d12.971027918402413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad47a28d145d6f%3A0xd1465a973c93afe3!2sSJT%2C%20VIT%20University%2C%20Vellore%2C%20Tamil%20Nadu%20632014!5e0!3m2!1sen!2sin!4v1667321331991!5m2!1sen!2sin" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</body>
</html>