

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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">
<body>


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

    <center>
    <?php
    if(isset($_SESSION['message']))
    {
       echo $_SESSION['message'];
       unset($_SESSION['message']);
    }

    ?>
    
</center>

<!-- <div class="search_button mt-4" style="position:relative; left:40%; bottom:7px;">
    <form action="../admin_functions/search_code.php" method="post" style="position:absolute;">

    <input type="text" name="search" placeholder="search" class="form-control">
    <button type="submit" name="submit" class="btn btn-primary" style="
    position:absolute;left:113%;bottom:7%">search</button>
    </form>
    </div> -->


<div class="container"style="display:flex; flex-direction:row;">


    <div class="card" style="margin-top:2em; margin-left:-4em;">
        <div class="card card-body bg-light" style="">
            <div class="links">
                <ul style="display:flex; flex-direction:column; line-height:4">
                    <li><a href="index.php">manage posts</a></li>
                    <li><a href="add_post.php">add post</a></li>
                    <li><a href="manage_users.php">manage users</a></li>
                    <li><a href="add_user.php">add user</a></li>
                    <li><a href="manage_comments.php">manage comment</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>
