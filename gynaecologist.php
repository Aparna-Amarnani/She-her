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
                            ?>">Pharmacy</a>
        <a href="safest.php?id=<?php 
                            echo $us;                        
                            ?>">Safest Route</a>
    </div>
    <div class="main">
        <h1>Hospitals Near You</h1>
        <div id="map"></div>
   

        <script src="mapgyno.js"></script>
       
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALxPdJ-EorHsBH-2aOW4I9mM-Ym0-esDk&libraries=places&callback=initMap" async defer></script>
       
    </div>
</body>
</html>