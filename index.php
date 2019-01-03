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

        <title>Tytul</title>
    </head>
    <body>
        <main>
            <!-- Landing Area -->
            <div id="landing">
                <div id="landing-text">
                    <div id="landing-inner">
                        <h1>Muzyka</h1>
                        <h2>Muzyka klasyczna</h2>

            <!-- Buttons -->
                        <?php
if (isset($_SESSION['userId'])) {
    echo '<a href="LogOut.php"  class="btn" id="login"> Wyloguj</a><br>';
} else {
    echo '<a href="Rejestracja.php"  class="btn" id="login"> Rejestracja</a><br>';
    echo '<a href="Logowania.php"  class="btn" id="login"> Zaloguj</a><br>';
}
?>

                        <a href="#images"  class="btn" id="view-work"> Zdjęcia</a>


                    </div>


            <!-- landing image -->
                </div>
                <div id="landing-image">

                </div>
            </div>

            <!-- images -->
            <div id="images">

                <div id="header">
                    <h2>Nasze Prace</h2>
                </div>
                <img src="Images/kaitlyn-baker-422999-unsplash.jpg" alt="">
                <div class="caption">
                    <h3>Photo One</h3>
                    <p>
                        Tgi Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </div>
                <img src="Images/guillaume-briard-776191-unsplash.jpg" alt="">
                <div class="caption">
                    <h3>Photo Two</h3>
                    <p>
                        This isLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </div>
                <img src="Images/scott-webb-274694-unsplash.jpg" alt="">
                <div class="caption">
                    <h3>Photo Three</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </div>
                <img src="Images/yoann-siloine-532502-unsplash.jpg" alt="">
                <div class="caption">
                    <h3>Photo Four</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>

                </div>
            </div>

        </main>
            <!-- footer -->
        <footer>
            <h3>Kontakt</h3>
            <p>email: jakis mail@pl.pl</p>
            <p>tel:777-777-777</p>
            <a href="https://www.google.com">Link Do Google</a>
        </footer>

        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

        <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

        <script src="js/main.js">



             </script>

    </body>
</html>