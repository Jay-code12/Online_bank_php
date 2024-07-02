<?php

$sql="SELECT `reminder` FROM `users` WHERE 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result) <= 2){
        echo "warning please upgrade your account";
        exit();
    }
    elseif(mysql_num_rows($result) => 4){
        echo "your account is due for upgrade";
        exit();
    }
    else{
      echo "add one to the reminder number";
      exit();
  }



?>