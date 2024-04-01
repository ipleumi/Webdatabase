<?php
require('connect.php');
$Off_ID=$_GET['Off_ID'];
$sql1="DELETE FROM `office` WHERE `office`.`Off_ID` = $Off_ID;";



$objek1 = mysqli_query($conn, $sql1);



if ($objek1) {
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='office.php';</script>";
} else {
    echo "Error : " . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>