<?php 
$dashboardActive  = "sideBarMenu";
$transActive = "";
$transferActive = "";
$checkActive = "";
$supportActive = "";
$lifestyleActive ="";
$settingsActive = "";

//active variable for bottom bar
$dashboardActiveBottom  = "bottomBarMenu";
$transferActiveBottom = "";
$checkActiveBottom = "";
$settingsActiveBottom = "";
$transActiveBottom = "";

require "php/collect_database_details.php";

if(!isset($_SESSION['customerId'])){
    header("location: ../login.php");
}

if(isset($_GET['id'])){
    if($_SESSION['customerId'] == $_GET['id']){
        echo $_SESSION['login'];
    }
}

require "layouts/header.php";

?>

<style>
.card-body > a {
    height: 60px;
    padding: 20px;
    color: #b0002c;
    border-bottom: 1px solid #b0002c;

}
.card-body > a:hover{
   text-decoration: none;
   background: #b0002c;
   color: #eee;
   opacity: 0.3;

}
</style>


<div class="d-flex justify-content-between text-light mt-5">
    <h5><small id="">Welcome!</small> <?php echo $row['fullName']; ?></h5>
    <a href="php/logout.php" style="font-size: 25px;"><i class="fa-solid fa-right-from-bracket text-primary"></i></a>
</div>

<p class="pt-4 text-light">Accounts</p>

<div class="d-flex justify-content-around" id="accounts" style="background-color: ; ">

    <div class="shadow-sm p-3 bg-light rounded  d-flex flex-column justify-content-between">
        <div class="d-flex justify-content-between">
            <h6>Checking</h6>
            <div><span><?php echo "$".number_format($row['checking'], 2, ".", ","); ?></span></div>
        </div>
        <div class="d-flex justify-content-between">
            <h6>**2244</h6>
            <div><span>available</span></div>
        </div>
    </div>
    <div class="shadow-sm p-3 bg-light rounded d-flex flex-column justify-content-between">
        <div class="d-flex justify-content-between mx-2">
            <h6>Savings</h6>
            <div><span><?php echo "$".number_format($row['savings'], 2, ".", ","); ?></span></div>
        </div>
        <div class="d-flex justify-content-between">
            <h6>**0954</h6>
            <div><span>available</span></div>
        </div>
    </div>
    <div class="shadow-sm p-3  mb-5 bg-light rounded d-flex flex-column justify-content-between">
        <div class="d-flex justify-content-between">
            <h6>Current</h6>
            <div><span><?php echo "$".number_format($row['current'], 2, ".", ","); ?></span></div>
        </div>
        <div class="d-flex justify-content-between">
            <h6>**5472</h6>
            <div><span>available</span></div>
        </div>
    </div>
</div>

<br>
<br>

<?php include "layouts/quickaccess.php"; ?>
    

<br>

<div class="row" style="color: #b0002c;" >
    <div class="col-lg-7 col-md-12 d-flex justify-content-center">
        <div class="card w-100">
            <div class="card-header">
                <h4>Transactions</h4>
            </div>
            <div class="card-body">
            <?php

$trans = "SELECT * FROM `transactions` WHERE customerId = '$_SESSION[customerId]' order by id desc";
$trans_result = mysqli_query($db, $trans);    

while($trans_row = mysqli_fetch_array($trans_result, MYSQLI_ASSOC)){
?>
            <a href="receipt.php?id=<?php echo $trans_row["id"]; ?>" class="d-flex justify-content-between">
                <h6> <?php echo substr($trans_row['desc'], 0, 25); ?> <small class="d-block"><?php echo $trans_row['date']; ?> </small></h6>

        <?php if($trans_row['transaction'] == "credith"):?>
            <div><small class="text-success"><?php echo "$".$trans_row['amount']; ?> 

                <?php if($trans_row['status'] == "pending"):?>
                        <label for="disabledRange" class="form-label"> 
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow spinner-grow-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div> 
                        </label>                <?php else:?>
                    <i class="fa-solid fa-circle-check text-success"></i>
                <?php endif;?>

            </small></div>
        <?php else:?>
            <div><small><?php echo "$".$trans_row['amount']; ?>

                <?php if($trans_row['status'] == "pending"):?>
                        <label for="disabledRange" class="form-label"> 
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow spinner-grow-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div> 
                        </label>
                    <?php elseif($trans_row['status'] == "cancel"):?>
                        <i class="fa-solid fa-triangle-exclamation text-warning"></i>
                    <?php else:?>
                    <i class="fa-solid fa-circle-check"></i>
                <?php endif;?>

            </small></div>
        <?php endif;?>

            </a>
<?php
}
?>
                <a href="transaction.php" class="d-flex justify-content-end pt-4" style="border: none; color: blue;">
                    <blockquote>
                        view Transactions <i class="fa-solid fa-chevron-right"></i>
                    </blockquote>
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-5 col-md-12 ">
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
                <a href="#" class="btn"  style="background-color: #b0002c; color: #eee;" onclick="comment();"> <i class="fa-solid fa-face-smile"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="bottom-content"></div>

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


//admin greetings
  var myDate = new Date();

// document.getElementById('date').innerHTML =
//     '<b>' + myDate + '</b>';

var hrs = myDate.getHours();

var greet;

if (hrs < 12)
    greet = 'Good Morning';
else if (hrs >= 12 && hrs <= 17)
    greet = 'Good Afternoon';
else if (hrs >= 17 && hrs <= 24)
    greet = 'Good Evening';

document.getElementById('greetings').innerHTML = greet;


</script>

<?php 
    include "layouts/footer.php";
?>