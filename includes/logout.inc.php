<?php
    session_start();
if (isset($_POST['logout-submit'])) {
    
    require "dbh.inc.php";

    $sql = "UPDATE users SET logoutdateUsers=? WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    } else {
        $date = date("Y:m:H:i");
        mysqli_stmt_bind_param($stmt, "ss", $date, $_SESSION["userId"]);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }

    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}