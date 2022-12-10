<?php
    include $_SERVER['DOCUMENT_ROOT']."/functions/auth.php";
    include $_SERVER['DOCUMENT_ROOT']."/env.php";
    include $_SERVER['DOCUMENT_ROOT']."/functions/db.php";

    session_start();
    
    $dbC = new dbCredit();
    dbConnect($dbC);

    if(isset($_GET['page']) && isset($_GET['try']) && $_GET['page'] == "register" && $_GET['try'] == "reg"){
        $message = tryToRegister($_POST['username'], $_POST['email'], $_POST['fullname'], $_POST['password'], $_POST['repassword'], $dbC);
        echo $message;
    }else if(isset($_GET['page']) && $_GET['page']=="logout"){
        $_SESSION['user']=null;
    }
    if(isLoggedIn()){
        //echo "123";
        include $_SERVER['DOCUMENT_ROOT']."/routes/defaultRouter.php";
    } else {
        include $_SERVER['DOCUMENT_ROOT']."/routes/authRouter.php";
    }
?>