<?php
  require_once('classes/Mahasiswa.php');
  
  
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $mhs = new Mahasiswa();
    $mhs->add($_POST);
    
    
  }



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <div class="container pt-5">
    <div class="card  p-4 mx-auto shadow" style="width: 32rem;">
      <h1>Form Add Mahasiswa</h1>

      <form action="" method="post">
        <div class="mb-3">
          <label for="nim" class="form-label">NIM</label>
          <input type="text" class="form-control" name="nim" id="nim" >
        </div>

        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" >
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" >
        </div>

        <div class="mb-3">
          <div>Gender</div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="L" name="gender" id="laki">
            <label class="form-check-label" for="laki">
              laki-laki
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="P" name="gender" id="perempuan" checked>
            <label class="form-check-label" for="perempuan">
              Perempuan
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 w-100">Simpan</button>
      </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>