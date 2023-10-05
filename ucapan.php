<?php
    include('conn.php');
?>
<div class="card kartu-ucapan" data-aos="zoom-in" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; ">
    <div class="card-body text-center">
        <span class="mb-2" style="color: #8B0000;"><strong>Doa Restu Anda merupakan karunia yang sangat berarti bagi kami.</strong></span>

        <form class="form-inline" id="form">
            <div class="form-group mb-2 mt-3">
                <input type="text" name="nama" id="nama" value="" class="form-control" placeholder="Masukan Nama" required="">
            </div>
            <div class="form-group mb-3">
                <textarea class="form-control" name="pesan" value="" id="pesan" rows="3" placeholder="Berikan Ucapan" required=""></textarea>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type = "button" id="addnew" class = "btn" style="background-color: #8B0000; color: white;"><i class="fa-solid fa-paper-plane"></i> Kirim Ucapan</button>
            </div>
        </form> 
        <div class="text-start mt-3">
           <div id="userTable"></div>
        </div>
    </div>
</div>
