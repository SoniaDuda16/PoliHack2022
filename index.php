<?php
    include $_SERVER['DOCUMENT_ROOT']."/functions/auth.php";
    
    session_start();

    if(isLoggedIn()){
        echo "123";
        include $_SERVER['DOCUMENT_ROOT']."/routes/defaultRouter.php";
    } else {
        echo "Not logged in";
        include $_SERVER['DOCUMENT_ROOT']."/routes/authRouter.php";
    }
?>