<?php

require('connect.php');

$Off_ID = $_POST['Off_ID'];
$Mng = $_POST['Mng'];
$Address = $_POST['Adds'];
$Tel = $_POST['Tel'];

$sql = "UPDATE `office` SET `Mng` = '$Mng', `Adds` = '$Address' WHERE `Off_ID` = '$Off_ID'";

$objQuery = mysqli_query($conn, $sql);

if ($objQuery) {
    echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='office.php';</script>";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้');</script>";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>