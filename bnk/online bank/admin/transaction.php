<?php 

$dashboardActive  = "";
$transActive = "sideBarMenu";
$transferActive = "";
$settingsActive = "";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "";
$settingsActiveBottom = "";
$transActiveBottom = "bottomBarMenu";

$transaction = "";

require "php/connection.php";
require "php/collect_user_data.php";
require "layouts/header.php";
?>

<div class="col-md-12 bg-light">

    <table class="table table-responsive  table-bordered">

        <tr>
            <th>Full Name</th>
            <td><?php echo $row['fullName']; ?></td>
            <th>Account Number</th>
            <td><?php echo $row['accountNum']; ?></td>
            <th>Customer ID</th>
            <td><?php echo $row['customerId']; ?></td>
            <th>phone</th>
            <td><?php echo $row['phone']; ?></td>
            <th>Debith Card Number</th>
            <td><?php echo $row['debitCard']; ?></td>
        </tr>
        <tr>
            <th>IFSC</th>
            <td><?php echo $row['Ifsc']; ?></td>
            <th>Branch</th>
            <td><?php echo $row['branch']; ?></td>
            <th>pin</th>
            <td><?php echo $row['pin']; ?></td>
            <th>email</th>
            <td><?php echo $row['email']; ?></td>
            <th colspan="3">password </th>
            <td><?php echo $row['password']; ?></td>
        </tr>

    </table>

    <hr class="hr_style" />

    <h3 class="page_label">Add Transaction History</h3>
    <hr />

    <?php if(isset($_SESSION['msgtransfer'])){
            echo $_SESSION['msgtransfer'];
    }
    ?>

    <?php if(isset($updateView)): ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Amount</label>
                <input type="number" class="form-control" name="amount" value="<?php echo $amount; ?>">
            </div>
            <div class="form-group">
                <label for="">Bank Name</label>
                <input type="text" class="form-control" name="bank" value="<?php echo $bank; ?>">
            </div>
            <div class="form-group">
                <label for="">Account Name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="form-group">
                <label for="">Date</label>
                <input type="text" class="form-control" name="date" value="<?php echo $date; ?>">
            </div>
            <div class="form-group">
                <label for="">Percentage Loading...</label>
                <input type="number" class="form-control" name="per" value="<?php echo $per; ?>">
            </div>
            <div class="form-group">
                <label for="validationDefaultUsername">Description</label>
                <div class="input-group">
                    <textarea name="desc" placeholder="optional" style="width: 100%; height: fit-content"><?php echo $desc; ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="form-control bg-success" name="update" value="Update">
            </div>

        </form>

    <?php else: ?>
    <div class="col-lg-10 col-md-12 ">
  <div class="card text-center">
    <div class="card-header">
      <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
          <a class="nav-link active" id="transfer" href="#" style="color: #b0002c;" ><i class="fa-solid fa-landmark"></i> Debith Transfer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="Int-transfer" href="#" style="color: #b0002c;" ><i class="fa-solid fa-landmark"></i> Credith Transfer</a>
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

          <input type="hidden" class="form-control" id="validationDefaultUsername" placeholder="enter receivers name"
                aria-describedby="inputGroupPrepend2" value="<?php echo $row['customerId']; ?>" name="customerId">

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
            <label for="validationDefaultUsername">Date</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Date</span>
              </div>
              <input type="date" class="form-control" id="validationDefaultUsername" placeholder="0.00"
                aria-describedby="inputGroupPrepend2" id="amount" name="date" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Description</label>
            <div class="input-group">
                <textarea name="desc" placeholder="optional" style="width: 100%; height: fit-content"></textarea>
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
            <label for="validationDefaultUsername">Date</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend2"  style="background-color: #b0002c;  color: #eee; width: 60px;">Date</span>
              </div>
              <input type="date" class="form-control" id="validationDefaultUsername" placeholder="0.00"
                aria-describedby="inputGroupPrepend2" id="amount" name="date" required>
            </div>
          </div>

          <div class="col-md-6 mb-3">
            <label for="validationDefaultUsername">Description</label>
            <div class="input-group">
                <textarea name="desc" placeholder="optional" style="width: 100%; height: fit-content"></textarea>
             </div>
          </div>
          
          <div class="col-md-6 mb-3">
            <div class="input-group">
              <input type="submit" class="form-control" value="Transfer" style="background-color: #b0002c;  color: #eee;"  name="transferInt"  >
            </div>
          </div>
          
        </div>
      </form>
    </div>
    
  </div>
</div>
    <?php endif ?>
    <hr class="hr_style" />

    <table class="table table-responsive table-striped table-bordered">
        <thead>
            <tr>
                <th>Description</th>
                <th>Status</th>
                <th>Transactions</th>
                <th>Date</th>
                <th>update</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody class="mx-auto">

    <?php 
        $user = "SELECT * FROM `transactions` WHERE customerId = '$_GET[id]' order by id desc";
        $user_result = mysqli_query($db, $user);    
   
        while($user_row = mysqli_fetch_array($user_result, MYSQLI_ASSOC)){
    ?>
            <tr>
                <td><?php echo $user_row['desc']; ?></td>
                <td><?php echo $user_row['status']."($user_row[percentage]%)"; ?></td>
                <td><?php echo $user_row['transaction']; ?></td>
                <td><?php echo $user_row['date']; ?></td>
                <td>
                    <a href="transaction.php?id=<?php echo $row['customerId']; ?>&update=<?php echo $user_row['id']; ?>">Update</a>
                </td>
                <td>
                    <a href="php/delete.php?id=<?php echo $row['customerId']; ?>&delete=<?php echo $user_row['id']; ?>"
                        onclick="return confirm('CONFIRMATION: \n\n Are you sure you want to DELETE this transaction from history?');">Delete</a>
                </td>
            </tr>
    <?php
        }
    ?>    
        </tbody>

    </table>

</div>


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


</script>



<?php 
require "layouts/footer.php";
?>