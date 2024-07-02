<?php
    session_start();
    include("connection.php");
    require "mvc/controller/controller.php";
    require "mvc/mail/mail.php";

    $sql = "SELECT * FROM `user` WHERE customerId = '$_SESSION[customerId]'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);    
   
    // if(!isset($_SESSION['customerId'])){
    //     header("location: ../login.php");
    // }


    // creating new controller object
    $query = new Controller();

    // creating new mail object
    $mail = new Mail();

    // selecting user details from database
    $query->select('user', array("customerId"), array("$_SESSION[customerId]"));
?>
