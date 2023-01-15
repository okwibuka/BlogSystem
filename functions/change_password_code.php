<?php
session_start();

require("../connection/connection.php");

$id = $_SESSION['login_id'];



if(isset($_POST['submit']))
{

    
    $old_password = $_POST["old_password"];
    $new_password = $_POST["new_password"];
    $confirm_password = $_POST["confirm_password"];

    $query = "select * from users where id = '$id'";
    $query_run = mysqli_query($con , $query);
    $query_run_result = mysqli_fetch_assoc($query_run);

    $data_password = $query_run_result['password'];

    $hashed_password = password_hash($new_password , PASSWORD_DEFAULT);

    if($query_run && mysqli_num_rows($query_run) > 0)
    {

        if(password_verify($old_password , $query_run_result['password']) && $new_password == $confirm_password)
        {

            $update_password = mysqli_query($con , "update users set password = '$hashed_password' 
                    where id = '$id' ");
        
                $_SESSION['agree'] = '<span style="color:green">password changed successfully!</span>';
                header("Location: ../loged_user/change_password.php");

        }else if( $new_password != $confirm_password)
        {
            $_SESSION['agree'] = '<span style="color:red">entered password not match!</span>';
                header("Location: ../loged_user/change_password.php");

        }else if($data_password != $old_password)
        {
         $_SESSION['agree'] = '<span style="color:red">incorrect old password
         </span>';
         header("Location: ../loged_user/change_password.php");

        }
    
     }
    else
    {
        $_SESSION['agree'] = '<span style="color:red;">no such user found</span>';
        header("Location: ../loged_user/change_password.php"); 
    }


}

?>