<?php
  require('connect.php');
  $sql = 'SELECT * FROM `office` 
  INNER JOIN `off_tel` ON office.Off_ID = off_tel.Off_ID';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");


  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['search']) && !empty($_POST['search'])){
      $search = $_POST['search'];
      $sql = "SELECT * 
              FROM `office` 
              LEFT JOIN `off_tel` ON office.Off_ID = off_tel.Off_ID
              WHERE `office`.`Off_ID` = '$search' 
              OR `office`.`Mng` LIKE '%$search%'
              OR `office`.`Adds` LIKE '%$search%'";
      $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
    }else{
      $sql = 'SELECT * FROM `office` 
              INNER JOIN `off_tel` ON office.Off_ID = off_tel.Off_ID';
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
                <li style="float:right;"><a href="login.php?logout='1'" style="color: white; ">ออกจากระบบ</a></li>
                
            </ul>
        </div>
    </div>    

    
    <center>

    <div  class="content">

    <div class="search">
      <h2>ค้นหาข้อมูลสำนักงาน</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <input type="text" name="search" placeholder="Search..">
          <button type="submit">ค้นหา</button>
      </form>
      </div>

      <br>
      
      <table border="1">
        <tr>
          
          <th width="100">
            <div align="center">Off_ID</div>
          </th>
          <th width="100">
            <div align="center">Mng</div>
          </th>
          <th width="auto">
            <div align="center">Adds</div>
          </th>
          <th width="auto">
            <div align="center">OfficeTelephone</div>
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
            
            <td><?php echo $objResult["Off_ID"]; ?></td>
            <td><?php echo $objResult["Mng"]; ?></td>
            <td><?php echo $objResult["Adds"]; ?></td>
            <td><?php echo $objResult["Tel"]; ?></td>
            <td align="center"><a class="del" onclick="Del(this.href);return false;" href="deleteoffice.php?Off_ID=<?php echo $objResult["Off_ID"]; ?>">ลบข้อมูล</a></td>
            <td align="center"><a class="edit" href="editoffice.php?Off_ID=<?php echo $objResult["Off_ID"]; ?>">แก้ไขข้อมูล</a></td>
          </tr>
        <?php
        }
        ?>
      </table>
      <?php
      mysqli_close($con);
      ?>

    </div>
    </center>
 

    
</body>

</html>
