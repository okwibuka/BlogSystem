
<?php

session_start();
include("../connection/connection.php");


if(! $_SESSION['auth'])
{
    header("Location: ../user_pages/posts.php");
}
$id = $_SESSION['login_id'] ;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">


 <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    
    <link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
crossorigin="anonymous">


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
    top:3.6%;

}
.drop_downs
{
background-color:grey;
display:flex;
flex-direction:column;
position:fixed;
right:1%;
top:10%;
border-radius:4px;
width:auto;
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
z-index: 1;

}
.cross
{
    background:black;
    color:white;
    border-radius:50%;
    width:20px;
    height:20px;
    margin-left:4.9em;
    cursor:pointer;
}
</style>
    
   


<body style="background:black; ">
    <nav class="navbar-light" style="border-style:outset;border:none; background:black;">

    <a style="color:grey" href="index.php" class="nav_title">olivson blog</a>
    <div class="nav_links">

  

    <ul>
    
    <li style="color:grey" class="user_name">
      <img src="../profile_images/<?php echo $_SESSION['user_profile']; ?>" 
    style="border-radius:50%; height:40px;width:40px;position:fixed;right:4%"/> 
</li>
<li>
    <ul class="drop_downs" style="z-index:1">

    <li class="cross" ><i class="bi bi-x"></i></li>

    <li> <i class="bi bi-box-seam">&nbsp;&nbsp;<a style="color:white" 
    href="dashboard.php">dashboard</a></i></li>

    <li> <i class="bi bi-lock"> &nbsp;<a style="color:white" 
    href="change_password.php?id=<?=$id; ?>">change_password
</a> </i></li>  

    <li style="color:red"> <i class="bi bi-box-arrow-right"> &nbsp;
        <a style="color:white;" href="logout.php">logout</a> </i> </li>

    </ul>

</li>
    </ul>
    
    </div>

    </nav>

    <script>
      const user_profile = document.querySelector(".user_name");
      const drop_downs = document.querySelector(".drop_downs");
      const cross = document.querySelector(".cross");
      user_profile.addEventListener("mouseenter" , function()  
      {
        drop_downs.style.display = "flex";
      }
      )

      cross.addEventListener("click" , function()  
      {
        drop_downs.style.display = "none";
      }
      )

    </script>