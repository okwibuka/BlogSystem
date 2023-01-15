


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
    <title>add post</title>
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
    

<div class="container"style="">

<h3>create post</h3>

<form action="../admin_functions/add_post_code.php" method="post"
enctype = "multipart/form-data">

<center>
    <?php
    
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    </center>
    <div class="form-group mt-2">
        <label for="title">title</label>
        <input type="text" name="title" class="form-control"  required >
    </div>
    <div class="form-group mt-2">
        <label for="title">body</label>
        <textarea name="body" required placeholder="enter your post" class="form-control "
        rows="10" style="height:15em">
        </textarea>  
    </div>

    <div class="form-group mt-2">
<label for="category">category</label>
<select name="category" class="form-control form-control-sm" 
style="">
<option>sport<option>
<option>entertainments<option>
<option>politics<option>
<option>health<option>
<option>education<option>
<option>culture<option>
</select>

</div>

    <div class="form-group mt-2">
    <input type="file" name="file" >
    </div>
    <div class="mt-2">
        <input type="submit" value="submit" class="btn btn-primary" name="submit">
    </div>
    </div>
</form>


</div>
</body>
</html>
