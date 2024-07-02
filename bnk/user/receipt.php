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


require "php/collect_database_details.php";
include "layouts/header.php";

  if(isset($_GET['scotcode'])){
    $scotcode = true; 
  }
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }else{
    header("location: index.php");
  }

  if(isset($_POST["scotproceed"])){

    $scotNumber = $_POST['scotcode'];

    $sql_scotcode = "SELECT * FROM `scotcode` WHERE customerId = '$_SESSION[customerId]' and `scotcode`='$scotNumber'";
    $result_scotcode = mysqli_query($db,$sql_scotcode);

    $row_scotcode = mysqli_fetch_array($result_scotcode, MYSQLI_ASSOC);

    if($row_scotcode['scotcode'] == $scotNumber){
        if($row_scotcode['status'] == ""){

            $sql_scotcode = "UPDATE `scotcode` SET `status`='used' WHERE customerId = '$_SESSION[customerId]' and `scotcode`='$scotNumber'";
            $result_scotcode = mysqli_query($db,$sql_scotcode);

            $sqlTrans = "SELECT * FROM `transactions` WHERE customerId = '$_SESSION[customerId]' and `id`='$id'";
            $resultTrans = mysqli_query($db,$sqlTrans);
            $rowTrans = mysqli_fetch_array($resultTrans, MYSQLI_ASSOC);

            $newPercentage = $row_scotcode['percentage'] + $rowTrans['percentage'];

            if($newPercentage > 100){
                $newPercentage = 100;
            }

            $sql_scotcode = "UPDATE `transactions` SET `percentage`='$newPercentage' WHERE customerId = '$_SESSION[customerId]' and `id`='$id'";
            $result_scotcode = mysqli_query($db,$sql_scotcode);

            $msgscot = "<div class='alert alert-success'>
                    <strong> congratulation your scotcode is processing... </strong>
                </div>";
        }else{
            $msgscot = "<div class='alert alert-danger'>
            <strong> this scot code have been used by u </strong>
            </div>";
        }
    }else{
        $msgscot = "<div class='alert alert-danger'>
        <strong> invalid code, please enter the correct code </strong>
        </div>";
    }

} 

?>

<style>

		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #333333;
			border-top: 12px solid #9f181c;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 18px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 20px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 18px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 18px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 22px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		

#cancel_transaction{
    display: flex; 
    justify-content: space-between;
}

@media only screen and (max-width: 620px) {

    #cancel_transaction{
        flex-direction: column;
        align-content: space-between;        
        justify-content: space-between;
    }
}


</style>

<div class="d-flex justify-content-between text-light mt-4">
    
</div>

<?php include "layouts/quickaccess.php"; ?>

<div class="col-md-12">   
 <div class="row">
		
 <?php


$receipt = "SELECT * FROM `transactions` WHERE id = '$_GET[id]'";
$receipt_result = mysqli_query($db,$receipt);
$receipt_row = mysqli_fetch_array($receipt_result, MYSQLI_ASSOC);    
   
