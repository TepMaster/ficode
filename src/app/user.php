<?php


if($row==NULL){
    $user=false;
    nouser();
}else{

    echo "Name: " . $row['username'] . "\n"; // will be Joe, obviously
    echo "Age: " . $row['email'] . "\n";
    echo "Height: " . $row['date'] . "\n";
    echo "Height: " . $row['data'] . "\n";
    $json = json_decode($row['data'], true);
    if(isset($json['last'])){
        $lastdata=$json['last'];
    }
    if(isset($json['about'])){
        $about=$json['about'];
    }
    if(isset($json['mod'])){
        $mod=$json['mod'];
    }


}
function nouser(){

}
?>

<!DOCTYPE html>
<html lang="en"><input type="hidden" id="__yoroi_connector_api_injected_type" value="prod"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="../src/app/assets/js/d8b56fcb9b.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../src/app/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../src/app/assets/css/font-awesome.css">
    <link rel="stylesheet" href="../src/app/assets/css/base.css">

    <title>TEST</title>

<body class="bg-light">
<br><br>
<div class="page-container bg-light">
    <div class="mx-auto bg-light page">
        <div id="content" class="bg-light">
            <div class="user-profile">
                <div class="user-image-container">
                    <!-- In future will offer ability to upload profile images -->
                    <i class="fa fa-user user-profile-image"></i>
                </div>
                <div class="user-profile-info">
                    <h6 class="user-profile-info-top">/u/<?php echo $row['username'];?>


                        <div class="user-profile-karma">
                            <p class="user-post-karma positive-post-karma" data-toggle="tooltip" data-placement="top" title="" data-original-title="total post karma">+155</p>
                            <p class="user-comment-karma positive-comment-karma" data-toggle="tooltip" data-placement="top" title="" data-original-title="total comment karma"> +505</p>
                        </div>
                    </h6>

                    <div class="user-profile-body">
                        <div class="user-profile-single-line">
                            <div class="user-profile-left-text">Joined:</div>
                            <div class="user-profile-right-text"><?php echo $row['date']?></div>

                            <div class="admin-color user-page-role">Admin</div>

                        </div>








                        <div class="user-profile-single-line">
                            <div class="user-profile-left-text">Last Online:</div>
                            <div class="user-profile-right-text"><?php echo $lastdata?></div>
                        </div>






                        <div class="user-profile-single-line user-about-line-wrap">
                            <div class="user-profile-left-text">About:</div>
                            <div class="user-profile-right-text"><?php echo $about;?> </div>
                        </div>

                    </div>
                </div>

                <div class="btn-group" role="group">

                    <a href="https://ddit.com/message/cc-d">
                        <button type="button" class="btn btn-sm btn-secondary user-opt">
                            message <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                </svg></i>
                        </button>
                    </a>


                    <a href="javascript:hideObject('other_user', '3');">
                        <button id="block-user-button" type="button" class="btn btn-sm btn-danger user-opt">
                            block <i class="fa fa-ban"></i>
                        </button>
                    </a>
                    <a href="javascript:showObject('other_user', '3');">
                        <button style="margin-top: 0.5rem; display: none;" id="block-user-button-u" type="button" class="btn btn-sm btn-success">
                            unblock <i class="fa fa-undo"></i>
                        </button>
                    </a>



                </div>

                <div class="profile-mod-container">

                    <p style="color: #fff; margin-bottom: 0;">Moderator Of:</p>
<?php
$md=0;
$i=0;

    foreach ($mod as $i){

        echo '  <a class="profile-mod-sub" href="https://reddit.com/i/"'. $mod[$md].'>
                        /i/'. $mod[$md].' </a>';

        $md++;
    }



