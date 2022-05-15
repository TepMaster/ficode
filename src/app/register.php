<?php
ob_start();
require_once 'db.class.php';
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
if (isset($_SESSION['user']) != "") {
    header("Location: index.php");
}
include_once 'dbconnect.php';

if (isset($_POST['signup'])) {

    $uname = trim($_POST['uname']); // get posted data and remove whitespace
    $email = trim($_POST['email']);
    $upass = trim($_POST['pass']);
    $salt = generateRandomString(30);
    // hash password with SHA256 si salt;
    $password = hash('sha256', $salt.$upass);

    // check email exist or not
    $count = DB::query("SELECT * FROM users WHERE email=%s ", $email);
    $count =0;
    if ($count == 0) { // if email is not found add user

        $cr=DB::insert('users', [
            'username' => $uname,
            'email' => $email,
            'password' => $password,
            'salt'=>$salt
        ]);
echo $cr;
        if ($cr == 1) {
            if(isset($_SESSION['user'])){
                header("Location: index.php");
                exit;
            }else{
                header("Location: login.php");
            }

            exit;

        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again";
        }

    } else {
        $errTyp = "warning";
        $errMSG = "Email is already used";
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

    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>



<main>



    <div class="container py-4">

        <div class="d-flex justify-content-center">

            <div class="col-md-5">

                <h1 class="display-2 text-center font-weight-light text-white mb-3">Register</h1>

                <form method="POST" id="register-form">

                    <div class="form-group">
                        <label class="form-label" for="register-username">Username</label>
                        <input type="text" class="form-control" name="uname" id="register-username" placeholder="Username" value="" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="register-email">Email</label>
                        <input type="email" class="form-control" name="email" id="register-email" placeholder="Email" value="" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="register-password">Password</label>
                        <div class="input-group toggle-password">
                            <input type="password" class="form-control border-right-0" name="pass" id="register-password" placeholder="Password" required>
                            <div class="input-group-append">
                                <span class="input-group-text "><span class="fa fa-eye"></span></span>
                            </div>
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-block btn-lg btn-primary mt-4"  name="signup"><span class="fa fa-user-plus mr-3"></span>Register</button>
                        <p class="mb-0 text-muted mt-3">Already have an account? <a href="login.php">Click here to login!</a></p>
                    </div>

                </form>

            </div>

        </div>

    </div>


</main>


<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/script.js"></script>



</body>


</html>