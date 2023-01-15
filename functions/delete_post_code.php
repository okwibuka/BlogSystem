<?php

session_start();
include("../connection/connection.php");

if(isset($_POST["delete_post"]))
{
    $post_id = mysqli_real_escape_string($con , $_POST['delete_post']);
    $query = "DELETE FROM posts WHERE id = $post_id";
    $query_run = mysqli_query($con , $query);
    
    if($query_run)
    {
    $_SESSION['message'] = "<span style='color:red'>post deleted successfully!</span>";
    header("Location: ../loged_user/dashboard.php");
    exit(0); 
    }
    else
    {
        echo "post not deleted";
        header("Location: dashboard.php");
        die;
    }
}

?>