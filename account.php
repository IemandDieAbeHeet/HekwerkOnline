<?php
    require "header.php";
?>
    <main>
        <div class="wrapper">
            <div class="login">
            <?php
                if(isset($_SESSION["userId"])) {
                    echo '<h1>Account:</h1>';
                    echo '<p>' .$_SESSION["userUid"] . '</p>';
                    echo '<p>Je bent ingelogd om:  '. $_SESSION["loginTime"] . '</p>';
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</button>
                    </form>';
                    echo '<form action="includes/deleteAccount.inc.php" method="post">
                    <button type="submit" name="delete-submit">Verwijder je account</button>
                    </form>';
                }
                else {
                    echo '<p>Je hebt geen account of je bent niet ingelogd!</p>';
                    echo '<form action="login.php" method="post">
                    <button type="submit" name="login-submit">Login</button>
                    </form>
                    <form action="signup.php" method="post">
                    <button type="submit" name="signup-submit">Signup</button>
                    </form>';
                }
            ?>
            </div>
        </div>
    </main>

<?php
    require "footer.php";
?>