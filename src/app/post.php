<?php


if(isset($_POST['coment'])){
    $com=$_POST['coment'];
    //get date
    $ro = DB::queryFirstRow("SELECT com FROM post WHERE id=%s LIMIT 1", $postid);
    echo "Name: " . $ro['com'] . "\n"; // will be Joe, obviously

    $def =$ro['com'];
    array_push($def, $com);
    print_r($def);


    DB::insert('post', [
        'com' => $def,
    ]);
//header("Location: #");
}
$votes=10;
$com_nr=0;

?>
<!DOCTYPE html>
<html lang="en"><input type="hidden" id="__yoroi_connector_api_injected_type" value="prod"><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../src/app/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../../src/app/assets/css/font-awesome.css">
    <link rel="stylesheet" href="../../../src/app/assets/css/base.css">
    <link rel="stylesheet" href="../../../src/app/assets/js/jquery-3.js">


    <title>PMC  | Parerea mea conteaza</title>



    <style>


        .comment-form-container {
            background: #F0F0F0;
            border: #e0dfdf 1px solid;
            padding: 20px;
            border-radius: 2px;
        }

        .input-row {
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            border-radius: 2px;
            padding: 10px;
            border: #e0dfdf 1px solid;
        }

        .btn-submit {
            padding: 10px 20px;
            background: #333;
            border: #1d1d1d 1px solid;
            color: #f0f0f0;
            font-size: 0.9em;
            width: 100px;
            border-radius: 2px;
            cursor:pointer;
        }

        ul {
            list-style-type: none;
        }

        .comment-row {
            border-bottom: #2b2b2b 1px solid;
            margin-bottom: 15px;
            padding: 15px;
            width: 955px;
        }

        .outer-comment {
            background: #2b2b2b;
            padding: 20px;
            border: #2b2b2b 1px solid;
        }

        span.commet-row-label {
            font-style: italic;
        }

        span.posted-by {
            color: #09F;
        }

        .comment-info {
            font-size: 0.8em;
        }
        .comment-text {
            margin: 10px 0px;
        }
        .btn-reply {
            font-size: 0.8em;
            text-decoration: underline;
            color: #888787;
            cursor:pointer;
        }
        #comment-message {
            margin-left: 20px;
            color: #189a18;
            display: none;
        }
    </style>




</head>

<body class="bg-light">
<div class="background-contain">
    <div class="page-continer">


        <div id="alert-container" class="bg-light">
            <ul class="flashes generic-alert bg-light" id="alert-ul">



            </ul>
        </div>

    </div>
</div>

<div class="page-container bg-light">
    <div class="mx-auto bg-light page">
        <div id="content" class="bg-light">







            <title><?php echo $row['name'];?> </title>

            <div id="comment-page-wrapper">







                <script> var preExpand = true; </script>
                <script> var preExpandId = 12049; </script>
                <script> var preExpandType = "self_post"; </script>
                <script>

                    var preExpandVideo = false;

                </script>










                <ul id="top-of-post-12049" class="list-unstyled sub-list rounded ">



                    <li class="media sub-post rounded">
                        <div class="post-image-container" id="post-thumb-12049">

                            <a href="">
                                <img class="mr-3 post-image" src="../../../src/app/assets/img/comment-white.png" alt="comment-white.png">
                            </a>

                        </div>

                        <div class="media-body posts-media-body" id="media-body-12049">
                            <div class="row post-row top-post-row">
                                <div class="col inner-div post-inner-div">
                                    <div class="top-comm-post-row small-text">


                                        <div class="usertype-admin user-and-sub">
                                            <div class="user-icon-and-name-wrap">
                                                <i class="fa fa-user"></i>
                                                <a class="usertype-admin" href="/u/<?php echo $row['user'];?>/"><?php echo $row['user'];?></a>
                                            </div>

                                            <a class="top-of-post comment-link text-ccc" href="/u/<?php echo $row['user'];?>/">2m</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-title">
                                <div class="expand-post">













                                    <a id="expand-button-12049" href="javascript:collapsePost(pid=12049, ptype='self_post', vid=false);" class="">
                                        <i class="fa fa-minus-square-o" aria-hidden="true"></i>
                                    </a>

                                </div>






                                <a class="sub-post-title-link text-eee sub-post-title-offset" href="/u/<?php echo $row['user'];?>/"><?php echo $row['name'];?>
                                </a><a href="/u/<?php echo $row['user'];?>/" class="sub-post-title-url small-text text-aaa"></a>

                            </div>


                            <div class="expanded-post" id="post-12049" style="display: inline-block;">

                                <div class="expanded-selftext rounded">
                                    <div class="inner-selftext-wrapper">
                                        <div class="safe-markup-text expanded-self-text">
                                            <?php echo $row['text'];?>
                                                      </div>
                                </div>

                            </div>


                            <div class="bottom-post-row">
                                <div class="vote-comment-wrapper">
                                    <div class="inner-div comment-post-voting" vote-obj-id="12049" vote-obj-type="post" vote-userid="" has_voted="">










                                        <a href="javascript:void(0)" ><i class="bi bi-arrow-up" style="color:green"></i></a>
                                        <vote class="score"><?php echo $votes;?></vote>
                                        <a href="javascript:void(0)"><i class="bi bi-arrow-down" style="color:red"></i></a>
                                    </div>
