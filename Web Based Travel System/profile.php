<?php
    session_start();
    $title = "Profile";
	$background = "#E5E4E2";
?>
<html>
    <body>
        <style>
            <?php include('css/profile.css')?>
        </style>

        <section>
        <?php
            include('header.php');
        ?>
        
        <table class="tablestyle">
            <?php
            if(isset($_SESSION["useruid"])){
                $useruid = $_SESSION["useruid"];
                $conn = mysqli_connect("localhost", "id16251351_root", "Assignment-2021", "id16251351_logindb");
                $sql = "SELECT * FROM users WHERE usersUid = '$useruid';";
                $result = $conn ->query($sql);
                
                
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        
                        echo '<tr>';
                        echo '<td><i class="fa fa-user" aria-hidden="true"></i> &nbsp User Name :</td>';
                        echo '<td> '.$row['usersUid'].'</td><br>';
                        echo '<tr>';
                        echo '<td><i class="fa fa-address-book" aria-hidden="true"></i> &nbsp&nbsp&nbsp&nbsp Name :</td>';
                        echo '<td> '.$row['usersName'].'</td><br>';
                        echo '<tr>';
                        echo '<td><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp&nbsp&nbsp Email :</td>';
                        echo '<td> '.$row['usersEmail'].'</td>';
                        echo '</tr>';
                        echo '<tr>';
                        echo'<td><i class="fa fa-calendar-o" aria-hidden="true"></i> &nbsp&nbsp&nbsp&nbsp Date :</td>';
                        echo '<td> '. $row["Date"] . '</td>';
                        echo'</tr>';
                    }
                }
                else{
                    echo "No result";
                }
               
            }

            ?>
        </table>
    </section>

    

    <div>
        <br>
            <form action="/php/updateForm.php" method="">
                <button id="update" type='submit' name='Update'>Update</button>
            </form>
  
            <form action="/php/delete.php" method="">
                <button id="delete" type='submit' name='Delete'>Delete</button>
            </form>
    </div>
    <div style="margin-bottom:100px;"></div>

    </body>
    <?php include('footer.php');?>
</html>
    
        