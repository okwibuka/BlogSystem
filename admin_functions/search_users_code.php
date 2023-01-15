



<?php
session_start();
include("../connection/connection.php");

if(! $_SESSION['auth'])
{
    header("Location: ../user_pages/login.php");
}
?>


<html lang="en">
<head>
    <title>search user</title>
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

    <a href="../admin_pages/index.php" class="nav_title">olivson blog</a>
    <div class="nav_links">

    <ul>

    <li class="user_name"> <?php echo $_SESSION['user_name']; ?>

    <ul class="drop_downs">
        <a href="../admin_pages/dashboard.php"><li>dashboard</li>
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

<div class="search_button mt-4" style="position:relative; left:40%; bottom:7px;">
    <form action="" method="post" style="position:absolute;">

    <input type="text" name="search" placeholder="search" class="form-control">
    <button type="submit" name="submit" class="btn btn-primary" style="
    position:absolute;left:113%;bottom:7%">search</button>
    </form>
    </div>


<div class="container"style="display:flex; flex-direction:row;">


    <div class="card" style="margin-top:2em; margin-left:-4em;">
        <div class="card card-body bg-light" style="">
            <div class="links">
                <ul style="display:flex; flex-direction:column; line-height:4">
                    <li><a href="../admin_pages/index.php">manage posts</a></li>
                    <li><a href="../admin_pages/add_post.php">add post</a></li>
                    <li><a href="../admin_pages/manage_users.php">manage users</a></li>
                    <li><a href="../admin_pages/add_user.php">add user</a></li>
                    <li><a href="../admin_pages/manage_comments.php">manage comment</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<div class="container">
<table class="table" style="width:57rem; float:right; margin-top:-22em" >
  <thead style="" class="bg-light">
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col"> user_type</th>
      <th scope="col"> Action</th>
    </tr>
  </thead>
  <tbody>

  <?php

  if(isset($_POST["submit"]))
  {
    $search = mysqli_real_escape_string($con , $_POST['search']);
    $sql = "SELECT * FROM  users WHERE id LIKE '%$search%' OR name LIKE
    '%$search%' OR email LIKE '%$search%' OR use_type LIKE '%$search%' ";
    $sql_run = mysqli_query($con , $sql);
    $result = mysqli_num_rows($sql_run);
    if($result > 0)
    {
      while($row = mysqli_fetch_assoc($sql_run))
      {

        ?>
        <tr>
        <th scope="row"><?= $row['id']; ?> </th>
      <td><?= $row['name']; ?></td>
      <td><?= $row['email']; ?></td>
      <td><?= $row['use_type']; ?></td>
      <td>
      <a href=""class="btn btn-info">view</a>
        <a href="../admin_pages/edit_user.php?id=<?= $row['id']; ?>"class="btn btn-success ">Edit</a>
        <form action="delete_comment_code.php" method="post" class="d-inline">
            <button value="<?= $row['id']; ?>" name="delete_post" 
            class="btn btn-danger">delete</button>
        </form>
      </td>
      
        </tr>

        <?php
      }
      
    }
    
  }
  
  // echo " no such record found";
  // $_SESSION['message'] = "<span style='color:red'>no record found! </span>";
  // die;
  ?>
</tbody>
</table>
</div>
</body>
</html>

          