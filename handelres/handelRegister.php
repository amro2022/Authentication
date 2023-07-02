<?php
session_start();

include 'function.php';

$errors = [];

if (checkMethod('POST')){

    foreach($_POST as $key => $value){
        $$key = santized($value);
    }

    if(!required($name)){
        $errors [] = "Name is Required";
    }elseif(!minValue($name,3)){
        $errors [] = "Name must be gteater than 3 chars"; 
    }elseif(!maxValue($name,20)){
        $errors [] = "Name must be smaller than 20 chars";
    }

    if(!required($email)){
        $errors [] = "Email is Required";
    }elseif(!validateEmail($email)){
        $errors [] = "Enter a vaild email address"; 
    }

    if(!required($password)){
        $errors [] = "Password is Required";
    }elseif(!minValue($password,6)){
        $errors [] = "Password must be gteater than 6 chars"; 
    }elseif(!maxValue($password,20)){
        $errors [] = "Password must be smaller than 20 chars";
    }

    if(!required($password2)){
        $errors [] = "Password2 is Required";
    }elseif(sameInput($password,$password2)){
        $errors [] = "Password must be match";
    }
  
    if(empty($errors)){
        $file = fopen('users.csv','a+');
        $data = [$name,$email,sha1($password)];
        fputcsv($file,$data);
        $_SESSION['user'] = [$name,$email];
        redirect('profile.php');
        die;
    }else{
        $_SESSION['errors'] = $errors;
        redirect('register.php');
        die;
    }

}