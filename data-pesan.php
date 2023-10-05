<?php
$connect = new PDO("mysql:host=localhost;dbname=undangan_arifah", "root", "");

$query = "SELECT * FROM ucapan ORDER BY id DESC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

    foreach($result as $row)
    { ?>
<div class="m-3 rounded-3"style="background-color: #fffaf0; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
<div class="row w-100">
    <div class="col-2">
        <div class="box-icons text-utama">
            <i class="fa fa-user fa-lg"></i>
        </div>
    </div>
    <div class="col-10 mb-2">
        <div class="w-100 text-utama">
            <div class="pt-3 w-100"></div>
            <div class="float-end" class="fw-bold" style="font-size: 13px;"><strong><i>11 Januari - 08:00</i></strong></div>
            <div class="fw-bold border-bottom mb-1"><?php echo $row['nama']; ?></div>
            <div class="" style="font-size: 13px;">
                <?php echo $row['pesan']; ?>
            </div> 
        </div>
    </div>
</div>
</div>

<?php } ?>
