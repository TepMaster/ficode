<?php
include "UserFuct/acces.php";
if(!isset($_SESSION['user-admin'])){
    header("location:http://localhost/admin/index.php");
    exit;
}

$date=26;

$viw =22;
$likes=55;
$don=2;
$dis=55;
if(isset($_GET['app'])){
$suc = DB::update('post', ['app' => 1], "id=%s", $_GET['app']);;
}
if(isset($_GET['deny'])){
    $suc = DB::update('post', ['app' => 2], "id=%s", $_GET['deny']);;
}
function get_to_app_post(){
    $count = DB::queryFirstField("SELECT COUNT(*) FROM post WHERE app = %i", 0);
    $row = DB::query("SELECT name, des, user,data,app,id FROM post WHERE app = 0");
    $printed=0;
if($count==0){

    echo '<h1><span class="price">No new posts</span></h1>';
}
while ($count>$printed){

    echo '<li> <a href="#">
                            <img src="../src/admin/panel/images/sunglasses.jpg" alt="">
                            <span class="product">'.substr($row[$printed]['name'],0,35).'</span>
                        </a>
                                        <div class="button">
                    <a href="?app='.$row[$printed]['id'].'">Aprove</a>
                     	&nbsp; 	&nbsp; 	&nbsp;  
                      <a href="?deny='.$row[$printed]['id'].'">Deny</a>
                       	&nbsp; 	&nbsp; 	&nbsp; 	&nbsp; 	&nbsp; 	&nbsp;
                </div>


                        <span class="price">'.$row[$printed]['user'].'</span>
                    </li>';
    $printed++;
}

}


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
            <img src="../src/admin/panel/images/avatar/<?php echo $avatar;?>" alt="">
            <span class="admin_name">Marcu Radu</span>
            <i class='bx bx-chevron-down' ></i>
        </div>
    </nav>

    <div class="home-content">
        <div class="overview-boxes">
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Views</div>
                    <div class="number"><?php echo $viw;?></div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bx-cart-alt cart'></i>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Likes</div>
                    <div class="number"><?php echo $likes;?></div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bxs-cart-add cart two' ></i>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total Donated</div>
                    <div class="number"><?php echo $don;?></div>
                    <div class="indicator">
                        <i class='bx bx-up-arrow-alt'></i>
                        <span class="text">Up from yesterday</span>
                    </div>
                </div>
                <i class='bx bx-cart cart three' ></i>
            </div>
            <div class="box">
                <div class="right-side">
                    <div class="box-topic">Total dislikes</div>
                    <div class="number"><?php echo $dis;?></div>
                    <div class="indicator">
                        <i class='bx bx-down-arrow-alt down'></i>
                        <span class="text">Down From Today</span>
                    </div>
                </div>
                <i class='bx bxs-cart-download cart four' ></i>
            </div>
        </div>

        <div class="sales-boxes">
            <div class="recent-sales box">
                <div class="title">Recent Activity</div>
                <div class="sales-details">
                    <ul class="details">
                        <li class="topic">Date</li>
                        <li><a href="#">02 Jan 2021</a></li>

                    </ul>
                    <ul class="details">
                        <li class="topic">Users</li>
                        <li><a href="#">Alex Doe</a></li>

                    </ul>
                    <ul class="details">
                        <li class="topic">Action</li>
                        <li><a href="#">02 Jan 2021</a></li>
                    </ul>

                </div>

            </div>



            <div class="top-sales box">
                <div class="title">Posts</div>
                <ul class="top-sales-details">
                    <?php get_to_app_post();?>

                </ul>
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
   <canvas id="myChart" style="width:130%;max-width:140%"></canvas>

 </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script>
      var xValues = ['26',"27","28","29","30"];
      <?php
      echo "let fr ='$fr';";
      echo "let sc ='$sc';";
      echo "let tr ='$trd';";
      echo "let fort ='$fort';";
      echo "let jsvar ='$today';";
      ?>
      console.log(jsvar);
      new Chart("myChart", {
          type: "line",
          data: {
              labels: xValues,
              datasets: [{
                  data: [jsvar,fr,sc,tr,fort],
                  borderColor: "red",
                  fill: false,
                  label: 'Views'
              },{
                  data: [1600,1700,1700,1900,2000],
                  borderColor: "green",
                  fill: false,
                  label: 'Likes'
              },{
                  data: [300,700,2000,5000,6000],
                  borderColor: "blue",
                  fill: false,
                  label: 'DisLikes'
              }]
          },
          options: {
              legend: {display: true,
                  red: "lol"
              }
          }
      });
  </script>
</body>
</html>
