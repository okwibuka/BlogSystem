
<?php
session_start();
include("../constants/header.php");
include("../connection/connection.php");

?>

<html>
<title>posts_view</title>
<head>
    
<div class="container" style="margin-top:15px; background:black;color:white;
border-radius:15px;">

<?php 

if(isset ($_GET['id']))
{
    $id =  mysqli_real_escape_string($con, $_GET['id']);
   $query = "SELECT * FROM posts WHERE id = '$id' ";
   $query_run = mysqli_query($con , $query);
   if(mysqli_num_rows($query_run) > 0)
   {
    while ( $row = mysqli_fetch_assoc($query_run))
    {

        $_SESSION['post_id'] = $row['id'];
        $_SESSION["writter"] = $row['user_name'];

        ?>

        <div style="display:flex; flex-direction:row">

<div class="col-md-4 col-sm-4 " style="">
<img src="../images/<?= $row['image']?>" alt="post-image" style="width:100%">
</div>

<div style="margin-top:2em;">
<h4 style="font-weight:bolder;color:grey"> 
<?= $row['title']?></h4>
<p style="border-bottom:1px solid grey;">
written on: <?= $row['created_at'] ?>
<br>
By: <?php echo $_SESSION["writter"]; ?>
</p>
</div>

    </div>
<div style="color:white; 
font-family:Brushstroke; margin:10px;"> <?= $row['body']?> </div>



<?php


    }

}
else
{
    echo "no post found";
}
}
    ?>
</div>

<?php include("comments_view.php") ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">

    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>

<?php include("../constants/footer.php");
?>
</body>
</html>