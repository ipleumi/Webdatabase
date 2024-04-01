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
$Tel = $_POST['Tel'];
$Exps = $_POST['Exps'];
$Reason = $_POST['Reason'];
$Dept = $_POST['Dept'];
$Pos = $_POST['Pos'];




$sql1 = "INSERT INTO `emp_his` (`His_ID`, `Exps`, `Reason`, `Dept`, `Pos`) VALUES ('$His_ID', '$Exps', '$Reason', '$Dept', '$Pos');";
$sql2 = "INSERT INTO `employee` (`Emp_ID`, `Name`, `Start_date`, `Sal`, `Emp_status`, `Email`, `Adds`, `His_ID`, `Pos_ID`, `Dept_ID`, `Off_ID`) VALUES ('$Emp_ID', '$Name', '$Start_date', '$Sal', '$Emp_status', '$Email', '$Adds', '$His_ID', '$Pos_ID', '$Dept_ID', '$Off_ID');";
$sql3 = "INSERT INTO `emp_tel` (`Emp_ID`, `Tel`) VALUES ('$Emp_ID', '$Tel');";


$objQuery1 = mysqli_query($conn, $sql1);
$objQuery2 = mysqli_query($conn, $sql2);
$objQuery3 = mysqli_query($conn, $sql3);


if ($objQuery1 && $objQuery2 && $objQuery3) {
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='employee.php';</script>";
} else {
    echo "Error : " . $sql1 . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้');</script>";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>
