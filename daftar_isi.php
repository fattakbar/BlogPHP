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
                    <?php

                        $query = mysqli_query($koneksi, "SELECT * FROM artikel ORDER BY tanggal DESC");
                        $no = 1;

                        echo "<div class='list-group'>";
                        while($artikel = mysqli_fetch_array($query)){
                            echo "<a class='list-group-item' href='artikel.php?id=".$artikel['id']."'>$no. <b>".$artikel['judul']."</b><span class='badge'>".$artikel['tanggal']."</span></a>";
                            $no++;
                        }
                        echo "</div>";

                    ?>
                </div>
            </div>
        </div>
    </article>

    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>