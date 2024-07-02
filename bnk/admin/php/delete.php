<?php
include("connection.php");

if(isset($_GET['id'])){

    if(isset($_GET['delete'])){   
        $update = "DELETE FROM `transactions` WHERE id='$_GET[delete]'";
        $Update_result = mysqli_query($db, $update);

        $_SESSION['msgtransfer'] = "<div class='alert alert-danger'>
            <strong>Deleted record!</strong> your transaction details was successfully deleted.
        </div>";
        header("location: ../transaction.php?id=$_GET[id]");
    }
    else{
        header("location: ../index.php");
    }
}else{
    header("location: ../index.php");
}

   
?>
