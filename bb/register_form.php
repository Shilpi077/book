<?php

@include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DATA</title>
    <!---custom css file--->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">

        <form action="function.php"  method="post">
            <h2>USER DATA</h2>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo'<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
            <input type="text" name="name" id="name" required placeholder="enter your name">
            <input type="email" name="email" id="email" required placeholder="enter your email">
            <input type="phone" name="phone" id="phone" required placeholder="enter your phone number">
            
             <input type="submit" name="submit" onclick="return ValidateEmail()" value="submit" class="form-btn">
            
        </form>
    </div>
</body>
</html>

<script>
    function ValidateEmail()
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(document.getElementById("email").value.match(mailformat))
{
//alert("Valid email address!");
// document.form1.text1.focus();

if(document.getElementById("phone").value.length == 10)
{
//alert("Valid email address!");
// document.form1.text1.focus();
return true;
}
else
{
alert("You have entered an invalid phone number, please enter only 10 digits of your mobile no!");
//document.form1.text1.focus();
return false;
}

return true;
}
else
{
alert("You have entered an invalid email address!");
//document.form1.text1.focus();
return false;
}
}
</script>