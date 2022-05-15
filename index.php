<?php
session_start();
require_once 'src/db.class.php';
require __DIR__ . '/vendor/autoload.php';


$router = new \Bramus\Router\Router();
//main page-landing-page generic
$router->match('GET|POST', '/', function() {
    require_once("src/index.php");
});
//faq
$router->match('GET|POST', '/faq', function() {
    require_once("src/faq.php");
});
//terms
$router->match('GET|POST', '/terms', function() {
    require_once("src/terms.php");
});

//login
$router->match('GET|POST', '/register', function() {
    require_once("src/register.php");
});
//register
$router->match('GET|POST', '/login', function() {
    require_once("src/login.php");
});

//privacy
$router->match('GET|POST', '/privacy', function() {
    require_once("src/privacy.php");
});

//logout
$router->match('GET|POST', '/logout', function() {
    session_destroy();
    header("Location: /login");
});
#fuct
//forum
$router->match('GET|POST', '/i', function() {
    require_once("src/app/index.php");
});

$router->match('GET|POST', '/add', function() {
    require_once("src/app/add.php");
});

/////////////////////////////////////////////////////////////////////
//admin panel
$router->match('GET|POST', '/admin', function() {
    if (isset($_SESSION['user-admin'])) {
        include("src/admin/panel/index.php");
    }else{
        require_once("src/admin/index.php");
    }
});
//team
$router->match('GET|POST', '/admin/team', function() {
    if (isset($_SESSION['user-admin'])) {
        include("src/admin/panel/UserFuct/team.php");
    }else{
        require_once("src/admin/index.php");
    }
});
//settings
$router->match('GET|POST', '/admin/settings', function() {
    if (isset($_SESSION['user-admin'])) {
        include("src/admin/panel/UserFuct/settings.php");
    }else{
        require_once("src/admin/index.php");
    }
});
//adduser
$router->match('GET|POST', '/admin/adduser', function() {
    if (isset($_SESSION['user-admin'])) {
        include("src/admin/panel/UserFuct/adduser.php");
    }else{
        require_once("src/admin/index.php");
    }
});
//manage
$router->match('GET|POST', '/admin/manage', function() {
    if (isset($_SESSION['user-admin'])) {
        include("src/admin/panel/UserFuct/manage.php");
    }else{
        require_once("src/admin/index.php");
    }
});
//edit profile
$router->match('GET|POST', '/admin/edit', function() {
    if (isset($_SESSION['user-admin'])) {
        include("src/admin/panel/UserFuct/edit.php");
    }else{
        require_once("src/admin/index.php");
    }
});
//upload


////////////////////////////////////////////////////////////////////////////////////
//post
$router->match('GET|POST', '/i/{sub}/{postid}',  function($sub,$postid) {
    $row = DB::queryFirstRow("SELECT name, des, text,data,user,up FROM post WHERE id=%s LIMIT 1", $postid);
    include("src/app/post.php");
});
//user
$router->get('/u/(\w+)', function($name) {
    $row = DB::queryFirstRow("SELECT username, date, email,data FROM users WHERE username=%s LIMIT 1", $name);
    if($row==NULL){
        include ('src/app/no_user.php');}
    else{
        include ('src/app/user.php');
    }});





// Run it!
$router->run();

?>
