<?php
session_start();
include("../connection/connection.php");

if(isset($_POST['submit']))
{

    $user_id = $_SESSION['login_id'];
    $user_name = $_SESSION['user_name'];
    $title = mysqli_real_escape_string($con , $_POST["title"]);
    $body = mysqli_real_escape_string($con , $_POST["body"]);
    $category = mysqli_real_escape_string($con , $_POST["category"]);
   

    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','mp4');

    if(in_array($fileActualExt,$allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = '../images/'.$fileNameNew;
                move_uploaded_file($fileTmpName , $fileDestination);


                //usual codes

    $query="INSERT INTO posts (title,body,category,user_id,user_name,image) VALUES 
    ('$title','$body','$category','$user_id','$user_name','$fileNameNew')";
    $query_run = mysqli_query($con , $query);
    
    if($query_run && !empty($body))
    {
    
        $_SESSION['message'] = "<span style='color:green'>post created successfully<span>";
        header("Location: ../loged_user/index.php ");
    }
    else
    {
        $_SESSION['message'] = " <span style='color:red'>fill in the body</span>";
        header("Location: ../loged_user/create_post.php ");
        exit(0);
    }

            }
            else
            {
         $_SESSION['message'] = " <span style='color:red'>file is too big</span>";
        header("Location: ../loged_user/create_post.php ");
        exit(0);
            }

        }
        else
        {
        $_SESSION['message'] = " <span style='color:red'>error occured in uploading</span>";
        header("Location: ../loged_user/create_post.php ");
        exit(0);
        }

    }
    else
    {
        $_SESSION['message'] = " <span style='color:red'>image file not allowed</span>";
        header("Location: ../loged_user/create_post.php ");
        exit(0);
    }


}

    
    // $query="INSERT INTO posts (title,body,user_id,image) VALUES ('$title','$body','$user_id','$file')";
    // $query_run = mysqli_query($con , $query);
    
    // if($query_run && !empty($body))
    // {
    
    //     $_SESSION['message'] = "<span style='color:green'>post created successfully<span>";
    //     header("Location: ../loged_user/index.php ");
    // }
    // else
    // {
    //     $_SESSION['message'] = " <span style='color:red'>fill in the body</span>";
    //     header("Location: ../loged_user/create_post.php ");
    //     exit(0);
    // }

    //for getting the post id only

    // $post_id = "SELECT * FROM posts";
    // $post_id_run = mysqli_query($con , $post_id);
    // $sql = mysqli_num_rows($post_id_run);

    // if($sql> 0)
    // {
    //    while($result = mysqli_fetch_assoc($post_id_run)){

    //     $_SESSION['post_id'] = $result['id'];
    //    }
    // }

