<?php

// session is used to manage information across different pages 
session_start();
$_SESSION['username'] = "Nirav";
$_SESSION['favcat'] = "computer";
echo "We have saved your session ";

?>