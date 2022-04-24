<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>



<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="ListToys.php">Toys List</a>
  </li>


  <?php 
    if(isset($_SESSION['cart']))
    {
      $count=count($_SESSION['cart']);
    }

  ?>
  <li class="nav-item">
    <a class="nav-link" href="mycart.php">My Cart </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="addToys.php">Add New Toy </a>
  </li>
</ul>
</body>
</html>