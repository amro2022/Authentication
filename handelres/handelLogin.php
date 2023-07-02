<?php

session_start();

include '../core/function.php';

$errors = [];

if (checkMethod('POST')){

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!required($email)){
        $errors [] = "Email is Required";
    }elseif(!validateEmail($email)){
        $errors [] = "Enter a vaild email address"; 
    }

    if(!required($password)){
        $errors [] = "Password is Required";
    }
    
 
    $file = fopen("../file/users.csv", 'r');

    while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
    if ($data[1] == $email && sha1($password) == $data[2]) {
        
        $_SESSION['user'] = $data; 
        print_r( $_SESSION['user']);
        redirect('../profile.php'); 
        exit(); 
    }
    }
    fclose($file);

    $_SESSION['errors'] = ["Incorrect email or password."];
    redirect('../login.php');
    exit();

}