<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DAFTAR KEADAAN GURU SMK SANTANA 2 CIBATU</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img align="center" src="1.JPEG.jpg" width="50" alt="my-avatar"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dasbord.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="lihat_buku.php">Data Pengguna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="lihat_buku.php">Data Buku</a>
        </li>
       
        
      <form class="d-flex" action="index.php">
        <button class="btn btn-outline-success" type="submit">logout</button>
      </form>
    </div>
  </div>
</nav>
<form class="row g-3 contoh" action="lihat_buku.php" method="post">
  <div class="col-md-6">
  <div class="col-121">
    <label for="Nama Lengkap" class="form-label">Nama Lengkap</label>
    <input type="text" class="form-control" id="Nama Lengkap" placeholder="">
  </div>
  <div class="col-121">
    <label for="Email" class="form-label">Email</label>
    <input type="text" class="form-control" id="Email" placeholder="">
  </div>
  <div class="col-121">
    <label for="Pesan" class="form-label">Pesan</label>
    <input type="text" class="form-control" id="Pesan" placeholder="">
    </div>

  <div class="col-121">
    <button type="submit" class="btn btn-primary">kirim</button>
  </div>

</div>

</body>
</html>