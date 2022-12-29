<?php
session_start();
$_SESSION['name']= $_POST['name'];
include 'functions.php';
#public function photo($id){
#  if($id==1){
#    return $src1;
#  }elseif ($id==2) {
    // code...
#    return $src2;
#  }else {
#    return $src3;
#  }
#}
 ?>

 <!DOCTYPE html><html>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">booking</a>
        </li>



      </ul>
    </div>
  </div>
</nav>
<h1 class="text-center">Welcome to EAD Rent</h1>
<h3 class="text-center">Find your best deal here!</h3>

<div class="row">

    <div class="card" style="width: 20rem;">
      <form action="form.php" method="POST">
      <img src="<?php echo $src1; ?>" class="card-img-top" alt="toyota rush">
      <div class="card-body">
        <h5 class="card-title">toyota rush</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <input type="submit" class="btn btn-primary" method="post" name="rush" value="Add to cart" action="form.php">
      </div>
    </div>
    <div class="card" style="width: 20rem;">
      <form action="form.php" method="POST">
      <img src="<?php echo $src2; ?>" class="card-img-top" alt="toyota ayla">
      <div class="card-body">
        <h5 class="card-title">toyota ayla</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <input type="submit" class="btn btn-primary"  name="ayla" value="Add to cart" >
      </div>
    </div>
    <div class="card" style="width: 20rem;">
      <form action="form.php" method="POST">
      <img src="<?php echo $src3; ?>" class="card-img-top" alt="honda brio ">
      <div class="card-body">
        <h5 class="card-title">honda brio </h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <input type="submit" class="btn btn-primary"  name="brio" value="Add to cart" >
      </div>
    </div>
</div>
<footer class="text-center text-lg-start bg-light text-muted">
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    Created by Abdessalam 1202183389

  </div>
</footer>
</body>
 </html>
