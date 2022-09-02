<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        load_comment();
        function load_comment() { // show comment function
            $.ajax({
                type: "POST",
                url: "code.php",
                data: {
                    't_id': <?php echo $_GET['id']; ?>,
                    'comment_load_data': true
                },
                success: function(response) {
                    $('.comment-container').html("");
                    // console.log(response);
                    $.each(response, function(key, value) {
                        $('.comment-container').
                        append('<div class="reply_box border p-2 mb-2">\
                            <h6 class="border-bottom d-inline">  ' + value.user['username'] + ' | ' + value.cmt['time'] + ' </h6>\
                            <p class="para"> ' + value.cmt['comment'] + ' </p>\
                            <button value="' + value.cmt['ID'] + '" class="badge btn-warning reply_btn">Reply</button>\
                            <button id="view" value="' + value.cmt['ID'] + '" class="badge btn-danger view_reply_btn">View Replies</button>\
                            <div class="ml-4 reply_section"></div>\
                        </div>\
                    ');
                    });
                }
            });
        }


        $(document).on('click', '.reply_btn', function() { //reply button function for main comment

            var thisClicked = $(this);
            var cmt_id = thisClicked;

            $('.reply_section').html("");
            thisClicked.closest('.reply_box').find('.reply_section').
            html('<input type="text" class="reply_msg form-control" placeholder="Reply">\
                <div class="text-end">\
                    <button class="btn btn-sm btn-primary reply_add_btn">Reply</button>\
                    <button class="btn btn-sm btn-danger reply_cancel_btn">Cancel</button>\
                </div>');


        });

        $(document).on('click', '.reply_cancel_btn', function() { //cancel reply button function will hiden the reply section
            $('.reply_section').html("");
        });

        $(document).on('click', '.reply_add_btn', function(e) { //blue reply button function for the reply to main comment
            e.preventDefault();

            var thisClicked = $(this);
            var cmt_id = thisClicked.closest('.reply_box').find('.reply_btn').val();
            var reply = thisClicked.closest('.reply_box').find('.reply_msg').val();


            var data = {
                'comment_id': cmt_id,
                'reply_msg': reply,
                'add_reply': true
            };
            $.ajax({
                type: "POST",
                url: "code.php",
                data: data,
                success: function(response) {
                    alert(response);
                    $('.reply_section').html("");
                    $('.view_reply_btn').click();
                }
            });
        });


        $(document).on('click', '.view_reply_btn', function(e) {
            e.preventDefault();

            var thisClicked = $(this);
            var cmt_id = thisClicked.val();

            $.ajax({
                type: "POST",
                url: "code.php",
                data: {
                    'cmt_id': cmt_id,
                    'view_comment_data': true
                },
                success: function(response) {
                    // console.log(response);
                    $('.reply_section').html("");

                    $.each(response, function(key, value) {
                        thisClicked.closest('.reply_box').find('.reply_section').
                        append('<div style="margin-left:15px" class="sub_reply_box border-bottom p-2 mb-2">\
                                <input type="hidden" class="get_username" value="' + value.user['username'] + ' ">\
                                <h6 class="border-bottom d-inline"> ' + value.user['username'] + ' | ' + value.cmt['time'] + ' </h6>\
                                <p class="para"> ' + value.cmt['reply_message'] + ' </p>\
                                <button value="' + value.cmt['comment_ID'] + '" class="badge btn-warning sub_reply_btn">Reply</button>\
                                <div class="ml-4 sub_reply_section"></div>\
                            </div>\
                    ');
                    });
                }
            });

        });

        $(document).on('click', '.sub_reply_btn', function(e) {
            e.preventDefault();

            var thisClicked = $(this);
            var cmt_id = thisClicked.val();
            var username = thisClicked.closest('.sub_reply_box').find('.get_username').val();
            $('.sub_reply_section').html("");
            thisClicked.closest('.sub_reply_box').find('.sub_reply_section').
            append('<div>\
                    <input type="text" value="@' + username + '" class="sub_reply_msg form-control" my-2 placeholder="Your Reply">\
                </div>\
                <div class="text-end">\
                    <button class="btn btn-sm btn-primary sub_reply_add_btn">Reply</button>\
                    <button class="btn btn-sm btn-danger sub_reply_cancel_btn">Cancel</button>\
                </div>\
        ')
        });

        $(document).on('click', '.sub_reply_add_btn', function(e) {
            e.preventDefault();

            var thisClicked = $(this);
            var cmt_id = thisClicked.closest('.sub_reply_box').find('.sub_reply_btn').val();
            var reply = thisClicked.closest('.sub_reply_box').find('.sub_reply_msg').val();

            var data = {
                'cmt_id': cmt_id,
                'reply_msg': reply,
                'add_sub_replies': true
            }

            $.ajax({
                type: "POST",
                url: "code.php",
                data: data,
                success: function(response) {
                    $('.reply_section').html("");
                    $('.view_reply_btn').click();
                    alert(response);
                }
            });
        });






        $(document).on('click', '.sub_reply_cancel_btn', function(e) {
            e.preventDefault();

            $('.sub_reply_section').html("");
        });


        $('.add_comment_btn').click(function(e) {
            e.preventDefault();

            var msg = $('.comment_textbox').val();

            if ($.trim(msg).length == 0) {
                error_msg = "Please type comment";
                $('#error_status').text(error_msg);
            } else {
                error_msg = "";
                $('#error_status').text(error_msg);
            }

            if (error_msg != '') {
                return false;

            } else {
                var data = {
                    'msg': msg,
                    'add_comment': true,
                }
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: data,
                    success: function(response) {
                        alert(response);
                        window.location = window.location;
                        $('.comment_textbox').val("");
                    }
                });
            }

        });

    });
