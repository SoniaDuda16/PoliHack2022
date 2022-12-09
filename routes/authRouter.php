<?php
    include $_SERVER["DOCUMENT_ROOT"]."/views//auth/partial/header.php";
    if(isset($_GET['page'])){
        if($_GET['page']=="register"){
            include $_SERVER["DOCUMENT_ROOT"]."/views/auth/register.php";
        }
        else{
            include $_SERVER["DOCUMENT_ROOT"]."/views/auth/login.php";
        }
    } else {
        include $_SERVER["DOCUMENT_ROOT"]."/views/auth/login.php";
    }
    include $_SERVER["DOCUMENT_ROOT"]."/views/auth/partial/footer.php";
?>