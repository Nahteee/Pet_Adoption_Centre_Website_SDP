<<<<<<< HEAD
<?php
session_start();
include('../conn.php');

if(isset($_POST['add_sub_replies']))
{
    $cmt_id = mysqli_real_escape_string($con,$_POST['cmt_id']);
    $reply_msg = mysqli_real_escape_string($con,$_POST['reply_msg']);
    $user_id = $_SESSION['auth_user_id'];
    $topic_id = $_SESSION['ID'];

    $query = "INSERT INTO comment_replies(comment_ID,reply_message,user_ID,topic_ID) VALUES ('$cmt_id','$reply_msg','$user_id',$topic_id)";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        echo "Comment Replied to User";
    }
    else
    {
        echo "sub reply error!";
    }
}

if(isset($_POST['view_comment_data']))
{
    $cmt_id = mysqli_real_escape_string($con,$_POST['cmt_id']);
    
    $query = "SELECT * FROM comment_replies WHERE comment_ID='$cmt_id'";
    $query_run = mysqli_query($con,$query);

    $result_array = [];

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            $user_id = $row['user_ID'];
            $user_query = "SELECT * FROM users WHERE ID='$user_id' LIMIT 1";
            $user_query_run = mysqli_query($con,$user_query);
            $user_result = mysqli_fetch_array($user_query_run);

            array_push($result_array,['cmt'=>$row, 'user'=>$user_result]);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else
    {
        echo "No replies to this user";
    }
}

if(isset($_POST['add_reply']))
{
    $cmt_id = mysqli_real_escape_string($con,$_POST['comment_id']);
    $reply = mysqli_real_escape_string($con,$_POST['reply_msg']);

    $user_id = $_SESSION['auth_user_id'];
    $topic_id = $_SESSION['ID'];

    $queryy = "INSERT INTO comment_replies(comment_ID,reply_message,user_ID,topic_ID) VALUES('$cmt_id','$reply','$user_id','$topic_id')";
    $queryy_run = mysqli_query($con,$queryy);

    if($queryy_run)
    {
        echo "Comment Replied";
    }
    else
    {
        echo "Comment not replied";
    }
}


if(isset($_POST['comment_load_data']))
    {
        //condition match with topic id
        //$comments_query = "SELECT * FROM comments;"; //problem query
        $topicid = $_POST['t_id'];
        $comments_query = "SELECT * FROM forum_post INNER JOIN forum_comments ON forum_post.topic_id = forum_comments.post_ID WHERE forum_post.topic_id = $topicid";

        $comments_query_run = mysqli_query($con,$comments_query);

        $array_result = [];

        if(mysqli_num_rows($comments_query_run) > 0)
        {
            foreach($comments_query_run as $row)
            {
                $user_id = $row['user_ID'];
                $user_query = "SELECT * FROM users WHERE ID='$user_id' LIMIT 1";
                $user_query_run = mysqli_query($con,$user_query);
                $user_result = mysqli_fetch_array($user_query_run);

                array_push($array_result,['cmt'=>$row, 'user'=>$user_result]);
            }
            header('Content-type: application/json');
            echo json_encode($array_result);
        }
        else
        {
            echo "Give a comment";
        }
    }

if(isset($_POST['add_comment']))
    if(!isset($_SESSION['auth_user_id']))
    {
        echo "You have to login to comment!";
    }
    else
    {
        $msg = mysqli_real_escape_string($con,$_POST['msg']);
        $user_id = $_SESSION['auth_user_id'];
        $topic_id = $_SESSION['topic_id'];

        $comment_add_query = "INSERT INTO forum_comments (user_ID,post_ID,comment) VALUES ('$user_id','$topic_id','$msg')";
        $comment_add_query_run = mysqli_query($con,$comment_add_query);

        if($comment_add_query_run)
        {
            echo "Comment Added Successfully";
            
        }
        else{
            echo "Add Comment not added! Something Went Wrong";
        }
    }
