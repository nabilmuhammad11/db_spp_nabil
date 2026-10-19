<?php
$koneksi = mysqli_connect("localhost","root","","db_spp_nabil");

if (mysqli_connect_error()){
    echo "Koneksi database gagal : ". mysqli_connect_error();
}

?>