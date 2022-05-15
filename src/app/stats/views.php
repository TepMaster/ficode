<?php
//var_dump($_SERVER['SCRIPT_FILENAME']);
require_once 'src/db.class.php';

$servername = DB::$host;
$username = DB::$user;
$password = DB::$password;
$dbname = DB::$dbName;
$conn = new mysqli($servername, $username, $password, $dbname);
date_default_timezone_set('Europe/Kiev'); // Kiev
$id = null;
$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];

$current_date = "$date/$month/$year";


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$results = DB::query("SELECT time,id FROM status WHERE time=%s ", $current_date);

foreach ($results as $row) {
    if ($row['time'] == $current_date) {
        $id = $row['id'];
        break;
    }

}
if ($id = !null) {
    $sql = "UPDATE status SET visits = visits+1 WHERE id = " . $id;
    $conn->query($sql);
} else {

    $sql = "INSERT INTO `status` (`time`) VALUES (" . $current_date . "); ";
    $conn->query($sql);
}


