

<?php
session_start();
include("../connection/connection.php");


if(isset($_POST['submit']))
{
    $email = mysqli_real_escape_string($con , $_POST["email"]);
    $password = mysqli_real_escape_string($con , $_POST["password"]);

    $query = "SELECT * FROM users where email = '$email' limit 1";
    $query_run = mysqli_query($con , $query);

    if($query_run && mysqli_num_rows($query_run) > 0)
    {
        
       while( $result  = mysqli_fetch_assoc($query_run))
       {
        if(password_verify($password , $result["password"]))
        {
            
            if($result['use_type'] === 'admin')
            {

                $_SESSION['auth'] = true;
                $_SESSION['login_id'] = $result['id'];
                $_SESSION['user_name'] = $result['name'];
                $_SESSION['user_profile'] = $result['profile'];
                header('Location: ../loged_user/index.php');

            

            }
            else if($result['use_type'] === 'super_admin')
            {
                $_SESSION['auth'] = true;
                $_SESSION['login_id'] = $result['id'];
                $_SESSION['user_name'] = $result['name'];
                header('Location: ../admin_pages/index.php');
                
            }
        }
        else
        {
    
            $_SESSION['message'] = '<span style="color:red;">wrong user_name or password</span>';
            header("Location: ../user_pages/login.php");
        }
        
}

}
        else{
            $_SESSION['message'] = '<span style="color:red;">wrong user_name or password</span>';
             header("Location: ../user_pages/login.php");
            
    }


}

?>
