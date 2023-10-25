<?php

$conn = mysqli_connect("localhost","root","admin");
$sql = "CREATE DATABASE todo";
$result = mysqli_query($conn, $sql);

$sql = "CREATE TABLE if not exists todo(
    id INT PRIMARY KEY AUTO_INCREMENT ,
    title varchar(200) NOT NULL 
)";
$result = mysqli_query($conn, $sql);
