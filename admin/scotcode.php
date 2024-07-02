<?php 
session_start();
if(!isset($_SESSION["logged"])){
    header("location: login.php");
}

$dashboardActive  = "";
$transActive = "";
$transferActive = "";
$scotActive = "sideBarMenu";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "";
$settingsActiveBottom = "";
$scotActiveBottom = "bottomBarMenu";

$transaction = "index.php";
$fullName = "";

include "php/connection.php";
include "php/scotcode.php";
include "layouts/header.php";

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

        <input type="submit" class="btn my-3 btn btn-success" style="color: #;" value="Proceed to Edith User Details" name="select_user">
    </div>
</form>


    <form class="card p-3" method="post">
      <?php 
            if(isset($_SESSION['msgusername'])){
                echo $_SESSION['msgusername'];
                // unset($_SESSION['msgusername']);
                if(isset($_SESSION['msgscot'])){
                    echo $_SESSION['msgscot'];
                    // unset($_SESSION['msgscot']);
                }
            }
      ?>
        <label for="scotcode">Scotcode</label>
        <input type="text" class="card-body border" placeholder="Scotcode will be generated by the system" id="scotcode" name="scotcode" required>

        <label for="passwordN">CustomerID</label>
        <input type="number" class="card-body border" value="<?php echo $customerId; ?>" id="passwordN"  disabled>

        <input type="hidden" class="card-body border" value="<?php echo $customerId; ?>" id="passwordN" name="customerId2"  >

        <label for="password">Enter the percentage value</label>
        <input type="number" class="card-body border" placeholder="enter percentage value u want to add" id="password" name="percentage" required>

        <button type="submit"  class="btn" style="background-color: #b0002c;  color: #eee;" name="saveSettings" >Create Scott code</button>
    </form>


<?php 
include "layouts/footer.php";
?>