<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Message</title>

    <!-- jquery cdn -->
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="font-size: 18px;">

    <br>

    <div class="container p-5 bg-danger"
        style="width: 100%; height: 100px; background-image: url(https://jordanbnk.com/heerevoa/2021/09/JORDAN-USA-BANK.png); background-position: center; background-repeat: no-repeat; background-size: contain;">
    </div>
    
    <p class="container" style="margin: 30px 1px;"> Hello, <?php $query->displaySelect('fullName'); ?></p>

    <p class="container" style="margin: 30px 1px;">

       <?php $email_msg; ?>
       
    </p>

    <center>
        <a href="" class="form-control mb-4 text-center" style="background-color: #b0002c; color: #fff; width: 60%; ">Login in</a>
    </center>

    <footer style="background-color: #b0002c; color: #fff">
        <div>
            <hr />
            <p style="background-color: ;"><img class="alignnone size-full wp-image-1090" src="https://jordanbnk.com/heerevoa/2021/07/FDIC.png" alt=""
                    width="222" height="56" /> &copy; | Copyright <span id="year"></span> <strong>Jordan USA Bank Plc</strong>
            </p>
            <p>&nbsp;</p>
        </div>
    </footer>

</body>
<script>

    //admin greetings
    var myDate = new Date();

    document.getElementById("year").innerHTML = myDate.getFullYear();

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

</html>