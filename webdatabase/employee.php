<?php
require('connect.php');
// Check if form is submitted
// Fetch all employee data
$sql = 'SELECT * FROM `employee` 
        INNER JOIN `emp_tel` ON employee.Emp_ID = emp_tel.Emp_ID 
        INNER JOIN `emp_his` ON employee.His_ID = emp_his.His_ID';

$objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    // Check if search query is present
    if (isset($_POST['search']) && !empty($_POST['search'])) {
        // Retrieve search query from POST data
        $search = $_POST['search'];

        // Fetch employee data based on search query
        $sql = "SELECT * 
                FROM `employee` 
                LEFT JOIN `emp_tel` ON employee.Emp_ID = emp_tel.Emp_ID 
                LEFT JOIN `emp_his` ON employee.His_ID = emp_his.His_ID
                WHERE `employee`.`Emp_ID` = '$search' 
                    OR `employee`.`Name` LIKE '%$search%'";

        $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    } else {
        // Fetch all employee data if no search query is present
        $sql = 'SELECT * FROM `employee` 
                INNER JOIN `emp_tel` ON employee.Emp_ID = emp_tel.Emp_ID 
                INNER JOIN `emp_his` ON employee.His_ID = emp_his.His_ID';

        $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    }
}
?>

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

      <div class="search">
      <h2>ค้นหาข้อมูลพนักงาน</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <input type="text" name="search" placeholder="Search..">
          <button type="submit">ค้นหา</button>
      </form>
      </div>

      <br>

    
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
        }
        ?>

      </table>
      

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
<?php
mysqli_close($conn); // Corrected database connection variable name
?>
    
</body>

</html>
