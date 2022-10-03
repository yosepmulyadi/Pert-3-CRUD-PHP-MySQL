<?php
include_once("koneksi.php");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$bidang = $_POST['bidang'];
$query="INSERT INTO tb_karyawan_pln (nama, alamat, bidang) VALUE ('$nama','$alamat','$bidang')";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
header('location:index.php');
} else {
	echo $query . "<br>";
	echo "input data gagal";
}
?>