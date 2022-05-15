<?php
session_start();
require_once ("db.php");
$commentId = isset($_POST['comment_id']) ? $_POST['comment_id'] : "";
$comment = isset($_POST['comment']) ? $_POST['comment'] : "";
$date = date('Y-m-d H:i:s');
$post = $_POST['post'];
if(isset($_SESSION['usr_id'])){
    $commentSenderName = $_SESSION['usr_id'];
    $sql = "INSERT INTO comments(parent_comment_id,comment,comment_sender_id,date,post) VALUES ('" . $commentId . "','" . $comment . "','" . $commentSenderName . "','" . $date .  "','" . $post. "')";

    $result = mysqli_query($conn, $sql);

    if (! $result) {
        $result = mysqli_error($conn);
    }
    echo $result;
}else echo 2;

?>
