<?php

    include "koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cerita Programmer Blog</title>
    <link rel="icon" href="img/astrounout.png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
     <link rel="stylesheet" href="bootstrap/css/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>

    <nav class="navbar navbar-default">
        <?php include("menu.php"); ?>
    </nav>

    <article>
        <div class="container wrap">
            <div class="row">
                <div class="col-md-12">
                    <div class="artikel-kop">
                        <h2><b>Tentang Blog ini</b></h2>
                    </div>
                    <div class="artikel-isi">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>