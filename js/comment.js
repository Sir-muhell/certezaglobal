        function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
                var str = $("#frm-comment").serialize();
                var username        = $("#name").val();
                var useremail       = $("#email").val();
                var usercontent     = $("#comment").val();
                var postid          = $("#post_id").val();
                var comment_id      = $('#comment_id').val();

                var a = document.forms["frm-comment"]["name"].value;
                var b = document.forms["frm-comment"]["email"].value;
                var c = document.forms["frm-comment"]["comment"].value;
                

                if (a === null || a === "") {
                document.getElementById("msgs").innerHTML = "Please Input your Full Name &#128579";
                    return false;
                } else {

                     if (b === null || b === "") {
                document.getElementById("msgs").innerHTML = "Your Emial can`t be empty &#128580";
                    return false;
                } else {

                      if (c === null || c === "") {
                document.getElementById("msgs").innerHTML = "Please Input your Comment &#129488";
                    return false;
                }else {

                document.getElementById("msgs").innerHTML = "Comment Added Succesfully! &#128519";
                }
 
                }
            }

                $.ajax({
                    url: "com_add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                       
                       var result = [' + response + '];
                       if (response)
                        {
                            $("#name").val("");
                            $("#email").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                            $("#post_id").val("");
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
                $.post("com_list.php",
                        function (data) {
                            var data = JSON.parse(data);
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<li class='comment'>"+
                                    "<div class='comment_body'>"+
                                    "<div class='comment_panel d-flex flex-row align-items-center justify-content-start'>"+
                                    "<small class='post_meta'><a href='#'>" + data[i]['comment_sender'] + "</a><span>Sep 29, 2017 at 9:48 am</span></small>"+
                                    "<button type='button' onClick='postReply(" + commentId + ")' class='reply_button ml-auto'>Reply</button>"+
                                    "</div>"+
                                    "<div class='comment_content'>"+
                                    "<p>" + data[i]['comments'] + "</p>"+
                                    "</div></div></li>";
                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }
                                    
            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                      var comments = "<li class='comment' style='margin-left:25px'>"+
                                    "<div class='comment_body'>"+
                                    "<div class='comment_panel d-flex flex-row align-items-center justify-content-start'>"+
                                    "<small class='post_meta'><a href='#'>" + data[i]['comment_sender'] + "</a><span>Sep 29, 2017 at 9:48 am</span></small>"+
                                    "<button type='button' onClick='postReply(" + commentId + ")' class='reply_button ml-auto'>Reply</button>"+
                                    "</div>"+
                                    "<div class='comment_content'>"+
                                    "<p>" + data[i]['comments'] + "</p>"+
                                    "</div></div></li>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
    