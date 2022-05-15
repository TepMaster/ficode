<?php


if($row==NULL){
    $user=false;
    nouser();
}else{


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

    $lastdata="15/05/2022";
    $about="php/c++/c# dev";
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