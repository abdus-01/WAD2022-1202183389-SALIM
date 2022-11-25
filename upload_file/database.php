<?php
 $host="localhost";
 $user="root";
 $password="";
 $db="upload_file";
 $conn = mysqli_connect($host,$user,$password,$db);
 if (!$conn){
       die("Koneksi gagal:".mysqli_connect_error()); 
 }
 else {
    echo"successfully connected";}




?>