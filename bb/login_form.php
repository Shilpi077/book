<?php

@include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
    <!---custom css file--->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="taskfunction.php" method="post">
            <h2>Task</h2>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo'<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
        <div class="row">
            <!-- <label>USER :</label><br> -->
            <select name="UserId"id="UserId" class="InputBox">
                <option value>Select User</option>
                <?php
                $query1 = mysqli_query($conn, "select * from users");

                while($m_row = mysqli_fetch_array($query1)){
                    //echo $m_row['phone'] ;
                    echo("<option value = '" . $m_row['Id'] . "'>" . $m_row['name'] . "</option>");
                } 
                ?>
            </select>
        </div>
        <input type="text" name="TaskDetail" required placeholder="Enter your task" class="box">
        <div class="row">
            <!--<label>TYPE :</label><br>-->
            <select name="TaskType"id="TaskType" class="InputBox">
            <option value=''>Select Type</option>
                <option value='Panding'>Panding</option>
                <option value='Done'>Done</option>
            </select>
            <input type="submit" name="submit"  value="submit" class="form-btn">
        </div>
    </div>
            
           
            
          
        </form>
    </div>
</body>
</html>