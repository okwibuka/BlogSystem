

<?php

session_start();
include("../connection/connection.php");

if(isset($_POST['submit']))

{
    // $id = $_GET['id'];
    $id = mysqli_real_escape_string($con , $_POST['id']);
    $name = mysqli_real_escape_string($con , $_POST['name']);
    $email = mysqli_real_escape_string($con , $_POST['email']);
    $user_type = mysqli_real_escape_string($con , $_POST['user_type']);

    $query= "UPDATE users SET name ='$name' , email='$email', use_type='$user_type'
    WHERE id='$id' ";
    $query_run = mysqli_query($con , $query);
    if($query_run)
    {

        $_SESSION['message'] = "<span style='color:green'>user updated successfully!</span>";
        header("Location: ../admin_pages/manage_users.php");
        exit(0);
    }
    else
    {

        $_SESSION['message'] = "<span style='color:red'>user not updated successfully!</span>";
        header("Location: ../admin_pages/manage_users.php?id='$id'");
        exit(0);
    }
}


?>