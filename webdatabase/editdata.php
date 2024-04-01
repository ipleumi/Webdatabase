<?php
require('connect.php');
$EmployeeID=$_POST['Emp_ID'];
$sql="SELECT * 
    FROM `employee` 
    INNER JOIN `emp_tel` 
    ON employee.Emp_ID = emp_tel.Emp_ID 
    INNER JOIN `emp_his` 
    ON employee.His_ID = emp_his.His_ID
    WHERE `employee`.`Emp_ID` = '$EmployeeID';";

$result=mysqli_query($conn,$sql);
//error
if(!$result){
    echo 'error' . mysqli_error($conn);
}



$row=mysqli_fetch_array($result);

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
        <div style=" width:fit-content ; height:fit-content">
            <a href="https://www.sitcthailand.com/th">
             <img src="css/logo.png" alt="logoweb" style="width:180px;height:45px;">
            </a>
            
        </div>

        <div>
            <ul>
                <li><a href="home.php">หน้าหลัก</a></li>
                <li><a class="active" href="employee.php">พนักงาน</a></li>
                <li><a href="office.php">สำนักงาน</a></li>
                <li><a  href="addemp.php">เพิ่มข้อมูลพนักงาน</a></li>
                <li><a href="addoffice.php">เพิ่มข้อมูลสำนักงาน</a></li>
                <li style="float:right;"><a href="login.php?logout='1'" style="color: red; ">ออกจากระบบ</a></li>
                
            </ul>
        </div>
    </div> 
<center>
<div class="addinfo">
    <form action="updatedata.php" method="post">
        
        <label for="EmployeeID">EmployeeID:</label>
        <input type="text" id="EmployeeID" name="EmployeeID"  readonly value="<?php echo $row['Emp_ID']; ?>" >
        <label for="Name">Name:</label>
        <input type="text" id="Name" name="Name" value="<?php echo $row['Name']; ?>" >
        <label for="Start_date">StartDate:</label>
        <input type="date" id="Start_date" name="Start_date" value="<?php echo $row['Start_date']; ?>" >
        <label for="Sal">Salary:</label>
        <input type="text" id="Sal" name="Sal" value="<?php echo $row['Sal']; ?>" >
        <label for="Emp_status">EmployeeStatus:</label>
        <input type="text" id="Emp_status" name="Emp_status" value="<?php echo $row['Emp_status']; ?>" >
        <label for="Email">Email:</label>
        <input type="text" id="Email" name="Email" value="<?php echo $row['Email']; ?>" >
        <label for="Adds">Address:</label>
        <input type="text" id="Adds" name="Adds" value="<?php echo $row['Adds']; ?>" >
        <label for="His_ID">HistoryID:</label>
        <input type="text" id="His_ID" name="His_ID" readonly value="<?php echo $row['His_ID']; ?>" >
        <label for="Pos_ID">PositionID:</label>
        <input type="text" id="Pos_ID" name="Pos_ID"  value="<?php echo $row['Pos_ID']; ?>" >
        <label for="Dept_ID">DepartmentID:</label>
        <input type="text" id="Dept_ID" name="Dept_ID"  value="<?php echo $row['Dept_ID']; ?>" >
        <label for="Off_ID">OfficeID:</label>
        <input type="text" id="Off_ID" name="Off_ID"  value="<?php echo $row['Off_ID']; ?>" >
        <label for="Tel">Telephone:</label>
        <input type="text" id="Tel" name="Tel" value="<?php echo $row['Tel']; ?>" >
        <label for="Exps">Experience:</label>
        <input type="date" id="Exps" name="Exps" value="<?php echo $row['Exps']; ?>" >
        <label for="Reason">Reason:</label>
        <input type="text" id="Reason" name="Reason" value="<?php echo $row['Reason']; ?>" >
        <label for="Dept">Department:</label>
        <input type="text" id="Dept" name="Dept" value="<?php echo $row['Dept']; ?>" >
        <label for="Pos">Position:</label>
        <input type="text" id="Pos" name="Pos" value="<?php echo $row['Pos']; ?>" >

        <input type="submit" value="update">
        <a href="employee.php" class="cancel">Cancel</a>
    </form>
    

</div>

</center>


</body>
</html> 