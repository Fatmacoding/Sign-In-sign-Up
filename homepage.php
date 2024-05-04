<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your profile</title>
</head>
<body>
    <div>
        <p>
            Welcome 
            <?php
                if(isset($_SESSION['email'])){
                    $email = $_SESSION['email'];
                    $query = mysqli_query($connect,"SELECT users.* FROM `users` WHERE users.email=$email");
                    while($row=mysqli_fetch_array($query)){
                        echo $row['firstName'] . ' ' . $row['lastName'] ;
                    }
                }
            ?>
            to your Account.
        </p>
    </div>
</body>
</html>