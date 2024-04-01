<?php
require('connect.php');

$Off_ID = $_POST['Off_ID'];
$Mng = $_POST['Mng'];
$Address = $_POST['Adds'];
$Tel = $_POST['Tel'];

$sql = "INSERT INTO `office` (`Off_ID`, `Mng`, `Adds`) VALUES ('$Off_ID', '$Mng', '$Address');";
$sql2 = "INSERT INTO `off_tel` (`Off_ID`, `Tel`) VALUES ('$Off_ID', '$Tel');";

$objQuery = mysqli_query($conn, $sql);
$objQuery2 = mysqli_query($conn, $sql2);

if ($objQuery && $objQuery2) {
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='office.php';</script>";
} else {
    echo "Error : " . $sql . $sql2 . "<br>" . mysqli_error($conn );
    echo "<script>alert('ไม่สามารถเพิ่มข้อมูลได้');</script>";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>