<?php

if (isset($_POST["deleteData"])) {

    $id = $_POST['delete_id'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    deleteData($conn, $id);

}