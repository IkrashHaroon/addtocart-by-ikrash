<?php include("header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Serial #</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                      
                        
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $serial_No = $key + 1;

                                echo "<tr>
                                            <td> $serial_No</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]<input type='hidden' class='item_price' value='$value[Price]'</td>
                                                <td>
                                                <form action='manage_cart.php' method='post'>
                                                <input class='text-center item_quantity' type='number' value='$value[Quantity]' name='prod_quanttity' onchange='this.form.submit()' min='1' max='10'>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'/>
                                                </form>
                                                </td>
                                                <td class='itotal'></td>
                                                <form action='manage_cart.php' method='post'>
                                                <td>
                                                <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'/>
                                                </td>
                                                </form>
                                                </tr>";
                            }
                        }
                        else {
                             echo "<tr><td colspan='4'><b>No items in cart</b><td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Grand Total:</h4>
                    <h5 class="text-right" id="grand_total"></h5> <br>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

                    ?>
                        <form action="purchase.php" method="post">
                            <div class="form-group">
                                <label>User Full Name</label>
                                <input type="text" name="Full_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="Address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone No:</label>
                                <input type="number" name="Phone_No" class="form-control">
                            </div>
                            <br>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="COD" value="COD" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash On Delivery </label>
                            </div>
                            <br><br><br>
                            <button name="purchase" class="btn btn-primary btn-block text-center">Make Purchase</button>
                        </form>
                    <?php } ?>
                </div>
            </div>



        </div>
    </div>
    <script>
        var grand_total = 0;
        var iprice = document.getElementsByClassName('item_price');
        var iquantity = document.getElementsByClassName('item_quantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('grand_total');

        function subTotal() {
            grand_total = 0;
            for (i = 0; i < iprice.length; i++) {
                var calc = (iprice[i].value) * (iquantity[i].value);
                itotal[i].innerText = calc;
                grand_total = grand_total + calc;
            }

            gtotal.innerText = grand_total;
        }

        subTotal();
    </script>



</body>

</html>