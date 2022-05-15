<?php
include 'src/admin/panel/header.php';

if(isset($_GET['del'])){
    echo '<h1><center>
  <form method="post" action="/admin/manage">
    <br><br><br><br><br><br><br>
<label>ACTION CAN NOT BE UNDONE</label><br>
<h2>Type username to delete:</h2>
    <input type="text" name="user">
    <input type="hidden" value="'.$_GET["del"].'" name="hash">
    <input type="submit" value="Delete">
  </form>
</center>
</h1>';

       exit();
}
if(isset($_POST['user'])){
    if(hash('sha256',$_POST['user'])==$_POST['hash']){
        echo 'delete';
        //verificare perm mai tarziu///;p;//lol
        DB::delete('admin', 'username=%s', $_POST['user']);
        header('Refresh: 10; /admin/manage');
        exit();
    }else{

        echo "error";
        header('Refresh: 10; /admin/manage');
        exit();
    }
}
if(isset($_GET['action'])){
    $userid=$_GET['action'];
}else{
    header("Location: /admin/team");
}
    $data = DB::queryFirstRow("SELECT * FROM admin WHERE id=%s LIMIT 1", $_GET['action']);
    $avatar = $data['profilePic'] ;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="../../src/admin/panel/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>



    <div class="sales-boxes">

        <div class="recent-sales box">

            <label>My Profile:<?php echo $data['username'];?></label><br>

            <img src="../../src/admin/panel/images/avatar/<?php echo $avatar;?>" width="300" height="300"><br>
            <?php
            echo 'Name:'.$data['name'].'<br>';
echo "Rank:";
switch ( $data['type']){
    case 1:{
        echo 'Root'; break;
    }
    case 2:{
        echo 'Admin'; break;
    }
    case 3:{
        echo 'Moderator';
        break;
    }
}
            ?>
<br>

    <a href="#"><button class="button3">Change Rank:</button></a><br><br>
    <a href="#"><button class="button3">Reset Password</button></a><br><br>
    <a href="#"><button class="button3">Show recent activity</button></a><br><br>
    <a href="#"><button class="button3">Show recent posts</button></a><br><br>

    <a href="/admin/upload"><button class="button3">Upload new profile pic</button></a><br><br>
    <a href="#"><button class="button3">Show recent posts</button></a><br><br>
    <br>


            <div class="button">
                <a href="/admin/manage?del=<?php echo hash('sha256', $data['username']); ?>&action=<?php echo $userid;?>">DELETE USER</a>
            </div>
    </div>
</div>
</div>
    </section>

<script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if(sidebar.classList.contains("active")){
            sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
        }else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>
<script type="application/javascript">


    var d = document.getElementById("settings");
    d.className += " active";

</script>
</body>
</html>