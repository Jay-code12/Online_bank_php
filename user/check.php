<?php 
$dashboardActive  = "";
$transActive = "";
$transferActive = "";
$checkActive = "sideBarMenu";
$supportActive = "";
$lifestyleActive ="";
$settingsActive = "";

//active variable for bottom bar
$dashboardActiveBottom  = "";
$transferActiveBottom = "";
$checkActiveBottom = "bottomBarMenu";
$settingsActiveBottom = "";
$transActiveBottom = "";


include "layouts/header.php";
require "php/collect_database_details.php";

if(!isset($_SESSION['customerId'])){
  header("location: ../login.php");
}

?>

<style>

.card-body{
    height: 50px;
    margin-bottom: 10px;
}
</style>


  <div class="d-flex justify-content-between text-light mt-5">
    <h4>Upload Check Image</h4>
    <a href="php/logout.php" style="font-size: 25px;"><i class="fa-solid fa-right-from-bracket text-primary"></i></a>
  </div>

  <?php include "layouts/quickaccess.php"; ?>
    
  <br>
  <br>

<div id="checkalert" style="display: none;">
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>error occur!</strong> your uploadCheck could not be process due to network issues,  please report to your Bank branch
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>


<form  method="post" enctype="multipart/form-data" class="col-lg-10 p-5 mt-5 mx-auto border bg-light">

<?php
    if(isset($_POST['upload'])){
      if($_FILES['image']['size'] == 0){
        $_SESSION["statusmsg"] =  "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
          <strong>empty check!</strong> Please upload a clear photo of your check
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
          </button>
        </div>
        ";
      }else{

        // File upload path
        $targetDir = "check_image/";
        $fileName = basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType, $allowTypes)){
            // Upload file to folder
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
              $_SESSION["statusmsg"] = "
              <div class='alert alert-info alert-dismissible fade show' role='alert'>
                <strong>Error!</strong> Your check was not approve.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              ";
            }else{
              $_SESSION["statusmsg"] = "
              <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error!</strong> Sorry, there was an error uploading your file.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                </button>
              </div>
              ";
            }
        }else{
          $_SESSION["statusmsg"] = "
          <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Failed!</strong> Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
          </div>
          ";
        }
      }
    }

    // displaying upload validation msg
    if(isset($_SESSION["statusmsg"])){

      // $mail->send_mail($query->displaySelect('email'), "Unapprove",  $email_msg);

      echo $_SESSION["statusmsg"];
    }

?>


    <label for="formFileMultiple" class="form-label">Please Upload clear photo</label>
    <input class="form-control" type="file" id="formFileMultiple" name="image" multiple />
    <input type="submit" value="Upload" class="form-control mt-5 text-center" style="background-color: #b0002c;  color: #eee;" onclick="uploadCheck();" name="upload">
</form>

    <br>
    <br>
    <br>
    <br>

<?php 
include "layouts/footer.php";
?>