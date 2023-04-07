<?php
session_start();
$_SESSION['user'] =$_GET['id'];
$e=$_GET['id'];
$servername="localhost";
$username="root";
$passsword="";
$dbname="women";
$conn=mysqli_connect($servername,$username,$passsword,$dbname);
if (isset($_GET["sign"]))
{

$us= $_GET['id']; 
$dob= $_GET['dob']; 
$pass=$_GET['pass'];
$email = $_GET['email']; 
$phno= $_GET['phno']; 
$name=$_GET['name'];
$address= $_GET['address']; 
$reltel= $_GET['reltel']; 
$reladdress=$_GET['reladdress'];
$relation = $_GET['relation']; 
$relname= $_GET['relname']; 
$sql="INSERT INTO user(Email_ID,DOB,Phone_no,User_ID,password,Name,Address) VALUES('$email','$dob','$phno','$us','$pass','$name','$address')";
$sql1="INSERT INTO family(Phone_no,User_ID,Address,relation,Name) VALUES('$reltel','$us','$reladdress','$relation','$relname')";
if (mysqli_query($conn, $sql)&&mysqli_query($conn, $sql1)) {
  echo '<script type="text/javascript">alert("'.$name.'");</script>';
} 
else{
exit();
}
fun($us);
} 
elseif((isset($_GET["userlog"])))
{
  $us = $_GET['id'];  
  $pass=$_GET['pass'];
  $sql="SELECT * FROM user where User_ID='$us' AND password='$pass'";
  
  $result = mysqli_query($conn,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check)){
    $r="Welcome"." ".$us;
    echo '<script type="text/javascript">alert("'.$r.'");</script>';
  }
  else{
   exit();
   }
   fun($us);
}
elseif((isset($_GET["rellog"])))
{
  $us = $_GET['id'];  
  $name=$_GET['name'];
  $sql="SELECT * FROM family where User_ID='$us' AND name='$name'";
  $result = mysqli_query($conn,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check)){
    $r="Welcome"." ".$us;
    echo '<script type="text/javascript">alert("'.$r.'");</script>';
  }
  else{
   exit();
   }
   fun($us);
}
function fun($us)
{
  $_SESSION['user'] = $us;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Inter:wght@400;600;700&family=Poppins:wght@100;500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Gentium+Book+Plus:ital,wght@1,700&display=swap" rel="stylesheet">  
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="top">
        <nav class="navbar">
            <p id="name">She/Her</p>
           <p id="exit"><a href="exit.php?<?php echo $_SESSION['user']?>">Log Out</a></p>
           <p id="right"><a href="right.php">Know Your Rights</a></p>
        </nav>
        <h1>
        <p  class="typewrite" data-period="1000" data-type='[ "I am a Mother.", "I am a Sister.", "I am a Daughter.", "I am a Women.", "Together We Can." ]'>
        <span class="wrap"></span>
        </p>
        <script src="index.js"></script>
        </h1>
    </div>
    <div class="main">
    <div class="contents">
        <h2 class="content--heading">Emergency Buttons</h2>
        <ul class="content--button">
        <a href="green.php?id=<?php echo $_SESSION['user'];?>" name="green"><li class="button" id="green" >Green Mode</li></a>
        <a href="yellow.php?id=<?php echo $_SESSION['user'];?>" name="orange"><li class="button" id="yellow">Yellow Mode</li></a>
        <a href="red.php?id=<?php echo $_SESSION['user'];?>" name="red"><li class="button" id="red">Red Mode</li></a>
        </ul>
        <ul class="content--text">
            <li class="text" id="text--green" >Share location with registered emergency number</li>
            <li class="text" id="text--yellow">Share location of the user along with a call to the registered emergency number</li>
            <li class="text" id="text--red">Make a call to  women help centre along with location. Send an alert and location to family members.</li>
        </ul>
       
    </div>

    <div class="functionalities">
    <h3 class="content--heading" id="func--heading">Functionalities</h3>
    <div class="func--text">
        <div class="func" id="Gyno"><img src="gynaecologist.gif" alt=""><a href="gynaecologist.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>"><button>Gynecologist</button></a></div>
        <div class="func" id="Med"><img src="medicine.gif" alt=""><a href="shopkeeper.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>"><button>Medical Shop</button></a></div>
        <div class="func" id="Safest"> <img src="route.gif" alt=""> <a href="safest.php?id=<?php 
                            echo $_SESSION['user'];                        
                            ?>"><button>Safest Route</button></a></div>
    </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="content">
              <div class="left-side">
                <div class="phone details">
                  <i class="fas fa-phone-alt"></i>
                  <div class="topic">Phone</div>
                  <div class="text-one">+91 70031748769</div>
                  <div class="text-two">+91 98310060765</div>
                </div>
                <div class="email details">
                  <i class="fas fa-envelope"></i>
                  <div class="topic">Email</div>
                  <div class="text-one">aparnaamarnani03@gmail.com</div>
                  <div class="text-two">oishipoddar@gmail.com</div>
                </div>
              </div>
              <div class="right-side">
                <div class="topic-text">Send us a message</div>
              <form action="" method="post">
                <div class="input-box">
                  <input type="text" placeholder="Enter your name" name="Name">
                </div>
                <div class="input-box">
                  <input type="text" placeholder="Enter your email" name="Email">
                </div>
                <div class="input-box message-box">
                  <textarea name="message-box" id="message-box" cols="30" rows="10" placeholder="Enter your message" name="Message"></textarea>
                </div>
                <div class="subbutton">
                  <input type="submit" name="consub" value="Send Now" >
                </div>
              </form>
            </div>
            </div>
          </div>
    </div>
  </div>
        <?php
        if (isset($_POST["consub"]))
        {

        $name = $_POST['Name']; 
        $email= $_POST['Email']; 
        $message=$_POST['Message'];

        $sql="INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
        if (mysqli_query($conn, $sql)) {
        echo '<script>alert("Your Message has been send!!")</script>';
        } 
        }
        ?>
    <div class="footer">
        <p>Made with  <span style="color:red; font-size:20px">&hearts;</span> by Aparna, Oishi and Sasmita</p>  
    </div>
</body>
</html>