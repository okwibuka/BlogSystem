


<center>
    <div class="container mt-5">
    <form action="../functions/create_comment_code.php" method="post"
    style="display:flex; justify-content:center; margin-left:5em;margin-bottom:5px" >
<textarea name="comment" required placeholder="enter comment...." class="form-control w-50"
style="margin-top:-2em; background:black; height:12px; color:white; border-color:grey;
border-top:none; border-left:none;border-right:none;">
</textarea>        
<br> 
<input type="submit" value="submit" name="submit" class="btn btn-light"
style="margin-left:10px; margin-top:-28px; margin-bottom:12px;">
    </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col md-12">
                <div class="card w-50" style="border:none;">
                    <div class="card-header" style="font-weight:bolder;color:white;
                    background:black;">
                     comments   
                    </div>
                    <div class="card-body" style="font-family:italic;color:white;
                    background:black;">
                        <?php

                        $post_id = $_SESSION['post_id'];
                        $query =" select * from comments where post_id='$post_id' order by created_at desc";
                        $result = mysqli_query($con , $query);
                        $resultCheck = mysqli_num_rows($result);

                        if($resultCheck > 0)
                        {

                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo $row['created_at']. "<br>";
                                echo  $row['comments'] . "<br>"; 
                                echo "<br>";
                                
                            }
                        }
                        else
                        {
                            echo "no comment found";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    </center>

