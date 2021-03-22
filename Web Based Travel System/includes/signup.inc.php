<?php
    
    if(isset($_POST["submit"])){
        
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdrepeat"];

        require_once 'dbh.inc.php';
        require_once 'function.inc.php';

        if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
            header("location: /php/signup.php?error=emptyinput");
            exit();
        }
        if (invalidUid($username) !== false){
            header("location: /php/signup.php?error=invaliduid");
            exit();
        }
        if (invalidEmail($email)!== false){
            header("location: /php/signup.php?error=invalidemail");
            exit();
        }
        if(verifyPwd($conn, $pwd) !== true){
            header("location: /php/signup.php?error=oldpwdmatch");
            exit();
        }
        if (pwdMatch($pwd, $pwdRepeat)!== false){
            header("location: /php/signup.php?error=passwordsdontmatch");
            exit();
        }
        if (uidExists($conn, $username, $email)!== false){
            header("location: /php/signup.php?error=usernametaken");
            exit();
        }

        createUser($conn, $name, $email, $username, $pwd);
        
    }
    else{
        header("location: /php/signup.php");
        exit();
    }
