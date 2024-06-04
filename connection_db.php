<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "travel_db";
    $conn = mysqli_connect($host, $username, $password, $database);

    if($dio_conn->connect_error){
        echo 'Gagal koneksi ke database';
    }