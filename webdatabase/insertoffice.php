<?php
require('connect.php');

$EmployeeID   = $_POST['EmployeeID'];
$FirstName		  = $_POST['FirstName'];
$LastName		  = $_POST['LastName'];
$PositionID		  = $_POST['PositionID'];
$SalaryID	  = $_POST['SalaryID'];
$DepartmentID	  = $_POST['DepartmentID'];
$OfficeID		  = $_POST['OfficeID'];
$ContactInfo = $_POST['ContactInfo'];
$StartDate = $_POST['StartDate'];
$EmploymentStatus = $_POST['EmploymentStatus'];
$Telephone = $_POST['Telephone'];

$sql = "
	INSERT INTO `employees` 
    (`EmployeeID`, `FirstName`, `LastName`, `PositionID`, `SalaryID`, `DepartmentID`, `OfficeID`, `ContactInfo`, `StartDate`, `EmploymentStatus`) 
    VALUES ('$EmployeeID', '$FirstName', '$LasttName', '$PositionID', '$SalaryID', '$DepartmentID', '$OfficeID', '$ContactInfo', '$StartDate', '$EmploymentStatus');";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='addoffice.php';</script>";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้');</script>";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>