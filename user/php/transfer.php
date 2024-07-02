<?php

if(isset($_POST['transfer'])){

    if($_POST['pin'] == $query->displaySelect('pin')){

        $name = mysqli_real_escape_string($db, $_POST['name']); 
        $bank = mysqli_real_escape_string($db, $_POST['bank']); 
        $accountNum = mysqli_real_escape_string($db, $_POST['accountNum']); 
        $amount = mysqli_real_escape_string($db, $_POST['amount']); 
        $desc = mysqli_real_escape_string($db, $_POST['message']); 

        $type = "local";
        $status = "pending";
        $per = rand(31, 37);
        $date = date("Y/m/d");

        if(empty($message)){
            $desc = "Withdrawal from my Jordan Bank Account to $name";
        }
        $insert_trans = "INSERT INTO `transactions`(`id`, `bank`, `name`, `accountNum`, `amount`, `country`, `zipcode`, `swiftCode`, `type`, `status`, `percentage`, `date`, `transaction`, `customerId`, `desc`) VALUES (NULL,'$bank','$name','$accountNum','$amount','','','','$type','$status','$per','$date','debith','$row[customerId]','$desc')";

        $result_trans = mysqli_query($db, $insert_trans);

        if($result_trans){

            $sql = "SELECT * FROM `transactions` WHERE customerId = '$_SESSION[customerId]' ORDER BY id DESC LIMIT 1";
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);    
            
            $_SESSION['msg_transfer'] = "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
              <strong>Pending!</strong>  Pending 'Transaction
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            ";

            header("location: receipt.php?id=$row[id]");
        }

    }else{
        $_SESSION['msg_transfer'] = "
        <div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>Failed!</strong> Invalid Pin
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button>
        </div>
        ";
    }

}



if(isset($_POST['transferInt'])){


    $name = mysqli_real_escape_string($db, $_POST['name']); 
    $bank = mysqli_real_escape_string($db, $_POST['bank']); 
    $accountNum = mysqli_real_escape_string($db, $_POST['accountNum']); 
    $amount = mysqli_real_escape_string($db, $_POST['amount']); 
    $country = mysqli_real_escape_string($db, $_POST['country']); 
    $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']); 
    $swiftCode = mysqli_real_escape_string($db, $_POST['swiftCode']); 
    $desc = mysqli_real_escape_string($db, $_POST['message']); 
    
    $type = "int";
    $status = "pending";
    $per = rand(21, 37);
    $date = date("Y/m/d");
 
    if(empty($message)){
        $desc = "Withdrawal from my Jordan Bank Account to $name";
    }

    $insert_trans = "INSERT INTO `transactions`(`id`, `bank`, `name`, `accountNum`, `amount`, `country`, `zipcode`, `swiftCode`, `type`, `status`, `percentage`, `date`, `transaction`, `customerId`, `desc`) VALUES (NULL,'$bank','$name','$accountNum','$amount','$country','$zipcode','$swiftCode','$type','$status','$per','$date','debith','$row[customerId]','$desc')";

    $result_trans = mysqli_query($db, $insert_trans);

    if($result_trans){

        $sql = "SELECT * FROM `transactions` WHERE customerId = '$_SESSION[customerId]' ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);    
        
        header("location: receipt.php?id=$row[id]");
    }


}

?>


