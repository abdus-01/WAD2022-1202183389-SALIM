<?php
session_start();
include 'functions.php';
$name=$_SESSION['name'];
$date=$_SESSION['date'];
$time=$_SESSION['time'];
$duration=$_SESSION['duration'];
$type=$_SESSION['type'];
$phone=$_SESSION['phone'];
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

<?php

echo  $name;
echo $date;
echo $time;
echo $duration;
echo $type;
echo $phone;



 ?>

<footer class="text-center text-lg-start bg-light text-muted">
<div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    Created by Abdessalam 1202183389

  </div>
</footer>
  </body>
  </html>
