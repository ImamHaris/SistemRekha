<?php
   require_once("koneksi.php");

   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM users WHERE email = '$email'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Email Sudah Terdaftar! <a href='index.php'>Kembali</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='index.php'>Back</a>";
     } else {
       $data = "INSERT INTO users VALUES (NULL, '$username', '$email', '$password')";
       $simpan = $koneksi->query($data);
       if($simpan) {
        echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Proses Gagal!</div>";
       }
     }
   }
?>