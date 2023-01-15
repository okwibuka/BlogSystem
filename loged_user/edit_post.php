


<?php
include("header.php");
include("../connection/connection.php");

if(! $_SESSION['auth'])
{
    header("Location: ../user_pages/posts.php");
}

?>
<html>
    <title>edit_post</title>
    <head>

    <style>

        h3,label
        {
            color:white;
        }

        </style>
<div class="container">

<h3>edit post</h3>

<form action="../functions/edit_post_code.php" method="post">

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
        <input type="text" name="title" value="<?= $sql['title'] ; ?>" class="form-control"
        style="background:#37383d;color:white;">
    </div>
    <div class="form-group mt-2">
        <label for="title">body</label>
        <textarea value="<?= $sql['body'] ; ?>" name="body" class="form-control" 
         style="height:15em;background:#37383d;color:white"><?= $sql['body'] ; ?></textarea>
    </div>

    <div class="form-group mb-2">
<label for="category">category</label>
<select name="category" class="form-control form-control-sm" 
style="background:#37383d; color:white;" value="<?= $sql['category'] ; ?>">
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
</head>
</html>