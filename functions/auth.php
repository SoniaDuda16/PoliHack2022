<?php
function checkUserExists($user, $dbC){
    $res = mysqli_query($dbC, "SELECT * FROM ".$dbC->db_schema.".".$dbC->db_usersTable." WHERE username = '".$user."'");
    if(mysqli_num_rows($res) > 0){
        return true;
    }
    return false;
}
function tryToLogin($user, $password, $dbC){
    if($user == null || $password == null){
        return "Invalid credentials";
    }
    $res = mysqli_query($dbC, "SELECT password FROM ".$dbC->db_schema.".".$dbC->db_usersTable." WHERE username = '".$user."'");
    if(mysqli_num_rows($res) > 0){
        $pwd = mysqli_fetch_row($res);
        if($pwd[0] == md5($password)){
            $_SESSION['user'] = $user;
            $_SESSION['level'] = 0;
            //$_SESSION['password'] = $password;
            return "";
        }

        return "Invalid password";
    }
    return "Invalid username";
}
function tryToRegister($user, $email, $fullname, $password, $repassword, $dbC){
    if($user == null || $password == null || $repassword == null || $email == null || $fullname == null){
        return "Please complete all fields";
    }
    if(checkUserExists($user, $dbC)){
        return "The username already exists";
    }
    if($password != $repassword){
        return "The passwords don't match";
    }
    mysqli_query($dbC, "INSERT INTO ".$dbC->db_schema.".".$dbC->db_usersTable."(username, email, fullname, password) VALUES ('".$user."', '".$email."','".$fullname."', '".md5($password)."')");
    return "";
}
function logout(){
    $_SESSION['user'] = null;
}
function isLoggedIn(){
    if(isset($_SESSION['user'])){
        return true;
    }
    return false;
}
?>