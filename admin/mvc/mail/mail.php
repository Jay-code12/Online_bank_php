<?php

class Mail {


    public function send_mail($to_email, $subject, $email_msg){

        // use wordwrap() if lines are longer than 70 characters
        $email_msg = wordwrap($email_msg, 200);
    
        // It is mandatory to set the content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers. From is required, rest other headers are optional
        $headers .= 'From: <ezejoseph125@gmail.com>' . "\r\n";
        $headers .= 'Cc: mvc' . "\r\n";
        
        // send email
        mail($to_email, $subject, $email_msg, $headers);

    }
}