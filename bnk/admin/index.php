<?php
session_start();
if(!isset($_SESSION["logged"])){
    header("location: login.php");
}

$dashboardActive  = "sideBarMenu";
$transActive = "";
$transferActive = "";
$settingsActive = "";

//active variable for bottom bar
$dashboardActiveBottom  = "bottomBarMenu";
$transferActiveBottom = "";
$settingsActiveBottom = "";
$transActiveBottom = "";

$transaction = "";
require "php/connection.php"; 
require "php/edith_user.php"; 
require "layouts/header.php"; 

?>

<style>
.card-body{
    height: 50px;
    margin-bottom: 10px;
}
</style>

<form action="" method="post" class="bg-light px-4 pt-4">
    <div class="form-group">
        <select name="customerId" id="" class="form-control" required>
            <option value="">Admin</option>
    <?php 
        $user = "SELECT * FROM `user` WHERE 1 order by id desc";
        $user_result = mysqli_query($db, $user);    
   
        while($user_row = mysqli_fetch_array($user_result, MYSQLI_ASSOC)){
    ?> 
            <option value="<?php echo $user_row["customerId"]; ?>"><?php echo $user_row["fullName"]; ?></option>
    <?php
        }
    ?>
        </select>
            <input type="submit" class="btn my-3 btn btn-success" style="color: #;" value="Proceed to View User Details" name="select_user">
        
        <?php if($transaction != "index.php"){ ?>
            <a href="<?php echo $transaction; ?>" class="btn my-3 " style="background-color: #b0002c;  color: #eee;" >View Transactions History For <?php echo $fullName; ?></a>
        <?php } ?>

    </div>
</form>

<?php //include "layouts/quickaccess.php"; ?>

<form class="bg-light p-4" method="post" action="index.php">

 
<div class="card p-3">

    <h4>Create/Edith Customer Details</h4>

    <?php 
       if(isset($username)){
            echo $username;
            echo $msg;  
       }
    ?>

    Customers ID : 
    <input type="number" class="card-body border" value="<?php echo $customerId; ?>" placeholder="Customer ID will be generated by the system" disabled>

    <input type="hidden" class="card-body border" value="<?php echo $customerId; ?>" name="customerId2" >

    Account Number : 
    <input type="number" class="card-body border" value="<?php echo $accountNum; ?>" placeholder="Account Number will be generated by the system" name="accountNum" >
    

    Transaction Pin: 
    <input type="number" class="card-body border" value="<?php echo $pin; ?>" placeholder="Account pin will be generated by the system" name="pin" >

    Account Name :   
    <input type="text" class="card-body border" value="<?php echo $fullName; ?>" placeholder="Enter Account Name" name="name">

    <!-- Account Type : 
    <input type="text" class="card-body border" value="<?php //echo $accountType; ?> "placeholder="Customer ID will be generated by the system" name="customerID" required> -->

    IFSC Code :  
    <input type="number" class="card-body border" value="<?php echo $Ifsc; ?>" placeholder="Enter IFSC CODE" name="Ifsc">

    Country : 
    <input type="text" class="card-body border" value="<?php echo $branch; ?>" placeholder="Enter Country" name="country">

    Savings Account Balance : 
    <input type="number" class="card-body border" value="<?php echo $savings; ?>" placeholder="Enter savings account balance" name="savingBal" required>

    Current Account Balance : 
    <input type="number" class="card-body border" value="<?php echo $current; ?>" placeholder="Enter current account balance" name="currentBal" required>
    
    Checking Account Balance : 
    <input type="number" class="card-body border" value="<?php echo $checking; ?>" placeholder="Enter check account balance" name="checkingBal" required>
    
    
    Currency Symbol: 
    <input type="text" class="card-body border" value="<?php echo $currency; ?>" placeholder="Default symbol $ " name="currency" required>

    Mobile No : 
    <input type="number" class="card-body border" value="<?php echo $phone; ?>" placeholder="Enter phone number" name="phone" >

    Email Id : 
    <input type="email" class="card-body border" value="<?php echo $email; ?>" placeholder="Enter user email" name="email" required>

    Password: 
    <input type="text" class="card-body border" value="<?php echo $password; ?>" placeholder="Enter user email" name="password" required>

    <?php if($submit == "true"):?>
        <input type="submit" class="btn" style="background-color: #b0002c;  color: #eee;" value="Edit Profile Details" name="edith">
    <?php else:?>
        <input type="submit" class="btn" style="background-color: #b0002c;  color: #eee;" value="Save New Customer" name="save">
    <?php endif; ?>

</form>

<?php require "layouts/footer.php"; ?>