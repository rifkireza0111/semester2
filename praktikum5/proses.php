<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $nilai = $_POST['nilai'];

    include 'Mahasiswa.php'; // File dengan definisi kelas Mahasiswa

    $mahasiswa = new Mahasiswa($nama, $umur, $nilai);
    $nilai = $mahasiswa->nilai();
    $hasilLulus = $mahasiswa->hasilLulus();
   
    // echo "Nama: $nama<br>";
    // echo "Umur: $umur<br>";
    // echo "Nilai: $nilai<br>";
    // echo "Hasil: $hasilLulus<br>";
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
 

    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Peserta</th>
      <th scope="col">Umur</th>
      <th scope="col">Nilai</th>
      <th scope="col">Hasil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">1</td>
      <td> <?=  $nama ?> </td>
      <td><?= $umur ?></td>
      <td><?= $nilai  ?></td>
      <td><?=  $hasilLulus ?></td>
    </tr>
  </tbody>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>