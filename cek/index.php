<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fahmi & Arifah</title>
    <meta name="google-site-verification" content="gJCYimENr2m7qT_2QcXvYF1YGJ9-EmKyvI9Lz3hHP-E" />
    <meta name="robots" content="noindex,nofollow">
    <link rel="canonical" href="https://link-undangan.my.id/fahmi-arifah" />
    <meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="The Wedding of Fahmi &amp; Arifah - Link Undanganku" />
	
	<meta property="og:description" content="Pernikahan Fahmi dan Arifah MINGGU 04 | 12 | 2022 Kepada Yth. Bapak/Ibu/Saudara/i Di Tempat Assalamu’alaikum Wr. Wb. Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, insyaaAllah kami akan menyelenggarakan acara pernikahan : Fahmi Dzikri Arrija, S.Pd. Putra Kedua dari Bapak Sutisna &#038; Masturoh  &#038; Arifah Nursya'bani Khomsah,S.Pd Anak Pertama dari Bapak Undang Akik, S.Pd Dan Ibu Ade Ida Nurparidah &hellip;" />
	<meta property="og:url" content="httpshttps://link-undangan.my.id/fahmi-arifah/" />
	<meta property="og:site_name" content="Link Undangan by Ali Muksin" />
	<meta property="article:published_time" content="2022-11-07T07:24:07+00:00" />
	<meta property="article:modified_time" content="2022-11-15T02:27:21+21:00" />
	<meta property="og:image" content="https://link-undangan.my.id/fahmi-arifah/assets/img/fav.jpg" />
	<meta property="og:image:width" content="1024" />
	<meta property="og:image:height" content="1536" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="author" content="Ali Muksin H" />
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KQF30Y5VPQ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-KQF30Y5VPQ');
    </script>
        

    <meta name="author" content="https://instagram.com/axzy27" />
    <meta name="description" content="Pernikahan Fahmi & Arifah" />
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    
</head>
<body>

<div class="mv-5">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
	  	<div class="container-fluid">
		    <a class="navbar-brand" href="#">Link Undangan</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			        <li class="nav-item">
			          	<a class="nav-link active" aria-current="page" href="http://localhost/file/undangan/arifah/cek">Home</a>
			        </li>
			        <li class="nav-item">
			          	<a class="nav-link" href="http://sekolahhebat-mu.blogspot.com/" target="_blank">Blog / Artikel</a>
			        </li>
			        <li class="nav-item">
			          	<a class="nav-link" href="https://wa.me/081337523525?text=Assalamualaikum%20wr.wb%0APerkenalkan%2C%20saya%20%5B.............%5D%2C%20saya%20menghubungi%20anda%20melalui%20https%3A%2F%2Flink-undangan.my.id.%0Asaya%20ingin%20bertanya%20mengenai%20undangan%20online%20Web%2FInfo%20Garfis%2FCetak%2FVidio.%0ATerimakasih" target="_blank">Jasa Lainnya</a>
			        </li>
			     </ul>
			</div>
		</div>
	</nav>
</div>


<div class="mt-5 text-center pt-5">
	<h4>Selamat datang, <?php echo $_SESSION['ussr']; ?>!</h4>
	<h4>Terimakasih atas kepercayaan anda kepada kami, <br>smoga hari mu selalau menyenangkan  😇 </h4>
</div>

<div class="mt-4 container">
	
	<ul class="nav nav-pills justify-content-center" id="myTab" role="tablist">
	  	<li class="nav-item" role="presentation">
	    	<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Daftar Ucapan</button>
	  	</li>
	  	<li class="nav-item" role="presentation">
	    	<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Daftar Konfirmasi</button>
	  	</li>
	</ul>
	<div class="tab-content mt-3" id="myTabContent">
	  	<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

	  		<div id="contentData"></div>
	  		
	  	</div>
	  	<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
	  		<table class="table table-striped table-bordered" id="table2" width="100%">
	  			<thead>
	  				<tr>
	  					<th width="1px">No</th>
	  					<th>Nama</th>
	  					<th>Konfirmasi</th>
	  					<th>Aksi</th>
	  				</tr>
	  			</thead>
	  			<tbody>
	  				<?php
					   	include "../conn.php";
					   	$no=1;
					   	$query=mysqli_query($dbConn, "SELECT * FROM konfirmasi ORDER BY id DESC") or die(mysqli_error($dbConn));
					   	while ($result=mysqli_fetch_array($query)) {
					    ?>
		  				<tr>
		  					<td><?= $no++ ?></td>
		  					<td><?= $result['namaLengkap'] ?></td>
		  					<td><?php if ($result['konfir'] == 1){
		  						echo "Hadir";
		  						}else{
		  							echo "Tidak Hadir";
		  						} ?>
		  							
		  					</td>
		  					<td>Aksi</td>
		  				</tr>
		  			<?php } ?>
	  			</tbody>
	  		</table>
	  	</div>
	</div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function () {
	    $('#table2').DataTable();
	});
</script>

<script type="text/javascript">
        $(document).ready(function() {

            //load data mahasiswa saat aplikasi dijalankan 
            loadData();

            
            //Load form edit dengan parameter IdMhsw
            $("#contentData").on("click", "#HapusBtn", function() {
                var id = $(this).attr("value");
                $.ajax({
                    url: 'ucapan-edit.php',
                    type: 'get',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
            });

            //button batal
            $("#contentData").on("click", "#cancelButton", function() {
                loadData();
            });

            
            //edit data mahasiswa
            $("#contentData").on("submit", "#formEdit", function(e) {
                e.preventDefault();
                $.ajax({
                    url: 'service.php?action=edit',
                    type: 'post',
                    data: $(this).serialize(),
                    success: function(data) {
                        alert(data);
                        loadData();
                    }
                });
            });
        })

        function loadData() {
            $.ajax({
                url: 'ucapan.php',
                type: 'get',
                success: function(data) {
                    $('#contentData').html(data);
                }
            });
        }
    </script>