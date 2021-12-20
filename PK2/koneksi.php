<?php
      //Membuat koneksi ke database
      $kon = new mysqli("localhost",'root',"","pk2");
      if ($kon->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          
?> 