<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/templete.css">
  <meta charset="UTF-8">
  
  <title>SITC HR/อันดับ</title>
  <nav>
    <div class="container">
      <div class="logo">
      <a href="https://www.sitcthailand.com/th"><img src="css/logo.png" ></a>
      </div>
      <div class="navbar">
        <ul>
          <li class="home"><a  href="index.php">Home</a></li>
          <li class="emp"><a href="employee.php">พนักงาน</a></li>
          <li class="rank"><a class="active" href="ranking.php">อันดับ</a></li>
        </ul>
      </div>
    </div>
  </nav>

</head>
<body>
  <section>
    <div style="padding:30px;margin-top:50px;background-color:#1abc9c;height:1000px" class="content">
      <h1>TEST</h1>
      <h2>NON LOVE AUM</h2>
      <h2>I aum steal glasses from tann</h2>
      <?php
      require('connect.php');
      $sql = ' ';

      $result = mysqli_query($con, $sql);
      mysqli_close($con);
      ?>
      </div>
  </section>
  
  

</body>
</html>