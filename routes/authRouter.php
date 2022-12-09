<?php
    include $_SERVER["DOCUMENT_ROOT"]."/views//auth/partial/header.php";

        $request = $_SERVER['REQUEST_URI'];
        //echo $request;
        switch($request){
            case '/register':
                include $_SERVER["DOCUMENT_ROOT"]."/views/auth/register.php";
                break;
            case '/login': 
                include $_SERVER["DOCUMENT_ROOT"]."/views/auth/login.php";
                break;
            default:
                header("Location: /login");
        }

    include $_SERVER["DOCUMENT_ROOT"]."/views/auth/partial/footer.php";
?>