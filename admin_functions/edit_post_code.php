

<?php
session_start();
include("../connection/connection.php");

if(isset($_POST["submit"]))
{
     
    $post_id = mysqli_real_escape_string($con , $_POST['post_id']);
    $title = mysqli_real_escape_string($con ,$_POST['title']);
    $body = mysqli_real_escape_string($con ,$_POST['body']);
    $category = mysqli_real_escape_string($con ,$_POST['category']); 

    $query = "UPDATE posts SET title ='$title' , body='$body' , category='$category'
    WHERE id='$post_id ' ";

    $query_run = mysqli_query($con , $query);
    if($query_run)
    {
    $_SESSION['message'] = "<span style='color:green'>post updated successfully</span>";
    header("Location: ../admin_pages/dashboard.php");
    exit(0); 
    }
    else
    {
        $_SESSION['message'] = " <span style='color:red'>post not updated</span>";
        header("Location: ../admin_pages/edit_post.php");
        exit(0); 
    }

}
?>