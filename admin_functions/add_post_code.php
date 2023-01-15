
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
    $allowed = array('jpg','jpeg','png');

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
        header("Location: ../admin_pages/index.php ");
    }
    else
    {
        $_SESSION['message'] = " <span style='color:red'>fill in the body</span>";
        header("Location: ../admin_pages/add_post.php  ");
        exit(0);
    }

            }
            else
            {
         $_SESSION['message'] = " <span style='color:red'>file is too big</span>";
        header("Location: ../admin_pages/add_post.php  ");
        exit(0);
            }

        }
        else
        {
        $_SESSION['message'] = " <span style='color:red'>error occured in uploading</span>";
        header("Location: ../admin_pages/add_post.php  ");
        exit(0);
        }

    }
    else
    {
        $_SESSION['message'] = " <span style='color:red'>image file not allowed</span>";
        header("Location: ../admin_pages/add_post.php  ");
        exit(0);
    }


}

    

