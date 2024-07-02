<?php

include("connection.php");

$sql = "SELECT * FROM `admin`  WHERE 1";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);    

    if(isset($_POST['saveSettings'])){
        
        $mypassword = mysqli_real_escape_string($db, $_POST['password']); 
        $newpassword = mysqli_real_escape_string($db, $_POST['passwordN']); 
        $email = mysqli_real_escape_string($db, $_POST['email']); 

        if($mypassword == $row['password']){

            if(!empty($newpassword)){
                $update = "UPDATE `admin` SET `email`='$email', `password`='$newpassword' WHERE 1";
                $Update_result = mysqli_query($db, $update);

                if($Update_result){
                    $_SESSION['msg'] = "<div class='alert alert-success'>
                                <strong>success!</strong> Data successfully updated.
                            </div>";
                    header("location: settings.php");
                }else{
                    $_SESSION['msg'] = "<div class='alert alert-danger'>
                                <strong>error!</strong> Data could not be updated.
                            </div>";
                    header("location: settings.php");
                }
            }
            else{
                $update = "UPDATE `admin` SET `email`='$email' WHERE 1";
                $Update_result = mysqli_query($db, $update);
                if($Update_result){
                    $_SESSION['msg'] = "<div class='alert alert-success'>
                                <strong>success!</strong> Email successfully updated.
                            </div>";
                    header("location: settings.php");
                }else{
                    $_SESSION['msg'] = "<div class='alert alert-danger'>
                                <strong>error!</strong> Email could not be updated.
                            </div>";
                    header("location: settings.php");
                }
            }
        }
        else{
            $_SESSION['msg'] = "<div class='text-danger' >please enter correct password </div>";
        }

    }
   
?>
