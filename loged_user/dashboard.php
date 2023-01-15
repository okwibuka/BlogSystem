
<?php
include("header.php");

if(! $_SESSION['auth'])
{
    header("Location: ../user_pages/posts.php");
}

?>

<html>
    <title>dashboard</title>
    <head>

<div class="container"><center>
  <?php

  if(isset($_SESSION['message']))
  {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  }

  ?>
     <div class="card dashboard-card mt-5" style="width: 28rem;" style="text-align: center">
        <div class="card-body ">
          <h5 class="card-title mb-5"style="border-style:inset ; text-transform:uppercase;
          color:grey ">
            Dashboard</h5>
          <a href="../loged_user/create_post.php" class="btn btn-primary">create post</a>

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
            $query = "SELECT * FROM posts WHERE user_id = '$user_id' ORDER BY created_at DESC ";
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
              <form action="../functions/delete_post_code.php" method="post">
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
</div></div>

</div>
          </head>
          </html>