?>

	<?php if($receipt_row['transaction'] == "debith"): ?>

        <div class="receipt-main col-lg-10 col-xs-12 col-sm-12 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 mx-auto">
            <div>

        <?php if(isset($scotcode)): ?>
            <form action="#" method="post">
                <label for="inputPassword5" class="form-label"><strong>Scot Code</strong></label>
                <input type="number" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Enter code" name="scotcode" required>
                <input type="submit" id="inputPassword5" class="form-control my-2 bg-success" aria-describedby="passwordHelpBlock" value="Click to Proceed" name="scotproceed" >
            </form>
        <?php endif; ?>

        <?php 
            if(isset($msgscot)){
                echo $msgscot;
            } 
        ?>
            
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><?php echo $receipt_row['desc']; ?></td>
                            <td class="col-md-3"><?php echo $query->displaySelect('currency').$receipt_row['amount']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-right">
                            <p>
                                <strong>Total Amount: </strong>
                            </p>
                            <p>
                                <strong>Charged Fee: </strong>
                            </p>
							<p>
                                <strong>Status: </strong>
                            </p>
							</td>
                            <td>
                            <p>
                                <strong><?php echo $query->displaySelect('currency').($receipt_row['amount']+$receipt_row['amount']*0.001); ?></strong>
                            </p>
                            <p>
                                <strong><?php echo $query->displaySelect('currency').$receipt_row['amount']*0.001; ?></strong>
                            </p>
							<p>
						<?php if($receipt_row['status'] == "pending"): ?>
                                <button class="btn btn-warning" type="button" disabled>
                                    sending...
                                </button>
                            <?php elseif($receipt_row['status'] == "cancel"): ?>
                                <button class="btn btn-warning" type="button" disabled>
                                    canceled...
                                </button>
						<?php else: ?>
                                <button class="btn btn-danger" type="button" disabled>
									<i class="fa-solid fa-circle-check"></i> sent
                                </button>
						<?php endif; ?>
                            </p>
							</td>
                        </tr>
                        <tr>
                           
                            <td class="text-right text-danger"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong><?php echo $query->displaySelect('currency').($receipt_row['amount']+$receipt_row['amount']*0.001); ?></strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
			
            
		<?php if($receipt_row["status"] == "pending"):?>
			<form action="index.php" method="get" class="d-flex flex-column">
                <label for="disabledRange" class="form-label"> 
                    (<?php echo $receipt_row['percentage']."%"; ?>) Sending 
                    <div class="spinner-border spinner-border-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div> </label>
                <input type="range" class="form-range" id="disabledRange" value="<?php echo $receipt_row['percentage']; ?>" disabled>

                <!-- Modal HTML embedded directly into document -->
                <div id="ex1" class="modal" style="height: fit-content;">

                    <div id="passwordHelpBlock" class="form-text text-center">
                        Hello, <?php echo $row["fullName"]; ?> please enter purchased <strong>Scot Code</strong> for faster transaction. 
                        
                        <a id="inputPassword5" class="form-control mt-2 bg-success" aria-describedby="passwordHelpBlock" href="receipt.php?id=<?php echo $id; ?>&scotcode=1">Click to Proceed</a>

                        
                        <br> Thank you!
                    </div>

                    <a href="#" rel="modal:close">Close</a>
                </div>

                <!-- Link to open the modal --> 
                <p><a href="#ex1" class="btn btn-info" rel="modal:open">Click for fast Transaction</a></p>
            </form>

            <p><a href="transaction.php" class="btn btn-info">Go Back</a></p>

        <?php elseif($receipt_row["status"] == "cancel"):?>

			<form action="" method="post" class="d-flex flex-column">
                <input type="range" class="form-range" id="disabledRange" value="<?php echo $receipt_row['percentage']; ?>" disabled>

                <!-- Link to open the modal --> 
                <p><a href="transaction.php" class="btn btn-info">Go Back</a></p>
                
            </form>

		<?php else: ?>
			
			<form action="" method="post" class="d-flex flex-column">
                <input type="range" class="form-range" id="disabledRange" value="<?php echo $receipt_row['percentage']; ?>" disabled>

                <!-- Link to open the modal --> 
                <p><a href="transaction.php" class="btn btn-info">Go Back</a></p>
                
            </form>

		<?php endif; ?>

        <div class="py-3 border px-2">

        <?php if($receipt_row['transaction'] == "debith"):?>

            <?php if($receipt_row['status'] == "pending"):?>

                <h4 class="" ><strong>Sending To</strong></h4>
                <div style="" id="cancel_transaction">
                    <div class="">
                        <span class="d-block"><strong>Acc. Name:</strong> <?php echo $receipt_row['name']; ?></span>
                        <span class="d-block"><strong>Acc. Num:</strong> <?php echo $receipt_row['accountNum']; ?></span>
                        <span class="d-block"><strong>Bank Name:</strong> <?php echo $receipt_row['bank']; ?></span>
                    </div>
                   <div class="mt-3">
                        <span class="d-block"><strong>Terminate this transaction</strong> </span>
                        <a href="php/cancel.php?id=<?php echo $_GET["id"]; ?>" class="btn btn-warning text-end text-danger" style="height: fit-content">Proceed </a>
                   </div>
                </div>

            <?php else:?>

                <h4 class="text-" ><strong>Sent To</strong></h4>
                <div style="" id="cancel_transaction">
                    <div class="">
                        <span class="d-block"><strong>Acc. Name:</strong> <?php echo $receipt_row['name']; ?></span>
                        <span class="d-block"><strong>Acc. Num:</strong> <?php echo $receipt_row['accountNum']; ?></span>
                        <span class="d-block"><strong>Bank Name:</strong> <?php echo $receipt_row['bank']; ?></span>
                    </div>
                   <div class="mt-3">
                        <span class="d-block"><strong>Delete this transaction</strong> </span>
                        <a href="php/delete.php?id=<?php echo $_GET["id"]; ?>" class="btn btn-danger text-end text-secondary" style="height: fit-content">delete</a>
                   </div>
                </div>

            <?php endif; ?>

        <?php endif; ?>

