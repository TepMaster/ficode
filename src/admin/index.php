<?php
require_once 'src/db.class.php';

if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $upass = $_POST['pass'];
    $row = DB::query("SELECT salt, id, password, data FROM admin WHERE username=%s ",$email);
if($row!=null){
    $r = $row[0];

    $salt = $r["salt"];
    if ($r['password'] == hash('sha256', $salt . $upass)) {
        $_SESSION['user-admin'] = $r['id'];
        header("Location:");
    } else {
        echo 'password Wrong';
    }
}else{
    echo 'User Not found';
}

}
?>

    <!DOCTYPE html>
    <html lang="en-US">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="twitter:card" content="summary"/>
        <meta property="og:type" content="website"/>
        <meta property="og:title" content="Login - Admin Panel"/>
        <meta name="csrf" content="cc870ec8-d7c5-d63d-4278-e5c0a1455be1"/>

        <title>Login - Admin Panel</title>

        <meta name="msapplication-TileColor" content="#152e4d">
        <meta name="theme-color" content="#152e4d">

        <link rel="stylesheet" href="../src/app/assets/css/theme.css">
        <link rel="stylesheet" href="../src/app/assets/css/fontawesome.css">
        <link rel="stylesheet" href="../src/app/assets/css/feather.css">
        <link rel="stylesheet" href="../src/app/assets/css/aos.css">
        <link rel="stylesheet" href="../src/app/assets/css/style.css">
    </head>
    <body>

    <main>
        <br><br>
        <div class="container py-4">
            <div class="d-flex justify-content-center">
                <div class="col-md-5">
                    <h1 class="display-2 text-center font-weight-light text-white mb-3">Login</h1>

                    <form method="POST" id="login-form">

                        <div class="form-group">
                            <label class="form-label" for="login-username">Username</label>
                            <input type="text" class="form-control" name="email" id="login-username" placeholder="Username" value="" required autofocus tabindex="1">
                        </div>

                        <div class="form-group">
                            <label class="form-label d-flex justify-content-between align-items-center" for="login-password">
                                <p class="mb-0">Password</p>
                                <a href="?rest=lol" class="d-block text-muted">Forgot your password?</a>
                            </label>

                            <input type="password" class="form-control" name="pass" id="login-password" placeholder="********" required tabindex="2">
                        </div>

                        <div class="form-group d-flex justify-content-center">
                            <div class="text-center">
                                <button type="submit" class="btn btn-block btn-lg btn-primary mt-4" name="btn-login"><span class="fa fa-sign-in-alt mr-3"></span>Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="../src/app/assets/js/jquery-3.4.1.min.js"></script>
    <script src="../src/app/assets/js/bootstrap.bundle.min.js"></script>
    <script src="../src/app/assets/js/aos.js"></script>
    <script src="../src/app/assets/js/script.js"></script>

    </body>
    </html>

<?php if(isset($_REQUEST['rest'])){
    echo '<script type="application/javascript">alert("LOL nice try");</script>';
}?>