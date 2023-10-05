<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fahmi & Arifah</title>
    <meta name="google-site-verification" content="gJCYimENr2m7qT_2QcXvYF1YGJ9-EmKyvI9Lz3hHP-E" />
    
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="assets/bs5/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>

    <div id="overlay">
        <div class="content vh-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mt-3 text-center">
                        <div>
                            <div class="border rounded-5 mt-5 p-4" style="background-image: url(1.png); box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;" data-aos="zoom-in" >
                                <img src="https://www.kibrispdr.org/data/1775/gambar-pengantin-animasi-9.gif" width="100px" alt="at21official">
                                <div class="zoomIn wow animated"> 
                                    <h1 class="mb-3 mt-4 t-utama" style="color: #8B0000;font-family: 'Pacifico', cursive;" data-aos="zoom-in">Fahmi & Arifah</h1>
                                </div>
                                <p class="t-utama">Kepada Yth Bpk/Ibu/Saudara/i</p>
                                
                                <h2 class="t-utama mb-3" data-aos="zoom-in" data-aos-duration="1000" style="margin-top: 35px; color: #8B0000;">
                                    <strong>
                                        <?php
                                            If(isset($_GET['to'])){
                                                $to = $_GET['to'];
                                            }else{
                                                $to = "<div class='m-3 p-3'></div>";
                                            }
                                            Echo $to;
                                        ?>
                                    </strong>
                                </h2>

                                <p  class="mb-2 t-utama" style="margin-top: 35px; font-size: 15px; margin-bottom: 50px;">Tanpa mengurangi rasa hormat, <br>kami bermaksud mengundang Anda untuk menghadiri acara pernikahan kami.</p>
                                <button type="button" style="margin-top: 30px; background-color: #8B0000; color: #FFFAF0;" class="btn" onclick="myFunction()" id="btn-playback"><i class="fa-regular fa-envelope-open"></i>  Buka Undangan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-musik" onclick="toggleMusic()" id="btn-playback" data-play="true">
        <i class="fa fa-pause"></i>
    </button>

    <audio autoplay id="my_audio">
        <source src="sound.mp3" type="audio/mp3">
    </audio>

    <section id="s1" class="s1">
        <div class="container text-center content-1 p-4">
            <div class="row justify-content-center align-middle">
                <div class="col-lg-6 col-md-8 col-sm-6 rounded-5 p-3 mt-0 shadow" style="background: rgb(255, 250, 240, 0.3);">
                    
                    <h1 class="arab-web text-utama fw-bold">بسم الله الرحمن الرحيم</h1>
                    <h1 class="t-web text-utama" data-aos="flip-down" data-aos-duration="3000" data-aos-anchor-placement="center-center">WALIMATUL 'URS</h1>
                        <img data-aos="zoom-in-up" src="assets/img/border-biru1.png" width="100%">
                        <div class="t-mempelai text-utama mt-1 t-40" data-aos="zoom-in" data-aos-duration="3000" >
                                Fahmi & Arifah
                        </div>
                        <div class="m-3">
                                <img  src="https://t3.ftcdn.net/jpg/05/35/67/60/360_F_535676087_tAD3gMDlyy1c6hie68MN3G1SzZ19DJ3c.jpg" width="140" class="rounded-circle shadow" data-aos="zoom-in" data-aos-duration="3000">
                        </div>
                        <div class="t-tgl">
                                <h5 class="t-30 text-utama">04-12-2022</h5>
                        </div>
                        <img data-aos="zoom-in" alt="Pernikahan Arifah & Fahmi" src="assets/img/border-biru1.png" width="100%">
                        <p class="text-utama" data-aos="zoom-in" data-aos-duration="3000" style="font-weight: 400;"><i>“Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya di antaramu rasa kasih dan sayang”
                            (QS Ar-Rum : 21)</i></p>
                </div>
            </div>
        </div>
    </section>

    <section id="awal" class="awal mb-5">
        <div class="container text-center content-1">

            <h1 class="arab-web fw-bold text-utama" data-aos="fade-up">
                        السَّلاَمُ عَلَيْكُمْ
                        
                        وَرَحْمَةُ اللهِ وَبَرَكَاتُهُ
                    </h1>
            <h5 class="mb-5 mt-4 text-utama" data-aos="zoom-in" style="letter-spacing: 2px;line-height:30px; ">Dengan memohon rahmat dan ridho Allah Subhanahu wa ta'ala, Kami bermaksud menyelenggarakan pernikahan kami.</h5>

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card h-100 border bg-utama" data-aos="fade-right" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="card-body text-center">
                            <div class="mt-4">
                                <h4 class="text-utama m-3 in-left">Fahmi Dzikri Arrija, S.Pd.</h4>
                                <h5 class="text-utama mb-5" style="letter-spacing: 4px;line-height:25px; color: #8B0000; font-family: ">Anak Kedua dari<br> Bapak Sutisna<br> Dan Masturoh</h5>
                                <div class="medos-pasangan">
                                    <a href="https://instagram.com/alfadzikra09" class="btn-medsos" target="_blank">
                                        <i class="fa-brands fa-instagram"></i> Fahmi</a>        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 text-center text-utama" data-aos="fade-up" style="margin: 30px; font-size: 50px; font-family: 'Pacifico', cursive;">&</div>
                <div class="col-md-5">
                    <div class="card h-100 border bg-utama" data-aos="fade-right" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="card-body text-center">
                            <div class="mt-4">
                                <h4 class="text-utama m-3 in-left">Arifah Nursya'bani Khomsah,S.Pd</h4>
                                <h5 class="text-utama mb-5" style="letter-spacing: 1px;line-height:25px; color: #8B0000;">Anak Pertama dari<br> Bapak Undang Akik, S.Pd <br> Dan Ibu Ade Ida Nurparidah</h5>
                                <div class="medos-pasangan">
                                   <a href="https://instagram.com/arifah.syabani" class="btn-medsos" target="_blank"><i class="fa-brands fa-instagram"></i> Arifah</a>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="s3" class="s3">
        <div class="container text-center content-1 pb-5">
            <h5 class="judul t-kedua" data-aos="fade-down">
                Menuju Hari H
            </h5>
            <div class="container">
                <div id="countdown">
                    <div class="row justify-content-center">
                        <div class="col-2 m-2 p-2 bg-kedua rounded-3 bg-waktu">
                            <span class="waktu" id="days" data-aos="fade-up"  data-aos-duration="1000" ></span><br><span style="color: #8B0000;">Hari</span>
                        </div>
                        <div class="col-2 m-2 p-2 bg-kedua rounded-3 bg-waktu">
                            <span class="waktu" id="hours" data-aos="fade-up"  data-aos-duration="1000" ></span><br><span style="color: #8B0000;">Jam</span>
                        </div>
                        <div class="col-2 m-2 p-2 bg-kedua rounded-3 bg-waktu">
                            <span class="waktu" id="minutes" data-aos="fade-up"  data-aos-duration="1000" ></span><br><span style="color: #8B0000;">Menit</span>
                        </div>
                        <div class="col-2 m-2 p-2 bg-kedua rounded-3 bg-waktu">
                            <span class="waktu" id="seconds" data-aos="fade-up"  data-aos-duration="1000" ></span><br><span style="color: #8B0000;">Detik</span>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn mt-5" style="background-color: #FFFAF0; color: #8B0000;"  target="_blank" href="https://calendar.google.com/calendar/u/0/r/eventedit?text=Pernikahan+Fahmi+dan+Arifah&details=%3Cp%3E%3Cstrong%3EPernikahan+Fahmi+dan+Arifah%3C/strong%3E%3C/p%3E%3Cp%3E%3Cstrong%3EMinggu,+4+Desember+2022%3C/strong%3E%3Cbr+/%3E%3Cstrong%3EPukul+10.00+-+Selesai+WIB%3C/strong%3E%3Cbr+/%3E%3Cbr+/%3EBertempat+di%3Cbr+/%3EHalaman+Pondok+Pesantren+Mabdaul'Uluum%3Cbr+/%3EKel. Mulyasari, Kec. Tamansari,+Kota. Tasikmalaya,+Jawa+Barat+46196,+Indonesia%3Cbr+/%3E(+Dekat+sdn+sanggariang+)%3C/p%3E&location=https://goo.gl/maps/7cmP2thKEipvDFU36&dates=20221204T030000Z/20221204T030000Z&ctz=Asia/Jakarta"><i class="fa fa-calendar"></i> Save The Date
            </a>
        </div>
    </section>


    <section id="akad" class="akad">
        <div class="container text-center content-1 pb-5">
            <h5 class="judul t-kedua" data-aos="fade-down" style="color: #8B0000;">
                Our Special
            </h5>
            <h4 class="t-3 mt-0 mb-5">Insyaa Allah</h4>

            <div class="container">
                <div class="row justify-content-between mt-3">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            <div class="card-body">
                                <div class="m-3"></div>
                                <span class="text-icon" data-aos="fade-right"  style="background-color: #8B0000;">
                                    <i aria-hidden="true" class="fas fa-hands-helping" data-aos="zoom-in" ></i>
                                </span>
                                <div class="m-5"></div>
                                <h4 class="t-judul" data-aos="fade-right" >Akad Nikah</h4>
                                
                                <div class="row mt-3 mb-3">

                                    <div class="col-md-6 mb-3"  data-aos="fade-right">
                                        <div class="border-bottom border-3 border-utama"></div>
                                        <span style="font-size: 5em; color: #8B0000;">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </span>
                                        <div class="t-10" data-aos="fade-right" >Ahad, 4 Desember 2022</div>
                                        <div class="mt-3 border-bottom border-3 border-utama" data-aos="fade-right" ></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="border-bottom border-3 border-utama" data-aos="fade-right" ></div>
                                        <span style="font-size: 5em; color: #8B0000;">
                                            <i aria-hidden="true" class="far fa-clock" data-aos="fade-right" ></i>
                                        </span>
                                        <div class="t-10" data-aos="fade-right" >08.00 WIB - Selesai</div>
                                        <div class="mt-3 border-bottom border-3 border-utama"></div>
                                    </div>
                                </div>

                                <h3 class="t-tempat" data-aos="fade-right" >
                                    Masjid Al-Ittihad Mabdaul Ulum 
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        
                        <div class="card h-100" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            <div class="card-body">
                                <div class="card-body">
                                <div class="m-3"></div>
                                <span class="text-icon" data-aos="fade-right"  style="background-color: #8B0000;">
                                    <i aria-hidden="true" class="fas fa-hands-helping" data-aos="zoom-in" ></i>
                                </span>
                                <div class="m-5"></div>
                                <h4 class="t-judul" data-aos="fade-right" >Resepsi Pernikahan</h4>
                                
                                <div class="row mt-3 mb-3">

                                    <div class="col-md-6 mb-3"  data-aos="fade-right">
                                        <div class="border-bottom border-3 border-utama"></div>
                                        <span style="font-size: 5em; color: #8B0000;">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </span>
                                        <div class="t-10" data-aos="fade-right" >Ahad, 4 Desember 2022</div>
                                        <div class="mt-3 border-bottom border-3 border-utama" data-aos="fade-right" ></div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="border-bottom border-3 border-utama" data-aos="fade-right" ></div>
                                        <span style="font-size: 5em; color: #8B0000;">
                                            <i aria-hidden="true" class="far fa-clock" data-aos="fade-right" ></i>
                                        </span>
                                        <div class="t-10" data-aos="fade-right" >10.00 WIB - Selesai</div>
                                        <div class="mt-3 border-bottom border-3 border-utama"></div>
                                    </div>
                                </div>

                                <h3 class="t-tempat" data-aos="fade-right" >
                                    Halaman Pondok Pesantren Mabdaul 'Uluum
                                </h3>
                            </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="card border-0" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            <div class="card-body">
                                <iframe class="border border-5 rounded-3" data-aos="zoom-in" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d687.7661033948467!2d108.22573780287165!3d-7.374613605275035!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f5791eaaaaaab%3A0x79d7934ca91ad082!2sMasjid%20Al%20Ittihad!5e1!3m2!1sen!2sid!4v1668078506884!5m2!1sen!2sid"width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                
                                <a href="https://goo.gl/maps/m9pNMGqqWUEdLLpH9" target="_blank" class="btn mt-2" style="background-color: #8B0000; color: white;"><i class="fa-solid fa-location-dot"></i> Lihat Maps</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    

    <section id="s3" class="s3">
        <div class="container content-1 pb-5">
            <h5 class="judul t-kedua text-center" data-aos="fade-down">
                Konfirmasi Kehadiran
            </h5>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-11  bg-kedua rounded-3" data-aos="flip-left"  data-aos-duration="1000" >
                        <div class="p-3">
                            <form class="form-inline" id="add">
                                <div class="form-group mb-3">
                                    <label class="mb-2">Nama Lengkap:</label>
                                    <input type="text" name="namaLengkap" placeholder="Nama Lengkap" id="namaLengkap" class="form-control">
                                </div>
                                <label class="mb-2">Konfirmasi Kehadiran:</label>
                                <div class="form-check">

                                    <input class="form-check-input konfir" type="radio" name="konfir" id="konfir" value="1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Hadir
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input konfir" type="radio" name="konfir" id="konfir" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Maaf, Tidak Hadir
                                    </label>
                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <button type = "button" id="send" class = "btn" style="background-color: #8B0000; color: white;"><i class="fa-solid fa-paper-plane"></i> Kirim Ucapan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            <h5 class="judul t-kedua mt-5 text-center" data-aos="fade-down">
                Berikan Ucapan
            </h5>

            <?php require_once 'ucapan.php';?>
           
        </div>
    </section>


    <section id="s4" class="s4">
        <div class="container text-center content-1 pb-5">
            <h5 class="judul t-kedua" data-aos="fade-down" style="color: #8B0000;">
                Amplop Digital
            </h5>

            <div class="row justify-content-center mt-3">
                
                <div class="col-md-6 col-md-8 col-sm-12 mb-3">
                    <div class="card h-100" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <div class="card-body p-4">
                            <div class="m-3"></div>
                            <div class="mb-3"> 
                                <i style="font-size: 40px" class="fas fa-gift fa-xl"></i>
                            </div>
                            <div class="mb-3">Apabila memberi adalah tanda kasih Anda, Anda bisa memberikan kado secara cashless / amplop digital ke rekening mempelai</div>
                            

                            <div class="row justify-content-center mt-3">
                                <div class="col-md-6 mb-3">
                                    <div class="card border-0 bg-kedua" data-aos="fade-right" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <div class="card-body">
                                            <img src="https://i2.wp.com/febi.uinsaid.ac.id/wp-content/uploads/2020/11/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png?ssl=1" width="60px">
                                            <div class="thumbnail text-box mt-2">
                                                <div id="text-copy1">
                                                   444401018683537
                                                </div>
                                                <div>a.n Fahmi Dzikri Arrija</div>
                                                <button class="btn btn-sm btn-copy1 mt-3" style="background-color: #8B0000; color: white;">
                                                    <span class="fa fa-copy"></span> Copy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card border-0 bg-kedua" data-aos="fade-right" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <div class="card-body">
                                            <img src="https://i2.wp.com/febi.uinsaid.ac.id/wp-content/uploads/2020/11/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png?ssl=1" width="60px">
                                            <div class="thumbnail text-box mt-2">
                                                <div id="text-copy2">
                                                   446101030354532
                                                </div>
                                                <div>a.n Arifah Nursaya Bani</div>
                                                <button class="btn btn-sm btn-copy2 mt-3" style="background-color: #8B0000; color: white;">
                                                    <span class="fa fa-copy"></span> Copy
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card border-0 bg-kedua" data-aos="fade-right" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                                        <div class="card-body">
                                            <div class="thumbnail text-box">
                                                <div class="border-bottom"><strong>Kirim Hadiah</strong></div>
                                                <div id="text-copy3">
                                                   Nama Penerima : Arifah Nursya'bani Khomsah<br>
                                                   No. Hp : 085871580150 <br>Alamat Lengkap : Mulyasari RT 01/RW 01, Kelurahan Mulyasari, Kecamatan Tamansari, Kota Tasikmalaya 46191
                                                </div>
                                                <button class="btn btn-sm btn-copy3 mt-3" style="background-color: #8B0000; color: white;">
                                                    <span class="fa fa-copy"></span> Salin Alamat
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mt-3">
                    Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu. Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.
                    Wassalamu’alaikum Wr. Wb.
                    <h1 class="m-4" style="color: #fffaf0;font-family: 'Pacifico', cursive;">
                        Fahmi & Arifah
                    </h1>
                </div>
            </div>
            <div class="text-center mt-4 pb-4" style="font-size: 15px">
                Design By <a href="https://instagram.com/axzy27" target="_blank" style="text-decoration: none; color:white;">
                    <i class="fa-brands fa-instagram"></i> Ali Muksin H
                </a>
            </div>
        </div>
    </section>
