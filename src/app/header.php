
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/app/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<nav class="navbar2">

    <!-- <div class=""> -->
    <a href="#" class="logo2"><img src="../src/app/unknown.png" alt="">
        <p>PMC</p>
    </a>
    <!-- </div> -->
    <ul class="main-nav2" id="main-nav">
        <?php
        if(isset($_SESSION['usr_id'])){
            echo '<li><a href="/add" class="nav-links2 crpost">Create Post</a></li>
        <li><a href="#" class="nav-links2">Account</a></li>';
        }
else{
    echo'<li><a href="#" class="nav-links2">Signup</a></li>
        <li><a href="#" class="nav-links2">Login</a></li>';
}


        ?>


    </ul>
</nav>