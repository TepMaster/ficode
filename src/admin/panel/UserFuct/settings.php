<?php
include "acces.php";
include('src/admin/panel/header.php');
var_dump($_SERVER['SCRIPT_FILENAME']);
function getadmin($type)
{
    $count = DB::queryFirstField("SELECT COUNT(*) FROM admin");

    $data = DB::query("SELECT * FROM admin ");
    $printed = 0;
    while ($count > $printed) {
        switch ($type) {
            case 1:
            {
                echo $data[$printed]['data'].'<br>';
                break;
            }
            case 2:
            {
                echo $data[$printed]['username'].'<br>';
                break;
            }
            case 3:
            {
                switch ($data[$printed]['type']) {
                    case 1:
                        echo "Owner<br>";
                        break;
                    case 2:
                        echo "Mod<br>";
                        break;

                }
                break;
            }

            case 4:{
                //button
                echo ' <a href="/admin/team?action="'.$data[$printed]['id'].' class="dark-light">Manage</a><br>';
                break;

            }

        }
        $printed++;
    }
}
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

        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">Recent Activity</div>
                <div class="sales-details">

                </div>
                <div class="button">
                    <a href="/admin/edit">Edit Profile</a>
                </div>
            </div>
            <div class="top-sales box">
                <div class="title">Topic-name</div>
                <canvas id="myChart" style="width:130%;max-width:140%"></canvas>



            </div>

        </div>
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

