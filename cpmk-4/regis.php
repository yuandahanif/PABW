<?php
require_once "conf/konek.php";
session_start();
?>
<html lang="en">

<head>
    <title>register</title>
</head>

<body>

    <h2>Enter Username and Password</h2>
    <div class="container form-signin">
        <?php
        $msg = '';

        if (
            isset($_POST['login']) && !empty($_POST['username'])
            && !empty($_POST['password'])
        ) {

            $sql = "INSERT INTO `akun` (`akun_id`, `username`, `password`, `email`) VALUES ('" . $_POST['id'] . "', '" . $_POST['username'] . "', '" . $_POST['password'] . "', '" . $_POST['email'] . "')";
            $query = $koneksi->query($sql);

            if ($query === TRUE) {
                header('Location: index.php');
            } else {
                $msg = 'gagal mendaftar.';
            }
        }
        ?>
    </div> <!-- /container -->

    <div class="container">

        <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
                                                        ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="number" class="form-control" name="id" placeholder="id" required autofocus></br>
            <input type="text" class="form-control" name="username" placeholder="username" required autofocus></br>
            <input type="email" class="form-control" name="email" placeholder="email" required autofocus></br>
            <input type="password" class="form-control" name="password" placeholder="password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
        </form>
    </div>

</body>

</html>