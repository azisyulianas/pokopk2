<?php
include("koneksi.php");
//Input Data
$Stipe="";
$inputfile = "SELECT * FROM datapokemon";
if(isset($_POST["daftar"])) {

    // ambil data dari formulir
    $namapoke = $_POST["nmpoke"];
    $Ptipe = $_POST["Ptipe"];
    $Stipe = $_POST["Stipe"];
    $hp = $_POST["HP"];
    $att = $_POST["att"];
    $def = $_POST["def"];
    $spatt = $_POST["Satt"];
    $spdef = $_POST["Sdef"];
    $spd = $_POST["spd"];
    
    // buat query
    $inputfile = "INSERT INTO datapokemon (Nama, PTipe, STipe, HP,ATT,DEF,SATT,SDEF,SPD) VALUES ('$namapoke', '$Ptipe', '$Stipe', '$hp', '$att', '$def', '$spatt', '$spdef', '$spd')";
    $query = mysqli_query($kon, $inputfile);
    if($query){
        header("Location: index.php?status=Berhasil");
     } else {
        header("Location: index.php?status=Gagal");
     }
    };
?>