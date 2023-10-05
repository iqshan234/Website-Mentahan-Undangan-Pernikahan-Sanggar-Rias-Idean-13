<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<table class="table table-striped table-bordered" id="tableucapan" width="100%">
	<thead>
	  	<tr>
		  	<th>No</th>
		  	<th>Nama</th>
		  	<th>Pesan/Ucapan</th>
		  	<th>Aksi</th>
	  	</tr>
	</thead>
	<tbody>
		<?php
	   	include "../conn.php";
	   	$no=1;
	   	$query=mysqli_query($dbConn, "SELECT * FROM ucapan where hapus = '1' ORDER BY id DESC") or die(mysqli_error($dbConn));
	   	while ($result=mysqli_fetch_array($query)) {
	    ?>
	  	<tr>
		  	<td><?php echo $no++; ?></td>
		  	<td><?php echo $result['nama']; ?></td>
		  	<td><?php echo $result['pesan']; ?></td>
		  	<td>
		  		<button class="btn btn-danger btn-sm" id="HapusBtn" value="<?php echo $result['id']; ?>">Hapus</button>
		  	</td>
	  	</tr>
	  <?php } ?>
	</tbody>
</table>

<script type="text/javascript">
	$(document).ready(function () {
	    $('#tableucapan').DataTable();
	});
</script>