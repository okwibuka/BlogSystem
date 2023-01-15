
<?php
session_start();
include("../connection/connection.php");

if(isset($_POST['submit']))
{
    $name = mysqli_real_escape_string($con , $_POST["name"]);
    $email = mysqli_real_escape_string($con , $_POST["email"]);
    $user_type = mysqli_real_escape_string($con , $_POST["user_type"]);
    $password = mysqli_real_escape_string($con , $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($con , $_POST["confirm_password"]);

    $hashed_password = password_hash($password , PASSWORD_DEFAULT);

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
                $fileDestination = '../profile_images/'.$fileNameNew;
                move_uploaded_file($fileTmpName , $fileDestination);


                //main codes

                $test = "SELECT * FROM users WHERE email='$email'";
                $test_query = mysqli_query($con , $test);
                $sql = mysqli_num_rows($test_query);

                if($sql>0)
                {
                    $_SESSION['message'] = '<span style="color:red">email already exist!</span>';
                    header("Location: ../admin_pages/add_user.php");
            
                    }
                    else if($password != $confirm_password)
                    {
                        $_SESSION['message'] = '<span style="color:red">password not match!</span>';
                        header("Location: ../admin_pages/add_user.php");
                    }
                    else
                    {
                $query = "INSERT INTO users (name,email,password,profile,use_type) VALUES ('$name','$email',
                '$hashed_password','$fileNameNew','$user_type')";
                $query_run = mysqli_query($con,$query);
            
                if($query_run)
                {
                    $_SESSION['message'] = '<span style="color:green">created successfully!</span>';
                    header("Location: ../admin_pages/add_user.php");
            
                }
            
                    }


            }
            else
            {
         $_SESSION['message'] = " <span style='color:red'>file is too big</span>";
        header("Location: ../admin_pages/add_user.php  ");
        exit(0);
            }

        }
        else
        {
        $_SESSION['message'] = " <span style='color:red'>error occured in uploading</span>";
        header("Location: ../admin_pages/add_user.php  ");
        exit(0);
        }

    }
    else
    {
        $_SESSION['message'] = " <span style='color:red'>image file not allowed</span>";
        header("Location: ../admin_pages/add_user.php  ");
        exit(0);
    }


}

    




   


   



?>
                    
 