</script>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- <link rel="stylesheet" href="CSS/reset.css?v=<//?php echo time(); ?>"> -->
    <link rel="stylesheet" href="/SDP-Source-Code/CSS/footerstyle.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  </head>
  <body>
    <footer>
      <div class="footer-wrap">
        <div class="element1">
          <img src="/SDP-Source-Code/Imgs/ForeverHome Logo.png" alt="">
          <div class="socials">
            <a href="https://www.instagram.com/" target=”_blank”><i class="bi-instagram"></i></a>
            <a href="https://www.facebook.com/" target=”_blank”><i class="bi-facebook"></i></a>
            <a href="https://www.twitter.com/" target=”_blank”><i class="bi-twitter"></i></a>
          </div>
        </div>
        <div class="element3">
          <h1>Contact Us</h1>
          <ul>
            <li><strong>Contact - </strong></li>
            <li>+6012-323-5423</li>
            <li><strong>Email - </strong></li>
            <li>foreverhome@gmail.com</li>
            <li><strong>Address - </strong></li>
            <li>Bandar Utara, Batu 12 Jalan Ipoh</li>
          </ul>
        </div>
        <div class="element2">
          <h1>Useful Links</h1>
          <ul>
            <li> <a href="/SDP-Source-Code/member/browsepets.php">Pets</a> </li>
            <li> <a href="/SDP-Source-Code/member/browsepages.php">Centres</a> </li>
            <li> <a href="/SDP-Source-Code/member/Forum/indexforum.php">Forum</a> </li>
            <li> <a href="/SDP-Source-Code/member/Quiz/quiz.php">Quiz</a> </li>
          </ul>
        </div>

        <div class="element4">
          <p> <br><i style="font-size: 18px;"><b>Something wrong with our site?</b> </i> <br> <i style="font-size: 18px;"><b>Send us your bug report.</b></i> </p>
          <a style="margin-top: 0px; margin-bottom: 10px;"href="/SDP-Source-Code/member/sendbug.php">Bug Report</a>
          <p> <i style="font-size: 18px;"><b>What do you think of our website?</b> </i> <br> <i style="font-style: normal;"><b>Send us your feedback</b></i> </p>
          <a style="margin-top: -5px; margin-bottom: 10px;" href="/SDP-Source-Code/member/feedback.php">Feedback</a>
        </div>
      </div>
      <h2 style="font-size: 18px;">Adoption 2022 ©. All Rights Reserved</h2>
    </footer>
  </body>
</html>
