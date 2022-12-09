<?php
    include $_SERVER["DOCUMENT_ROOT"]."/views/default/partial/header.php";

        $request = $_SERVER['REQUEST_URI'];
        //echo $request;
        switch($request){
            case '/home':
                include $_SERVER["DOCUMENT_ROOT"]."/views/default/home.php";
                break;
            default:
                header("Location: /home");
        }

    include $_SERVER["DOCUMENT_ROOT"]."/views/default/partial/footer.php";
?>