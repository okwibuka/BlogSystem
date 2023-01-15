<?php


include("header.php");

?>

<html>
    <title>edit user</title>
    <head>

<div class="container" style="margin-top:-24.5em;margin-right:-1.4em;">
<div class="row justify-content-center">
 <div class="col-md-8">
    <div class="card mt-3" >

    
        <div class="card-header">Edit user</div>

        <div class="card-body justify-content-center " style="text-align:center;">

        <?php

        if(isset($_GET['id']))
        {
             $id = mysqli_real_escape_string($con ,$_GET['id']);
            $query = "SELECT * FROM users WHERE id='$id'";
            $query_run = mysqli_query($con , $query);
            
            if($query_run)
            {
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>

<form action="../admin_functions/edit_user_code.php" method="post">
<input type="hidden" name="id" value="<?= $row['id']; ?>" >
<div class="form-group mb-3">
        <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
        <center>

            <input type="text" class="form-control form-control-sm w-50"
                name="name" required autofocus value="<?= $row['name']; ?>" >
            </center>
    </div>

    <div class="form-group mb-3">
<label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>
<center>
<input type="email" class="form-control form-control-sm w-50"
name="email" required autofocus value="<?= $row['email']; ?>" >
</center>
</div>

<div class="form-group mb-3">
<label for="email" class="col-md-4 col-form-label text-md-end">user_type</label>
<center>
<select name="user_type" class="form-control form-control-sm w-50" value="<?= $row['use_type']; ?>" >
<option>admin<option>
    <option>super_admin<option>
</select>
</center>
</div>

<center>
<div class="col-md-6 ">
    
    <button type="submit" class="btn btn-primary" name="submit">
        submit
    </button>
            </div>
        </center>
    </form>


<?php
                }
            }

            
        }


?>

                </div>

            </div>

        </div>

    </div>
</div>
</div>
</head>
</html>

