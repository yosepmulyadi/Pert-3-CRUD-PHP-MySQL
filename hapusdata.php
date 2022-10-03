<?php
include_once ("koneksi.php");
$id=$_GET['id'];
$query="delete from tb_karyawan_pln where id_karyawan=$id";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:index.php');
}else {
echo "Hapus Data Gagal";
}
?>