<?php    include('l.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SITC</title>
    <link rel="stylesheet" href="css/log.css">
</head>
<body>
    <center>
    <div class="header">
        <center>
        <div class="img"  style="background-color: white; width:auto;"><img src="css/logo.png"></div>
        </center>
    </div>

    

    <form action="login.php" method="post">



        <?php
        if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif;
        ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
        forget passsword tel:099-999-999
        </p>

    </form>

    </center>

    

</body>
</html>