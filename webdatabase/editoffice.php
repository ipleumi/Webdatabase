<?php
// Include the database connection file
require('connect.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve OfficeID from POST data
    $Off_ID = $_POST['Off_ID'];

    // Update employee data in the database
    $Mng = $_POST['Mng'];
    $Adds = $_POST['Adds'];
    $Tel = $_POST['Tel'];


    $sql = "UPDATE `office`
        LEFT JOIN `off_tel` ON `office`.`Off_ID` = `off_tel`.`Off_ID`
        SET 
            `office`.`Mng` = '{$_POST['Mng']}',
            `office`.`Adds` = '{$_POST['Adds']}',
            `off_tel`.`Tel` = '{$_POST['Tel']}'
        WHERE `office`.`Off_ID` = '$Off_ID'";

    // Execute the update query
    if(mysqli_query($conn, $sql)) {
        // Redirect to the page showing updated data
        header("Location: office.php");
        exit();
    } else {
        // Error handling if update fails
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// If form is not submitted, fetch Office data for display
$Off_ID = $_GET['Off_ID']; // Assuming Off_ID is passed via GET
$sql = "SELECT * 
        FROM `office` 
        LEFT JOIN `off_tel` ON office.Off_ID = off_tel.Off_ID 
        WHERE `office`.`Off_ID` = '$Off_ID'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/test.css">
<link rel="stylesheet" href="css/st.css">
<title>SITC HR THAI/office</title>
</head>
<body>
<div class="navbar">
    <div style="width: fit-content; height: fit-content">
        <a href="https://www.sitcthailand.com/th">
            <img src="css/logo.png" alt="logoweb" style="width:180px;height:45px;">
        </a>
    </div>

    <div>
        <ul>
            <li><a href="home.php">หน้าหลัก</a></li>
            <li><a href="employee.php">พนักงาน</a></li>
            <li><a class="active" href="office.php">สำนักงาน</a></li>
            <li><a href="addemp.php">เพิ่มข้อมูลพนักงาน</a></li>
            <li><a href="addoffice.php">เพิ่มข้อมูลสำนักงาน</a></li>
            <li style="float:right;"><a href="login.php?logout='1'" style="color: red;">ออกจากระบบ</a></li>
        </ul>
    </div>
</div> 

<div class="addinfo">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Populate input fields with fetched employee data -->
        
        <label for="Off_ID">OfficeID</label>
        <input type="text" id="Off_ID" name="Off_ID" value="<?php echo $row['Off_ID']; ?>" readonly>
        <label for="Mng">ManagerName</label>
        <input type="text" id="Mng" name="Mng" value="<?php echo $row['Mng']; ?>">
        <label for="Adds">Address</label>
        <input type="text" id="Adds" name="Adds" value="<?php echo $row['Adds']; ?>">
        <label for="Tel">OfficeTel</label>
        <input type="text" id="Tel" name="Tel" value="<?php echo $row['Tel']; ?>">


        <!-- Add more input fields for other office data -->
        <input type="submit" class="submit" value="Update">
        <a href="office.php" class="cancel">Cancel</a>
    </form>
</div>

<?php
// Close the database connection after all operations
mysqli_close($conn);
?>

</body>
</html>
