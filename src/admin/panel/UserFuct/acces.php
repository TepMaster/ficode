<?php

if(isset($_SESSION['date'])){
    $date =$_SESSION['date'];
}
else{
    $_SESSION['date']=date("Y-m-d");
    DB::update('admin', ['data' => date("Y-m-d")], "id=%s", $_SESSION['user-admin']);
}
if($_SESSION['date']!=date("Y-m-d")){
    DB::update('admin', ['data' => date("Y-m-d")], "id=%s", $_SESSION['user-admin']);
}
?>