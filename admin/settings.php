<?php 
session_start();
if(!isset($_SESSION["logged"])){
    header("location: login.php");
}

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
// include "php/edith_settings.php";
include "mvc/controller/controller.php";
include "layouts/header.php";

$query = new Controller();

if(isset($_POST['edith'])){
    $query->update(0, "admin", array("email", "password"), array($_POST['email'], $_POST['password']));
}

$query->select("admin", array("id"), array(0));
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

    </div>
</form>

    <form class="card p-3" method="post">
      <?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
            }
      ?>
        <label for="email">Email</label>
        <input type="email" class="card-body border" value="<?php echo $query->displaySelect("email"); ?>" id="email" name="email"  required>
        <label for="password">Password</label>
        <input type="text" class="card-body border" placeholder="Password" id="password" name="password" value="<?php echo $query->displaySelect("password"); ?>"required>
        <button type="submit"  class="btn" style="background-color: #b0002c;  color: #eee;" name="edith" >Edith Login</button>
    </form>


<?php 
include "layouts/footer.php";
?>