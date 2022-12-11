<?php

function createRequest($name, $address, $phone, $emphone, $dbC){
    if($emphone != ""){
        mysqli_query($_SESSION['connection'], "INSERT INTO ".$dbC->db_clinicsReqsTable."(name, address, phone, idreprez, hasemergency, emergency) VALUES ('".$name."', '".$address."','".$phone."','".$_SESSION['user_id']."', '1', '".$emphone."')");
    }
    else {
        mysqli_query($_SESSION['connection'], "INSERT INTO ".$dbC->db_clinicsReqsTable."(name, address, phone, idreprez, hasemergency, emergency) VALUES ('".$name."', '".$address."','".$phone."','".$_SESSION['user_id']."', '0', '-1')");
    }
    mysqli_query($_SESSION['connection'], "UPDATE ".$dbC->db_usersTable." SET hasRequest = 1 WHERE id = ".$_SESSION['user_id']);
    $_SESSION['hasRequest'] = 1;
}

function createClinic($dbC){
    $result = mysqli_query($_SESSION['connection'], "SELECT name, address, phone, idreprez, hasemergency, emergency FROM ".$dbC->db_clinicsReqsTable." WHERE id = ".$_GET['id']);
    $res = mysqli_fetch_row($result);
    $name = $res[0];
    $address = $res[1];
    $phone = $res[2];
    $idreprez = $res[3];
    $hasemergency = $res[4];
    $emergency = $res[5];

    mysqli_query($_SESSION['connection'], "DELETE FROM ".$dbC->db_clinicsReqsTable." WHERE id = ".$_GET['id']);
    mysqli_query($_SESSION['connection'], "INSERT INTO ".$dbC->db_clinicsTable."(name, address, phone, idreprez, hasemergency, emergency) VALUES ('".$name."', '".$address."','".$phone."','".$idreprez."', '".$hasemergency."', '".$emergency."')");
    
    $res33 = mysqli_query($_SESSION['connection'], "SELECT id FROM clinics WHERE idreprez = ".$idreprez);
    $res44 = mysqli_fetch_row($res33);
    mysqli_query($_SESSION['connection'], "UPDATE ".$dbC->db_usersTable." SET level = 1 WHERE id = ".$idreprez);
    mysqli_query($_SESSION['connection'], "UPDATE ".$dbC->db_usersTable." SET hospid = ".$res44[0]." WHERE id = ".$idreprez);
}

function deleteRequest($dbC){
    $result = mysqli_query($_SESSION['connection'], "SELECT idreprez FROM ".$dbC->db_clinicsReqsTable." WHERE id = ".$_GET['id']);
    $res = mysqli_fetch_row($result);

    $idreprez = $res[0];

    mysqli_query($_SESSION['connection'], "DELETE FROM ".$dbC->db_clinicsReqsTable." WHERE id = ".$_GET['id']);

    mysqli_query($_SESSION['connection'], "UPDATE ".$dbC->db_usersTable." SET hasRequest = 0 WHERE id = ".$idreprez);
}


function showRequests($dbC){
    $result = mysqli_query($_SESSION['connection'], "SELECT id,name,address,phone,idreprez FROM ".$dbC->db_clinicsReqsTable);
    $x=0;
    include_once $_SERVER['DOCUMENT_ROOT']."/models/request.php";
    while($res = mysqli_fetch_row($result)){
        showRequest($res[0],$res[1],$res[2],$res[3],$res[4], $x);
        if($x == 0){
            $x = 1;
        }
        else{
            $x = 0;
        }
    }
}

function showClinics($dbC){
    $result = mysqli_query($_SESSION['connection'], "SELECT name,address,phone,idreprez FROM ".$dbC->db_clinicsTable);

    include_once $_SERVER['DOCUMENT_ROOT']."/models/clinic.php";
    while($res = mysqli_fetch_row($result)){
        $idreprez = $res[3];
        $res2 = mysqli_query($_SESSION['connection'], "SELECT fullname FROM ".$dbC->db_usersTable." WHERE id = ".$idreprez);
        $result2 = mysqli_fetch_row($res2);
        showClinic($res[0], $res[1], $res[2], $result2[0]);
    }
}

function showClinicsEmergency($dbC){
    $result = mysqli_query($_SESSION['connection'], "SELECT name,address,phone,idreprez,hasemergency,emergency FROM ".$dbC->db_clinicsTable);

    include_once $_SERVER['DOCUMENT_ROOT']."/models/clinicEmergency.php";
    while($res = mysqli_fetch_row($result)){
        if($res[4] == 1){
            $idreprez = $res[3];
            $res2 = mysqli_query($_SESSION['connection'], "SELECT fullname FROM ".$dbC->db_usersTable." WHERE id = ".$idreprez);
            $result2 = mysqli_fetch_row($res2);
            showClinicEmergency($res[0], $res[1], $res[5], $result2[0]);
        }
    }
}
function createProgramare(){
    $res = mysqli_query($_SESSION['connection'], "SELECT hospid FROM users WHERE id = ".$_SESSION['user_id']);
    $res2 = mysqli_fetch_row($res);
    $idclinic = $res2[0];
    mysqli_query($_SESSION['connection'], "INSERT INTO programari(idclinic,data,ora,specializare,pret) VALUES('".$idclinic."', '".$_POST['data']."','".$_POST['ora']."', '".$_POST['specializare']."','".$_POST['pret']."')");
}
function showProgramari(){
    $result = mysqli_query($_SESSION['connection'], "SELECT programari.id,data,ora,name,phone,specializare,isfree FROM programari JOIN clinics ON programari.idclinic = clinics.id");
    include_once $_SERVER['DOCUMENT_ROOT']."/models/programare.php";
    while($res = mysqli_fetch_row($result)){
        if($res[6] == 1){
            showProgramare($res[0], $res[1], $res[2], $res[3], $res[4], $res[5]);
        }
    }
}
function showProgramariUser(){
    $result = mysqli_query($_SESSION['connection'], "SELECT data, ora, name, address, phone, specializare, iduser FROM programari JOIN clinics ON programari.idclinic = clinics.id");
    include_once $_SERVER['DOCUMENT_ROOT']."/models/programareUser.php";
    $i = 1;
    while($res = mysqli_fetch_row($result)){
        if($res[6] == $_SESSION['user_id']){
            showProgramareUser($i, $res[2], $res[3], $res[4], $res[0], $res[1], $res[5]);
            $i++;
        }
    }
}

function showProgramariManager(){
    $result = mysqli_query($_SESSION['connection'],"SELECT programari.data, programari.ora, users.fullname FROM programari JOIN clinics ON programari.idclinic = clinics.id JOIN users ON programari.iduser = users.id WHERE clinics.idreprez = ".$_SESSION['user_id']);
    include_once $_SERVER['DOCUMENT_ROOT']."/models/programareManager.php";
    $i = 1;
    while($res = mysqli_fetch_row($result)){
        showProgramareManager($i, $res[0], $res[1], $res[2]);
        $i++;
    }
}

function takeProgramare(){
    mysqli_query($_SESSION['connection'], "UPDATE programari SET isfree=0 WHERE id=".$_GET['take']);
    mysqli_query($_SESSION['connection'], "UPDATE programari SET iduser='".$_SESSION['user_id']."' WHERE id=".$_GET['take']);
}

?>