<?php
if($com_nr==0){

}else{
    echo'<a class="comment-link" href="#">
                                        <span class="num-and-com">21</span>
                                        <span class="comment-span">comments</span>
                                        <span class="new-comment-span-long" style="hidden"></span>
                                        <i class="comment-fontawesome fa fa-comment"></i>
                                    </a>';
}
?>

                                </div>

                                <br>

                                <div class="mod-option-wrapper user-options next-to-comments">




                                    <!-- BEGIN MOD STYLE -->

                                    <!-- END MOD STYLE -->

                                </div>
                            </div>


                        </div></li>
                </ul>









                  <div class="form-group">

                          <form method="post">
                              <div class="input-row">
                <textarea class="input-field" type="text" name="comment" id="frm-comment"
                          id="comment" placeholder="Add a Comment">  </textarea>
                              </div>
                              <div>
                              <input type="button" class="btn-submit" id="submitButton"
                                     value="Publish" />
                          </form>
                          <div id="comment-message">Comments Added Successfully!</div>
                      </div>
                </div>

                <ul class="list-unstyled comment-reply-list">




                    <li class="media sub-comment media-body rounded  comment-color-0" level="0" style="margin-left:0px;" loop="0 0" id="comment-4311">

                    <div id="output"></div>


                </ul>

            </div>


        </div>
    </div>
</div>


<script src="../../../src/app/assets/js/jquery-3.js"></script>
<script src="../../../src/app/assets/js/popper.js"></script>
<script src="../../../src/app/assets/js/bootstrap.js"></script>

<script src="../../../src/app/assets/js/main.js"></script>
<script src="../../../src/app/assets/js/actions.js"></script>
<script src="../../..//src/app/assets/js/expand-post.js"></script>

<script type="application/javascript">
    function postReply(commentId) {
        console.log(document.getElementById("commentId")).value;
        $('#commentId').val(commentId);
        $("#name").focus();
    }

    $("#submitButton").click(function () {
        $("#comment-message").css('display', 'none');
        var str = $("#frm-comment").serialize();
console.log(str);
        $.ajax({
            url: "../../../src/app/comment-add.php",
            data: str+"&post="+<?php echo $postid?>,
            type: 'post',
            success: function (response)
            {
                var result = eval('(' + response + ')');
                if(response==2){
                    alert("You need to be login");
                }
                if (response)
                {
                    $("#comment-message").css('display', 'inline-block');
                    $("#name").val("");
                    $("#comment").val("");
                    $("#commentId").val("");
                    listComment();
                } else

                {
                    alert("Failed to add comments !");
                    return false;
                }
            }
        });
    });

    $(document).ready(function () {
        listComment();
    });

    function listComment() {

        datatosend = 'post='+<?php  echo $postid;?>;
        $.ajax({
            url: '../../../src/app/comment-list.php',
            type: 'POST',
            data: datatosend,
            async: true,
            datatype: 'json',
            success: function(data) {
                var data = JSON.parse(data);

                var comments = "";
                var replies = "";
                var item = "";
                var parent = -1;
                var results = new Array();

                var list = $("<ul class='outer-comment'>");
                var item = $("<li>").html(comments);

                for (var i = 0; (i < data.length); i++) {
                    var commentId = data[i]['comment_id'];
                    parent = data[i]['parent_comment_id'];

                    if (parent == "0") {
                        comments = "<div class='comment-row'>" +
                            "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" +
                            "<div class='comment-text'>" + data[i]['comment'] + "</div>" +
                            "<div><element  class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</element></div>" +
                            "</div>";

                        var item = $("<li>").html(comments);
                        list.append(item);
                        var reply_list = $('<ul>');
                        item.append(reply_list);
                        listReplies(commentId, data, reply_list);
                    }
                }
                $("#output").html(list);
            },
        });


    }

    function listReplies(commentId, data, list) {
        for (var i = 0; (i < data.length); i++)
        {
            if (commentId == data[i].parent_comment_id)
            {
                var comments = "<div class='comment-row'>"+
                    " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" +
                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                    "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                    "</div>";
                var item = $("<li>").html(comments);
                var reply_list = $('<ul>');
                list.append(item);
                item.append(reply_list);
                listReplies(data[i].comment_id, data, reply_list);
            }
        }
    }
</script>

<style type="text/css"> .expanded-post-image {max-height: 1500px; } </style></body></html>
