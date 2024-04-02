

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/test.css">
<link rel="stylesheet" href="css/st.css">
<title>SITC HR THAI/addemployee</title>
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
    <label for="EmployeeID" >EmployeeID</label>
    <input type="text" id="EmployeeID" name="EmployeeID" value="" >
    <label for="Name" >Name</label>
    <input type="text" id="Name" name="Name" value="" >
    </div>

    <div> 
    <label for="Start_date" >StartDate</label>
    <input type="date" id="Start_date" name="Start_date" value="" >
    <label for="Sal" >Salary</label>
    <input type="text" id="Sal" name="Sal" value="" >
    </div>
    <br>
    <div> 
    <label for="Emp_status" >EmployeeStatus</label>
    <input type="text" id="Emp_status" name="Emp_status" value="" >
    <label for="Email" >Email</label>
    <input type="text" id="Email" name="Email" value="" >
    </div>

    <div> 
    <label for="Adds" >Address</label>
    <input type="text" id="Adds" name="Adds" value="" >
    <label for="Tel" >Telephone</label>
    <input type="text" id="Tel" name="Tel" value="" >
    </div>
    <br>
    <div> 
    <label for="His_ID" >HistoryID</label>
    <input type="text" id="His_ID" name="His_ID" value="" >
    <label for="Exps" >วันที่ออกจากงาน</label>
    <input type="date" id="Exps" name="Exps" value="" >
    </div>

    <div> 
    <label for="Reason" >เหตุผลที่ออกจากงาน</label>
    <input type="text" id="Reason" name="Reason" value="" >
    <label for="Dept" >แผนกเก่า</label>
    <input type="text" id="Dept" name="Dept" value="" >
    </div>
    <br>
    <div> 
    <label for="Pos" >ตำแหน่งเก่า</label>
    <input type="text" id="Pos" name="Pos" value="" >
    <label for="Dept_ID" >DepartmentID</label>
    <input type="text" id="Dept_ID" name="Dept_ID" value="" >
    </div>

    <div>
    <label for="Pos_ID" >PositionID</label>
    <input type="text" id="Pos_ID" name="Pos_ID" value="" >
    <label for="Off_ID" >OfficeID</label>
    <input type="text" id="Off_ID" name="Off_ID" value="" >
    </div>
    <br>
    
    <input type="submit" value="Submit"> 
    
      

</form>

</center>

</div>



</body>
</html> 