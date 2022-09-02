<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        load_comment();
        function load_comment() { //show comment function
            $.ajax({
                type: "POST",
                url: "admin_code.php",

                data: {
                    't_id': <?php echo $_GET['id']; ?>,
                    'comment_load_data': true
                },
                success: function(response) {
                    $('.comment-container').html("");
                    $.each(response, function(key, value) {
                        $('.comment-container').
                        append('<div class="reply_box border p-2 mb-2">\
                            <h6 class="border-bottom d-inline">  ' + value.user['username'] + ' | ' + value.cmt['time'] + ' </h6>\
                            <p class="para"> ' + value.cmt['comment'] + ' </p>\
                            <button id="view" value="' + value.cmt['ID'] + '" class="badge btn-danger view_reply_btn">View Replies</button>\
                            <button value="' + value.cmt['ID'] + '" class="badge btn-warning delete_btn">Delete</button>\
                            <div class="ml-4 reply_section"></div>\
                        </div>\
                    ');
                    });
                }
            });
        }
        $(document).on('click', '.delete_btn', function() {

            var thisClicked = $(this);
            var cmt_id = thisClicked.val();

            var data = {
                'comment_id': cmt_id,
                'dlt_cmt': true
            };
            $.ajax({
                type: "POST",
                url: "admin_code.php",
                data: data,
                success: function(response) {
                    window.location = window.location;
                    alert('comment deleted!');
                }
            });
        });

        $(document).on('click', '.view_reply_btn', function(e) {
            e.preventDefault();

            var thisClicked = $(this);
            var cmt_id = thisClicked.val();

            $.ajax({
                type: "POST",
                url: "admin_code.php",
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
                                <button value="' + value.cmt['ID'] + '" class="badge btn-warning sub_delete_btn">Delete</button>\
                                <div class="ml-4 sub_reply_section"></div>\
                            </div>\
                    ');
                    });
                }
            });
        });
        $(document).on('click', '.sub_delete_btn', function() {

            var thisClicked = $(this);
            var cmt_id = thisClicked.val();

            var data = {
                'cmt_id': cmt_id,
                'dlt_sub_cmt': true
            };
            $.ajax({
                type: "POST",
                url: "admin_code.php",
                data: data,
                success: function(response) {
                    window.location = window.location;
                    alert('comment reply deleted!');
                }
            });
        });
    });
</script>

</body>

</html>