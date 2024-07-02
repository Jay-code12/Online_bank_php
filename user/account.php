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


if(empty($query->displaySelect('image'))){
  $image = "linear-gradient(to left, #fff, #fff, #fff)";
}else{
  $image = $query->displaySelect('image');
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

  <center class="my-5 p-4  bg-white" style="background-image: linear-gradient(to left,#b0002c, #fff, #fff)">
      
      <img src="<?php echo  $image; ?>"  style="border-radius: 50%; width: 170px; height: 170px;">
    <!--  <div class="border p-5" style="border-radius: 50%; width: 170px; height: 170px; background-image: <?php //echo  $image; ?>; background-position: center; background-repeat: no-repeat; backgound-size: cover">-->
    <!--</div>-->
  </center>

  <?php include "php/upload_image.php"; ?>

 <center>
  <ul>
    <?php echo $statusMsg; ?>
  </ul>
    <form action="account.php" method="post" enctype="multipart/form-data" class="border mb-4 pb-3 px-2">
        <div class="d-flex">
          <input type="file" name="file" class="p-2" style="background-color: #b0002c; border: none; color: #fff">
          <input type="submit" name="submit" value="Upload" class="p-2" style="background-color: lightgray; border: none; color: #fff">
        </div>
    </form>
</center>


  <div class="card p-3 border-danger" style="background-color: #b0002c">

    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Customers ID :  <?php echo  $query->displaySelect('customerId');?>
    </div>
    
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      PIN :  <?php echo  $query->displaySelect('pin');?>
    </div>
    
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Account Number :   <?php echo $query->displaySelect('accountNum'); ?>
    </div>
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Account Name :   <?php echo $query->displaySelect('fullName'); ?>
    </div>
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Account Type :   <?php echo $query->displaySelect('accountType'); ?>
    </div>
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      IFSC Code :   <?php echo $query->displaySelect('Ifsc'); ?>
    </div>
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Branch :   <?php echo $query->displaySelect('branch'); ?>
    </div>
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Available Balance :   <?php echo $query->displaySelect('currency')."".number_format($query->displaySelect('accountBal'), 2, ".", ","); ?>
    </div>
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Mobile No :   <?php echo $query->displaySelect('phone'); ?>
    </div>
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Debit Card No :   <?php echo $query->displaySelect('debitCard'); ?>
    </div>

    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Nominee Ac/no : none
    </div>
    <div class="card-body border" style="height: fit-content;background-color: #fff">
      Email Id :   <?php echo $query->displaySelect('email'); ?>
    </div>

    <a href="settings.php" class="btn border" style="background-color: #b0002;  color: #eee;">Go To Account Settings</a>

  </div>

    <br>
    <br>
    <br>
    <br>
    
<?php 
include "layouts/footer.php";
?>