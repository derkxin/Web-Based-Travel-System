<?php

session_start();
$title = "Update";
$background = "#E5E4E2";

?>

<html>
<body>
    <?php include('header.php'); ?>
    <style>
        <?php include('css/update.css')?>
    </style>
  <div style="margin-top:100px;">
<table>
  <form action="/php/includes/update.inc.php" method="post">
  <table class="tablestyle">
    <tr>
      <td>User ID :</td>
      <th> <input type='text' name='usersUid'></th>
    <tr>
      <td>Name :</td>
      <th> <input type='text' name='usersName'></th>
    <tr>
      <td>Email :</td>
      <th> <input type='email' name='usersEmail'></th>
    <tr>
      <td>Old Password :</td>
      <th> <input type='password' name='usersOldPwd'></th>
    <tr>
      <td>Password :</td>
      <th> <input type='password' name='usersPwd'></th>
    <tr>
      <td>Confirm Password ：</td>
      <th> <input type='password' name='usersCPwd'></th>
  </table>
  <button id="update1" type='submit' name='submit'>Update</button>
  </form>
<br><br>
<form action="/php/profile.php" method="">
<button id="cancel" type='submit' name='submit'>Cancel</button>
</form>
</table>
</div>
<div style="margin-bottom:100px;"></div>
<?php
if (isset($_GET["error"])){
  if($_GET["error"]=="emptyinput"){
      echo '<script type="text/javascript">';
      echo 'alert("Fill in all the field!")';
      echo '</script>';
  }
  else if($_GET["error"]=="invalidUid"){
      echo '<script type="text/javascript">';
      echo 'alert("Choose a proper username!")';
      echo '</script>';
  }
  else if($_GET["error"]=="invalidemail"){
      echo '<script type="text/javascript">';
      echo 'alert("Choose a proper Email!")';
      echo '</script>';
  }
  else if($_GET["error"]=="passwordsdontmatch"){
      echo '<script type="text/javascript">';
      echo 'alert("Password do not match!")';
      echo '</script>';
  }
  else if($_GET["error"]=="stmtfailed"){
      echo '<script type="text/javascript">';
      echo 'alert("Something went wrong, please try again!")';
      echo '</script>';
  }
  else if($_GET["error"]=="oldpwdnomatch"){
      echo '<script type="text/javascript">';
      echo 'alert("Make sure the old password is correct!")';
      echo '</script>';
  }
  else if($_GET["error"]=="oldpwdmatch"){
      echo '<script type="text/javascript">';
      echo 'alert("Password already taken!")';
      echo '</script>';
  }
  else if($_GET["error"]=="usernametaken"){
      echo '<script type="text/javascript">';
      echo 'alert("Username already taken!")';
      echo '</script>';
  }
}
?>
</body>
<?php include('footer.php'); ?>
</html>
