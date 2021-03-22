<?php
    ini_set('display_error', 1);
    error_reporting(E_ALL);
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];
    
    
        if(empty($name) || empty($subject) || empty($mailFrom) || empty($message)){
            header("location: contactus.php?error");
        }
        else{
            $to = "derkxin@gmail.com";
            $header = "From: " .$mailFrom;
            $txt = "You have received and e-mail from " .$name. ".\r\n".$message;
            
            if(mail($to, $subject, $txt, $header)){
                 header("location: contactus.php?success");
            }
        }
        
    }
    else{
        header("location: contactus.php");
    }