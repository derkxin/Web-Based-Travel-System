<?php

session_start();
$title = "Contact Us";
include_once 'header.php';

?>
<!DOCTYPE html>
<style>
<?php include_once 'css/contact.css'; ?>
</style>
<html style="background:url(pic/contact.jpg) no-repeat;background-size:100%;">
    
    
    <?php
        $Msg = "";
        if(isset($_GET['error'])){
            $Msg = "Something went wrong! Please try again.";
            echo '<div class="alert-error">' .$Msg. '</div>';
        }
        
        if(isset($_GET['success'])){
            $Msg = "Message Sent! Thank you for contact us.";
            echo '<div class="alert-success">' .$Msg. '</div>';
        }
    ?>

    <div class="contact-section">
        <div class="contact-info">
            <div><i class="fa fa-map-marker" aria-hidden="true"></i>Kampung Bukit Beruang, Melaka, Malaysia</div>
            <div><i class="fa fa-envelope" aria-hidden="true"></i>Assignment-2021@gmail.com</div>
            <div><i class="fa fa-phone" aria-hidden="true"></i>+6014-934 3145 </div>
            <div><i class="fa fa-clock-o" aria-hidden="true">Mon - Fri 8:00 AM to 5:00 PM</i></div>
        </div>
    </div>

    <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="contactform.php" method="POST">
            <input type="text" name="name" class="text-box" placeholder="Full Name">
            <input type="text" name="mail" class="text-box" placeholder="Your e-mail">
            <input type="text" name="subject" class="text-box" placeholder="Subject">
            <textarea name="message" placeholder="Message"></textarea>
            <button type="submit" name="submit">Send Email</button>

        </form>


    </div>

    
    <?php include('footer.php');?>
</html>

