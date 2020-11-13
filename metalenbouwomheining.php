<?php
    require "header.php";
?>
    <main>
        <div class="wrapper">

            <h1 class="productsoort">Onze bouwomheiningen</h1>

            <div class="grid">
                <?php
                    require "includes/dbh.inc.php";

                    $sql = "SELECT * FROM products WHERE category='bouwomheining' ORDER BY id ASC";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)) {
                        header("Location: ../index.php?error=sqlerror");
                        exit();
                    } else {
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        if(mysqli_num_rows($result) > 0) {
                            while($product = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="product">
                                    <img src="<?php echo $product['image'];?>">
                                    <ul>
                                        <li><p><?php echo 'Naam: ' . $product['name'] ?></p></li>
                                        <li><p><?php echo 'Materiaal: ' . $product['material'] ?></p></li>
                                        <li><p><?php echo 'Lengte, hoogte (cm): ' .$product['length'] . ', ' . $product['height'] ?></p></li>
                                        <li><p><?php echo 'Info: ' . $product['description'] ?></p></li>
                                        <li><p><?php echo 'Prijs (per product): €' . $product['price'] ?></p></li>
                                        <input type="number" size="5" id="quantity" name="quantity" min="1" max="99" value="1">
                                        <input type="submit" class="addcartbutton" name="<?php echo $product['id'] ?>" value="Toevoegen aan winkelwagen"></input>
                                    </ul>
                                </div>
                                <?php
                            }
                        }
                    }
                ?>
        </div>
    </main>

<?php
    require "footer.php";
?>