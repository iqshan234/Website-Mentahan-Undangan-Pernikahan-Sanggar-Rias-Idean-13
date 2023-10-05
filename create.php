<?php
	include('conn.php');
	if(isset($_POST['add'])){
		date_default_timezone_set("Asia/Jakarta");
		$nama=$_POST['nama'];
		$pesan=$_POST['pesan'];
		$tgl = date('Y-m-d H:i:s');
 
		mysqli_query($dbConn,"insert into `ucapan` (nama, pesan, date_time) values ('$nama', '$pesan','$tgl')");
	}
?>