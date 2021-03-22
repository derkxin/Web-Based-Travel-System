<?php
if(isset($_POST["submit"])){
    $password=$_POST["usersPwd"];
    $confirmPassword=$_POST["usersCPwd"];

    //Uncomment below when migrating to main folder
    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputDelete($password, $confirmPassword) !== false){
      header("location: /php/delete.php?error=emptyinput");
      exit();
    }
    if(verifyPwd($conn, $password) !== false){
      header("location: /php/delete.php?error=oldpwdnomatch");
      exit();
    }
    if(pwdMatch($password, $confirmPassword) !== false){
      header("location: /php/delete.php?error=passwordsdontmatch");
      exit();
    }

    $sql = "delete from users where usersPwd='$password'";
 
    if(mysqli_query($conn,$sql)){
        
        header("location: /php/includes/logout.inc.php");
        exit();
  }
  else{
      echo "Failed to delete";
  }
}
?>

