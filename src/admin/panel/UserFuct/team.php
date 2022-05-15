<?php
include "acces.php";
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
                        echo "Admin<br>";
                        break;
                    case 3:
                        echo "Moderator<br>";
                        break;
                }
                break;
            }

            case 4:{
                //button
                //$data[$printed]['id']
                echo ' <a href="/admin/manage?action='.$data[$printed]['id'].'" class="dark-light">Manage</a><br>';
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
<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">Admin Panel</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="/admin" >
                <i class='bx bx-grid-alt' ></i>
                <span class="links_name">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class='bx bx-list-ul' ></i>
                <span class="links_name">Coment list</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-pie-chart-alt-2' ></i>
                <span class="links_name">Analytics</span>
            </a>
        </li>

        <li>
            <a href="/admin/team" id="team">
                <i class='bx bx-user' ></i>
                <span class="links_name">Team</span>
            </a>
        </li>
        <li>
            <a href="#" id="mes">
                <i class='bx bx-message' ></i>
                <span class="links_name">Messages</span>
            </a>
        </li>

        <li>
            <a href="/admin/settings" id="settings">
                <i class='bx bx-cog ' ></i>
                <span class="links_name">Setting</span>
            </a>
        </li>
        <li class="log_out">
            <a href="../../logout.php">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>
<section class="home-section">
    <nav>
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search' ></i>
        </div>
        <div class="profile-details">
            <img src="../src/admin/panel/images/profile.jpg" alt="">
            <span class="admin_name">Marcu Radu</span>
            <i class='bx bx-chevron-down' ></i>
        </div>
    </nav>

    <div class="home-content">

        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">Recent Activity</div>
                <div class="sales-details">
                    <ul class="details">
                        <li class="topic">Last Date</li>
                        <?php getadmin("1");?>
                    </ul>
                    <ul class="details">
                        <li class="topic">Users Type</li>
                        <?php getadmin("2");?>
                    </ul>
                    <ul class="details">
                        <li class="topic">Users</li>
                        <?php getadmin("3");?>
                    </ul>
                    <ul class="details">
                        <li class="topic">Action</li>
                        <?php getadmin("4");?>
                    </ul>
                </div>
                <br>
                <div class="button">
                    <a href="#">See All</a>
                </div>
                <br>
                <div class="button">
                    <a href="/admin/adduser">Add User</a>
                </div>
            </div>
            <div class="top-sales box">
                <div class="title">Topic-name</div>
                <canvas id="myChart" style="width:130%;max-width:140%"></canvas>



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
</body>
</html>

