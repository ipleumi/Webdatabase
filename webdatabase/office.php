<?php
session_start();
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/st.css">
    <title>SITC HR THAI/office</title>
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
                <li><a href="employee.php">พนักงาน</a></li>
                <li><a class="active" href="office.php">สำนักงาน</a></li>
                <li><a href="addemp.php">เพิ่มข้อมูลพนักงาน</a></li>
                <li><a href="addoffice.php">เพิ่มข้อมูลสำนักงาน</a></li>
                <li style="float:right;"><a href="login.php?logout='1'" style="color: red; ">ออกจากระบบ</a></li>
                
            </ul>
        </div>
    </div>    

    <section class="con" style="text-align:center" >
    <center>
        <div  class="content" style="width: 1200px;">
      
      <?php
      require('connect.php');
      $sql = 'SELECT * FROM `employees`';

      $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
      ?>
      <table border="1">
        <tr>
          <th width="50">
            <div align="center">No</div>
          </th>
          <th width="100">
            <div align="center">EmployeeID</div>
          </th>
          <th width="100">
            <div align="center">FirstName</div>
          </th>
          <th width="100">
            <div align="center">SalaryID</div>
          </th>
          <th width="100">
            <div align="center">DepartmentID</div>
          </th>
        </tr>
        <?php
        $i = 1;
        while ($objResult = mysqli_fetch_array($objQuery)) {
        ?>
          <tr>
            <td>
              <div align="center"><?php echo $i; ?></div>
            </td>
            <td><?php echo $objResult["EmployeeID"]; ?></td>
            <td><?php echo $objResult["FirstName"]; ?></td>
            <td><?php echo $objResult["SalaryID"]; ?></td>
            <td><?php echo $objResult["DepartmentID"]; ?></td>
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
  </section>

    
</body>

</html>
