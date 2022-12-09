<?php
    include $_SERVER['DOCUMENT_ROOT']."/functions/auth.php";
    

    if(isLoggedIn()){
        echo "123";
        include $_SERVER['DOCUMENT_ROOT']."/routes/defaultRouter.php";
    } else {
        echo "Not logged in";
        include $_SERVER['DOCUMENT_ROOT']."/routes/authRouter.php";
    }
?>