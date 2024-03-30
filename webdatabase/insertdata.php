<?php
require('connect.php');

$EmployeeID   = $_REQUEST['EmployeeID'];
$FirstName		  = $_REQUEST['FirstName'];
$LastName		  = $_REQUEST['LastName'];
$PositionID		  = $_REQUEST['PositionID'];
$SalaryID	  = $_REQUEST['SalaryID'];
$DepartmentID	  = $_REQUEST['DepartmentID'];
$OfficeID		  = $_REQUEST['OfficeID'];
$ContactInfo = $_REQUEST['ContactInfo'];
$StartDate = $_REQUEST['StartDate'];
$EmploymentStatus = $_REQUEST['EmploymentStatus'];


$sql = "
	INSERT INTO `employees` 
    (`EmployeeID`, `FirstName`, `LastName`, `PositionID`, `SalaryID`, `DepartmentID`, `OfficeID`, `ContactInfo`, `StartDate`, `EmploymentStatus`) 
    VALUES ('$EmployeeID', '$FirstName', '$LasttName', '$PositionID', '$SalaryID', '$DepartmentID', '$OfficeID', '$ContactInfo', '$StartDate', '$EmploymentStatus');";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
	echo "<alert>เพิ่มข้อมูลเรียบร้อยแล้ว</alert>";
} else {
	echo "<alert>Error : เกิดข้อผิดพลาด</alert>";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>