

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
                <li style="float:right;"><a href="login.php?logout='1'" style="color: white; ">ออกจากระบบ</a></li>
                
            </ul>
        </div>
</div> 

<div class="addinfo">
<center>  
<form action="insertdata.php" method="post" style="margin-top: 20px;">
<div class ="form" >  
    <div> 
    <label for="EmployeeID" >EmployeeID:</label>
    <input type="text" id="EmployeeID" name="EmployeeID" value="" >
    <label for="Name" >Name:</label>
    <input type="text" id="Name" name="Name" value="" >
    </div>

    <div> 
    <label for="StartDate" >StartDate:</label>
    <input type="text" id="StartDate" name="StartDate" value="" >
    <label for="Salary" >Salary:</label>
    <input type="text" id="Salary" name="Salary" value="" >
    </div>

    <div> 
    <label for="EmployeeStatus" >EmployeeStatus:</label>
    <input type="text" id="EmployeeStatus" name="EmployeeStatus" value="" >
    <label for="Email" >Email:</label>
    <input type="text" id="Email" name="Email" value="" >
    </div>

    <div> 
    <label for="Address" >Address:</label>
    <input type="text" id="Address" name="Address" value="" >
    <label for="Tel" >Telephone:</label>
    <input type="text" id="Tel" name="Tel" value="" >
    </div>

    <div> 
    <label for="His_ID" >History:</label>
    <input type="text" id="His_ID" name="His_ID" value="" >
    <label for="Exps" >วันที่ออกจากงาน:</label>
    <input type="text" id="Exps" name="Exps" value="" >
    </div>

    <div> 
    <label for="Reason" >เหตุผลที่ออกจากงาน:</label>
    <input type="text" id="Reason" name="Reason" value="" >
    <label for="Dept" >แผนกเก่า:</label>
    <input type="text" id="Dept" name="Dept" value="" >
    </div>

    <div> 
    <label for="Pos" >ตำแหน่งเก่า:</label>
    <input type="text" id="Pos" name="Pos" value="" >
    </div>

    <div style="display: inline-block; width: 45%; margin-left: 10px;">
        <input type="submit" value="Submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;"> 
    </div>
      

</form>

</center>

</div>



</body>
</html> 