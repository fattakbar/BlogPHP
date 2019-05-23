<?php

    if(isset($_POST['login'])){
        include("../koneksi.php");
        session_start();

        $user = $_POST['username'];
        $pass = md5($_POST['password']);

        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$user' AND password='$pass'");

        if(mysqli_num_rows($query) > 0){
            $_SESSION['username'] = $user;
            header("location: index.php");
        }else{
            $login_gagal = "Login gagal, silahkan coba lagi!";
        }
    }

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
   <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default panel-login">
                    <div class="panel-heading">Login Admin</div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" placeholder="username" name="username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="password" name="password">
                            </div>

                            <?php if(isset($login_gagal)){ ?>
                                <div class="form-group alert alert-warning">
                                    <p><i class="fa fa-warning"></i> <?php echo $login_gagal; ?></p>
                                </div>
                            <?php } ?>

                            <button type="submit" name="login" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i> Login</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
   </div>
</body>
</html>