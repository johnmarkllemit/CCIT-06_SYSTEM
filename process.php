<?php
include 'conn.php';

// adding new user
if(isset($_POST['register'])){
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['email'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

    if($pass1 == $pass2){
        $hash = password_hash($pass1, PASSWORD_DEFAULT);
        //INSERT INTO table_name (column1, column2, column3, ...) VALUES (value1, value2, value3, ...);
        $addUser = $conn->prepare("INSERT INTO users (user_fname, user_lname, user_email, user_pass) VALUES(?, ?, ?, ?)");
        $addUser->execute([
            $fname,
            $lname,
            $email,
            $hash
        ]);

        $msg = "User registration successful!";
        header("location: register.php?msg=$msg");
    }else{
        $msg = "Password do not match!";
        header("location: register.php?msg=$msg");
    }
}

// logout
if(isset($_GET['logout'])){
    session_start();

    unset($_SESSION['logged_in']);
    unset($_SESSION['user_id']);

    header("location: login.php");
}