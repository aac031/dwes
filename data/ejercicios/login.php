<?php
ob_start();
session_start();
?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Inicia sesión:</h2>
    <div class="container form-signin">

        <?php
        $msg = '';

        if (
            isset($_POST['login']) && !empty($_POST['username'])
            && !empty($_POST['password'])
        ) {

            if (
                $_POST['username'] == 'tutorialspoint' &&
                $_POST['password'] == '1234'
            ) {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = 'tutorialspoint';

                echo 'Has introducio un usuario válido.';
            } else {
                $msg = 'Usuario o contraseña incorrecta.';
            }
        }
        ?>
    </div>
    <div class="container">

        <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
                                                        ?>" method="post">
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="text" class="form-control" name="username" required autofocus></br>
            <input type="password" class="form-control" name="password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
        </form>

        Haz click para limpiar la <a href="logout.php" tite="Logout">sesión.

    </div>
</body>

</html>