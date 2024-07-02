<?php

    if(isset($_POST['saveSettings'])){
        
        $mypassword = mysqli_real_escape_string($db, $_POST['password']); 
        $newpassword = mysqli_real_escape_string($db, $_POST['passwordN']); 
        $email = mysqli_real_escape_string($db, $_POST['email']); 

        if($mypassword == $row['password']){

            if(!empty($newpassword)){
                $update = "UPDATE `user` SET `email`='$email', `password`='$newpassword' WHERE customerId='$_SESSION[customerId]'";
                $Update_result = mysqli_query($db, $update);

                if($Update_result){
                    $_SESSION['msg'] = "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                      <strong>Successful!</strong> Data successfully updated
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>
                    ";
                    header("location: settings.php");
                }else{
                    $_SESSION['msg'] ="
                    <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      <strong>error!</strong> Data could not be updated
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>";
                    header("location: settings.php");
                }
            }
            else{
                $update = "UPDATE `user` SET `email`='$email' WHERE customerId='$_SESSION[customerId]'";
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
            $_SESSION['msg'] ="
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>error!</strong> Please Enter Current Password.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
            </div>";        }

    }
   
?>
