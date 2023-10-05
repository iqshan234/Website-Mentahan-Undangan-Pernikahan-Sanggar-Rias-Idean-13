<!DOCTYPE html>
<html>
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
    <style type="text/css">
    	body{
			font-family: sans-serif;
			background: #ebf9fb;
		}
		 
		h1{
			text-align: center;
			/*ketebalan font*/
			font-weight: 300;
		}
		 
		.tulisan_login{
			text-align: center;
			/*membuat semua huruf menjadi kapital*/
			text-transform: uppercase;
		}
		 
		.kotak_login{
			width: 350px;
			background: white;
			/*meletakkan form ke tengah*/
			margin: 80px auto;
			padding: 30px 20px;
			box-shadow: 0px 0px 100px 4px #d6d6d6;
		}
		 
		label{
			font-size: 11pt;
		}
		 
		.form_login{
			/*membuat lebar form penuh*/
			box-sizing : border-box;
			width: 100%;
			padding: 10px;
			font-size: 11pt;
			margin-bottom: 20px;
		}
		 
		.tombol_login{
			background: #2aa7e2;
			color: white;
			font-size: 11pt;
			width: 100%;
			border: none;
			border-radius: 3px;
			padding: 10px 20px;
		}
		 
		.link{
			color: #232323;
			text-decoration: none;
			font-size: 10pt;
		}
		 
		.alert{
			background: #e44e4e;
			color: white;
			padding: 10px;
			text-align: center;
			border:1px solid #b32929;
		}
    </style>
</head>
<body>
 
	<h1>Silahkan login untuk melihat siapa saja<br> yang akan hadir dan mengatur ucapan<br></h1>
 
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Login Page</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.malasngoding.com">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>