<?php
$servername="localhost";
$username="root";
$passsword="";
$dbname="women";
$conn=mysqli_connect($servername,$username,$passsword,$dbname);
$us=$_GET['id'];
$sql="INSERT INTO location(lat,lon,acc,User_ID,red,green,orange) values(0,0,0,'$us',0,1,0)";
mysqli_query($conn,$sql);
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
    <link rel="icon" href="https://st2.depositphotos.com/1823785/7267/i/600/depositphotos_72675443-stock-photo-many-people-hands-holding-colorful.jpg" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="https://fonts.googleapis.com/css2?family=Modern+Antiqua&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
</head>

<body>
    <div class="sidenav">
        <p id="title">She/Her</p>
        <a href="main.php?id=<?php 
                            echo $us;                        
                            ?>">Home</a>
        <a href="yellow.php?id=<?php 
                            echo $us;                        
                            ?>">Yellow Mode</a>
        <a href="red.php?id=<?php 
                            echo $us;                        
                            ?>">Red Mode</a>
    </div>
    <div class="main">
        <h1>Green Mode</h1>
        <h2>Do not Panic! We are there for you</h2>
        <div id="split">
                <div id="map">
                <div id="map1"></div>
                <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
                <script src="map.js"></script>
                </div>

                <div id="task">To share location with the registered family member
                <a href="whatsapp://send?phone=<?php $sql="SELECT Phone_no from family where User_ID='$us'"; echo $sql;?>&text=<?php echo $_COOKIE['loc']?>">Click</a>
                </div>
        </div>
    </div>
</body>
</html>
