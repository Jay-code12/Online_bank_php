<?php 
$dashboardActive  = "";
$transActive = "";
$transferActive = "sideBarMenu";
$checkActive = "";
$supportActive = "";
$lifestyleActive ="";
$settingsActive = "";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "bottomBarMenu";
$checkActiveBottom = "";
$settingsActiveBottom = "";
$transActiveBottom = "";


require "layouts/header.php";
require "php/collect_database_details.php";
require "php/transfer.php";

if(!isset($_SESSION['customerId'])){
    header("location: ../login.php");
}
?>


<div class="d-flex justify-content-between text-light">
  <h4>Transfer</h4>
  <a href="php/logout.php" style="font-size: 25px;"><i class="fa-solid fa-right-from-bracket text-primary"></i></a>
</div>

<?php include "layouts/quickaccess.php"; ?>

<br>

<div class="col-lg-10 col-md-12 ">
  <div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" id="transfer" href="#" style="color: #b0002c;" ><i class="fa-solid fa-landmark"></i> Transfer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="Int-transfer" href="#" style="color: #b0002c;" ><i class="fa-solid fa-landmark"></i> International Transfer</a>
        </li>
      </ul>
    </div>

    <div class="card-body" id="card-body1" >
    <form  style="color: #b0002c;" method="post">
        <div class="d-flex flex-column align-items-">

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Bank Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Bank</span>
              </div>
              <input type="text" class="form-control" id="validationDefaultUsername" placeholder="enter bank name"
                aria-describedby="inputGroupPrepend2" id="bank" name="bank" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Account Number</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Account</span>
              </div>
              <input type="number" class="form-control" id="validationDefaultUsername" placeholder="0000000000"
                aria-describedby="inputGroupPrepend2" id="accountNum" name="accountNum" required>
            </div>
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Account Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Name</span>
              </div>
              <input type="text" class="form-control" id="validationDefaultUsername" placeholder="enter receivers name"
                aria-describedby="inputGroupPrepend2" id="name" name="name" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Amount</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">$</span>
              </div>
              <input type="number" class="form-control" id="validationDefaultUsername" placeholder="0.00"
                aria-describedby="inputGroupPrepend2" id="amount" name="amount" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Description</label>
            <div class="input-group">
                <textarea name="message" placeholder="optional" style="width: 100%; height: fit-content"></textarea>
             </div>
          </div>

          <div class="col-md-6 mb-3">
            <div class="input-group">
              <input type="submit" class="form-control" value="Transfer"  onclick="transfer();" style="background-color: #b0002c;  color: #eee;"  name="transfer" >
            </div>
          </div>

        </div>
      </form>
    </div>


    <div class="card-body" style="display:none;" id="card-body2">
    <form style="color: #b0002c;" method="post">

        <div class="d-flex flex-column align-items-">
          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Bank Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Bank</span>
              </div>
              <input type="text" class="form-control" id="validationDefaultUsername" placeholder="enter bank name"
                aria-describedby="inputGroupPrepend2" name="bank" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Account Number</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Acc Number</span>
              </div>
              <input type="number" class="form-control" id="validationDefaultUsername" placeholder="00000000"
                aria-describedby="inputGroupPrepend2" name="accountNum" required>
            </div>
          </div>
          
          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Account Name</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Name</span>
              </div>
              <input type="text" class="form-control" id="validationDefaultUsername" placeholder="enter receivers name"
                aria-describedby="inputGroupPrepend2" name="name" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Amount</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">$</span>
              </div>
              <input type="number" class="form-control" id="validationDefaultUsername" placeholder="0.00"
                aria-describedby="inputGroupPrepend2" id="amount" name="amount" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">country</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Country</span>
              </div>
              <input type="text" class="form-control" id="validationDefaultUsername" placeholder="enter destination country"
                aria-describedby="inputGroupPrepend2" name="country" required>
            </div>
          </div>
        </div>

        <div class=" flex-column align-items-">
          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Zip Code</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Zip </span>
              </div>
              <input type="number" class="form-control" id="validationDefaultUsername" placeholder="enter Zip Code"
                aria-describedby="inputGroupPrepend2" name="zipcode" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Swift Code</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Swift </span>
              </div>
              <input type="text" class="form-control" id="validationDefaultUsername" placeholder="enter Swift Code "
                aria-describedby="inputGroupPrepend2" name="swiftCode" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Description</label>
            <div class="input-group">
                <textarea name="message" placeholder="optional" style="width: 100%; height: fit-content"></textarea>
             </div>
          </div>
          
          <div class="col-md-6 mb-3">
            <div class="input-group">
              <input type="submit" class="form-control" value="Transfer" style="background-color: #b0002c;  color: #eee;"  name="transferInt" required >
            </div>
          </div>
          
        </div>
      </form>
    </div>
    
  </div>
</div>

    <br>
    <br>
    <br>
    <br>

<script>

  $(document).ready(function(){
      $("#Int-transfer").click(function(){

          $("#transfer").removeClass("active");
          $("#Int-transfer").addClass("active");
          
          //changing card body
          $("#card-body1").hide();
          $("#card-body2").show();
      });

      $("#transfer").click(function(){

          $("#transfer").addClass("active");
          $("#Int-transfer").removeClass("active");

          //changing card body
          $("#card-body1").show();
          $("#card-body2").hide();
      });

  });


// function validateForm(){

//   swal({
//     title: "Are you sure?",
//     text: "Once deleted, you will not be able to recover this imaginary file!",
//     icon: "warning",
//     buttons: true,
//     dangerMode: true,
//   })
//   .then((willDelete) => {
//     if (willDelete) {
//       swal("error! your transaction was not completed!", {
//         icon: "warning",
//       });

//     } else {
//         swal("Terminated! you canceled this transaction!", {
//         icon: "success",
//          });      }
//   });
  
// }

</script>

<?php 

include "layouts/footer.php";
?>