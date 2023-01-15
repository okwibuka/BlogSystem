


<?php
session_start();
include("../connection/connection.php");

if(! $_SESSION['auth'])
{
    header("Location: ../user_pages/posts.php");
}
?>

<html lang="en">
<head>
    <title>add user</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">



    <link rel="stylesheet" href="../css/style.css">
</head>

    <style>

.user_name
{
    cursor:pointer;
    position:fixed;
    right:2%;
}
.drop_downs
{
background-color:grey;
display:flex;
flex-direction:column;
position:fixed;
right:1%;
top:8%;
border-radius:4px;
opacity:0;
visibility:none; */
 display:none;
}
.drop_downs li
{
   text-align:center;
   border-bottom:1px solid black;
   padding:10px;
   color:white;
}

.user_name:hover > .drop_downs
{
    opacity:1;
visibility:visible;
display:flex;

}

ul li a
{
    color:grey;
}
ul li a:hover
{
    color:black;
    font-weight:bolder;
}
</style>

<body>
    
    <nav class="navbar-light bg-light">

    <a href="index.php" class="nav_title">olivson blog</a>
    <div class="nav_links">

    <ul>

    <li class="user_name"> <?php echo $_SESSION['user_name']; ?>

    <ul class="drop_downs">
        <a href="dashboard.php"><li>dashboard</li>
        <a href="../loged_user/logout.php"><li>logout</li></a>
    </ul>

</li>
    </ul>
    </div>

    </nav>

    <div class="container">
<div class="row justify-content-center">
 <div class="col-md-8">
    <div class="card mt-3" style="border-style:outset;">

    <center>
    
    <?php
    
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    </center>
        <div class="card-header">Add user</div>

        <div class="card-body justify-content-center " style="text-align:center;">

            <form action="../admin_functions/add_user_code.php" method="post"
            enctype = "multipart/form-data">

            <div class="form-group mb-3">
                    <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
                    <center>

                        <input type="text" class="form-control form-control-sm w-50"
                            name="name" required autofocus>
                        </center>
                </div>

                <div class="form-group mb-3">
        <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
        <center>
        <input type="email" class="form-control form-control-sm w-50"
            name="email" required autofocus>
        </center>
        </div>

        <div class="form-group mb-3">
        <label for="password" class="col-md-4 col-form-label text-md-end">password</label>
        <center>

    <input  type="password" class="form-control form-control-sm w-50"
        name="password" required autofocus>
    </center>
        </div>

        <div class="form-group mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">confirm password</label>
            <center>
            <input type="password" class="form-control form-control-sm w-50"
                name="confirm_password" required autofocus>
            </center>
            </div>

            <div class="form-group mb-3">
<label for="user_type" class="col-md-4 col-form-label text-md-end">user_type</label>
<center>
<select name="user_type" class="form-control form-control-sm w-50" value="<?= $row['use_type']; ?>" >
<option>admin<option>
    <option>super_admin<option>
</select>
</center>
</div>

<div class="form-group mt-2">
    <input type="file" name="file" >
    </div>

            <center>
            <div class="col-md-6 ">
                
                <button type="submit" class="btn btn-primary" name="submit">
                    submit
                </button>
                        </div>
                    </center>
                </form>
                </div>

            </div>

        </div>

    </div>
</div>
</div>
</body>
</html>