<?php

require('connect.php');

$Emp_ID   = $_POST['EmployeeID'];
$Name		  = $_POST['Name'];
$Start_date		  = $_POST['Start_date'];
$Sal		  = $_POST['Sal'];
$Emp_status	  = $_POST['Emp_status'];
$Email	  = $_POST['Email'];
$Adds		  = $_POST['Adds'];
$His_ID = $_POST['His_ID'];
$Pos_ID = $_POST['Pos_ID'];
$Dept_ID = $_POST['Dept_ID'];
$Off_ID = $_POST['Off_ID'];

$sql = "UPDATE `employee` SET `Name` = '$Name', `Start_date` = '$Start_date', `Sal` = '$Sal', `Emp_status` = '$Emp_status', `Email` = '$Email', `Adds` = '$Adds' WHERE `employee`.`Emp_ID` = $Emp_ID;";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='employee.php';</script>";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>