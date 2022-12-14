<?php

if (isset($_POST["updateData"])) {

    $id = $_POST["edit_id"];
    $patron1 = $_POST["EditPatron1"];
    $patron2 = $_POST["EditPatron2"];
    $calle = $_POST["EditCalle"];
    $colonia = $_POST["EditColonia"];
    $codigoPostal = $_POST["EditCP"];
    $sector = $_POST["EditSector"];
    $zona = $_POST["EditZona"];
    $coordenadas = $_POST["EditCoordenadas"];
    $sect = $_POST["EditSect"];
    $tes = $_POST["EditTes"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    editData($conn, $id, $patron1, $patron2, $calle, $colonia, $codigoPostal, $sector, $zona, $coordenadas, $sect, $tes);

}