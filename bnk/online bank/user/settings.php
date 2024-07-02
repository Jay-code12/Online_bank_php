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
require "php/update_settings.php";


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
    <h4>Account Edit</h4>
    <a href="php/logout.php" style="font-size: 25px;"><i class="fa-solid fa-right-from-bracket text-primary"></i></a>
  </div>

  <?php include "layouts/quickaccess.php"; ?>
    
    <br>
    <br>

    <form class="card p-3" method="post">
      <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
            }
      ?>
        <label for="email">Email</label>
        <input type="email" class="card-body border" value="<?php echo $row["email"]; ?>" id="email" name="email"  require>
        <label for="passwordN">Enter new password</label>
        <input type="text" class="card-body border" placeholder="please enter new password" id="passwordN" name="passwordN">
        <label for="password">Enter your current password</label>
        <input type="text" class="card-body border" placeholder="Enter your current password" id="password" name="password" require>
        <button type="submit"  class="btn" style="background-color: #b0002c;  color: #eee;" name="saveSettings" >Save Settings</button>
    </form>

    <br>
    <br>
    <br>
    <br>
    
<?php 
include "layouts/footer.php";
?>