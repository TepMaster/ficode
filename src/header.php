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
<html>
<header>
    <div class="pusher">
        <div class="ui inverted vertical center aligned segment">
            <div class="ui container">
                <div class="ui large secondary inverted pointing menu">
                    <a class="item" href="/">Home</a><a class="item" href="/faq">FAQ</a><a class="item" href="/terms">Terms</a>
                    <div class="right item">
                        <?php if(isset($_SESSION['usr_id'])){

                            echo '
 <a class="item" href="/i">'.$lang['headrbutton1'].'</a>&nbsp;
 <a class="ui inverted button" href="/logout">'.$lang['headrbutton2'].'</a>';
                        }
                        else{
                            echo '<a class="ui inverted button" href="/login">Log in</a>&nbsp;&nbsp;&nbsp;
                        <a class="ui inverted button" href="/register">Register</a>';
                        }?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

</html>
