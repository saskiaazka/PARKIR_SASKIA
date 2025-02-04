<?php
include '../../config/koneksi.php';

$plat_nomor = $_POST['plat_nomor'];
$jenis = $_POST['jenis'];
$merk = $_POST['merk'];
$warna = $_POST['warna'];

$query = mysqli_query($conn, "
INSERT INTO kendaraan VALUES('$plat_nomor', '$jenis', '$merk', '$warna'");

echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";

?>
