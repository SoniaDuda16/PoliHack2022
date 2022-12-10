<?php
    include $_SERVER['DOCUMENT_ROOT']."/functions/auth.php";
    include $_SERVER['DOCUMENT_ROOT']."/env.php";
    include $_SERVER['DOCUMENT_ROOT']."/functions/db.php";

    session_start();
    
    $dbC = new dbCredit();
    dbConnect($dbC);
    $message = "";
    if(!isLoggedIn()){
        if(isset($_GET['page']) && isset($_GET['try']) && $_GET['page'] == "register" && $_GET['try'] == "reg"){
            if(isset($_POST['username'])){
                $message = tryToRegister($_POST['username'], $_POST['email'], $_POST['fullname'], $_POST['password'], $_POST['repassword'], $dbC);
            }
        }
    }
    if(isLoggedIn()){
        //echo "123";
        include $_SERVER['DOCUMENT_ROOT']."/routes/defaultRouter.php";
    } else {
        include $_SERVER['DOCUMENT_ROOT']."/routes/authRouter.php";
    }
?>