<?php
include "acces.php";
include('src/admin/panel/header.php');
$data = DB::queryFirstRow("SELECT * FROM admin WHERE id=%s LIMIT 1", $_SESSION['user-admin']);

$avatar = $data['profilePic'] ;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="../src/admin/panel/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="home-content">
<label>My Profile:</label><br>
    <img src="../../src/admin/panel/images/avatar/<?php echo $avatar;?>" width="300" height="300"><br>
    <div class="button">
        <a href="/admin/upload">Upload new profile pic</a>
    </div>

    <form method="post" action="/src/admin/panel/UserFuct/upload.php" enctype="multipart/form-data">
        <input type="file" name="myFile" />
        <input type="submit" value="Upload">
    </form>

</div>
</section></section>

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

