<?php

$username = $_POST['username'];
$password = $_POST['password'];


include 'koneksi1.php';
$sql = "SELECT * FROM tbl_login WHERE username='$username' AND password='$password'";
$query = mysqli_query($koneksi, $sql);

if (mysqli_fetch_array($query)){
    header("location:dasbord.php");
}else{
    echo"<script>alert('maaf anda gagal login');
    window.location.assign('login.php');</script>";
}
