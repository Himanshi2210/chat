<?php

session_start();

if(isset($_SESSION['mychat_userid']))
{
    $_SESSION['mychat_userid'] = NULL;
    unset($_SESSION['mychat_userid']);

}

header("Location: login.php");
die;