<?php
include "../conn.php";

switch ($_GET['action'])
{

    case 'save':

        $Nama = $_POST['Nama'];
        $JenisKelamin = $_POST['JenisKelamin'];
        $Alamat = $_POST['Alamat'];
        $Agama = $_POST['Agama'];
        $NoHP = $_POST['NoHP'];
        $Email = $_POST['Email'];

        $query = mysqli_query($koneksi, "INSERT INTO Mahasiswa(Nama, JenisKelamin, Alamat, Agama, NoHp, Email) VALUES('$Nama', '$JenisKelamin', '$Alamat', '$Agama', '$NoHP', '$Email')");
        if ($query)
        {
            echo "Simpan Data Berhasil";
        }
        else
        {
            echo "Simpan Data Gagal :" . mysqli_error($koneksi);
        }
    break;

    case 'edit':

        $id = $_POST['id'];
        $hapus = '0';
        $waktuhapus = date('Y-m-d H:i:s');

        $query = mysqli_query($dbConn, "UPDATE ucapan SET hapus='$hapus', waktuhapus='$waktuhapus' WHERE id='$id'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($dbConn);
        }
    break;

    case 'delete':

        $IdMhsw = $_POST['IdMhsw'];
        $query = mysqli_query($koneksi, "DELETE FROM Mahasiswa WHERE IdMhsw='$IdMhsw'");
        if ($query)
        {
            echo "Hapus Data Berhasil";
        }
        else
        {
            echo "Hapus Data Gagal :" . mysqli_error($koneksi);
        }
    break;
}
?>
