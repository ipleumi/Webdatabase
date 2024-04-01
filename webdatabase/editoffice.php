<?php
include 'connect.php';
$Off_ID=$_GET['Off_ID'];
$sql="SELECT * FROM `office` WHERE `Off_ID` = $Off_ID;
    SELECT `Off_tel` FROM `off_tel` WHERE `Off_ID` = $Off_ID
";
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
                <li><a href="addemp.php">เพิ่มข้อมูลพนักงาน</a></li>
                <li><a class="active" href="addoffice.php">เพิ่มข้อมูลสำนักงาน</a></li>
                <li style="float:right;"><a href="login.php?logout='1'" style="color: red; ">ออกจากระบบ</a></li>
                
            </ul>
        </div>
    </div> 

<div class="addinfo">
    <form action="updatedata.php" method="post">
        
        <label for="Off_ID">OfficeID:</label>
        <input type="text" id="Off_ID" name="Off_ID"  readonly value="<?php echo $row['Off_ID']; ?>" >
        <label for="Mng">ManagerName:</label>
        <input type="text" id="Mng" name="Mng" value="<?php echo $row['Mng']; ?>" >
        <label for="Adds">Address:</label>
        <input type="text" id="Adds" name="Adds" value="<?php echo $row['Adds']; ?>" >
        <label for="Tel">OfficeTel:</label>
        <input type="text" id="Tel" name="Tel" value="<?php echo $row['Tel']; ?>" >

        <input type="submit" value="Update">
        <a href="office.php" class="cancel">Cancel</a>
    </form>
    

</div>



</body>
</html> 