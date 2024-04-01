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
                <li><a href="home.php">หน้าหลัก</a></li>
                <li><a href="employee.php">พนักงาน</a></li>
                <li><a href="office.php">สำนักงาน</a></li>
                <li><a  href="addemp.php">เพิ่มข้อมูลพนักงาน</a></li>
                <li><a class="active"href="addoffice.php">เพิ่มข้อมูลสำนักงาน</a></li>
                <li style="float:right;"><a href="login.php?logout='1'" style="color: white; ">ออกจากระบบ</a></li>
                
            </ul>
        </div>
    </div> 
<div class="addinfo">
<center>  
<form action="insertdata.php" method="post" style="margin-top: 20px;">
<div class ="form" >  
    <div> 
    <label for="fname" >EmployeeID:</label>
    <input type="text" id="fname" name="fname" value="" >
    <label for="lname" >Name:</label>
    <input type="text" id="lname" name="Last name" value="" >
    </div>

    <div> 
    <label for="fname" >EmployeeID:</label>
    <input type="text" id="fname" name="fname" value="" >
    <label for="lname" >Name:</label>
    <input type="text" id="lname" name="Last name" value="" >
    </div>

    <div> 
    <label for="fname" >EmployeeID:</label>
    <input type="text" id="fname" name="fname" value="" >
    <label for="lname" >Name:</label>
    <input type="text" id="lname" name="Last name" value="" >
    </div>

    <div style="display: inline-block; width: 45%; margin-left: 10px;">
        <input type="submit" value="Submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;"> 
    </div>
      

</form>

</center>

</div>



</body>
</html> 