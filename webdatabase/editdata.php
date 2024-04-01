<?php
// Include the database connection file
require('connect.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve EmployeeID from POST data
    $EmployeeID = $_POST['EmployeeID'];

    // Update employee data in the database
    $Name = $_POST['Name'];
    $Start_date = $_POST['Start_date'];
    $Sal = $_POST['Sal'];
    $Emp_status = $_POST['Emp_status'];
    $Email = $_POST['Email'];
    $Adds = $_POST['Adds'];
    $Pos_ID = $_POST['Pos_ID'];
    $Dept_ID = $_POST['Dept_ID'];
    $Off_ID = $_POST['Off_ID'];
    $Tel = $_POST['Tel'];
    $Exps = $_POST['Exps'];
    $Reason = $_POST['Reason'];
    $Dept = $_POST['Dept'];
    $Pos = $_POST['Pos'];


    $sql = "UPDATE `employee`
        LEFT JOIN `emp_tel` ON `employee`.`Emp_ID` = `emp_tel`.`Emp_ID`
        LEFT JOIN `emp_his` ON `employee`.`His_ID` = `emp_his`.`His_ID`
        SET 
            `employee`.`Name` = '{$_POST['Name']}',
            `employee`.`Start_date` = '{$_POST['Start_date']}',
            `employee`.`Sal` = '{$_POST['Sal']}',
            `employee`.`Emp_status` = '{$_POST['Emp_status']}',
            `employee`.`Email` = '{$_POST['Email']}',
            `employee`.`Adds` = '{$_POST['Adds']}',
            `employee`.`Pos_ID` = '{$_POST['Pos_ID']}',
            `employee`.`Dept_ID` = '{$_POST['Dept_ID']}',
            `employee`.`Off_ID` = '{$_POST['Off_ID']}',
            `emp_tel`.`Tel` = '{$_POST['Tel']}',
            `emp_his`.`Exps` = '{$_POST['Exps']}',
            `emp_his`.`Reason` = '{$_POST['Reason']}',
            `emp_his`.`Dept` = '{$_POST['Dept']}',
            `emp_his`.`Pos` = '{$_POST['Pos']}'
        WHERE `employee`.`Emp_ID` = '$EmployeeID'";

    // Execute the update query
    if(mysqli_query($conn, $sql)) {
        // Redirect to the page showing updated data
        header("Location: employee.php");
        exit();
    } else {
        // Error handling if update fails
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// If form is not submitted, fetch employee data for display
$EmployeeID = $_GET['Emp_ID']; // Assuming Emp_ID is passed via GET
$sql = "SELECT * 
        FROM `employee` 
        LEFT JOIN `emp_tel` ON employee.Emp_ID = emp_tel.Emp_ID 
        LEFT JOIN `emp_his` ON employee.His_ID = emp_his.His_ID
        WHERE `employee`.`Emp_ID` = '$EmployeeID'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/test.css">
<link rel="stylesheet" href="css/st.css">
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
            <li><a class="active" href="employee.php">พนักงาน</a></li>
            <li><a href="office.php">สำนักงาน</a></li>
            <li><a href="addemp.php">เพิ่มข้อมูลพนักงาน</a></li>
            <li><a href="addoffice.php">เพิ่มข้อมูลสำนักงาน</a></li>
            <li style="float:right;"><a href="login.php?logout='1'" style="color: red;">ออกจากระบบ</a></li>
        </ul>
    </div>
</div> 

<div class="addinfo">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <!-- Populate input fields with fetched employee data -->
        <div>
        <label for="EmployeeID">EmployeeID</label>
        <input type="text" id="EmployeeID" name="EmployeeID" readonly value="<?php echo $row['Emp_ID']; ?>">
        <label for="Name">Name</label>
        <input type="text" id="Name" name="Name" value="<?php echo $row['Name']; ?>">
        </div>

        <div>
        <label for="Start_date">StartDate</label>
        <input type="date" id="Start_date" name="Start_date" value="<?php echo $row['Start_date']; ?>">
        <label for="Sal">Salary</label>
        <input type="text" id="Sal" name="Sal" value="<?php echo $row['Sal']; ?>">
        </div>
        
        <div>
        <label for="Tel">Telephone</label>
        <input type="text" id="Tel" name="Tel" value="<?php echo $row['Tel']; ?>">
        <label for="Emp_status">EmployeeStatus</label>
        <input type="text" id="Emp_status" name="Emp_status" value="<?php echo $row['Emp_status']; ?>">
        </div>

        <div>
        <label for="Email">Email</label>
        <input type="text" id="Email" name="Email" value="<?php echo $row['Email']; ?>">
        <label for="Adds">Address</label>
        <input type="text" id="Adds" name="Adds" value="<?php echo $row['Adds']; ?>">
        </div>

        <div>
        <label for="Pos_ID">PositionID</label>
        <input type="text" id="Pos_ID" name="Pos_ID" value="<?php echo $row['Pos_ID']; ?>">
        <label for="Dept_ID">DepartmentID</label>
        <input type="text" id="Dept_ID" name="Dept_ID" value="<?php echo $row['Dept_ID']; ?>">
        </div>

        <div>
        <label for="His_ID">HistoryID</label>
        <input type="text" id="His_ID" name="His_ID" value="<?php echo $row['His_ID']; ?>">
        <label for="Off_ID">OfficeID</label>
        <input type="text" id="Off_ID" name="Off_ID" value="<?php echo $row['Off_ID']; ?>">
        </div>
        
        <div>
        <label for="Exps">Experience</label>
        <input type="date" id="Exps" name="Exps" value="<?php echo $row['Exps']; ?>">
        <label for="Reason">Reason</label>
        <input type="text" id="Reason" name="Reason" value="<?php echo $row['Reason']; ?>">
        </div>

        <div>
        <label for="Dept">Department</label>
        <input type="text" id="Dept" name="Dept" value="<?php echo $row['Dept']; ?>">
        <label for="Pos">Position</label>
        <input type="text" id="Pos" name="Pos" value="<?php echo $row['Pos']; ?>">
        </div>


        <!-- Add more input fields for other employee data -->
        <input type="submit" value="Update">
        <a href="employee.php" class="cancel">Cancel</a>
    </form>
</div>

<?php
// Close the database connection after all operations
mysqli_close($conn);
?>

</body>
</html>
