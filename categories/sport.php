<?php

if($_SESSION['auth'])
{

    require("../loged_user/header.php");
}
else
{
    require("../constants/header.php");
}

?>