<?php
// print_r($_POST);
if(empty($_POST["username"])){
    die("User name is required");
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Email is required");
}

if(strlen($_POST["password"]) < 8){

    die("Password must be at least 8 characters");
}
if(!preg_match('/^[a-zA-Z0-9]+$/',$_POST["username"])) {
    die("Username can only contain letters and numbers");
}   
if($_POST["password"]!=$_POST["password_confirmation"]) {
    die("Passwords do not match");
}

//hash password
$hashed_password = password_hash($_POST["password"], PASSWORD_BCRYPT);
print_r($_POST);
var_dump($hashed_password);

