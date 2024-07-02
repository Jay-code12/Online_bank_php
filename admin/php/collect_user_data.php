<?php

$amount = "";
$bank = "";
$desc = "";
$name = "";
$per = "";
$date = "";

if(isset($_GET['id'])) {
    $sql = "SELECT * FROM `user` WHERE customerId = '$_GET[id]'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
}else{
    header("location: index.php");
}

// selecting record to be updated
if(isset($_GET['update'])){
    $select = "SELECT * FROM `transactions` WHERE id = '$_GET[update]'";
    $select_result = mysqli_query($db, $select);
    $select_row = mysqli_fetch_array($select_result, MYSQLI_ASSOC); 

    $amount = $select_row['amount'];
    $bank = $select_row['bank'];
    $desc = $select_row['desc'];
    $name = $select_row['name'];
    $per = $select_row['percentage'];
    $date = $select_row['date'];

    $updateView = "true";

    $_SESSION['msgtransfer'] = "<div class='alert alert-Warning'>
        <strong>Warning record!</strong> carefully update data record for $row[fullName].
    </div>";
}

// updating trasaction record
if(isset($_POST['update'])){

    $amount = $_POST['amount'];
    $bank = $_POST['bank'];
    $desc = $_POST['desc'];
    $name = $_POST['name'];
    $per = $_POST['per'];
    $date = $_POST['date'];

    $updateView = "";

    $update = "UPDATE `transactions` SET `bank`='$bank',`name`='$name',`amount`='$amount',`percentage`='$per',`date`='$date',`desc`='$desc' WHERE id='$_GET[update]'";
    $select_result = mysqli_query($db, $update);

    $_SESSION['msgtransfer'] = "<div class='alert alert-success'>
        <strong>successful update record!</strong> carefully update data record for $row[fullName].
    </div>";

    header("location: transaction.php?id=$_GET[id]");

}
   
// setting debith transfer
if(isset($_POST['transfer'])){

    $name = mysqli_real_escape_string($db, $_POST['name']); 
    $bank = mysqli_real_escape_string($db, $_POST['bank']); 
    $accountNum = mysqli_real_escape_string($db, $_POST['accountNum']); 
    $amount = mysqli_real_escape_string($db, $_POST['amount']); 
    $desc = mysqli_real_escape_string($db, $_POST['desc']); 
    $customerId = $_POST['customerId'];

    $type = "local";
    $status = "complete";
    $per = 100;
    $date = $_POST['date'];
    $transactiontype = "debith";

    if(empty($desc)){
        $desc = "Withdrawal from my Jordan Bank Account to $name";
    }
    $insert_trans = "INSERT INTO `transactions`(`id`, `bank`, `name`, `accountNum`, `amount`, `country`, `zipcode`, `swiftCode`, `type`, `status`, `percentage`, `date`, `transaction`, `customerId`, `desc`) VALUES (NULL,'$bank','$name','$accountNum','$amount','','','','$type','$status','$per','$date','$transactiontype','$customerId','$desc')";

    $result_trans = mysqli_query($db, $insert_trans);

    if($result_trans){
        $_SESSION['msgtransfer'] = "<div class='alert alert-success'>
            <strong>success!</strong> successfully made a debith transaction for $row[fullName].
        </div>";
    }

}


// setting credith transfer
if(isset($_POST['transferInt'])){

    $amount = mysqli_real_escape_string($db, $_POST['amount']); 
    $desc = mysqli_real_escape_string($db, $_POST['desc']); 
    $name = mysqli_real_escape_string($db, $_POST['name']); 

    $type = "local";
    $status = "complete";
    $per = 100;
    $date = $_POST['date'];
    $transactiontype = "credith";

    if(empty($desc)){
        $desc = "Deposit to my Jordan Bank Account from $name";
    }
    $insert_trans = "INSERT INTO `transactions`(`id`, `bank`, `name`, `accountNum`, `amount`, `country`, `zipcode`, `swiftCode`, `type`, `status`, `percentage`, `date`, `transaction`, `customerId`, `desc`) VALUES (NULL,'Jordan Bank','$name','$row[accountNum]','$amount','','','','$type','$status','$per','$date','$transactiontype','$row[customerId]','$desc')";

    $result_trans = mysqli_query($db, $insert_trans);

    if($result_trans){
        $_SESSION['msgtransfer'] = "<div class='alert alert-success'>
            <strong>success!</strong> successfully made a credith transaction for $row[fullName].
        </div>";
    }

}

?>
