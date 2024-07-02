<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jordan</title>

    <link rel="stylesheet" href="assets/css/style.css"> 

    <!-- boostrap link -->
    <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

    <!-- sweet alert cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />

    <!-- fontawesome link -->
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">

    <link rel="stylesheet" href="assets/css/modal.css">

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


</head>
<body style="background-image: url('images/background.png')" id="">

<h4 class="p-3 fixed-top"  style="font-size: 28px; background-color: #eee; color: #b0002c; display: flex;">

    <div style="display: flex; justify-content: between">
        <i class="fa-solid fa-bars" id="toggle"></i>
        <i class="fa-solid fa-bars" style="color: #eee" id="toggletwo"></i>
    </div>

</h4>

<div class="mt-5"></div>

<!-- START CONTAINER TAG -->
    <div class="bankContainer" id="">

    <!-- START SIDE BAR TAG -->
        <div class="sideBar" >
            <h5 class="p-4">JORDAN BAKING</h5>

            <hr>
            <ul>
                <li><a href="index.php" class="sideBarMenu" id="<?php echo $dashboardActive; ?>"><i class="mr-3 fa-solid fa-house"></i> Dashboard</a></li>
                <li><a href="transaction.php" class="sideBarMenu" id="<?php echo $transActive; ?>"><i class="mr-3 fa-solid fa-wallet"></i> Transaction</a></li>
                <li><a href="transfer.php" class="sideBarMenu" id="<?php echo $transferActive; ?>"><i class="mr-3 fa-sharp fa-solid fa-money-bill-transfer"></i> Transfers</a></li>

                <li><a href="lifestyle.php" class="sideBarMenu" id="<?php //echo $messageActive; ?>"><i class="mr-3 fa-regular fa-braille"></i> Quick Access</a>
                </li>

                    <ul class="ml-5" style="background: #b0002c;">
                        <li class="mr-4"><a href="lifestyle.php" class="sideBarMenu text-info" id="<?php echo $lifestyleActive; ?>"><i class="mr-3 fa-solid fa-plane"></i> Lifestyle</a></li>
                        <li class="mr-4"><a class="sideBarMenu text-info"  onclick="loan();" id="<?php //echo $messageActive; ?>"><i class="mr-3 fa-sharp fa-solid fa-money-bills"></i> Pay Bill</a></li>
                        <li class="mr-4"><a  class="sideBarMenu text-info" onclick="loan();" id="<?php //echo $messageActive; ?>"><i class="fa-regular mr-3 fa-fingerprint"></i> Loan</a></li>
                    </ul>

                <li><a href="check.php" class="sideBarMenu" id="<?php echo $checkActive; ?>"><i class="mr-3 fa-solid fa-download"></i> Deposit Check</a></li>
                <li><a href="account.php" class="sideBarMenu" id="<?php echo $settingsActive; ?>"><i class="mr-3 fa-solid fa-gears"></i> Settings</a></li>
                <!-- <li><a href="message.php" class="sideBarMenu" id="<?php //echo $messageActive; ?>"><i class="mr-3 fa-sharp fa-solid fa-comments"></i> Messages</a></li> -->
                <li><a href="message.php" class="sideBarMenu" id="<?php echo $messageActive; ?>"><i class="mr-3 fa-solid fa-circle-info"></i> Support</a></li>
            </ul>
        </div>
    <!-- END SIDE BAR TAG -->
    
    <!-- START SECTION CONTAINER TAG -->
        <div class="sectionContainer">