<?php

// syntax to set a cookie 
// first argument is name , second argument is value third argument is for expire(in second), and forth argument is for domain 

setcookie("category", "Books", time() + 86400, "/");

// to see the cookie is set or not then go to inspect -> networks

//cookie is used to store non sensitive information 
?>