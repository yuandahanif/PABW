<?php
require_once "conf/konek.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>

<body>
    <div class="login__container">
        <div class="login__wrapper">
            <h1>Login</h1>
            <div>
                <?php
                $msg = '';

                if (isset($_SESSION['email'])) {
                    header('Location: halaman_utama.php');
                }

                if (
                    isset($_POST['login']) && !empty($_POST['username'])
                    && !empty($_POST['password'])
                ) {

                    $sql = "SELECT * FROM akun WHERE username = '" . $_POST['username'] . "' and password='" . $_POST['password'] . "'";
                    $query = $koneksi->query($sql);

                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                            $_SESSION['akun_id'] = $row['akun_id'];
                            $_SESSION['username'] = $row['username'];
                            $_SESSION['email'] = $row['email'];
                        }

                        header('Location: halaman_utama.php');
                    } else {
                        $msg = 'username atau password salah';
                    }
                }
                ?>
            </div>

            <form class="form" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
                <input type="text" class="form__input" name="username" placeholder="username" required autofocus></br>
                <input type="password" class="form__input" name="password" placeholder="password" required>
                <button class="form__submit" type="submit" name="login">Login</button>
            </form>
            <a href="regis.php">Daftar</a>
        </div>
    </div>
</body>

</html>