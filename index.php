<?php
    include $_SERVER['DOCUMENT_ROOT']."/functions/auth.php";
    
    session_start();

    if(isset($_POST['page']) && $_POST['page']=="123"){
        $_SESSION['user']="123";
    }else if(isset($_POST['page']) && $_POST['page']=="321"){
        $_SESSION['user']=null;
    }
    if(isLoggedIn()){
        //echo "123";
        include $_SERVER['DOCUMENT_ROOT']."/routes/defaultRouter.php";
    } else {
        //echo "Not logged in";
        include $_SERVER['DOCUMENT_ROOT']."/routes/authRouter.php";
    }
?>