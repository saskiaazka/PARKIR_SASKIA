<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "dbparkir_saskia"
);

//cek koneksi 
if(!$conn){
    die("connection is fail" . mysqli_connect_error());
}