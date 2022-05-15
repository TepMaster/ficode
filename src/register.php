<?php
require "header.php";
ob_start();


function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
if (isset($_SESSION['usr_id']) != "") {
    header("Location: /");
}

if (isset($_POST['signup'])) {

    $uname = trim($_POST['user']);
    $upass = trim($_POST['pass']);
    $upassc = trim($_POST['passc']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

if($upassc==$upass){
    $salt = generateRandomString(256);

    $password= hash('sha256',$salt.$upass);
    // check email exist or not
    $count = DB::query("SELECT * FROM users WHERE username=%s ", $uname);
    if ($count == null) { // if email is not found add user

        $cr=DB::insert('users', [
            'username' => $uname,
            'name'=>$name,
            'password' => $password,
            'salt'=>$salt,
            'email'=>$email
        ]);
        if ($cr == 1) {
        header("Location: /login");
        exit;

        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again";
        }

    } else {
        $errTyp = "warning";
        $errMSG = "User is already used";
    }

}else{
    $errTyp = "danger";
    $errMSG = "Password don`t match";
}

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <title>Hidden Communicator</title>
    <link href="/src/css/semantic.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/src/css/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/src/css/checkbox.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/src/css/form.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="/src/js/jquery-3.js"></script>
    <script src="/src/js/checkbox.js"></script>
    <script src="/src/js/form.js"></script>
    <script src="/src/js/app.js"></script>
</head>
<body>

<div class="ui vertical stripe segment">
    <div class="ui middle aligned centered stackable grid container">
        <h1>Create PMC Account</h1>
        <br />
    </div>
    <div class="ui middle aligned centered stackable grid container">

        <form action="/register" class="ui form" method="POST">
            <div class="field"><label>Legal Name</label><input name="name" placeholder="Legal Name" required="" type="text" /></div>
            <div class="field"><label>Username</label><input name="user" placeholder="Username" required="" type="text" /></div>
            <div class="field"><label>Email</label><input name="email" placeholder="Email" required="" type="text" /></div>
            <div class="field"><label>Set Password</label><input name="pass" placeholder="Password" required="" type="password" /></div>
            <div class="field"><label>Confirm Password</label><input name="passc" placeholder="Confirm password" required="" type="password" /></div>
            <div class="field">
                <div class="ui checkbox"><input class="hidden" id="terms" required="" tabindex="0" type="checkbox" /><label for="terms">I agree to the Terms and Conditions</label></div>
            </div>
            <button class="ui button" type="submit" name="signup">Create Account</button>
        </form>

    </div>
    <?php
    if(isset($errMSG)&&isset($errTyp)){

        echo '<center><br><br><span class="label '.$errTyp.'">'.$errMSG.'</span></center>';
    }

    ?>
</div>
</body>
</html>
