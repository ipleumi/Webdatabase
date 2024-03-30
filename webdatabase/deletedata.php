
<?php

$delete_ID  = $_REQUEST['EmployeeID'];

require('connect.php');

$sql = '
    
    DELETE FROM `employees` WHERE `employees`.`EmployeeID` = '. $delete_ID .';';

$objQuery = mysqli_query($conn, $sql);
if ($objQuery) {
    echo "Record " . $delete_ID . " ได้ถูกลบเรียบร้อยแล้ว กดปุ่มเพื่อกลับไปยังหน้าหลัก";
} else {
    echo "Error : เกิดข้อผิดพลาด";
}

mysqli_close($conn); // ปิดฐานข้อมูล

?>
