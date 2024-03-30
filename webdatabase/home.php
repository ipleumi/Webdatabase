<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/test.css">
<link rel="stylesheet" href="css/st.css">
</head>
<body>
<div class="navbar">
        <div style=" width:fit-content ; height:fit-content">
            <a href="https://www.sitcthailand.com/th">
             <img src="css/logo.png" alt="logoweb" style="width:180px;height:45px;">
            </a>
            
        </div>

        <div>
            <ul>
                <li><a class="active"href="home.php">หน้าหลัก</a></li>
                <li><a href="employee.php">พนักงาน</a></li>
                <li><a href="office.php">สำนักงาน</a></li>
                <li><a href="addemp.php">เพิ่มข้อมูลพนักงาน</a></li>
                <li><a href="addoffice.php">เพิ่มข้อมูลสำนักงาน</a></li>
                <li style="float:right;"><a href="login.php?logout='1'" style="color: red; ">ออกจากระบบ</a></li>
                
            </ul>
        </div>
    </div> 
<center>
<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="css/im2.jpg" style="width:900px; height:450px;">
  <div class="text">Best Service Consulting For Bussiness</div>
</div>

<div class="mySlides fade">
  
  <img src="css/im3.jpg" style="width:900px;height:450px;">
  <div class="text">Comprehensive Shipping Solutions</div>
</div>

<div class="mySlides fade">
  
  <img src="css/im1.jpg" style="width:900px;height:450px;">
  <div class="text">SITC, Aiming Higher In Asia</div>
</div>

</div>


<div style="text-align:center; background-color: #0d0b7d;width:900px;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br>
<div class="allinfo" >
  <?php
  require('connect.php');
  $sql = 'SELECT count(*) FROM `employees` WHERE 1';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  $objResult = mysqli_fetch_array($objQuery);

  echo "<div class='emp'style=' width: 450px; font-size: 23px;  margin: 0 auto; padding: 10px; border-radius: 10px; margin-top: 20px;'>จำนวนพนักงานทั้งหมด : ".$objResult[0]." คน</div>";


  mysqli_close($conn); // ปิดฐานข้อมูล
  ?>

  <?php
  require('connect.php');
  $sql = 'SELECT count(*) FROM `employees` WHERE 1';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  $objResult = mysqli_fetch_array($objQuery);

  echo "<div class='emp'style=' width: 450px; font-size: 23px;  margin: 0 auto; padding: 10px; border-radius: 10px; margin-top: 20px;'>จำนวนสำนักงานทั้งหมด : ".$objResult[0]." ที่</div>";


  mysqli_close($conn); // ปิดฐานข้อมูล
  
  ?>
</div>
</center>



<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 