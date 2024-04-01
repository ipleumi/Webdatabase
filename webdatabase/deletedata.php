<?php
require('connect.php');

// Sanitize input values
$EmpNos = mysqli_real_escape_string($conn, $_GET['Emp_ID']);

// Execute queries
$sql1 = "DELETE FROM `emp_his` WHERE `His_ID` = '$EmpNos';";
$sql2 = "DELETE FROM `emp_tel` WHERE `Emp_ID` = '$EmpNos';";
$sql3 = "DELETE FROM `employee` WHERE `Emp_ID` = '$EmpNos';";

// Execute the first query
$result1 = mysqli_query($conn, $sql1);

// Check if the first query was successful
if ($result1) {
    // Execute the second query
    $result2 = mysqli_query($conn, $sql2);

    // Check if the second query was successful
    if ($result2) {
        // Execute the third query
        $result3 = mysqli_query($conn, $sql3);

        // Check if the third query was successful
        if ($result3) {
            echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
            echo "<script>window.location='employee.php';</script>";
        } else {
            // Output error message and SQL error for the third query
            echo "Error: " . mysqli_error($conn);
            echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
        }
    } else {
        // Output error message and SQL error for the second query
        echo "Error: " . mysqli_error($conn);
        echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
    }
} else {
    // Output error message and SQL error for the first query
    echo "Error: " . mysqli_error($conn);
    echo "<script>alert('ไม่สามารถลบข้อมูลได้');</script>";
}

mysqli_close($conn); // Close the database connection
?>
