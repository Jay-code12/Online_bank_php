<?php
    session_start();
    include("connection.php");

if(isset($_GET['id'])){

    $cancel = "cancel";

    $update = "UPDATE `transactions` SET `status`='$cancel' WHERE id='$_GET[id]'";
    $Update_result = mysqli_query($db, $update);

    header("location: ../receipt.php?id=$_GET[id]");

}else{
    header("location: ../index.php");
}

   
?>
