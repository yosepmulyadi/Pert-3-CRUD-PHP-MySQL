<?php
include_once ("koneksi.php");
$query= "SELECT * FROM tb_karyawan_pln";

$hasil = mysqli_query ($koneksi, $query);

while($data=mysqli_fetch_array ($hasil)) {
	echo $data ['nama']."<br/>";
}
?>