=======
<?php
session_start();
include('../conn.php');

if(isset($_POST['add_sub_replies']))
{
    $cmt_id = mysqli_real_escape_string($con,$_POST['cmt_id']);
    $reply_msg = mysqli_real_escape_string($con,$_POST['reply_msg']);
    $user_id = $_SESSION['userID'];
    $topic_id = $_SESSION['ID'];

    $query = "INSERT INTO comment_replies(comment_ID,reply_message,user_ID,topic_ID) VALUES ('$cmt_id','$reply_msg','$user_id',$topic_id)";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        echo "Comment Replied to User";
    }
    else
    {
        echo "sub reply error!";
    }
}

if(isset($_POST['view_comment_data']))
{
    $cmt_id = mysqli_real_escape_string($con,$_POST['cmt_id']);
    
    $query = "SELECT * FROM comment_replies WHERE comment_ID='$cmt_id'";
    $query_run = mysqli_query($con,$query);

    $result_array = [];

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            $user_id = $row['user_ID'];
            $user_query = "SELECT * FROM users WHERE ID='$user_id' LIMIT 1";
            $user_query_run = mysqli_query($con,$user_query);
            $user_result = mysqli_fetch_array($user_query_run);

            array_push($result_array,['cmt'=>$row, 'user'=>$user_result]);
        }
        header('Content-type: application/json');
        echo json_encode($result_array);
    }
    else
    {
        echo "No replies to this user";
    }
}

if(isset($_POST['add_reply']))
{
    $cmt_id = mysqli_real_escape_string($con,$_POST['comment_id']);
    $reply = mysqli_real_escape_string($con,$_POST['reply_msg']);

    $user_id = $_SESSION['auth_user_id'];
    $topic_id = $_SESSION['ID'];

    $queryy = "INSERT INTO comment_replies(comment_ID,reply_message,user_ID,topic_ID) VALUES('$cmt_id','$reply','$user_id','$topic_id')";
    $queryy_run = mysqli_query($con,$queryy);

    if($queryy_run)
    {
        echo "Comment Replied";
    }
    else
    {
        echo "Comment not replied";
    }
}


if(isset($_POST['comment_load_data']))
    {
        //condition match with topic id
        //$comments_query = "SELECT * FROM comments;"; //problem query
        $topicid = $_POST['t_id'];
        $comments_query = "SELECT * FROM forum_post INNER JOIN forum_comments ON forum_post.topic_id = forum_comments.post_ID WHERE forum_post.topic_id = $topicid";

        $comments_query_run = mysqli_query($con,$comments_query);

        $array_result = [];

        if(mysqli_num_rows($comments_query_run) > 0)
        {
            foreach($comments_query_run as $row)
            {
                $user_id = $row['user_ID'];
                $user_query = "SELECT * FROM users WHERE ID='$user_id' LIMIT 1";
                $user_query_run = mysqli_query($con,$user_query);
                $user_result = mysqli_fetch_array($user_query_run);

                array_push($array_result,['cmt'=>$row, 'user'=>$user_result]);
            }
            header('Content-type: application/json');
            echo json_encode($array_result);
        }
        else
        {
            echo "Give a comment";
        }
    }

if(isset($_POST['add_comment']))
    if(!isset($_SESSION['userID']))
    {
        echo "You have to login to comment!";
    }
    else
    {
        $msg = mysqli_real_escape_string($con,$_POST['msg']);
        $user_id = $_SESSION['userID'];
        $topic_id = $_SESSION['topic_id'];

        $comment_add_query = "INSERT INTO forum_comments (user_ID,post_ID,comment) VALUES ('$user_id','$topic_id','$msg')";
        $comment_add_query_run = mysqli_query($con,$comment_add_query);

        if($comment_add_query_run)
        {
            echo "Comment Added Successfully";
            
        }
        else{
            echo "Add Comment not added! Something Went Wrong";
        }
    }
>>>>>>> Ethan
?>