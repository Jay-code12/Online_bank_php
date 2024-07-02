<?php
    session_start();
    include("connection.php");

if(isset($_GET['id'])){


    $update = "DELETE FROM `transactions` WHERE id='$_GET[id]'";
    $Update_result = mysqli_query($db, $update);

    header("location: ../transaction.php");

}else{
    header("location: ../index.php");
}

   
?>
