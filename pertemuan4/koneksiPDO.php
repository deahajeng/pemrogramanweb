 <?php
//try {
    //$pdo = new PDO("mysql:host;dbname=mahasiswa","root","");
    //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "koneksi ke database berhasil.";
//} catch (PDOException $e) {
    //echo "koneksi gagal" . $e->getMessage();
//}
 


$mysqli= new mysqli("localhost","root","","mahasiswa");

if ($mysqli->connect_error){
    die("koneksi gagal: " . $mysqli->connect_error);
} else {
    echo "koneksi ke database berhasil";
}