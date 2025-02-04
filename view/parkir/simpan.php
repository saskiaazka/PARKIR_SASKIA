<?php
include '../../config/koneksi.php';

$id_parkir = $_POST['id_parkir'];
$jam_masuk = $_POST['jam_masuk'];
$tarif_perjam = $_POST['tarif_perjam'];
$nama_parkir = $_POST['nama_parkir'];

$query = mysqli_query($conn, "
INSERT INTO parkir VALUES('$id_parkir', '$jam_masuk', '$tarif_perjam', '$nama_parkir')");

echo "<script>
alert('data berhasil disimpan');
window.location.href='index.php';
</script>";

?>
