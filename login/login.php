<?php
include("config.php");
include('userClass.php');
$userClass = new userClass();

$errorMsgReg = '';
$errorMsgLogin = '';
/* Login Form */
$usernameEmail = $_POST['username'];
$password = $_POST['password'];
if (strlen(trim($usernameEmail)) > 1 && strlen(trim($password)) > 1) {
    $uid = $userClass->userLogin($usernameEmail, $password);
    if ($uid) {
        header("Location: home.php"); // Page redirecting to home.php
    } else {
        $errorMsgLogin = "Please check login details.";
    }
}
