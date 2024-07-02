<?php
$customerId = "";
$accountNum = "";
$fullName = "";
$accountType = "";
$Ifsc = "";
$branch = "";
// $accountBal = "";
$phone = "";
$email = "";
$submit = "false";
$savings = "";
$current = "";
$checking = "";
$password = "";
$msg = "";
$currency = "";

$transaction = "";
$scotcode = "";


if(isset($_POST['select_user'])){

    if(!empty($_POST['customerId'])){

        $edith = "SELECT * FROM `user` WHERE customerId = '$_POST[customerId]' order by id desc";
        $edith_result = mysqli_query($db, $edith);  
        $row = mysqli_fetch_array($edith_result, MYSQLI_ASSOC);
    
        $active = "active";
        $submit = "true";
    
        $customerId = $row['customerId'];

        $accountNum = $row['accountNum'];
        $fullName = $row['fullName'];
        $accountType = $row['accountType'];
        $Ifsc = $row['Ifsc'];
        $branch = $row['branch'];
        // $accountBal = $row['accountBal'];
        $phone = $row['phone'];
        $email = $row['email'];
        $savings = $row['savings'];
        $current = $row['current'];
        $checking = $row['checking'];
        $password = $row['password'];
        $pin = $row['pin'];
        $currency = $row['currency'];


        $username = " <div class='alert alert-info'>
                    Edith Account Details For <strong>$fullName</strong>
                </div>";

        $transaction = "transaction.php?id=$customerId";
        $scotcode = "scotcode.php?id=$customerId";


    }
}


// SAVING NEW USERS TO DATABASE 
if(isset($_POST['save'])){
        

    if($_POST['customerId2'] == ""){
        $customerId = rand(100000, 999999);
    }else{
        $customerId = $_POST['customerId2'];
    }
    
    if($_POST['accountNum'] == ""){
        $accountNum = rand(1000, 999).rand(1000000, 999999);
    }else{
        $accountNum = $_POST['accountNum'];
    }
    
    if($_POST['pin'] == ""){
        $pin = rand(1000, 9999);
    }else{
        $pin = $_POST['pin'];
    }

    $fullName = mysqli_real_escape_string($db, $_POST['name']);
    $accountType = "Savings, Current";
    $Ifsc = $_POST['Ifsc'];
    $branch = mysqli_real_escape_string($db,$_POST['country']);
    $phone = $_POST['phone'];
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $debitCard = rand(1000000000000000, 9999999999999999);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    $savings = $_POST['savingBal'];
    $current = $_POST['currentBal'];
    $checking = $_POST['checkingBal'];

    $currency = $_POST['currency'];

    $accountBal = $savings + $current + $checking;

    $insert_trans = "INSERT INTO `user`(`id`, `fullName`, `customerId`, `accountNum`, `accountType`, `Ifsc`, `branch`, `accountBal`, `phone`, `email`, `debitCard`, `pin`, `password`, `savings`, `current`, `checking`, `currency`) VALUES (NULL,'$fullName','$customerId','$accountNum','$accountType','$Ifsc','$branch','$accountBal','$phone','$email','$debitCard','$pin','$password','$savings','$current','$checking','$currency')";
    $result_trans = mysqli_query($db, $insert_trans);

    if($result_trans){

        $username = " <div class='alert alert-info'>
                    Edith Account Details For <strong>$fullName</strong>
                </div>";
        $transaction = "transaction.php?id=$customerId";

        $active = "active";
        $submit = "true";

        $msg = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>successful!</strong> You have successfully Added an account.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
      </div>";
    }

}





// EDITING NEW USER DETAILS FROM DATABASE
if(isset($_POST['edith'])){
    
    $fullName = mysqli_real_escape_string($db, $_POST['name']);
    $Ifsc = $_POST['Ifsc'];
    $branch = mysqli_real_escape_string($db,$_POST['country']);
    $phone = $_POST['phone'];
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $savings = $_POST['savingBal'];
    $current = $_POST['currentBal'];
    $checking = $_POST['checkingBal'];

    $currency = $_POST['currency'];
    $customerId = $_POST["customerId2"];

    $accountBal = $savings + $current + $checking;

    $active = "active";
    $submit = "true";

    //UPDATE `user` SET `id`='[value-1]',`fullName`='[value-2]',`customerId`='[value-3]',`accountNum`='[value-4]',`accountType`='[value-5]',`Ifsc`='[value-6]',`branch`='[value-7]',`accountBal`='[value-8]',`phone`='[value-9]',`email`='[value-10]',`debitCard`='[value-11]',`pin`='[value-12]',`password`='[value-13]',`savings`='[value-14]',`current`='[value-15]',`checking`='[value-16]' WHERE 1

    $update = "UPDATE `user` SET `fullName`='$fullName', `Ifsc`='$Ifsc', `branch`='$branch', `phone`='$phone', `email`='$email', `password`='$password', `savings`='$savings', `current`='$current', `checking`='$checking', `currency`='$currency', `accountBal`='$accountBal' WHERE customerId='$customerId'";
    $Update_result = mysqli_query($db, $update);

    if($Update_result){

        $msg = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>successful!</strong> You have successfully edited this record.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
      </div>";

      $username = " <div class='alert alert-info'>
            Edith Account Details For <strong>$fullName</strong>
        </div>";

        $trnasaction = "transaction.php?id=$customerId";

        // echo "<script>
        //         swal('successful!', 'you have successfully updated  user: !', 'success');
        // </script>";
    }else{
        $msg = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>error!</strong> You could not edited this record.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
      </div>";

      $username = " <div class='alert alert-info'>
            Edith Account Details For <strong>$fullName</strong>
        </div>";
    }

}
   
?>
