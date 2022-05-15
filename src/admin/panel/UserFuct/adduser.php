<?php
include('src/admin/panel/header.php');
include "acces.php";
function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}

if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['uname'])&&isset($_POST['email'])&&isset($_POST['pass'])&&isset($_POST['rank'])){

    $isok = DB::query("SELECT * FROM admin WHERE username=%s0", $_POST['uname']);
    if($isok==null){
        $salt = generateRandomString(128);
        $pass=hash('sha256',$salt.$_POST['pass']);
        switch ($_POST['rank']){
            case 'root': $type=1;break;
            case 'adm': $type=2;break;
            case 'mod': $type=3; break;
        }
        $add_stat =DB::insert('admin', [
            'username' => $_POST['uname'],
            'password' => $pass,
            'salt' => $salt,
            'type'=> $type,
            'profilePic'=>"profile.jpg",
            'name'=>$_POST['fname']." ".$_POST['lname']
        ]);

    }
}
?>

<html>

<body>
<center>

    <div class="home-content">
        <form method="post">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" required><br>

            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" required><br>

            <label>Username:</label><br>
            <input type="text" id="uname" name="uname" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label >Password:</label><br>
            <input type="password" id="pass" name="pass" required><br>
            <br>
            <label >User Rank:</label><br>
            <input type="radio" id="root" name="rank" value="root" required>
            <label >Root/Owner</label><br>

            <input type="radio" id="adm" name="rank" value="adm" required>
            <label >Admin</label><br>

            <input type="radio" id="mod" name="rank" value="mod" required>
            <label">Moderator</label>
            <br>

            <input type="submit" value="Add-User" class="dark">
        </form>

        <?php
if(isset($add_stat)){
        if($add_stat==1){
            echo'<h1><center><label>
            User Added.
        </label></center></h1>';
        }else{
            echo'<h1><center><label>
            Error username is allredy used.
        </label></center></h1>';
        }}
        ?>

    </div>

</center>

</body>


</html>
<script type="application/javascript">


    var d = document.getElementById("team");
    d.className += " active";



</script>
