<?php
session_start();
require_once 'db.class.php';
$act = $_POST['act'];
$id = $_POST['id'];
$row = DB::queryFirstRow("SELECT up FROM post WHERE id=%s LIMIT 1",  $id);
$cout=$row['up'];


if(isset($_SESSION['user'])) {
    $row = DB::queryFirstRow("SELECT updown FROM users WHERE id=%s LIMIT 1",  $_SESSION['user']);
    $updown = $row['updown'];
    if ($updown == null) {
        $ar = array();
    } else {
        $ar = unserialize($updown);

    }


        $key = array_search($id, array_column($ar, 'id'));
        if($key==''){
            //daca nu ai mai votat pana acuma pa acel ID
            array_push($ar,array(
                'id' => $id,
                'act' => $act
            ));

            if($act=="pl"){
                $cout++;
            }else
            {
                $cout--;
            }
            echo $cout;
            DB::update('post', ['up' => $cout], "id=%s", $id);

        }elseif($key>=0){
            //daca ai mai votat
            $state =$ar[$key]["act"];
//daca act ii + si tu ai + se face +
//daca tu ai - si act se face-
            switch ($state){
                case "pl":{
                    if($act=="pl"){
                        echo "static";
                    }elseif ($act=="dow"){

                        $ar[$key]['act']=--$cout;
                        DB::update('users', ['updown' => serialize($ar)], "id=%s",  $_SESSION['user']);
                        DB::update('post', ['up' => $cout], "id=%s", $id);
                        echo $cout;
                    }
                }
                case "dow";{
                    if($act=="dow"){
                        echo "static";
                    }elseif ($act=="pl"){
                        $ar[$key]['act']=++$cout;
                        DB::update('users', ['updown' => serialize($ar)], "id=%s",  $_SESSION['user']);
                        DB::update('post', ['up' => $cout], "id=%s", $id);
                        echo $cout;
                    }
                }

            }

        }
}else echo "login";


/*

    array_push($ar,$id*1);
    DB::update('users', ['updown' => serialize($ar)], "id=%s", 3);


*/


?>
