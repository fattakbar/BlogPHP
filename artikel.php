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

                        if(isset($_GET['id']) && !empty($_GET['id'])){
                            $id = $_GET['id'];

                            $query = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id='$id' ORDER BY tanggal DESC");

                            if(mysqli_num_rows($query) > 0){
                                while($artikel = mysqli_fetch_array($query)){
                                    echo "<div class='artikel-kop'>";
                                    echo "<h2><b>".$artikel['judul']."</b></h2>";
                                    echo "<p class='artikel-tanggal'>Oleh <b>".$artikel['penulis']."</b>, pada ".$artikel['tanggal']."</p>";
                                    echo "</div>";

                                    echo "<div class='artikel-isi'>";
                                    echo $artikel['isi'];
                                    echo "</div><hr/>";
                                }
                            }else{
                                include("404.php");
                            }
                        }else{
                            include("404.php");
                        }

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