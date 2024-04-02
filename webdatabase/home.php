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
                <li style="float:right;"><a href="login.php?logout='1'" style="color: white; ">ออกจากระบบ</a></li>
                
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
  $sql = 'SELECT COUNT(*) FROM `employee`';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  $objResult = mysqli_fetch_array($objQuery);

  echo "<div class='emp'style=' width: 450px; font-size: 23px;  margin: 0 auto; padding: 10px; border-radius: 10px; margin-top: 20px;'>จำนวนพนักงานทั้งหมด : ".$objResult[0]." คน</div>";

  ?>

  <?php
  require('connect.php');
  $sql = 'SELECT COUNT(*) FROM `office`';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  $objResult = mysqli_fetch_array($objQuery);

  echo "<div class='off' style=' width: 450px; font-size: 23px;  margin: 0 auto; padding: 10px; border-radius: 10px; margin-top: 20px;'>จำนวนสำนักงานทั้งหมด : ".$objResult[0]." สำนักงาน</div>";
  ?>
</div>

<div class="train">

<div class="headtrain" style=" width: 50%;
    background-color: #00CCFF;
    font-size: 23px;  
    margin: 0 auto; 
    padding: 10px; 
    color: white; 
    margin-top: 20px;">Training 2024</div>
<table>
<tr>
<th>TrainingID</th>
<th>Dates</th>
<th>TrainingName</th>
<th>Detail</th>
<th>Location</th>
<th>Lecturer</th>
<th>Office</th>
</tr>

<?php
require('connect.php');

$sql = "SELECT *
        FROM `training` 
        LEFT JOIN `office` ON training.Off_ID = Office.Off_ID
        WHERE `training`.`Dates` LIKE '2024%' ;";
$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
$objResult = mysqli_fetch_array($objQuery);

?>

<tr>

<td><?php echo $objResult['Trn_ID']; ?></td>
<td><?php echo $objResult['Dates']; ?></td>
<td><?php echo $objResult['Trn_name']; ?></td>
<td><?php echo $objResult['Detail']; ?></td>
<td><?php echo $objResult['Loc']; ?></td>
<td><?php echo $objResult['Lecturer']; ?></td>
<td><?php echo $objResult['Adds']; ?></td>
</tr>

</table>

</div>

<div class="department">
<div class="headdepartment" style=" width: 50%;
    background-color: #00CCFF;
    font-size: 23px;  
    margin: 0 auto; 
    padding: 10px; 
    color: white; 
    margin-top: 20px;">Department In Thai</div>
<table>
<tr>
<th>DeptID</th>
<th>Departmentname</th>
<th>Detail</th>
<th>Manager</th>
<th>Telephone</th>
<th>Office</th>
</tr>

<?php
require('connect.php');

$sql = "SELECT *
        FROM `department` 
        LEFT JOIN `dept_tel` ON department.Dept_ID = department.Dept_ID
        LEFT JOIN `office` ON department.Off_ID = office.Off_ID;";
$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
$objResult = mysqli_fetch_array($objQuery);

?>

<tr>
<td><?php echo $objResult['Dept_ID']; ?></td>
<td><?php echo $objResult['Dept_Name']; ?></td>
<td><?php echo $objResult['Detail']; ?></td>
<td><?php echo $objResult['Mng']; ?></td>
<td><?php echo $objResult['Tel']; ?></td>
<td><?php echo $objResult['Adds']; ?></td>
</tr>

</table>

</div>
</center>

<?php
mysqli_close($conn); // ปิดฐานข้อมูล
?>

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