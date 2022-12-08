<?php

if (isset($_POST["addData"])) {

    $patron1 = $_POST["AddPatron1"];
    $patron2 = $_POST["AddPatron2"];
    $calle = $_POST["AddCalle"];
    $colonia = $_POST["AddColonia"];
    $codigoPostal = $_POST["AddCP"];
    $sector = $_POST["AddSector"];
    $zona = $_POST["AddZona"];
    $coordenadas = $_POST["AddCoordenadas"];
    $sect = $_POST["AddSect"];
    $tes = $_POST["AddTes"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyAddData($patron1, $patron2, $calle, $colonia, $codigoPostal, $sector, $zona, $coordenadas, $sect, $tes) !== false) {
        header("location: ../html/index2.html?error=emptyAdd");
        exit();
    }

    addData($conn, $patron1, $patron2, $calle, $colonia, $codigoPostal, $sector, $zona, $coordenadas, $sect, $tes);

}