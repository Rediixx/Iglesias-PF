<?php

if (isset($POST["deleteData"])) {

    $id = $_POST['id'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    echo $id;

    deleteData($conn, $id);

}