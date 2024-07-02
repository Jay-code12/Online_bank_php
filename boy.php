<?php

    $mailheader = "From: info@lunarcryptominers.com\r\n";
    $mailheader .= "Reply-To: info@lunarcryptominers.com\r\n";
    $mailheader .= "MIME-Version: 1.0\r\n";
    $mailheader .= "Content-Type: text/html; charset=utf-8\r\n"; 
    
    $msg_email = "teslting";

    if(mail("ezejoseph125@gmail.com", "withdrawal", $msg_email)){
        echo "successful sent";
    }else{
        echo "not successfully sent";
    }
    
?>