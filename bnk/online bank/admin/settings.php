<?php 
$dashboardActive  = "";
$transActive = "";
$transferActive = "";
$settingsActive = "sideBarMenu";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "";
$settingsActiveBottom = "bottomBarMenu";
$transActiveBottom = "";

$transaction = "index.php";
include "php/edith_settings.php";
include "layouts/header.php";

?>



<style>

.card-body{
    height: 50px;
    margin-bottom: 10px;
}
</style>

<form class="bg-light px-4 pt-4">
    <div class="form-group">
        <select name="" id="" class="form-control">
        </select>

        <a href="index.php" class="btn my-3" style="background-color: #b0002c;  color: #eee;" >Dashboard</a>
        <a href="index.php" class="btn my-3" style="background-color: #b0002c;  color: #eee;" >Click to see all user transactions</a>

    </div>
</form>

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


<?php 
include "layouts/footer.php";
?>