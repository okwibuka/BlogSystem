<?php

session_start();
require("../connection/connection.php");

if(isset($_POST["submit"]))
{

    $post_id = $_SESSION['post_id'];
    $comment = mysqli_real_escape_string($con, $_POST['comment']);
    $query = "insert into comments (comments,post_id) values ('$comment','$post_id')";
    $result = mysqli_query($con , $query);

    if($result && !empty($result && !$_SESSION['auth'] ))
    {
        $id = $_SESSION['post_id'];
        header("Location: ../user_pages/post_view.php?id=$id");
        die;
    }
    else
    {
        $id = $_SESSION['post_id'];
        header("Location: ../loged_user/post_view.php?id=$id");
        die;
    }
}



?>