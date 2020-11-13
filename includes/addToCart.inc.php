<?php
session_start();
if (isset($_POST['id'])) {
    require "dbh.inc.php";
    $qty = intval($_POST['qty']);
    $sql = "SELECT * FROM products WHERE id=? ORDER BY id ASC";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "i", intval($_POST['id']));
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if(mysqli_num_rows($result) > 0) {
            while($product = mysqli_fetch_assoc($result)) {
                $added = false;
                for($i = 0; $i < count($_SESSION['cart']); $i++) {
                    if($_SESSION['cart'][$i]['name'] == $product['name']) {
                        $_SESSION['cart'][$i]['qty'] += $qty;
                        $added = true;
                        break;
                    }
                }
                if(!$added) {
                    $_SESSION['cart'][] = array(
                        'id' => $product['id'],
                        'name' => $product['name'],
                        'cost' => $product['price'],
                        'qty' => $qty
                    );
                }
            }
        }
    }
}
?>