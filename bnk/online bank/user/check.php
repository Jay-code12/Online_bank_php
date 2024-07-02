<?php 
$dashboardActive  = "";
$transActive = "";
$transferActive = "";
$checkActive = "sideBarMenu";
$supportActive = "";
$lifestyleActive ="";
$settingsActive = "";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "";
$checkActiveBottom = "bottomBarMenu";
$settingsActiveBottom = "";
$transActiveBottom = "";


include "layouts/header.php";
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
    <h4>Upload Check Image</h4>
    <a href="php/logout.php" style="font-size: 25px;"><i class="fa-solid fa-right-from-bracket text-primary"></i></a>
  </div>

  <?php include "layouts/quickaccess.php"; ?>
    
  <br>
  <br>

<div id="checkalert" style="display: none;">
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>error occur!</strong> your uploadCheck could not be process due to network issues,  please report to your Bank branch
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>

<div class="col-lg-10 p-5 mt-5 mx-auto border bg-light">
    <label for="formFileMultiple" class="form-label">Please Upload clear photo</label>
    <input class="form-control" type="file" id="formFileMultiple" multiple />
    <input type="submit" value="Upload" class="form-control mt-5 text-center" style="background-color: #b0002c;  color: #eee;" onclick="uploadCheck();">
</div>

    <br>
    <br>
    <br>
    <br>

<?php 
include "layouts/footer.php";
?>