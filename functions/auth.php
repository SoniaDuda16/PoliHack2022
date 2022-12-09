<?php
function isLoggedIn(){
    if(isset($_SESSION['user']) && $_SESSION['user'] != null){
        return true;
    }
    return false;
}
function logOut(){
    $_SESSION['user'] = null;
    
}

?>