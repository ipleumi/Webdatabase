<?php
include 'connect.php';
$EmployeeID=$_GET['EmployeeID'];
$sql="SELECT * FROM employees WHERE EmployeeID=$EmployeeID";
$result=mysqli_query($conn,$sql);
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
                <li><a href="employee.php">พนักงาน</a></li>
                <li><a href="office.php">สำนักงาน</a></li>
                <li><a class="active" href="addemp.php">เพิ่มข้อมูลพนักงาน</a></li>
                <li><a href="addoffice.php">เพิ่มข้อมูลสำนักงาน</a></li>
                <li style="float:right;"><a href="login.php?logout='1'" style="color: red; ">ออกจากระบบ</a></li>
                
            </ul>
        </div>
    </div> 

<div class="addinfo">
    <form action="insertdata.php" method="post">
        
        <label for="EmployeeID">EmployeeID:</label><br>
        <input type="text" id="EmployeeID" name="EmployeeID" value= "<?=$row['EmployeeID']?>" ><br>

        <label for="FName">First name:</label><br>
        <input type="text" id="FName" name="FName" value="<?=$row['FName']?>"><br>

        <label for="LName">Last name:</label><br>
        <input type="text" id="LName" name="LName" value="<?=$row['LName']?>"><br>

        <label for="PositionID">PositionID:</label><br>
        <input type="text" id="Position ID" name="Position ID" value="<?=$row['Position ID']?>"><br>

        <label for="SalaryID">SalaryID:</label><br>
        <input type="text" id="SalaryID" name="SalaryID" value="<?=$row['SalaryID']?>"><br>

        <label for="DepartmentID">DepartmentID:</label><br>
        <input type="text" id="DepartmentID" name="DepartmentID" value="<?=$row['DepartmentID']?>"><br>

        <label for="OfficeID">OfficeID:</label><br>
        <input type="text" id="OfficeID" name="OfficeID" value="<?=$row['OfficeID']?>"><br>

        <label for="ContactInfo">ContactInfo:</label><br>
        <input type="text" id="ContactInfo" name="ContactInfo" value="<?=$row['ContactInfo']?>"><br>

        <label for="StartDate">StartDate:</label><br>
        <input type="date" id="StartDate" name="StartDate" value="<?=$row['StartDate']?>"><br>

        
        <input type="submit" value="Submit">
    </form>
    

</div>



</body>
</html> 