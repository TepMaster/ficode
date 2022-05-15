<?php
var_dump($_SERVER['SCRIPT_FILENAME']);

require_once 'src/db.class.php';


require "header.php";

$page = 0;
$page = $_GET["page"] ?? 1; // Get the current page

$count = DB::queryFirstField("SELECT COUNT(*) FROM post WHERE app = %i", 1); // The amount of approved posts
$record_per_page = 10;
if ($count != 0) {
    $record_per_page = 10; // The amount of posts to be displayed per page

    $GLOBALS['record_per_page'] = $record_per_page; // Put variables in global to be accessed in "getposts" function
    $GLOBALS['page'] = $page;
    $GLOBALS['count'] = $count;

    function getposts() {
        $record_per_page = $GLOBALS['record_per_page']; // Get the global variables in the function
        $page = $GLOBALS['page'];
        $count = $GLOBALS['count'];

        // Retrieve post data
        $row = DB::query("SELECT * FROM post WHERE app = 1");

        $printed = 0; // The amount of posts displayed

        while ($record_per_page > $printed && ($record_per_page * $page) - ($record_per_page * ($page - 1)) > $printed && $count > ($printed + $record_per_page * ($page - 1))) {
            echo ' <ul id="top-of-post-12270" class="list-unstyled sub-list rounded  ">


                <li class="media sub-post rounded">
                    <div class="post-image-container" id="post-thumb-12270">

                        
                            <img class="mr-3 post-image" src="../src/app/assets/img/comment-white.png" alt="comment-white.png">
                        </a>

                    </div>

                    <div class="media-body posts-media-body" id="media-body-12270">
                        <div class="row post-row top-post-row">
                            <div class="col inner-div post-inner-div">
                                <div class="top-comm-post-row small-text">














                                    <div class="usertype-admin user-and-sub">
                                        <div class="user-icon-and-name-wrap">
                                            <i class="fa fa-user"></i>
                                            <a class="usertype-admin" href="../u/' . utf8_decode($row[($record_per_page * ($page - 1)) + $printed]['user']) . '">' . utf8_decode($row[($record_per_page * ($page - 1)) + $printed]['user']) . '</a>
                                        </div>
                                  
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-title">
                            <div class="expand-post">













                                <a id="expand-button-12270" href="javascript:expandPost(pid=12270, ptype="selftext", vid="false");">
                                    <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                </a>

                            </div>






                            <a class="sub-post-title-link text-eee sub-post-title-offset" href="../i/reddit/' . $row[($record_per_page * ($page - 1)) + $printed]['id'] . '/">' . utf8_decode($row[($record_per_page * ($page - 1)) + $printed]['name']) . '
                            </a><a href="../i/reddit/' . $row[($record_per_page * ($page - 1)) + $printed]['id'] . '/" class="sub-post-title-url small-text text-aaa"></a>
                                <br><a>     ' . utf8_decode($row[($record_per_page * ($page - 1)) + $printed]['des']) . '</a>
                        </div>


                        <div class="expanded-post" id="post-12270" style="display: none;">

                          

                        </div>


                        <div class="bottom-post-row">
                            <div class="vote-comment-wrapper">
<div class="inner-div comment-post-voting" vote-obj-id="12049" vote-obj-type="post" vote-userid="" has_voted="">
    
    <a href="javascript:down(' . $row[$printed]['id'] . ')" ><i class="bi bi-arrow-up" style="color:green"></i></a>
    <vote class="score" id="scor' . $row[$printed]['id'] . '">10</vote>
    <a href="javascript:up(' . $row[$printed]['id'] . ')"><i class="bi bi-arrow-down" style="color:red"></i></a>
</div>











                               
                                    <span class="num-and-com">0</span>
                                    <span class="comment-span">comments</span>
                                    <span class="new-comment-span-long" style="hidden"></span>
                                    <i class="comment-fontawesome fa fa-comment"></i>
                                </a>
                            </div>

                            <script>document.write("<style>.hidden-buttons {display: none;}</style>")</script><style>.hidden-buttons {display: none;}</style>

                            <div class="dropup btn-group rounded v-button" id="opt-button-12270">
                                <button class="btn btn-secondary rounded btn-sm bottom-dropdown three-dots" type="button" id="opt-btn-12270" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>

                                <div class="dropdown-menu" aria-labelledby="opt-btn-12270">

                                    <a class="dropdown-item" id="hide-post-12270" href="javascript:hideObject("post_id", "12270")">hide post</a>



                                    <a class="dropdown-item" href="javascript:blockUser("post_id', '12270");">block user</a><div>
                            </div><div class="mod-option-wrapper user-options next-to-comments">

                            </div> </div> </div></li> </ul>';
            $printed++;
        }
    }
} else {
    echo "No Posts Yet!";
}
?>

<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="../src/app/assets/css/bootstrap.css">
<link rel="stylesheet" href="../src/app/assets/css/base.css">
<title>PMC  | Parerea mea conteaza</title>

<body class="bg-light">
<br><br><br><br>
<!-- navbar -->


<!-- site -->
<div class="page-container bg-light">
    <div class="mx-auto bg-light page">
        <div id="content" class="bg-light">
            <script src="../src/assets/js/expand-post_002.js">
            </script>
            <div class="btn-group" role="group" aria-label="Basic example">
            </div>
            <div class="active-sub-users">
                Users Active&nbsp;&nbsp;
                <span class="text-white">0
              </span>
                <br>
                Posts Today&nbsp;&nbsp;
                <span class="text-white">0
              </span>
            </div>
            <?php if($count!=0)getposts();else echo"<br><br><br><center><h1>No post Yet!</h1></center><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> " ?>
        </div>
        <?php
        if ($page > 1) {
            echo '<a href="?page=' . --$page . '"> <button class="btn btn-success">Back</button></a>';
        }

        if ($count > $page * $record_per_page) {
            echo '<a href="?page=' . ++$page . '"> <button class="btn btn-danger" style="float: right;">Next</button></a>';
        }
        ?>
    </div>
</div>
<!-- ? -->
<script src="../src/app/assets/js/jquery-3.js">
</script>
<script src="../src/app/assets/js/popper.js">
</script>
<script src="../src/app/assets/js/bootstrap.js">
</script>
<script src="../src/app/assets/js/main.js">
</script>
<script src="../src/app/assets/js/actions.js">
</script>
<script src="../src/app/assets/js/expand-post.js">
</script>

<script type="application/javascript">
    function down(po) {
        var computerScore = document.getElementById('scor' + po);
        document.getElementById("scor" + po).value = computerScore['textContent']++;
    }
    function up(po) {
        var computerScore = document.getElementById('scor' + po);
        document.getElementById("scor" + po).value = computerScore['textContent']--;
    }
</script>

</body>
</html>
<?php

include ("footer.php");
?>