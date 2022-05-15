<?php


if(isset( $_SESSION['suc'])){
    if( $_SESSION['suc']==true){
        echo '<h1>Nice Post save an moderator will aprove it in a few minites</h1>';
        $_SESSION['suc'] = false;
    }
}
if (isset($_POST['add'])) {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['name'])) {
        $des = $_POST['des'];
    }
    if (isset($_POST['text'])) {
        $text = $_POST['text'];
    }
    $row = DB::queryFirstRow("SELECT username FROM users WHERE id=%s LIMIT 1", $_SESSION['usr_id']);
    $user = $row['username'];
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
    $suc = DB::insert('post', [
        'name' => utf8_encode($name),
        'des' =>utf8_encode($des),
        'user' => $user,
        'text'=>utf8_encode($text),
        'data' =>$current_date
    ]);
if($suc=1){
    $_SESSION['suc'] = true;
    header('Location: ');

}

}

?>

<html>

<body>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<center>
    <form method="post" >
        Name:<input type="text" placeholder="Thred name" name="name">
        Descrption <input type="text" placeholder="Descpiton" maxlength="150" name="des">
        <form action="#">
            <br>
            <label for="exampleFormControlTextarea1">Text:</label>
            <textarea class="form-control" id="text" name="text" rows="5" ></textarea><p></p>

            <input type="submit" value="Add" name="add" class="btn btn-success" ><br><br>
        </form>
        <form action="/i">
            <input type="submit" value="Back to feed" class="btn btn-secondary">

        </form>

</center>


</body>
</html>