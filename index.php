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

    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>