<?php
include("../connection/connection.php");
include("../constants/header.php");
?>



<title>posts</title>

<center>

    <?php
    session_start();
    if(isset($_SESSION['message']))
    {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    </center>
    <!-- <p style=" background:blue; margin-top:2em;"> </p> -->

    <section class="" style="display:flex;flex-direction:row;
    justify-content:space-evenly;flex-wrap:wrap; height:auto;
     padding:3em;background:black;">

    <?php



   $query = "SELECT * FROM posts  WHERE category ='culture' ORDER BY created_at DESC ";
   $query_run = mysqli_query($con , $query);
   if(mysqli_num_rows($query_run) > 0)
   {
    while ( $row = mysqli_fetch_assoc($query_run)){
    ?>

    <div class="row  text-center" >
        <div class="col-md ">
        <div class="card text-dark" style="height:100%;border:none;
        width:100% ; background:transparent;">
        <div class="card-body text-center">
   

<div class="card-title">                   
<h5 style="width:17em"> <a href="post_view.php?id=<?= $row['id'];?>"
 style="font-weight:bolder;color:white"> 
<?= $row['title']?></a></h5>
    </div>

<p style="color:grey">written on: <?= $row['created_at'] ?>
    </p>

<center>

<img class="mt-3" src="../images/<?= $row['image'] ?>" alt="post-image" 
style="border-radius:10px; width:13em;height:13em;">
    </center>
</div>
</div>
      </div>
</div>
    </div>



    <?php
   }
}
else{
    echo "<span style='color:red'>no post found</span>";
}   

?>
</section>



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