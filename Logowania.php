<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="Css/style.css">

        <title>Rejestracja</title>
    </head>
    <body>
        <section id="section_sefault">
            <form action="LogIn.php" method="POST">
                <input class="input" name="uid" placeholder="Login"><br>

                <input class="input" name="password" placeholder="Hasło"><br>

                <button type="submit" name="login">Zaloguj</button>

            </form> 
        </section>
    </body>
</html>

