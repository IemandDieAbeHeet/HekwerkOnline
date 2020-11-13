<?php
    require "header.php";
?>

<main>
    <div class="wrapper">
        <h1 class="productsoort">Winkelwagen</h1>
        <div class="winkelwagen">
            <?php
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }            
            if(isset($_SESSION['cart'])) {
                $filtered = array_filter($_SESSION['cart']);
                for($i = 0; $i < count($_SESSION['cart']); $i++) {
                    ?>
                    <ul>
                        <li><p><?php echo $_SESSION['cart'][$i]['name'];?></p> <input type="number" size="5" id="quantity" name="quantity" min="1" max="99" value="<?php echo $_SESSION['cart'][$i]['qty'];?>"></li>
                    </ul>
                    <?php
                }
            } else {
                echo "<p>Je winkelwagen is momenteel nog leeg.</p>";
            }
            ?>
            <input type="submit" class="clearcartbutton" name="Winkelwagen leegmaken" value="Winkelwagen leegmaken"></input>
            <input type="submit" class="pay" name="Betalen" value="Doorgaan naar betaling"></input>
        </div>
    </div>
</main>

<?php
    require "footer.php";
?>