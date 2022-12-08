<?php

if (isset($_POST["submitSignIn"])) {

    $email = $_POST["emailLogin"];
    $pwd = $_POST["pwdLogin"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email, $pwd) !== false) {
        header("location: ../html/login.html?error=emptyInput");
        exit();
    }

    loginUser($conn, $email, $pwd);

}