
<?php
include("header.php");

if(! $_SESSION['auth'])
{
    header("Location: ../user_pages/posts.php");
}

?>

<html>
    <title>create_post</title>
    <head>
        <style>
            h3,label{
                color:white;
            }
            
            </style>


<center>
    <?php
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    </center>
    <div class="container" style="">

<h3>create post</h3>

    <form action="../functions/create_post_code.php" method="post"
enctype = "multipart/form-data" style="padding:15px;">
    
    <div class="form-group mt-2">
        <label for="title">title</label>
        <input type="text" name="title" class="form-control"  required 
        style="background-color: #37383d;color:white;" placeholder="enter title..">
    </div>
    <div class="form-group mt-2">
        <label for="body">body</label>
        <textarea name="body" required placeholder="enter post...." class="form-control"
        style="background:#37383d; color:white;background-color:#37383d"
        rows="10" style="height:15em"></textarea>  
    </div>

    <div class="form-group mb-2">
<label for="category">category</label>
<select name="category" class="form-control form-control-sm" 
style="background:#37383d; color:white;">
<option>sport<option>
<option>entertainments<option>
<option>politics<option>
<option>health<option>
<option>education<option>
<option>culture<option>
</select>

</div>

    <div class="form-group mt-2">
    <input type="file" name="file" style="color:white" >
    </div>
    <div class="mt-2">
        <input type="submit" value="submit" class="btn btn-primary" name="submit">
    </div>
    
</form>
</div>
</head>
</html>