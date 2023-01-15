
<?php
session_start();
include("../connection/connection.php");
if(isset($_POST["delete_post"]))

{
    $id = mysqli_real_escape_string($con , $_POST['delete_post']);
    $query = "DELETE FROM comments WHERE id = '$id' ";
    $query_run = mysqli_query($con , $query);

    if($query_run)
    {

        $_SESSION['message'] = "<span style='color:green'>comment deleted successfully!</span>";
        header("Location: ../admin_pages/manage_comments.php");
        die; 

    }

    else

    {
        $_SESSION['message'] = "<span style='color:red'>comment not deleted successfully!</span>";
        header("Location: ../admin_pages/manage_comments.php");
        exit(0);   
    }
}



?>