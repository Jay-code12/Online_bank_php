<?php require_once("layouts/header.php"); ?>

<?php 

    $page_name = $_GET['page'];

    if($page_name == "transferpage"){
        require_once("transfer.php");
    }
    elseif($page_name == "transactionpage"){
        require_once("transaction.php");
        
    }
    elseif($page_name == "checkpage"){
        require_once("check.php");
    }
    else{
        require_once("home.php");
    }


?>

<?php require_once("layouts/footer.php"); ?>