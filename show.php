<div class="p-3" style="height:500px; width:100%;border:1px solid #ccc; overflow:auto;">
<?php
function tgl_indo($tgl)
{
    $tanggal = substr($tgl, 8, 2);
    $bulan = substr($tgl, 5, 2);
    $tahun = substr($tgl, 0, 4);
    $time = substr($tgl, 11, 5);
    return $tanggal . ' ' . bulan($bulan) . ' ' . $tahun . ' ' . $time;
}

function bulan($bln)
{
    switch ($bln) {
      case 1:
      return "Jan";
      break;
      case 2:
      return "Feb";
      break;
      case 3:
      return "Mar";
      break;
      case 4:
      return "Apr";
      break;
      case 5:
      return "Mei";
      break;
      case 6:
      return "Jun";
      break;
      case 7:
      return "Jul";
      break;
      case 8:
      return "Agt";
      break;
      case 9:
      return "Sep";
      break;
      case 10:
      return "Okt";
      break;
      case 11:
      return "Nov";
      break;
      case 12:
      return "Des";
      break;
    }
}
?>
<?php include('conn.php'); if(isset($_POST['show'])){ ?>
    <?php $quser=mysqli_query($dbConn,"select * from `ucapan` where hapus = '1' ORDER BY id DESC"); while($urow=mysqli_fetch_array($quser)){ ?>

<div class="card mb-3 border-0" style="background-color: #fffaf0; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
    <div class="card-body t-utama">
        <div class="float-end text-utama" class="fw-bold" style="font-size: 13px;"><strong><i class="fa-solid fa-clock"></i> <i> <?php echo tgl_indo($urow['date_time']); ?></i></strong></div>
        <div class="text-utama mt-0">
            <i class="fa fa-user fa-lg"></i> <strong><?php echo $urow['nama']; ?></strong>
            <hr>
            <div class="text-utama" style="font-size: 13px;">
                <?php echo $urow['pesan']; ?>
            </div> 
        </div>
    </div>
</div>
<?php } } ?>
</div>