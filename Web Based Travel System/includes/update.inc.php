<?php
if(isset($_POST["submit"])){
    $name=$_POST["usersName"];
    $email=$_POST["usersEmail"];
    $username=$_POST["usersUid"];
    $oldPassword=$_POST["usersOldPwd"];
    $password=$_POST["usersPwd"];
    $confirmPassword=$_POST["usersCPwd"];

    //Uncomment below when migrating to main folder
    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputUpdate($name, $email, $username, $password, $confirmPassword) !== false){
      header("location: /php/updateForm.php?error=emptyinput");
      exit();
    }
    if(invalidUid($username) !== false){
      header("location: /php/updateForm.php?error=invalidUid");
      exit();
    }
    if(invalidEmail($email) !== false){
      header("location: /php/updateForm.php?error=invalidemail");
      exit();
    }
    if(pwdMatch($password, $confirmPassword) !== false){
      header("location: /php/updateForm.php?error=passwordsdontmatch");
      exit();
    }
    if(updateuidExists($conn, $username, $email) !== false){
      header("location: /php/updateForm.php?error=usernametaken");
      exit();
    }
    if(verifyPwd($conn, $oldPassword) !== false){
      header("location: /php/updateForm.php?error=oldpwdnomatch");
      exit();
    }
    if(verifyPwd($conn, $password) !== true){
     header("location: /php/updateForm.php?error=oldpwdmatch");
     exit();
    }
    $sql = "UPDATE users SET usersName='$name',usersEmail='$email',usersUid='$username',usersPwd='$password' WHERE usersPwd='$oldPassword'";

    if(mysqli_query($conn,$sql)){
          session_start();
          $_SESSION["useruid"]=$username;
          header("location: /php/profile.php");
          exit();
    }
    else{
        echo "Not Update";
    }

}
?>

