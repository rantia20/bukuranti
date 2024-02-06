<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #4caf50;
    color: white;
    text-align: center;
}

tr:nth-child(event) {
    background-color:#f2f2f2;
}

h2 {
    text-align: center;
}
button {
    display: flex;
    width: 100px ;
    height: 30px;
    justify-content: center;
    align-items: center;
}
</style>
</head>
<body>
    <div>
        <h2>Tabel Pengguna</h2>
        <table>
            <thead>
                <tr>
                    <th>nomor</th>
                    <th>Nama</th>
                    <th>TGL</th>
                    <th>Alamat</th>
                    <th>username</th>
                    <th>password</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = "SELECT*FROM tb_pengguna";
                $query = mysqli_query ($koneksi, $sql);
                $nomor=1;
        

                while ($data=mysqli_fetch_array($query)){?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?php echo $data['nama'];?></td>
                    <td><?php echo $data['tgl'];?></td>
                    <td><?php echo $data['alamat'];?></td>
                    <td><?php echo $data['username'];?></td>
                    <td><?php echo $data['password'];?></td>
                    <td>
                    <a href="hapus.php?id=<?php echo $data ['nomor'];?>"
                    onclick="return confirm( 'Yakin Mau Hapus .?')">
                        <span class="text"></span>Hapus</Details></span>
                    </a> 
                    </td>
                </tr>
                <?php  } ?>
                    </tbody>
                </table>
                <form method="post" action="index.php">
                    <button type="submit">Daftar</button>
                </form>
                </div>
                </body>
                </html>