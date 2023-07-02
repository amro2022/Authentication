<?php

function checkMethod($method){
    if ($_SERVER['REQUEST_METHOD'] == $method){
        return true;
    }
    return false;
}

function required($input){
    if(empty($input)){
        return false;
    }
    return true;
}

function santized($input){
    return htmlspecialchars(htmlentities(stripslashes(trim($input))));
}

function minValue($input,$length){
    if(strlen($input) < $length){
        return false;
    }
    return true;
}

function maxValue($input,$length){
    if(strlen($input) > $length){
        return false;
    }
    return true;
}

function validateEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return false;
    }
    return true;
}

function sameInput($value1,$value2){
    if($value1 != $value2){
        return true;
    }
    return false;
}

function redirect($path){
    header('Location:'.$path);
}