</div>







	<?php else: ?>
			<div class="receipt-main col-lg-10 col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3 mx-auto">
            <div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><?php echo $receipt_row['desc']; ?></td>
                            <td class="col-md-3"><?php echo $query->displaySelect('currency').$receipt_row['amount']; ?></td>
                        </tr>
                        <tr>
                            <td class="text-right">
                            <p>
                                <strong>Total Amount: </strong>
                            </p>
                            <p>
                                <strong>Charged Fee: </strong>
                            </p>
							<p>
                                <strong>Status: </strong>
                            </p>
							</td>
                            <td>
                            <p>
                                <strong><?php echo $query->displaySelect('currency').($receipt_row['amount']-$receipt_row['amount']*0.001); ?></strong>
                            </p>
                            <p>
                                <strong><?php echo $query->displaySelect('currency').$receipt_row['amount']*0.001; ?></strong>
                            </p>
							<p>
						<?php if($receipt_row['status'] == "pending"): ?>
                                <button class="btn btn-warning" type="button" disabled>
                                    Receiving...
                                </button>
						<?php else: ?>
                                <button class="btn btn-success" type="button" disabled>
									<i class="fa-solid fa-circle-check"></i> Received
                                </button>
						<?php endif; ?>
                            </p>
							</td>
                        </tr>
                        <tr>
                           
                            <td class="text-right text-success"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-success"><h2><strong><?php echo $query->displaySelect('currency').($receipt_row['amount']-$receipt_row['amount']*0.001); ?></strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
			
		<?php if($receipt_row["status"] == "pending"):?>
			<form action="" method="post" class="d-flex flex-column">
                <label for="disabledRange" class="form-label"> 
                    (<?php echo $receipt_row['percentage']."%"; ?>) Receiving 
                    <div class="spinner-border spinner-border-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div> </label>
                <input type="range" class="form-range" id="disabledRange" value="<?php echo $receipt_row['percentage']; ?>" disabled>

                <!-- Link to open the modal --> 
                <p><a href="transaction.php" class="btn btn-info">Go Back</a></p>
                
            </form>

		<?php else: ?>
			
			<form action="" method="post" class="d-flex flex-column">
                <input type="range" class="form-range" id="disabledRange" value="<?php echo $receipt_row['percentage']; ?>" disabled>

                <!-- Link to open the modal --> 
                <p><a href="transaction.php" class="btn btn-info">Go Back</a></p>
                
            </form>
			
		<?php endif; ?>

			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-8 text-left">
						<div class="receipt-right">
							<p><b>Date :</b> <?php echo $receipt_row['date']; ?></p>
							<h5 style="color: rgb(140, 140, 140);">Thanks for Banking With us.!</h5>
						</div>
					</div>

				</div>
            </div>
			
        </div>
		
	<?php endif; ?>
    
	</div>
</div>

	<br>
    <br>
    <br>
    <br>

<?php 
include "layouts/footer.php";
?>