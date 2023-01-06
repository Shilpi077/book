<?php
 include("config.php");
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];

    //         $select ="SELECT * FROM use_form WHERE email ='$email' && password = '$pass'";
    // $result = mysqli_query($conn, $select);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
      }
      else if(!preg_match('/^[0-9]{10}+$/', $phone)) {
        echo "Please enter valid phone number";
        }
      else{
    $query = "INSERT INTO  reg(name,email,phone) values('$name','$email','$phone')";
            $result=mysqli_query($conn,$query);
            if($result)
            {
                echo "sucess";
            }
            else{
                
                echo "failed";
            }
        }
        }
?>  



