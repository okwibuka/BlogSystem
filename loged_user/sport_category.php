<?php
include("../connection/connection.php");
include("header.php");
?>



<title>posts</title>

<div class="container">

<center>

    <?php
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    </center>
    
   <center>
   <?php
   $query = "SELECT * FROM posts WHERE category ='sport' ORDER BY created_at DESC";
   $query_run = mysqli_query($con , $query);
   if(mysqli_num_rows($query_run) > 0)
   {
    while ( $row = mysqli_fetch_assoc($query_run)){
    ?>

<div class= "card m-2 p-2 bg-light" style="border-radius:1em;" >
<div class="card card-header col-md-8 col-sm-8 " 
style="border-radius:1em; background:whitesmoke; ">

<a href="post_view.php?id=<?= $row['id'];?>"><h5  style="font-weight:bolder;color:grey"> 
<?= $row['title']?></h5></a>
<small style="">written on: <?= $row['created_at'] ?>
</small>
</div>

<div class="col-md-4 col-sm-4 " style="margin-bottom:15px">
<img src="../images/<?= $row['image'] ?>" alt="post-image" style="width:13em;
height:13em; border-radius:10px;">
</div>
</div>
    <?php
   }
}
else{
    echo "<span style='color:red'>no post found</span>";
}   

?>

      


</center>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">

    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>

<?php
include("../constants/footer.php");
?>

</body>
</html>