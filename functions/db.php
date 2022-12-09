<?php

function dbConnect($dbC){

        $connection = mysqli_connect("host=".$dbC->db_host." port=".$dbC->db_port." user=".$dbC->db_username." password=".$dbC->db_password);
        if($connection){
            if(mysqli_num_rows(mysqli_query($dbC, "SELECT datname FROM pg_database WHERE datname = '".$dbC->db_name."'")) == 0){
                mysqli_query($dbC, "CREATE DATABASE ".$dbC->db_name);
            }
            $connection = mysqli_connect("host=".$dbC->db_host." port=".$dbC->db_port." dbname=".$dbC->db_name." user=".$dbC->db_username." password=".$dbC->db_password);
            mysqli_query($dbC, "CREATE SCHEMA IF NOT EXISTS ".$dbC->db_schema." AUTHORIZATION CURRENT_ROLE");
            mysqli_query($dbC, "CREATE TABLE IF NOT EXISTS ".$dbC->db_schema.".".$dbC->db_usersTable."( id SERIAL primary key, username Varchar(255) not null, password Varchar(255) not null)");
            mysqli_query($dbC, "CREATE TABLE IF NOT EXISTS ".$dbC->db_schema.".".$dbC->db_postsTable."( id SERIAL primary key, owner Varchar(255) not null, title Varchar(255) not null, shortdescription Varchar(255) not null, longdescription Varchar(5000), datecreated timestamp NOT NULL DEFAULT now())");
            return true;
        }
        echo "No DB connection";
        return false;
}


?>
