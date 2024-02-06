<?php

$nomor    = $_POST['nomor'];
$nama     = $_POST['nama'];
$tgl      = $_POST['tgl'];
$alamat   = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];


include 'koneksi.php';
$sql = "INSERT INTO tb_pengguna (nomor, nama, tgl, alamat, username, password) values
 ('$nomor', $nama', '$tgl', '$alamat', '$username', '$password')";

$query = mysqli_query ($koneksi, $sql);
if ($query){
    ?>
    <script type="text/javascript">
        alert ('Anda Berhasil Disimpan');
        window.location='lihat_tabel.php';
</script>
<?php
}
?>