?></div>
                <div id="user-recent">
                    <h6 style="color: #fff;">Recent Posts</h6>






                    <ul id="top-of-post-12273" class="list-unstyled sub-list rounded  ">


                        <li class="media sub-post rounded">
                            <div class="post-image-container" id="post-thumb-12273">

                                <a href="https://files.catbox.moe/xktn6d.PNG">



                                    <img class="mr-3 post-image" src="../src/app/assets/img/comment-white.png" alt="thumbnails/thumb-12273.PNG">
                                </a>

                            </div>

                            <div class="media-body posts-media-body" id="media-body-12273">
                                <div class="row post-row top-post-row">
                                    <div class="col inner-div post-inner-div">
                                        <div class="top-comm-post-row small-text">














                                            <div class="usertype-admin user-and-sub">
                                                <div class="user-icon-and-name-wrap">
                                                    <i class="fa fa-user"></i>
                                                    <a class="usertype-admin" href="https://ddit.com/u/cc-d">name</a>
                                                </div>
                                                <div class="spacer-dot">•</div>
                                                <a class="top-of-post text-ccc" href="https://dit.com/i/ddit">/i/sub</a>
                                                <div class="spacer-dot">•</div>
                                                <a class="top-of-post comment-link text-ccc" href="https://ddit.com/i/ieit/12273/new_comment_feature2C_also_making_sure_/">4d</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="post-title">
                                    <div class="expand-post">















                                        <a id="expand-button-12273" href="javascript:expandPost(pid=12273, ptype='url', vid='false');">
                                            <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                        </a>

                                    </div>






                                    <a class="sub-post-title-link text-eee sub-post-title-offset" href="https://files.catbox.moe/xktn6d.PNG">New comment feature, also making sure thumbnail generation still works fine.
                                    </a><a href="https://files.catbox.moe/xktn6d.PNG" class="sub-post-title-url small-text text-aaa">(files.catbox.moe)</a>

                                </div>


                                <div class="expanded-post" id="post-12273" style="display: none;">

                                    <a href="https://files.catbox.moe/xktn6d.PNG">
                                        <img class="expanded-post-image rounded" id="expand-src-12273" realsrc="https://files.catbox.moe/xktn6d.PNG">
                                    </a>

                                </div>


                                <div class="bottom-post-row">
                                    <div class="vote-comment-wrapper">
                                        <div class="inner-div comment-post-voting" vote-obj-id="12273" vote-obj-type="post" vote-userid="" has_voted="">










                                            <a href="javascript:void(0)"><i class="bi bi-arrow-down"></i>
                                            <vote class="score">1</vote>
                                            <a href="javascript:void(0)"><i class="bi bi-arrow-up"></i>

                                        </div>











                                        <a class="comment-link" href="https://ddit.com/i/dit/12273/new_comment_feature2C_also_making_sure_/">
                                            <span class="num-and-com">0</span>
                                            <span class="comment-span">comments</span>
                                            <span class="new-comment-span-long" style="hidden"></span>
                                            <i class="comment-fontawesome fa fa-comment"></i>
                                        </a>
                                    </div>

                                    <script>document.write('<style>.hidden-buttons {display: none;}</style>')</script><style>.hidden-buttons {display: none;}</style>

                                    <div class="dropup btn-group rounded v-button" id="opt-button-12273">
                                        <button class="btn btn-secondary rounded btn-sm bottom-dropdown three-dots" type="button" id="opt-btn-12273" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-ellipsis-h"></i>
                                        </button>

                                        <div class="dropdown-menu" aria-labelledby="opt-btn-12273">

                                            <a class="dropdown-item" id="hide-post-12273" href="javascript:hideObject(&quot;post_id&quot;, &quot;12273&quot;)">hide post</a>



                                            <a class="dropdown-item" href="javascript:blockUser('post_id','12273');">block user</a>








                                        </div>
                                    </div>

                                    <div class="mod-option-wrapper user-options next-to-comments">




                                        <!-- BEGIN MOD STYLE -->

                                        <!-- END MOD STYLE -->

                                    </div>
                                </div>


                            </div></li>
                    </ul>


                    <!-- <p> user has additional anonymous posts </p> -->


                    <h6 style="color: #fff;">Recent Comments</h6>
                    <ul class="list-unstyled">


















                        <li class="media sub-comment media-body rounded">


                            <div class="media-body comment-media-body">
                                <div class="row post-row">
                                    <div class="col inner-div comment-inner-div small-text">

                                        <div class="user-icon-and-name-wrap">




                                            <i class="fa fa-user admin-color"></i><a class="admin-color" href="https://ddit.com/u/cc-d">&nbsp;[a]cc-d</a>


                                        </div>

                                        <div class="spacer-dot">•</div>

                                        <a href="https://ddit.com/i/ddit/12272/comment_count_for_posts_now_shows_how_ma/4339/">4d</a>

                                        <div class="spacer-dot">•</div>

                                        <a class="comment-link" href="https://ddit.com/i/
                                        ddit/12272/comment_count_for_posts_now_shows_how_ma/">
                                            parent</a>


                                    </div>
                                </div>

                                <div class="comment-selftext-wrapper">

                                    <div class="comment-text comment-text-text safe-markup-text">testing ~</div>



                                    <div class="row post-row comment-bottom">




                                        <div class="inner-div comment-voting" vote-obj-id="4339" vote-obj-type="comment" vote-userid="" has_voted="">










                                            <a href="javascript:void(0)"><i class="bi bi-arrow-up"></i></a>
                                            <vote class="score">1</vote>
                                            <a href="javascript:void(0)"><i class="bi bi-arrow-down"></i></a>
                                        </div>

                                        <div class="inner-div apply-inline">


                                            <a class="comment-link comment-reply" href="https://ddit.com/i/ddit/12272/comment_count_for_posts_now_shows_how_ma/4339" comment_id="4339">reply</a>



                                            <div class="dropup btn-group rounded v-button" id="dot-button-12272">
                                                <button class="btn btn-secondary rounded btn-sm bottom-dropdown three-dots" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-ellipsis-h"></i>  </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" id="hide-post-12272" href='javascript:hideObject("comment_id", "4339")'>hide comment</a>



                                                    <a class="dropdown-item" href="javascript:blockUser('comment_id','4339');">block user</a>






                                                </div>
                                            </div>






                                            <div class="comm-options">
                                                <script>document.write('<style>.hide-div{display: none;}</style>')</script><style>.hide-div{display: none;}</style>

                                            </div>



                                        </div>



                                    </div>

                                </div></div></li>
















                    </ul>
                </div>







            </div>
        </div>
    </div>

    <script src="../src/app/assets/js/jquery-3.js"></script>
    <script src="../src/app/assets/js/popper.js"></script>
    <script src="../src/app/assets/js/bootstrap.js"></script>

    <script src="../src/app/assets/js/main.js"></script>
    <script src="../src/app/assets/js/actions.js"></script>
    <script src="../src/app/assets/js/expand-post.js"></script>



</div><style type="text/css"> .expanded-post-image {max-height: 910px; } </style></body></html>