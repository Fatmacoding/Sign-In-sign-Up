<?php

include 'connect.php';


if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail ="SELECT * FROM users WHERE email='$email'";
    $result = $connect->query($checkEmail);

    if($result->num_rows>0){
        echo 'Email Address Already Exists !';
    }
    else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password) VALUES ('$firstName','$lastName','$email','$password')";
            if($connect->query($insertQuery)==TRUE){
                header('location: login.php');
            }
            else{
                echo 'Error:'.$connect->error; 
            }
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $mysql = "SELECT * FROM users WHERE email='$email' and password='$password'";
    $result = $connect->query($mysql);

    if($result->num_rows >0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: homepage.php");
        exit();
    }
    else{
      echo 'Not found, Incorrect email or Password';
    }
}

?>
