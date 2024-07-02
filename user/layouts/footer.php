</div>
    <!-- END SECTION CONTAINER TAG -->

    </div>
<!-- END CONTAINER TAG -->

<!-- BOTTOM MENU -->
    <div class="bottomMenu fixed-bottom ">
        <ul class="d-flex justify-content-around">
            <li><a href="index.php" class="bottomrMenu" id="<?php echo $dashboardActiveBottom; ?>" style="color: #eee;"><i class="fa-solid fa-house"></i> </a></li>
            <li><a href="transfer.php" class="bottomrMenu" id="<?php echo $transferActiveBottom; ?>" style="color: #eee;"><i class="fa-sharp fa-solid fa-money-bill-transfer"></i> </a></li>
            <li><a href="transaction.php" class="bottomrMenu" id="<?php echo $transActiveBottom; ?>" style="color: #eee;"><i class="fa-solid fa-wallet"></i> </a></li>
            <li><a href="check.php" class="bottomrMenu" id="<?php echo $checkActiveBottom; ?>" style="color: #eee;"><i class="fa-solid fa-download"></i> </a></li>
            <li><a href="account.php" class="bottomrMenu" id="<?php echo $settingsActiveBottom; ?>" style="color: #eee;"><i class="fa-solid fa-gears" ></i> </a></li>
        </ul>
    </div>

</body>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/662906b8a0c6737bd12fc4cb/1hs844gv6';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>


$(document).ready(function(){

    $("#toggle").click(function(){
        
        //$('.sectionContainer').toggle();
        $('.sideBar').toggle();

        //$(".sectionContainer").css("opacity", "0.5");
        $(".sideBar").css("background-color", "white");
        $(".sideBar").css("width", "70%");
        $(".sideBar").css("position", "fixed");
        $(".sideBar").css("z-index", "1");
        $(".sideBar").css("box-shadow", "5px 5px 5px #aaaaaa");

    });

});


</script>
<script src="assets/js/main.js"></script>
<script src="assets/js/modal.js"></script>

</html>
