<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cart</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text center border rounded bg-light mt-5">
                <H1>MY CART</H1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $sr=$key+1;
                            echo"
                            <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                <td><input class='text-center iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1' max='50'></td>
                                <td class='itotal'></td>
                                <td>
                                    <form action='managecart.php' method='POST'>
                                     <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                     <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                    </form>
                                </td>
                            </tr>
                            ";
                        } 
                    }
                ?>
                 </tbody>
             </table>
         </div>

         <div class="col-lg-3">
             <div class="border bg- light rounded p-4">
              <h4>Grand Total:</h4>
              <h6 class="test-right" id="gtotal"></h6>
              <br>
              <form>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    Cash On Delivery
                </label>
                </div>
                <br>
                  <button class="btn btn-primary btn-block">Make Purchase</button>
              </form>
             </div>
    
         </div>

     </div>
  </div>

  <script>

      var gt=0;
      var iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var gtotal=document.getElementById('gtotal');


      function subTotal()
      {
          gt=0;
          for(i=0;i<iprice.length;i++)
          {
              itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

              gt=gt+(iprice[i].value)*(iquantity[i].value);
          }
          gtotal.innerText=gt;
      }

      subTotal();

  </script>


</body>
</html>