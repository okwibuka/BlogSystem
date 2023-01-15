 <?php

include("header.php");
?>

<div class="container mt-3">
    <div class="card">
        <div class="card card-header">
            change password
        </div>
        <div class="card-body">
            <center>
                <?php

                if(isset($_SESSION['agree']))
                {
                    echo $_SESSION["agree"];
                    unset($_SESSION['agree']);
                }

                ?>
            <form action="../functions/change_password_code.php" method="post">
            <div class="form-group mt-2">
            <label for="old password">old password</label>
            <input type="password" name="old_password" class="form-control w-50">
            </div>
            <div class="form-group mt-2">
            <label for="old password">new password</label>
            <input type="password" name="new_password" class="form-control w-50">
            </div>
            <div class="form-group mt-2">
            <label for="old password">confirm password</label>
            <input type="password" name="confirm_password" class="form-control w-50">
            </div>
            <div class="mt-2">
                <button class="btn btn-primary" name="submit">submit</button>
            </div>
            </form>
</center>
            
        </div>
    </div>
</div>