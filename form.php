<?php
session_start();
include 'functions.php';
$src4=$_SESSION['src'];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 </head>
 <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" >home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page">booking</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<img src="<?php echo $src4;?>" class="rounded float-start" alt="...">
<form action="cart.php" method="post" target="_blank">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="your name" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Book date</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="DD/MM/YYY" name="date">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">start time</label>
  <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="--:--" name="name">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">duration(days)</label>
  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="XXX" name="duration">
</div>
<select class="form-select" aria-label="Default select example" name="type">
  <option selected>car type</option>
  <option value="1">rush</option>
  <option value="2">ayla</option>
  <option value="3">brio</option>
</select>

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">phone number</label>
  <input type="phone number" class="form-control" id="exampleFormControlInput1" placeholder="XXXXXXXX" name="phone">
</div>
<h4 class="text-left">Add services</h4>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    health protocol
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    driver
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
  <label class="form-check-label" for="flexCheckDefault">
    fuel filled
  </label>
</div>
<div class="d-grid gap-2">
  <input class="btn btn-primary" type="submit" value="Book">
</div>
<?php foreach ($_POST as $key => $value) {
 echo '<p>'.$key.'</p>';
 foreach($value as $k => $v)
 {
 echo '<p>'.$k.'</p>';
 echo '<p>'.$v.'</p>';
 echo '<hr />';
}}
$_SESSION['name']=$_POST['name'];
$_SESSION['date']=$_POST['date'];
$_SESSION['time']=$_POST['time'];
$_SESSION['duration']=$_POST['duration'];
$_SESSION['type']=$_POST['type'];
$_SESSION['phone']=$_POST['phone'];
#$_SESSION['time']=$_POST['time'];
 ?>
<footer class="text-center text-lg-start bg-light text-muted">
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    Created by Abdessalam 1202183389

  </div>
</footer>
  </body>
  </html>
