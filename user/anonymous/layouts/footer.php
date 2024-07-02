
        <div data-role="footer" data-position="fixed">
            <h4>&copy; All Right Reserve Jordan Bank</h4>
        </div>

    </div>
</body>

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

</html>