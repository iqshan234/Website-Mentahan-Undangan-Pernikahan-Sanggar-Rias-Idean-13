<?php
 include "../conn.php";
 $id=$_GET['id'];
 $query=mysqli_query($dbConn, "SELECT * FROM ucapan WHERE id='$id'") or die(mysqli_error($dbConn));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <table>
            <tr>
                <td>Nama Pengirim</td>
                <td>: <?php echo $result['nama']; ?></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td>
                    : <input type="hidden" name="id" id="id" required="" value="<?php echo $result['id']; ?>" />
                    <?php echo $result['pesan']; ?>
                </td>
            </tr>
            
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" id="simpan" value="Hapus Data" />
                    <button type="button" id="cancelButton">Kembali</button>
                </td>
            </tr>
        </table>
    </form>