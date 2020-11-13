<?php
    session_start();
if (isset($_POST['delete-submit'])) {
    
    require "dbh.inc.php";

    $sql = "DELETE FROM users WHERE idUsers=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $_SESSION["userId"]);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
    }

    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}