<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel ="stylesheet" href="/css/style.css">
    

    <title>Web Hobi Makan</title>
  </head>
  <body>
 <!-- Awal navigasi bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

 <div class="container">
  <a class="navbar-brand font-weight-bold" href="<?= base_url('auth/index'); ?>">Web Hobi Makan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/admin'); ?>">admin</a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('auth/index'); ?>">Home</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/login'); ?>">Log out</a>
      </li>


    
    </ul>
  </div>
</div>
</nav>

<!-- Akhir navigation bar -->

<!-- Jumbotron -->

  <div class="container text-center text-black ">
  <img src="/images/banner.jpg" width="200px"class="rounded">
   <h1 class="display-4font-weight-bold">Web Hobi Makan</h1>
    <p class="lead">Ditujukan untuk orang orang yang hobi makan</p>
  </div>

<!-- Akhir Jumbotron -->

<div class="card mb-3 ">
  
  <div class="card-body">
    <h5 class="card-title text-center">Tentang Makanan</h5>
    <p class="card-text">Makanan adalah zat yang dimakan oleh makhluk hidup untuk mendapatkan nutrisi yang kemudian diolah menjadi energi. Karbohidrat, lemak, protein, vitamin, dan mineral merupakan nutrien dalam makanan yang dibutuhkan oleh tubuh. Cairan yang dipakai untuk maksud ini sering disebut minuman, tetapi kata 'makanan' juga bisa dipakai. Makanan yang dikonsumsi oleh manusia disebut pangan, sedangkan makanan yang dikonsumsi oleh hewan disebut pakan.

Kualitas suatu makanan dapat dinilai dari energi makanan dan umur simpan yang dimilikinya. Konsumsi makanan secara tidak tepat atau tidak cukup akan menyebabkan malnutrisi, yang dapat berujung pada berbagai gangguan kesehatan. Selain itu, beberapa jenis makanan bisa memicu timbulnya alergi makanan saat dikonsumsi oleh individu yang sensitif. Bahan makanan diolah menjadi berbagai hidangan yang berbeda-beda dan menjadi ciri khas suatu kebudayaan atau penduduk di lokasi geografis tertentu. Makanan merupakan subjek yang dipelajari dalam berbagai ilmu, seperti ilmu pangan, ilmu gizi atau nutrisi, dan gastronomi.</p>
    
  </div>
</div>

   

   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  
  </body>
</html>