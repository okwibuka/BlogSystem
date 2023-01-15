
<?php
session_start();
include("../connection/connection.php");
if(isset($_POST["delete_post"]))

{
    $id = mysqli_real_escape_string($con , $_POST['delete_post']);
    $query = "DELETE FROM posts WHERE id = '$id' ";
    $query_run = mysqli_query($con , $query);

    if($query_run)
    {

        $_SESSION['message'] = "<span style='color:green'>post deleted successfully!</span>";
        header("Location: ../admin_pages/index.php");
        exit(0); 

    }

    else

    {
        $_SESSION['message'] = "<span style='color:red'>post not deleted successfully!</span>";
        header("Location: ../admin_pages/index.php");
        exit(0);   
    }
}



?>