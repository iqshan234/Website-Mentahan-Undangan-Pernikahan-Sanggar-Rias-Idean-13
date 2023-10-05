<?php 
include 'db.php';
date_default_timezone_set('Asia/Jakarta');
$nama = $_POST['nama'];
$pesan = $_POST['pesan'];
$tgl = date('d F Y, h:i:s A');
 
mysqli_query($koneksi, "insert into ucapan values('','$nama','$pesan','$tgl')");

?>