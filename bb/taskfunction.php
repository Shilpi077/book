<?php
 include("config.php");
        if(isset($_POST['submit']))
        {
            $UserId=$_POST['UserId'];
            $TaskDetail=$_POST['TaskDetail'];
            $TaskType=$_POST['TaskType'];

    //         $select ="SELECT * FROM use_form WHERE email ='$email' && password = '$pass'";
    // $result = mysqli_query($conn, $select);
    $query = "INSERT INTO  reg(UserId,TaskDetail,TaskType) values('$UserId','$TaskDetail','$TaskType')";
            $result=mysqli_query($conn,$query);
            if($result)
            {
                echo "sucess";
            }
            else{
                
                echo "failed";
            }
        }
?>  