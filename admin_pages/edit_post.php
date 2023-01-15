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
    <title>edit post</title>
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
    <div class="container mt-2">
    <h3>edit post</h3>
    

<form action="../admin_functions/edit_post_code.php" method="post">

<center>
    <?php
    // session_start();
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    </center>

    <?php

if(isset($_GET['id']))
{
    
    $id = $_GET['id'];
    $query = "SELECT * FROM posts WHERE id='$id'";
    $query_run = mysqli_query($con , $query);
    $sql_run = mysqli_num_rows($query_run);
    
    if($sql_run > 0)
    {

        while($sql = mysqli_fetch_array($query_run))
        {

        ?>

<div class="form-group mt-2">
    <input type="hidden" name="post_id" value="<?= $sql['id'] ; ?>">
        <label for="title">title</label>
        <input type="text" name="title" value="<?= $sql['title'] ; ?>" class="form-control">
    </div>
    <div class="form-group mt-2">
        <label for="title">body</label>
        <textarea value="<?= $sql['body'] ; ?>" name="body" class="form-control" 
         style="height:15em;"><?= $sql['body'] ; ?></textarea>
    </div>

    <div class="form-group mb-2">
<label for="category">category</label>
<select name="category" class="form-control form-control-sm" 
style="" value="<?= $sql['category'] ; ?>">
<option>sport<option>
<option>entertainments<option>
<option>politics<option>
<option>health<option>
<option>education<option>
<option>culture<option>
</select>

</div>
    
    
    <div class="mt-2">
        <input type="submit" value="update" class="btn btn-primary" name="submit">
    </div>
    </div>

<?php
    }
}
}
    else
    {
        echo "no record found";
    }

    ?>
   
</form>
</div>

</body>
</html>