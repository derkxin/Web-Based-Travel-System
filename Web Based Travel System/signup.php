<?php
    $title = "Sign Up";
    $bgImage = "pic/background.jpg";

?>
<!DOCTYPE html>
<html>
<?php include('header.php');?>
<style>
<?php include('css/login.css');?>
</style>
<div class="signup-form">
        <h1>Sign Up</h1>
        <div class="signup-form-form">
            <form action="/php/includes/signup.inc.php" method="post">

                <input type="text" name="name" placeholder="Full Name"><br>
                <input type="text" name="email" placeholder="Email"><br>
                <input type="text" name="uid" placeholder="Username"><br>
                <input type="password" name="pwd" placeholder="Password"><br>
                <input type="password" name="pwdrepeat" placeholder="Repeat password"><br>
                <button type="submit" name="submit">Sign Up</button>
            </form>
        </div>
        <?php
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
                echo '<b style="color:white">Fill in all field !</b>';
            }
            else if($_GET["error"] == "invaliduid"){
                echo '<b style="color:white">Choose a proper username !</b>';
            }
            else if($_GET["error"] == "invalidemail"){
                echo '<b style="color:white">Choose a proper email !</b>';
            }
            else if($_GET["error"]=="oldpwdmatch"){
                echo '<b style="color:white">Password already taken</b>';
            }
            else if($_GET["error"] == "passwordsdontmatch"){
                echo '<b style="color:white">Password not match !</b>';
            }
            else if($_GET["error"] == "stmtfailed"){
                echo '<b style="color:white">Somthing went wrong ! Try again !</b>';
            }
            else if($_GET["error"] == "usernametaken"){
                echo '<b style="color:white">User name already taken !</b>';
            }
            else if($_GET["error"] == "none"){
                echo '<b style="color:white">You have signed up !</b>';
            }
        }
        ?>
    </div>

<?php include('footer.php');?>
</html>
