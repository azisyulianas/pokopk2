<?php 
    include("koneksi.php");
    if (isset($_POST['LoginUser'])) {
        $usernya = $_POST['NamaLogin'];
        $password = md5($_POST['PassLogin']);
     
        $sql = "SELECT * FROM user WHERE (email='$usernya' AND password='$password') OR (usernama='$usernya' AND password='$password')";
        $result = mysqli_query($kon, $sql);
        if ($result->num_rows > 0) {
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['nama']= $row['NamaUser'];
            echo "
            <script>
                alert('Berhasil');
                window.location.href='index.php';
            </script>";
        } else {
            echo 
            "<script>
                alert('Email atau password Anda salah. Silahkan coba lagi!')
                window.location.href='index.php';
            </script>";
        }
    }
?>