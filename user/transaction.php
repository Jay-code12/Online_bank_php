<?php 
$dashboardActive  = "";
$transActive = "sideBarMenu";
$transferActive = "";
$checkActive = "";
$supportActive = "";
$lifestyleActive ="";
$settingsActive = "";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "";
$checkActiveBottom = "";
$settingsActiveBottom = "";
$transActiveBottom = "bottomBarMenu";


include "layouts/header.php";
require "php/collect_database_details.php";

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
    <h4>Transactions</h4>
    <a href="php/logout.php" style="font-size: 25px;"><i class="fa-solid fa-right-from-bracket text-primary"></i></a>
  </div>

  <?php include "layouts/quickaccess.php"; ?>
    
  <br>
  <br>

  <div class="row" style="color: #b0002c;" >

    <div class="col-lg-10 col-md-12 d-flex justify-content-center">
        <div class="card w-100">
            <div class="card-header">
                <h4>Transactions</h4>
            </div>
            <div class="card-body">
<?php

$data = $query->displayAll_select('transactions', array("customerId"), array("$_SESSION[customerId]"), "order by id desc");

foreach($data as $post){
?>
        <a href="receipt.php?id=<?php echo $post["id"]; ?>" class="d-flex justify-content-between" style="height: fit-content; width: 100%;">

            <h6  style="width: 70%; font-size: 14px;"> <?php echo substr($post['desc'], 0, 32); ?> 
                <small class="d-block"><?php echo $post['date']; ?> </small>
            </h6>
            

        <?php if($post['transaction'] == "credith"):?>
            
        <div style="width: 30%;">
            <small class="text-success"><?php echo "$".number_format($post  ['amount'], 2, ".", ","); ?> 

                <?php if($post['status'] == "pending"):?>
                        <label for="disabledRange" class="form-label"> 
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow spinner-grow-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div> 
                        </label>
                <?php else:?>
                    <i class="fa-solid fa-circle-check text-success"></i>
                <?php endif;?>

            </small>
        </div>

        <?php else:?>

            <div style="width: 30%;">
                <small><?php echo "$".number_format($post  ['amount'], 2, ".", ","); ?> 

                <?php if($post['status'] == "pending"):?>
                        <label for="disabledRange" class="form-label"> 
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow spinner-grow-sm" role="status">
                                <span class="sr-only">Loading...</span>
                            </div> 
                        </label>
                    <?php elseif($post['status'] == "cancel"):?>
                        <i class="fa-solid fa-triangle-exclamation text-warning"></i>
                    <?php else:?>
                    <i class="fa-solid fa-circle-check"></i>
                <?php endif;?>

                </small>
            </div>

        <?php endif;?>

    </a>
    
<?php
    }

?>
                    <span class="d-flex justify-content-end pt-4">
                        <blockquote>
                            Your Recent Transactions 
                        </blockquote>
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>

    <br>
    <br>
    <br>
    <br>

<?php 
include "layouts/footer.php";
?>