<?php


include("../constants/header.php");

?>

<html>
    <title>Register</title>
    <head>

    <style>
            label{
                color:white;
            }
            </style>

<div class="container">
<div class="row justify-content-center">
 <div class="col-md-8">
    <div class="card mt-3" style="background-color: #37383d;">

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
        <div class="card-header" style="color:white;">Register</div>

        <div class="card-body justify-content-center " style="text-align:center;">

            <form action="../functions/register_code.php" method="post">

            <div class="form-group mb-3">
                    <!-- <label for="name" class="col-md-4 col-form-label text-md-end">Name</label> -->
                    <center>

                        <input type="text" class="form-control form-control-sm w-50"
                        name="name" required autofocus style="background:black; color:white"
                        placeholder="enter name.....">
                        </center>
                </div>

                <div class="form-group mb-3">
        <!-- <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label> -->
        <center>
        <input type="email" class="form-control form-control-sm w-50"
            name="email" required autofocus style="background:black; color:white"
            placeholder="enter email.....">
        </center>
        </div>

        <div class="form-group mb-3">
        <!-- <label for="password" class="col-md-4 col-form-label text-md-end">password</label> -->
        <center>

    <input  type="password" class="form-control form-control-sm w-50"
        name="password" required autofocus style="background:black; color:white"
        placeholder="enter password.....">
    </center>
        </div>

        <div class="form-group mb-3">
            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">confirm password</label> -->
            <center>
            <input type="password" class="form-control form-control-sm w-50"
            name="confirm_password" required autofocus style="background:black; color:white"
            placeholder="confirm password.....">
            </center>
            </div>

            <input type="hidden" name="user_type" value="admin">

            <center>
            <div class="col-md-6 ">
                
                <button type="submit" class="btn btn-primary" name="submit">
                    submit
                </button>
                        </div>
                    </center>
                </form>
                </div>

            </div>

        </div>

    </div>
</div>
</div>
</head>
</html>

