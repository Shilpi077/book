<?php
@include 'config.php';

//if(!isset($_SESSION['email'])){
   // header('location:login_form.php');
//}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <!---custom css file link-->
    <link rel="stylesheet" href="style.css">
    <style>
body {
  background-image: url('hello.jpg');
}
</style>
</head>

<body>

    <div class="container">
        <div class="content">
            
            <!--<p>your email : <span><?php echo $_SESSION['email'] ?></span></p>>-->
            <a href="login_form.php" class="btn">TASK</a>
            <a href="register_form.php" class="btn">USERS</a>
      
        </div>
    </div>
    
</body>
</html>