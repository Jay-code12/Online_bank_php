<?php 
$dashboardActive  = "";
$transActive = "";
$transferActive = "";
$checkActive = "";
$supportActive = "sideBarMenu";
$lifestyleActive ="";
$settingsActive = "";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "";
$checkActiveBottom = "";
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
    <h4>Message</h4>
    <a href="php/logout.php" style="font-size: 25px;"><i class="fa-solid fa-right-from-bracket text-primary"></i></a>
  </div>

  <?php include "layouts/quickaccess.php"; ?>
    
  <br>
  <br>


  <div class="col-lg-10 col-md-12 ">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" id="comment" style="color: #b0002c;" ><i class="fa-solid fa-comment" ></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="info" style="color: #b0002c;" ><i class="mr-3 fa-solid fa-envelope"></i> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" id="email" style="color: #b0002c;" ><i class="fa-solid fa-face-smile"></i></a>
                    </li>
                </ul>
            </div>
            <div class="card-body1 py-5">
                <h5 class="card-title">Ticket</h5>
                <p class="card-text">Bulk urgent ticket today with our live team.</p>
                <a href="#" class="btn" style="background-color: #b0002c;  color: #eee;">Live Chat</a>
            </div>
            <div class="card-body2 py-5" style="display: none;">
            <h5 class="card-title">Email</h5>
                <p class="card-text">Having any problem, Please contact our customer service today, Thank you.</p>
                <a href="mailto: info@jordan.com" class="btn" style="background-color: #b0002c;  color: #eee;">Send us an Email</a>
            </div>
            <div class="card-body3 py-5" style="display: none;">
                <h5 class="card-title">Rate Us</h5>
                <p class="card-text"> how do you feel about our banking service.</p>
                <a href="#" class="btn"  style="background-color: #b0002c; color: #eee;" onclick="comment();">Tell us <i class="fa-solid fa-face-smile"></i></a>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    
<script>


$(document).ready(function(){
    $("#comment").click(function(){
        $("#info").removeClass("active");
        $("#email").removeClass("active");
        $("#comment").addClass("active");
        //changing card body
        $(".card-body1").show();
        $(".card-body2").hide();
        $(".card-body3").hide();

        $(function() {
          var target = $('.bottom-content');
          if (target.length) {
              $('html,body').animate({
              scrollTop: target.offset().top
          }, 1000);
          return false;
          }
      });

  });

  $("#info").click(function(){
        $("#info").addClass("active");
        $("#email").removeClass("active");
        $("#comment").removeClass("active");
        //changing card body
        $(".card-body1").hide();
        $(".card-body2").show();
        $(".card-body3").hide();

        $(function() {
          var target = $('.bottom-content');
          if (target.length) {
              $('html,body').animate({
              scrollTop: target.offset().top
          }, 1000);
          return false;
          }
      });

  });
    
  $("#email").click(function(){
      $("#info").removeClass("active");
      $("#email").addClass("active");
      $("#comment").removeClass("active");
      //changing card body
      $(".card-body1").hide();
      $(".card-body2").hide();
      $(".card-body3").show();

      $(function() {
          var target = $('.bottom-content');
          if (target.length) {
              $('html,body').animate({
              scrollTop: target.offset().top
          }, 1000);
          return false;
          }
      });
      
  });


});

</script>
<?php 
include "layouts/footer.php";
?>