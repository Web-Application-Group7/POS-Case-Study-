<!-- Nur Raimi Binti Rahim 2014632 -->
<?php
// session_start();
include("header.php");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Toys</title>
  <link rel = "icon" type = "image/png" href = "Images/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

</head>

<body class="antialiased">

<div class=" justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <path d=>
        </div>
        
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="">
                <div class="p-6">
    
              

    <!--title-->
    <table1 class="table">
    <h1 align="center">Add Toys</h1><br>
    <h2 align="center">Fill in the form </h2>
    </table1>

    <!--add product form-->
    <!-- <form class="productform"> -->
    <form action="ListToys.php" method="post" class="productform">
      <div>
        <label for="product name"> Product Name :</label>
        <input type="text" required><br/><br/>

        <label for="product id"> Product ID :</label>
        <input type="text" required><br/><br/>

        <label for="price"> Price :</label>
        <input type="number" required><br/><br/>

        <span><a name="description"> Description :</a></span>
        <br/><br/>
        <textarea cols="40" rows="4"></textarea> <br/><br/>


      </div>

      <div>

        <br>
        <label> Upload Product Image :</label>
        <input type="file" name="pic" accept="image/*"><br/><br/>

      </div>
      
        <br>
        <button type="submit" formaction="ListToys.php" > Submit </button>
        <button type="reset"> Reset </button>
        <br><br>
      </div>
   </form> 

                </div>
            </div>
        </div>

    </div> 

</body>
</html>

<style>


.productform div{ /*add product form*/
  border: 1.5px solid  black;
  background-color:  rgba(167, 167, 167, 0.6);
}
</style>