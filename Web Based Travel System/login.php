<?php
    $title = "Login";
    $background = " #191919";


?>
<!DOCTYPE html>
<html>
    <?php include('header.php'); ?>
    <style>
    <?php include('css/login.css');?>
    </style>
        <div class="signup-form">
                    <h1>Login</h1>
                    <div class="signup-form-form">
                        <form action="/php/includes/login.inc.php" method="post">

                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="uid" placeholder="Username"><br>
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <input type="password" name="pwd" placeholder="Password"><br>
                                <button type="submit" name="submit">Log In</button>


                        </form>
                    </div>

                    <?php
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "emptyinput"){
                            echo '<b style="color:white">Fill in all field !</b>';
                        }
                        else if($_GET["error"] == "wronglogin"){
                            echo '<b style="color:white">Incorrect Login !</b>';
                        }
                    }

                    ?>

        </div>
        <?php include('footer.php'); ?>
</html>
