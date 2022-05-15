<?php

require_once 'dbconnect.php';

// if session is set direct to index
if (isset($_SESSION['user'])) {
    header("Location: /i");
    exit;
}

if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $upass = $_POST['pass'];
    $row = DB::query("SELECT salt,username,id,password,data FROM users WHERE email=%s ",$email);
if($row!=null){
    $r = $row[0];
    var_dump($r);
    $salt = $r["salt"];
    if ($r['password'] == hash('sha256', $salt . $upass)) {
        $_SESSION['user'] = $r['id'];
        header("Location:");
    }else {
        echo 'password Wrong';
    }

}else{
    echo 'User not found';
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
    <meta name="twitter:card" content="summary" />
    <meta property="og:url" content="index.html" />
    <meta property="og:type" content="website" />
    <meta name="msapplication-TileColor" content="#152e4d">
    <meta name="msapplication-config" content="assets/icons/browserconfig.xml">
    <meta name="theme-color" content="#152e4d">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/theme.css">
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/feather.css">
    <link rel="stylesheet" href="../assets/css/aos.css">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>

<main>



    <div class="container py-4">

        <div class="d-flex justify-content-center">

            <div class="col-md-5">

                <h1 class="display-2 text-center font-weight-light text-white mb-3">Login</h1>

                <form method="POST" id="login-form" action="login">

                    <div class="form-group">
                        <label class="form-label" for="login-username">Username</label>
                        <input type="text" class="form-control" name="email" id="login-username" placeholder="Username" value="" required autofocus tabindex="1">
                    </div>

                    <div class="form-group">
                        <label class="form-label d-flex justify-content-between align-items-center" for="login-password">
                            <p class="mb-0">Password</p>
                            <a href="reset.html" class="d-block text-muted">Forgot your password?</a>
                        </label>
                        <input type="password" class="form-control" name="pass" id="login-password" placeholder="********" required tabindex="2">
                    </div>

                    <div class="form-group d-flex justify-content-center">




                        <div class="text-center">
                            <button type="submit" class="btn btn-block btn-lg btn-primary mt-4" name="btn-login"><span class="fa fa-sign-in-alt mr-3"></span>Login</button>

                            <p class="mb-0 mt-3 text-muted">Don't have an account? <a href="register.php">Click here to register!</a></p>

                        </div>

                </form>

            </div>

        </div>

    </div>


</main>

<!-- <footer class="footer bg-light ">
	<span class="d-block py-2 text-muted text-center">Paypal is available</span>
</footer> -->


<script src="../src/assets/js/jquery-3.4.1.min.js"></script>
<script src="../src/assets/js/bootstrap.bundle.min.js"></script>
<script src="../src/assets/js/aos.js"></script>
<script src="../src/assets/js/script.js"></script>



</body>


<!-- Mirrored from accounthub.io/login by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jan 2022 10:38:41 GMT -->
</html>