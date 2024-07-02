<?php 
$dashboardActive  = "";
$transActive = "";
$transferActive = "";
$checkActive = "";
$supportActive = "";
$lifestyleActive ="";
$settingsActive = "sideBarMenu";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "";
$checkActiveBottom = "";
$settingsActiveBottom = "bottomBarMenu";
$transActiveBottom = "";



require "layouts/header.php";
require "php/collect_database_details.php";

if(!isset($_SESSION['customerId'])){
  header("location: ../login.php");
}
?>

<style>

.card-body{
    height: 50px;
    margin-bottom: 10px;
}
</style>


  <div class="d-flex justify-content-between text-light mt-5">
    <h4>Account Details</h4>
    <a href="php/logout.php" style="font-size: 25px;"><i class="fa-solid fa-right-from-bracket text-primary"></i></a>
  </div>

    <?php include "layouts/quickaccess.php"; ?>

  <br>

  <div class="card p-3">
    <div class="card-body border">
      Customers ID :  <?php echo $row['customerId']; ?>
    </div>
    <div class="card-body border">
      Account Number :   <?php echo $row['accountNum']; ?>
    </div>
    <div class="card-body border">
      Account Name :   <?php echo $row['fullName']; ?>
    </div>
    <div class="card-body border">
      Account Type :   <?php echo $row['accountType']; ?>
    </div>
    <div class="card-body border">
      IFSC Code :   <?php echo $row['Ifsc']; ?>
    </div>
    <div class="card-body border">
      Branch :   <?php echo $row['branch']; ?>
    </div>
    <div class="card-body border">
      Available Balance :   <?php echo $row['accountBal']; ?>
    </div>
    <div class="card-body border">
      Mobile No :   <?php echo $row['phone']; ?>
    </div>
    <div class="card-body border">
      Debit Card No :   <?php echo $row['debitCard']; ?>
    </div>

    <div class="card-body border">
      Nominee Ac/no : none
    </div>
    <div class="card-body border">
      Email Id :   <?php echo $row['email']; ?>
    </div>

    <a href="settings.php" class="btn" style="background-color: #b0002c;  color: #eee;">Go To Account Settings</a>

  </div>

    <br>
    <br>
    <br>
    <br>
    
<?php 
include "layouts/footer.php";
?>