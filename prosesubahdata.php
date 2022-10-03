<?php
include_once("koneksi.php");
$id_karyawan= $_POST['id'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$bidang= $_POST['bidang'];
$query="UPDATE tb_karyawan_pln SET
nama='$nama',alamat='$alamat',bidang='$bidang' WHERE id_karyawan=$id_karyawan";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
	//echo $query;
header('location:index.php');
} else {
echo "Update data gagal";
}
?>