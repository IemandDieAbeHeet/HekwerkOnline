<?php
    require "header.php";
?>
    <main>
        <div class="wrapper">
            <form action="includes/product.inc.php" method="post">
                <input type="text" name="name" placeholder="Naam">
                <input type="text" name="category" placeholder="Category">
                <input type="text" name="material" placeholder="Materiaal">
                <input type="text" name="length" placeholder="Lengte">
                <input type="text" name="height" placeholder="Hoogte">
                <input type="text" name="info" placeholder="Info">
                <input type="text" name="price" placeholder="Prijs">
                <input type="text" name="image" placeholder="Foto locatie">
                <button type="submit" name="product-submit">Submit</button>
            </form>
        </div>
    </main>

<?php
    require "footer.php";
?>