<?php 
$dashboardActive  = "";
$transActive = "";
$transferActive = "";
$checkActive = "";
$supportActive = "";
$lifestyleActive ="sideBarMenu";
$settingsActive = "";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "";
$checkActiveBottom = "";
$settingsActiveBottom = "";
$transActiveBottom = "";




include "layouts/header.php";
require "php/collect_database_details.php";

?>



  <div class="d-flex justify-content-between text-light mt-5">
    <h4>lifestyle</h4>
    <a href="php/logout.php" style="font-size: 25px;"><i class="fa-solid fa-right-from-bracket text-primary"></i></a>
  </div>

  <?php include "layouts/quickaccess.php"; ?>

  <br>
  <br>


    <div class="d-flex text-center text-white" style="width: 100%; height: 400px; background-color: white;">

        <div class=" border" style="width: 30%; height: 100%; background-image: url('images/cinema.jpeg'); background-size: cover; background-position: center;" onclick="lifestyle();"> <div class="bg-info" style="width: 100%; height: 100%; opacity: 0.5; padding: 79px 0px;">Movies</div> </div>
        <div class=" border" style="width: 70%; height: 100%;">

            <div class="border d-flex" style="width: 100%; height: 50%;">

                <div class="border" style="width: 50%; height: 100%; background-image: url('images/flight.jpg'); background-size: cover; background-position: center;"  onclick="lifestyle();">  <div class="bg-danger" style="width: 100%; height: 100%; opacity: 0.5;padding: 79px 0px;">Flight Payment</div> </div>
                <div class="border" style="width: 50%; height: 100%; background-image: url('images/food.jpg'); background-size: cover; background-position: center;" onclick="lifestyle();"> <div class="bg-warning" style="width: 100%; height: 100%; opacity: 0.5;padding: 79px 0px;">Food</div> </div>

            </div>
            <div class="border"  style="width: 100%; height: 50%;  background-image: url('images/sport.jpg'); background-size: cover; background-position: center;" onclick="lifestyle();">  <div class="" style="background-color: purple; width: 100%; height: 100%; opacity: 0.5;padding: 79px 0px;">Sport & Gaming</div> </div>

        </div>

    </div>

    <br>
    <br>
    <br>
    <br>

<?php 
include "layouts/footer.php";
?>