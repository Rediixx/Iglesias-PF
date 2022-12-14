<?php

function emptySignUp($name, $email, $pwd) {
    $result;
    if (empty($name) || empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emailExists($conn, $email) {
    $sql = "SELECT * FROM users WHERE userEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../html/login.html?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $pwd) {
    $sql = "INSERT INTO users (userName, userEmail, userPwd) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../html/login.html?error=stmtFailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../html/login.html?error=none");
    exit();
}

function emptyInputLogin($email, $pwd) {
    $result;
    if (empty($email) || empty($pwd)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $pwd) {
    $emailExists = emailExists($conn, $email);

    if ($emailExists === false) {
        header("location: ../html/login.html?error=wrongLogin");
        exit();
    }

    $pwdHashed = $emailExists["userPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../html/login.html?error=wrongLogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $emailExists["userId"];
        $_SESSION["userEmail"] = $emailExists["userEmail"];
        header("location: ../html/index.html");
        exit();
    }

}

function emptyAddData($patron1, $patron2, $calle, $colonia, $codigoPostal, $sector, $zona, $coordenadas, $sect, $tes) {
    $result;
    if (empty($patron1) || empty($patron2) || empty($calle) || empty($calle) || empty($colonia) || empty($codigoPostal) || empty($sector) || empty($zona) || empty($coordenadas) || empty($sect) || empty($tes)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function addData($conn, $patron1, $patron2, $calle, $colonia, $codigoPostal, $sector, $zona, $coordenadas, $sect, $tes) {
    $sql = "INSERT INTO ermitas (patron1, patron2, calle, col, CP, sector, zonaa, coord, sect, tes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../html/index2.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ssssssssss", $patron1, $patron2, $calle, $colonia, $codigoPostal, $sector, $zona, $coordenadas, $sect, $tes);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../html/index2.php?error=none");
    exit();
}

function deleteData($conn, $id) {
    $sql = "DELETE FROM ermitas WHERE idnE = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../html/index2.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../html/index2.php?error=none");
    exit();
}

function editData($conn, $id, $patron1, $patron2, $calle, $colonia, $codigoPostal, $sector, $zona, $coordenadas, $sect, $tes) {
    $sql = "UPDATE ermitas
            SET patron1 = ?, patron2 = ?, calle = ?, col = ?, CP = ?, sector = ?, zonaA = ?, coord = ?, sect = ?, tes = ?
            WHERE idnE = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../html/index2.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sssssssssss", $patron1, $patron2, $calle, $colonia, $codigoPostal, $sector, $zona, $coordenadas, $sect, $tes, $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../html/index2.php?error=none");
    exit();
}