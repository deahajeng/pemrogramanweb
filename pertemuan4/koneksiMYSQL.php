<?php
$mysqli= new mysqli("localhost","root","","mahasiswa");

if ($mysqli->connect_error){
    die("koneksi gagal: " . $mysqli->connect_error);
} else {
    echo "koneksi ke database berhasil";
}