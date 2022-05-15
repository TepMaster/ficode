<?php

if(isset($_GET['lang'])){
    if($_GET['lang']){
        $_SESSION['lang'] = $_GET['lang'];
        header('Location: /');
        exit();
    }
}
if(!isset($_SESSION['lang'])){
    $_SESSION['lang']='ro';
}

switch($_SESSION['lang']){
    case "eng":
        require('lang/eng.php');
        break;
    case "ro":
        require('lang/ro.php');
        break;
    case "ru":
        require('lang/ru.php');
        break;
    default:
        require('lang/ro.php');
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <title>Our Voice</title>
    <link href="/src/css/semantic.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/src/css/style.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/src/css/checkbox.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/src/css/form.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/src/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <script src="/src/js/jquery-3.js"></script>
    <script src="/src/js/checkbox.js"></script>
    <script src="/src/js/form.js"></script>
    <script src="/src/js/app.js"></script>
</head>


<body>
<div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">

        <?php require "header.php";?>
        <div class="ui text container">
            <h1 class="ui inverted header"><?php echo $lang['name'];?></h1>
            <h1><?php echo $lang['name2'];?></h1>
            <br />
            <?php if(isset($_SESSION['usr_id'])){
                echo '<a class="ui huge primary button" href="/i">'.$lang['indxbutton1'].'</a>';
                }else{
                echo '<a class="ui huge primary button" href="register">'.$lang['indxbutton2'].'</a>';
            }

                ?>


        </div>
    </div>
</div>
<div class="ui vertical stripe segment">
    <div class="ui middle aligned centered stackable grid container">
        <h1 class="ui header"><?php echo $lang['main'];?></h1>
        <div class="row">
            <div class="six wide column">
                <p style="padding: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                    </svg><?php echo $lang['anon'];?>.</p>
                <p style="padding: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cloud-slash-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.112 5.112a3.125 3.125 0 0 0-.17.613C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13H11L3.112 5.112zm11.372 7.372L4.937 2.937A5.512 5.512 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773a3.2 3.2 0 0 1-1.516 2.711zm-.838 1.87-12-12 .708-.708 12 12-.707.707z"/>
                    </svg> <?php echo $lang['anon'];?></p><br>
            </div>
            <div class="six wide column">
                <p style="padding: 10px;"><p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20 2H4c-1.103 0-2 .897-2 2v18l5.333-4H20c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2zm0 14H6.667L4 18V4h16v12z"></path></svg>&nbsp;<?php echo $lang['keys'];?>
                <p style="padding: 10px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21 6h-4V3a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7H3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1zM6 18H4v-2h2v2zm0-4H4v-2h2v2zm5 4H9v-2h2v2zm0-4H9v-2h2v2zm0-4H9V8h2v2zm0-4H9V4h2v2zm4 12h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V8h2v2zm0-4h-2V4h2v2zm5 12h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V8h2v2z"></path></svg>
                    &nbsp;<?php echo $lang['keysn'];?></p>
            </div>
        </div>
    </div>
</div>
<div class="ui vertical stripe segment">
    <div class="ui middle aligned centered stackable grid container">
        <div class="row">
            <div class="ten wide column">
                <h3 class="ui header"> <?php echo $lang['why'];?></h3>
                <p> <?php echo $lang['why1'];?></p>
                <p> <?php echo $lang['why2'];?></p>
                <p> <?php echo $lang['why3'];?></p>
                <p> <?php echo $lang['why4'];?></p>
            </div>
            <div class="four wide right floated column"><svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" fill="currentColor" class="bi bi-file-earmark-lock2" viewBox="0 0 16 16">
                    <path d="M10 7v1.076c.54.166 1 .597 1 1.224v2.4c0 .816-.781 1.3-1.5 1.3h-3c-.719 0-1.5-.484-1.5-1.3V9.3c0-.627.46-1.058 1-1.224V7a2 2 0 1 1 4 0zM7 7v1h2V7a1 1 0 0 0-2 0z"/>
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                </svg></div>
        </div>
    </div>
</div>
<div class="ui vertical stripe segment">
    <div class="ui middle aligned centered stackable grid container">
        <div class="row">
            <div class="four wide column"><img class="ui medium rounded image" src="/src/assets/tor.svg" /></div>
            <div class="ten wide right floated column">
                <h3 class="ui header"> <?php echo $lang['tor'];?></h3>
                <p><?php echo $lang['tor1'];?></p>
                <p><?php echo $lang['tor2'];?></p>
                <p><?php echo $lang['tor3'];?></p>
            </div>
        </div>
    </div>
</div>

<div class="pusher">
    <div class="ui vertical stripe center aligned segment">
        <div class="ui text container">
            <h3 class="ui header"><?php echo $lang['free'];?></h3>
            <p><?php echo $lang['free1'];?></p>
            <p><?php echo $lang['free2'];?></p>
            <?php if(isset($_SESSION['usr_id'])){
                echo ' <a class="ui huge primary button" href="/chat">To Chat</a>';
            }
            else echo ' <a class="ui huge primary button" href="/register">Get Started</a>';
            ?>
        </div>
    </div>
</div>
<style type="text/css">
    .bottomright {
        position: fixed;
        right: 0px; bottom: 0px;
        width: 100px;
        height:40px;
        padding: 5px;
    }

</style>

<div class="bottomright">

    <a href="?lang=eng">
        <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-us" width="32" height="32" viewBox="0 0 640 480">
            <g fill-rule="evenodd">
                <g stroke-width="1pt">
                    <path fill="#bd3d44" d="M0 0h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.7h972.8V197H0zm0 78.8h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.7h972.8v39.4H0zm0 78.8h972.8V512H0z" transform="scale(.9375)"/>
                    <path fill="#fff" d="M0 39.4h972.8v39.4H0zm0 78.8h972.8v39.3H0zm0 78.7h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.8h972.8v39.4H0zm0 78.7h972.8v39.4H0z" transform="scale(.9375)"/>
                </g>
                <path fill="#192f5d" d="M0 0h389.1v275.7H0z" transform="scale(.9375)"/>
                <path fill="#fff" d="M32.4 11.8 36 22.7h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H29zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0 3.6 10.9H177l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7h11.5zm64.9 0 3.5 10.9H242l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.2-6.7h11.4zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zM64.9 39.4l3.5 10.9h11.5L70.6 57 74 67.9l-9-6.7-9.3 6.7L59 57l-9-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 10.9-9.3-6.7-9.3 6.7L124 57l-9.3-6.7h11.5zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.7-9.3 6.7 3.5-10.9-9.2-6.7H191zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 10.9-9.3-6.7-9.2 6.7 3.5-10.9-9.3-6.7H256zm64.9 0 3.5 10.9h11.5L330 57l3.5 10.9-9.2-6.7-9.3 6.7 3.5-10.9-9.2-6.7h11.4zM32.4 66.9 36 78h11.4l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.3-6.7H29zm64.9 0 3.5 11h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7h11.4zm64.8 0 3.6 11H177l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.3-6.7h11.5zm64.9 0 3.5 11H242l-9.3 6.7 3.6 10.9-9.3-6.8-9.3 6.8 3.6-11-9.3-6.7h11.4zm64.8 0 3.6 11h11.4l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.2-6.7h11.4zm64.9 0 3.5 11h11.5l-9.3 6.7 3.6 10.9-9.3-6.8-9.3 6.8 3.6-11-9.3-6.7h11.5zM64.9 94.5l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7H191zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H256zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zM32.4 122.1 36 133h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H29zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.7-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0 3.6 10.9H177l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7h11.5zm64.9 0 3.5 10.9H242l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.2-6.7h11.4zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zM64.9 149.7l3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 10.9-9.3-6.8-9.3 6.8 3.6-11-9.3-6.7h11.5zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7H191zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 10.9-9.3-6.8-9.2 6.8 3.5-11-9.3-6.7H256zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 10.9-9.2-6.8-9.3 6.8 3.5-11-9.2-6.7h11.4zM32.4 177.2l3.6 11h11.4l-9.2 6.7 3.5 10.8-9.3-6.7-9.2 6.7 3.5-10.9-9.3-6.7H29zm64.9 0 3.5 11h11.5l-9.3 6.7 3.6 10.8-9.3-6.7-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0 3.6 11H177l-9.2 6.7 3.5 10.8-9.3-6.7-9.2 6.7 3.5-10.9-9.3-6.7h11.5zm64.9 0 3.5 11H242l-9.3 6.7 3.6 10.8-9.3-6.7-9.3 6.7 3.6-10.9-9.3-6.7h11.4zm64.8 0 3.6 11h11.4l-9.2 6.7 3.5 10.8-9.3-6.7-9.2 6.7 3.5-10.9-9.2-6.7h11.4zm64.9 0 3.5 11h11.5l-9.3 6.7 3.6 10.8-9.3-6.7-9.3 6.7 3.6-10.9-9.3-6.7h11.5zM64.9 204.8l3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.3 6.7 3.6 11-9.3-6.8-9.3 6.7 3.6-10.9-9.3-6.7h11.5zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7H191zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 11-9.3-6.8-9.2 6.7 3.5-10.9-9.3-6.7H256zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.5 11-9.2-6.8-9.3 6.7 3.5-10.9-9.2-6.7h11.4zM32.4 232.4l3.6 10.9h11.4l-9.2 6.7 3.5 10.9-9.3-6.7-9.2 6.7 3.5-11-9.3-6.7H29zm64.9 0 3.5 10.9h11.5L103 250l3.6 10.9-9.3-6.7-9.3 6.7 3.6-11-9.3-6.7h11.4zm64.8 0 3.6 10.9H177l-9 6.7 3.5 10.9-9.3-6.7-9.2 6.7 3.5-11-9.3-6.7h11.5zm64.9 0 3.5 10.9H242l-9.3 6.7 3.6 10.9-9.3-6.7-9.3 6.7 3.6-11-9.3-6.7h11.4zm64.8 0 3.6 10.9h11.4l-9.2 6.7 3.5 10.9-9.3-6.7-9.2 6.7 3.5-11-9.2-6.7h11.4zm64.9 0 3.5 10.9h11.5l-9.3 6.7 3.6 10.9-9.3-6.7-9.3 6.7 3.6-11-9.3-6.7h11.5z" transform="scale(.9375)"/>
            </g>
        </svg>
    </a>
    <a href="?lang=ro">
        <svg xmlns="http://www.w3.org/2000/svg" id="flag-icons-ro"  width="32" height="32"  viewBox="0 0 640 480">
            <g fill-rule="evenodd" stroke-width="1pt">
                <path fill="#00319c" d="M0 0h213.3v480H0z"/>
                <path fill="#ffde00" d="M213.3 0h213.4v480H213.3z"/>
                <path fill="#de2110" d="M426.7 0H640v480H426.7z"/>
            </g>
        </svg>
    </a>

</div>

<?php include "footer.php";?>


</body>
</html>
