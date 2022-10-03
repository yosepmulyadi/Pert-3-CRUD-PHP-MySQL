<?php
$host="localhost";
$user="root";
$password="";
$database="db_karyawan_pln";

$koneksi=mysqli_connect($host,$user,$password);
mysqli_select_db($koneksi,$database);

//cek koneksi
if($koneksi){
"Berhasil Terhubung";
}else{
echo "Gagal Terhubung";
}
?>