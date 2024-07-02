<?php

$customerId = "";

if(isset($_POST['select_user'])){
    if(!empty($_POST['customerId'])){

        $edith = "SELECT * FROM `user` WHERE customerId = '$_POST[customerId]' order by id desc";
        $edith_result = mysqli_query($db, $edith);  
        $row = mysqli_fetch_array($edith_result, MYSQLI_ASSOC);

        $_SESSION['fullname'] = $row['fullName'];
        $customerId = $row['customerId'];

        $_SESSION['msgusername'] = " <div class='alert alert-info'>
                    Create Code for <strong>$_SESSION[fullname]</strong>
                </div>";
        unset($_SESSION['msgscot']);

    }
}

    
if(isset($_POST['saveSettings'])){

    $percentage = $_POST['percentage'];
    $customerId2 = $_POST['customerId2'];
    $scotNumber = $_POST['scotcode'];

    if(!empty($customerId2)){

        $date = date("y/m/d");
    
        $sql = "INSERT INTO `scotcode`(`id`, `scotcode`, `status`, `date`, `customerId`, `percentage`) VALUES (Null,'$scotNumber','','$date','$customerId2','$percentage')";
        $result = mysqli_query($db, $sql);  

        $_SESSION['msgscot'] = "<div class='alert alert-info'>
                            successfully created scot code <strong> $scotNumber </strong> for  <strong>$_SESSION[fullname]</strong>
                        </div>";
    }else{
        $_SESSION['msgusername'] = " <div class='alert alert-danger'>
        Please select user</strong>
        </div>";
    }

}

?>