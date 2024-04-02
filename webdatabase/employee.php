
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/st.css">
    <title>SITC HR THAI/employee</title>
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
                <li><a  href="home.php">หน้าหลัก</a></li>
                <li><a class="active" href="employee.php">พนักงาน</a></li>
                <li><a  href="office.php">สำนักงาน</a></li>
                <li><a href="addemp.php">เพิ่มข้อมูลพนักงาน</a></li>
                <li><a href="addoffice.php">เพิ่มข้อมูลสำนักงาน</a></li>
                <li style="float:right;"><a href="login.php?logout='1'" style="color: white; ">ออกจากระบบ</a></li>
                
            </ul>
        </div>
    </div>    

    
    <center>
      <div  class="content">
      
      <?php
      require('connect.php');
      $sql = 'SELECT * FROM `employee` INNER JOIN `emp_tel` ON employee.Emp_ID = emp_tel.Emp_ID INNER JOIN `emp_his` ON employee.His_ID = emp_his.His_ID';

      $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
      ?>
      <table border="1">
        <tr>
          <th width="100">
            <div align="center">EmployeeID</div>
          </th>
          <th width="auto">
            <div align="center">Name</div>
          </th>
          <th width="auto">
            <div align="center">Startdate</div>
          </th>
          <th width="100">
            <div align="center">Sal</div>
          </th>
          <th width="100">
            <div align="center">Employeestatus</div>
          </th>
          <th width="auto">
            <div align="center">Email</div>
          </th>
          <th width="110">
            <div align="center">Adds</div>
          </th>
          <th width="100">
            <div align="center">Telephone</div>
          </th>
          <th width="100">
            <div align="center">Delete</div>
          </th>
          <th wdth="100">
            <div align="center">Edit</div>
          </th>
        </tr>
        <?php
        $i = 1;
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>
          <tr>
            <td><?php echo $objResult["Emp_ID"]; ?></td>
            <td><?php echo $objResult["Name"]; ?></td>
            <td><?php echo $objResult["Start_date"]; ?></td>
            <td><?php echo $objResult["Sal"]; ?></td>
            <td><?php echo $objResult["Emp_status"]; ?></td>
            <td><?php echo $objResult["Email"]; ?></td>
            <td><?php echo $objResult["Adds"]; ?></td>
            <td><?php echo $objResult["Tel"]; ?></td>
            <td align="center"><a class="del" onclick="Del(this.href);return false;" href="deletedata.php?Emp_ID=<?php echo $objResult["Emp_ID"];?>">ลบข้อมูล</a></td>
            <td align="center"><a class="edit" href="editdata.php?Emp_ID=<?php echo $objResult["Emp_ID"]; ?>">แก้ไขข้อมูล</a></td>
          </tr>
        <?php
          $i++;
        }
        ?>
      </table>
      <?php
      mysqli_close($con);
      ?>

    </div>
    </center>
<script language="JavaScript">
    function Del(mypage){
    var agree =confirm("คุณต้องการลบข้อมูลหรือไม่");
    if(agree){
        window.location=mypage;
    }
}
</script>

    
</body>

</html>