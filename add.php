<?php
	include('conn.php');
	if(isset($_POST['add'])){
		date_default_timezone_set("Asia/Jakarta");
		$namaLengkap=$_POST['namaLengkap'];
		$konfir=$_POST['konfir'];
		$tgl = date('Y-m-d H:i:s');
 
		mysqli_query($dbConn,"insert into `konfirmasi` (namaLengkap, konfir, cretaed_at) values ('$namaLengkap', '$konfir','$tgl')");
	}
?>