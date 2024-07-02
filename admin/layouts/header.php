

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jordan</title>

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

    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />


</head>
<body style="background-image: url('images/background.png')" id="">

<h4 class="p-3 fixed-top"  style="font-size: 28px; background-color: #eee; color: #b0002c;"> <i class="fa-solid fa-bars" id="toggle"></i> <i class="fa-solid fa-bars" style="color: #eee" id="toggletwo"></i></h4>

<div class="mt-5"></div>

<!-- START CONTAINER TAG -->
    <div class="bankContainer" id="">

    <!-- START SIDE BAR TAG -->
        <div class="sideBar" >
            <h5 class="p-4">ONLINE BAKING</h5>

            <hr>
            <ul>
                <li><a href="index.php" class="sideBarMenu" id="<?php echo $dashboardActive; ?>"><i class="mr-3 fa-solid fa-house"></i> Dashboard</a></li>
                <li><a href="<?php echo $transaction; ?>" class="sideBarMenu" id="<?php echo $transActive; ?>"><i class="mr-3 fa-solid fa-wallet"></i> Transaction</a></li>
                <li><a href="scotcode.php" class="sideBarMenu" id="<?php echo $scotActive; ?>"><i class="mr-3 fa-solid fa-wallet"></i> Scot Code</a></li>
                <li><a href="settings.php" class="sideBarMenu" id="<?php echo $settingsActive; ?>"><i class="mr-3 fa-solid fa-gears"></i> Settings</a></li>

            </ul>
        </div>
    <!-- END SIDE BAR TAG -->
    
    <!-- START SECTION CONTAINER TAG -->
        <div class="sectionContainer">