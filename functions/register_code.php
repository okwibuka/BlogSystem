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

    $test = "SELECT * FROM users WHERE email='$email'";
    $test_query = mysqli_query($con , $test);
    $sql = mysqli_num_rows($test_query);


    if($sql>0)
    {
        $_SESSION['message'] = '<span style="color:red">email already exist!</span>';
        header("Location: ../user_pages/register.php");

        }
        else if($password != $confirm_password)
        {
            $_SESSION['message'] = '<span style="color:red">password not match!</span>';
            header("Location: ../user_pages/register.php");
        }
        else
        {
    $query = "INSERT INTO users (name,email,password,use_type) VALUES ('$name','$email',
    '$hashed_password','$user_type')";
    $query_run = mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] = '<span style="color:green">created successfully!</span>';
        header("Location: ../user_pages/register.php");

    }

        }

}

?>
                    
 

