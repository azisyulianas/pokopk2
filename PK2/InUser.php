<?php
include("koneksi.php");
//Input Data
$InUser = "SELECT * FROM user";
if(isset($_POST["DaftarUser"])) {

    // ambil data dari formulir
    $nama = $_POST["NAMA"];
    $user = $_POST["UNAMA"];
    $email = $_POST["UEMAIL"];
    $pass = md5($_POST["UEPASS"]);
    
    // buat query
    $InUser = "INSERT INTO user (NamaUser, usernama, email, password,status) VALUES ('$nama', '$user', '$email', '$pass',1)";
    $query = mysqli_query($kon, $InUser);
    if($query){
        header("Location: index.php?status=Berhasil");
     } else {
        header("Location: index.php?status=Gagal");
     };
    };
?>