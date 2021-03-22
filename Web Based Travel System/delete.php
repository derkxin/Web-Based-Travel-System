<?php

session_start();
$title = "Delete";
$background = "#E5E4E2";
?>

<html>
<body>
 <?php include('header.php'); ?>
 <style>
  <?php include('css/delete.css')?>
  </style>
 <h3>Are you sure you want to delete your account?</h3>
 <div>
 <table>
    <form action="/php/includes/delete.inc.php" method="post">
    <table class="delete">
        <td>Password :</td>
        <th> <input type='password' name='usersPwd'></th>
        <tr>
        <td>Confirm Password :</td>
        <th> <input type='password' name='usersCPwd'></th>
    </table>
    <br>
    <button id="delete" type="submit" name="submit">Delete</button>
    </form>
    
    <br><br>
    
    <form action="/php/profile.php" method="">
        <button  id="cancel1" type="submit" name="cancel">Cancel</button>
    </form>
 </table>
</div>
    <?php
    if (isset($_GET["error"])){
      if($_GET["error"]=="emptyinput"){
         echo '<script type="text/javascript">';
         echo 'alert("Fill in all the field!")';
         echo '</script>';
      }
      if($_GET["error"]=="oldpwdnomatch"){
         echo '<script type="text/javascript">';
         echo 'alert("Password not found!")';
         echo '</script>';
      }
      else if($_GET["error"]=="passwordsdontmatch"){
         echo '<script type="text/javascript">';
         echo 'alert("Password do not match!")';
         echo '</script>';
      }
    }
    ?>
</body>

<?php include('footer.php'); ?>
</html>
