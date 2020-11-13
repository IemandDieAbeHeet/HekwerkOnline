<?php
    require "header.php";
?>
    <main>
        <div class="wrapper">
            <div class="contact">
                <form class="contact-form" action="includes/contact.inc.php" method="post">
                    <input type="text" name="name" placeholder="Naam">
                    <input type="text" name="mail" placeholder="Email adres">
                    <input type="text" name="subject" placeholder="Onderwerp">
                    <textarea name="message" placeholder="Bericht"></textarea>
                    <button type="submit" name="submit">Mail verzenden</button>
                </form>
            </div>
        </div>
    </main>

<?php
    require "footer.php";
?>