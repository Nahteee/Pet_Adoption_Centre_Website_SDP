<?php
session_start();
include("../conn.php");


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

if(isset($_POST['dlt_cmt']))
{
    $cmt_id = mysqli_real_escape_string($con,$_POST['comment_id']);
    $result = mysqli_query($con,"DELETE FROM forum_comments WHERE ID=$cmt_id");
    mysqli_close($con); //close database connection
}

if(isset($_POST['dlt_sub_cmt']))
{
    $cmt_id = mysqli_real_escape_string($con,$_POST['cmt_id']);
    $result = mysqli_query($con,"DELETE FROM comment_replies WHERE ID=$cmt_id");
    mysqli_close($con); //close database connection
}

if(isset($_POST['comment_load_data']))
    {
        // condition match with topic id
        // $comments_query = "SELECT * FROM comments;"; //problem query
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
?>