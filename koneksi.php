<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tiumy";

    $koneksi = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");

    echo"koneksi berhasil";