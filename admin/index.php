<?php

    session_start();

    if(isset($_SESSION['username'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/style-admin.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <nav>
        <?php include("navbar.php"); ?>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <aside>
                <?php $home = "class='active'"; ?>
                <?php include('aside.php'); ?>
            </aside>
            <section id="konten">
                <?php include('home.php'); ?>
          </section>
        </div>
    </div>
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/holder.js"></script>
</body>
</html>

<?php
} else {
    header('location: login.php');
} ?>