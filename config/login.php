<?php

   $error = "";
   
   if(isset($_POST["wpsubmit"])) {
      // username and password sent from form 
      
      $customerId = $_POST['customerId'];
      $mypassword = mysqli_real_escape_string($db, $_POST['password']); 
      
      $sql = "SELECT * FROM `user` WHERE customerId = '$customerId' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);

      //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

      //$id = $row['id'];
    
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

         $_SESSION['customerId'] = $customerId;
         
         $_SESSION['login'] = "<script>
               swal('welcome, $row[fullName]!', 'you successfully login in your account!', 'success');
              </script>";

        header("location: user/index00.php?id=$customerId");

      }else {
            $sql = "SELECT * FROM `user` WHERE email = '$customerId' and password = '$mypassword'";
            $result = mysqli_query($db,$sql);
            
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

            $count = mysqli_num_rows($result);

            if($count == 1) {

                $_SESSION['customerId'] = $row['customerId'];
         
                $_SESSION['login'] = "<script>
                    swal('welcome, $row[fullName]!', 'you successfully login in your account!', 'success');
                    </script>";

                 header("location: user/index00.php?id=$customerId");

            }else{
                $error = "Your Login Name or Password is invalid";   
            }
        }
   }
   
   
?>


