<?php

if(isset($_POST["product-submit"])) {
    
    $name = $_POST["name"];
    $category = $_POST["category"];
    $material = $_POST["material"];
    $length = $_POST["length"];
    $height = $_POST["height"];
    $info = $_POST["info"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    require "dbh.inc.php";

    $sql = "INSERT INTO products (name, category, description, material, length, height, price, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../producten.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "ssssddds", $name, $category, $info, $material, $length, $height, $price, $image);
        $result = mysqli_stmt_execute($stmt);
        header("Location: ../producten.php?submit=success");
        exit();
    }

}

?>