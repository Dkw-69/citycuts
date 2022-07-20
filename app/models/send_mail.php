<?php

class SendMail{
    public function send(){
        $_SESSION['error'] = '';
        if(!empty($_POST["submit"])) {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $subject = $_POST["subject"];
            $content = $_POST["message"];
        
            $toEmail = "support@citycuts.com";
            $mailHeaders = "From: " . $name . "<". $email .">\r\n";
            if(mail($toEmail, $subject, $content, $mailHeaders)) {
                return true;
            }else{
                $_SESSION['error'] = "Sorry, there was an error.";
            }
        }
    }
}