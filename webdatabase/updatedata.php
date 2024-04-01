<?php

require('connect.php');

$Emp_ID   = $_POST['EmployeeID'];
$Name   = $_POST['Name'];
$Start_date	 = $_POST['Start_date'];
$Sal		  = $_POST['Sal'];
$Emp_status	  = $_POST['Emp_status'];
$Email	  = $_POST['Email'];
$Adds		  = $_POST['Adds'];
$His_ID = $_POST['His_ID'];
$Pos_ID = $_POST['Pos_ID'];
$Dept_ID = $_POST['Dept_ID'];
$Off_ID = $_POST['Off_ID'];
$Tel = $_POST['Tel'];
$Exps = $_POST['Exps'];
$Reason = $_POST['Reason'];
$Dept = $_POST['Dept'];
$Pos = $_POST['Pos'];

$sql1 = "UPDATE `emp_his` SET `Exps` = '$Exps', `Reason` = '$Reason', `Dept` = '$Dept', `Pos` = '$Pos' WHERE `His_ID` = '$His_ID';";
$sql2 = "UPDATE `employee` SET `Name` = '$Name', `Start_date` = '$Start_date', `Sal` = '$Sal', `Emp_status` = '$Emp_status', `Email` = '$Email', `Adds` = '$Adds' WHERE `Emp_ID` = '$Emp_ID';";
$sql3 = "UPDATE `emp_tel` SET `Tel` = '$Tel' WHERE `Emp_ID` = '$Emp_ID';";

$objQuery1 = mysqli_query($conn, $sql1);
$objQuery2 = mysqli_query($conn, $sql2);
$objQuery3 = mysqli_query($conn, $sql3);

if ($objQuery1 && $objQuery2 && $objQuery3) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='employee.php';</script>";
} else {
    echo "Error : " . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>