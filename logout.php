<?php
    session_start(); 
    session_destroy();
    setcookie("type4", "",time()-(86400 * 1));
    header("Location: index.html");

?>