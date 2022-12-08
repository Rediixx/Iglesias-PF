<?php

if (isset($_POST["submitSignUp"])) {
    
    $name = $_POST["nameSignUp"];
    $email = $_POST["emailSignUp"];
    $pwd = $_POST["pwdSignUp"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptySignUp($name, $email, $pwd) !== false) {
        header("location: ../html/login.html?error=emptyInput");
        exit();
    }

    if (invalidEmail($email) !== false) {
        header("location: ../html/login.html?error=invalidEmail");
        exit();
    }

    if (emailExists($conn, $email) !== false) {
        header("location: ../html/login.html?error=emailExists");
        exit();
    }

    createUser($conn, $name, $email, $pwd);

}