</body>
</html>

<script type="text/javascript" src="https://skylightanimation.github.io/assets/plugin/jquery/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="assets/bs5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/bs5/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/timer.js"></script>
<script type="text/javascript" src="js/musik.js"></script>
<script type="text/javascript" src="js/add.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>


<script type="text/javascript">
    
function myFunction() {
      var x = document.getElementById("overlay");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
      document.getElementById("my_audio").play();
    }

    $(document).ready(function(){
        $('.btn-copy1').on("click", function(){
            var value = $('#text-copy1').text();
           
            var $tempCopy = $("<input>");
                $("body").append($tempCopy);
                $tempCopy.val(value).select();
                document.execCommand("copy");
                alert('Rekening berhasil di copi')
                $tempCopy.remove();
        })
    })

    $('.btn-copy2').on("click", function(){
            var value = $('#text-copy2').text();
           
            var $tempCopy = $("<input>");
                $("body").append($tempCopy);
                $tempCopy.val(value).select();
                document.execCommand("copy");
                alert('Rekening berhasil di copi')
                $tempCopy.remove();
        })

    $('.btn-copy3').on("click", function(){
            var value = $('#text-copy3').text();
           
            var $tempCopy = $("<input>");
                $("body").append($tempCopy);
                $tempCopy.val(value).select();
                document.execCommand("copy");
                alert('Alamat berhasil di copi')
                $tempCopy.remove();
        })
</script>


