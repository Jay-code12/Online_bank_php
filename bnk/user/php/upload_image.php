<?php 
  $statusMsg = '';

  
  if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){

      // File upload path
      $targetDir = "profile_images/";
      $fileName = basename($_FILES["file"]["name"]);
      $targetFilePath = $targetDir . $fileName;
      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

      // Allow certain file formats
      $allowTypes = array('jpg','png','jpeg','gif','pdf');
      if(in_array($fileType, $allowTypes)){
          // Upload file to server
          if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

              // Insert image file name into database
              $update = $query->update($query->displaySelect('id'), 'user', array('image'), array($targetFilePath));

              if(!$update){
                  $statusMsg = "<li class='alert alert-success'> The file ".$fileName. " has been uploaded successfully.</li>";
              }else{
                  $statusMsg = "<li class='alert alert-warning'> File upload failed, please try again.</li>";
              } 

          }else{
              $statusMsg = "<li class='alert alert-warning'> Sorry, there was an error uploading your file.</li>";
          }
      }else{
          $statusMsg = "<li class='alert alert-danger'> Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.</li>";
      }
  }else{
      $statusMsg = "<li class='alert alert-info'> Please select a file to upload.</li>";
  }
  

  ?>