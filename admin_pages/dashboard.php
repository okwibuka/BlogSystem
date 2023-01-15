




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
  <title>admin dashboard</title>
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
      
    <center>
  <?php

  if(isset($_SESSION['message']))
  {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }

  ?>
     <div class="card dashboard-card mt-5" style="width: 28rem;" style="text-align: center">
        <div class="card-body ">
          <h5 class="card-title mb-5" style="border-style: inset ; text-transform:uppercase ">
            Dashboard</h5>
          <a href="add_post.php" class="btn btn-primary">create post</a>

        <b> <i> <h3 class="m-3 "> 
            your blog posts: 
           </h3> </i></b>

           <table class="table table-striped">
            <tr>
              <th colspan="4">
                Title

              </th>
            
            </tr> 

            <?php 

            $user_id = $_SESSION['login_id'];
            $query = "SELECT * FROM posts WHERE user_id = '$user_id' ";
            $query_run = mysqli_query($con , $query);
            $sql = mysqli_num_rows($query_run);
            if($sql > 0)
            {
             while($result = mysqli_fetch_assoc($query_run))
             {
              ?>
                  <tr>
              <td class="p-2"> <?= $result["title"]; ?></td>
              <td><a href="edit_post.php?id=<?= $result['id'];?>" class="btn btn-primary mt-3">Edit</a></td>
              <form action="../admin_functions/delete_post_code2.php" method="post">
              <td><button value="<?= $result['id'];?>" class="btn btn-danger mt-3"
              name="delete_post">Delete</button></td>
              </form>
            </tr>
              
              <?php
            }
          }
            else
            {
              echo "no post found";
            }
            ?>
            
        
</table>
</center>
</div>
</div>

</div>
          </body>
          </html>