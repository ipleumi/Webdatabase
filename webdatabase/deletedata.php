<?php
require('connect.php');
$EmpNos=$_GET['Emp_ID'];
$sql="DELETE FROM `employees` WHERE `employees`.`Emp_ID` = $EmpNos; 
DELETE FROM `emp_tel` WHERE `emp_tel`.`Emp_ID` = $EmpNos;
";
if (mysqli_query($conn,$sql)) {
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
    echo "<script>window.location='employee.php';</script>";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>
