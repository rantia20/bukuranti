<?php

$no      = $_POST['no'];
$nama    = $_POST['nama'];
$email   = $_POST['email'];
$pesan   = $_POST['pesan'];

include 'koneksi.php';
$sql = "INSERT INTO tbtamu (no, nama, email, pesan) values 
      ('$no','$nama','$email','$pesan')";

$query = mysqli_query ($koneksi, $sql);
if ($query){
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Disimpan');
        window.location='lihat_buku.php';
        </script>
        <?php
}
?>