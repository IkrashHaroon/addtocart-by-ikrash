<?php include("header.php") ; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add To Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 200px;
            object-fit: cover;
        }

        .btn-info {
            background: linear-gradient(90deg, #e3204a, #091021);
            border: none;
            color: white;
            font-weight: bold;
            transition: background 1s;
        }

        .btn-info:hover {
            background: linear-gradient(90deg, #091021, #e3204a);
            color: white;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #252839;
        }

        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }

        .container {
            padding-top: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/8.jpg" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">Price: $200</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_1">
                            <input type="hidden" name="Price" value="200">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/1.jpg" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Price: $300</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_2">
                            <input type="hidden" name="Price" value="300">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/2.jpeg" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">Price: $600</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_3">
                            <input type="hidden" name="Price" value="600">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3 col-md-6">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/4.jpg" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Product 4</h5>
                            <p class="card-text">Price: $400</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_4">
                            <input type="hidden" name="Price" value="400">
                        </div>
                    </div>
                </form>
            </div>
            
            <!-- -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNRSfE/qF6bYQksT6OVpZ5mU9UOF6T0TYOr2iZj3iwIo6F3eDkF0qUreZNqEIlr" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG81kPQmKVSnSXbZK6AOr5KNFzRi5jpvx2z91rPqIkW0K5Hcv+TIGUHcDVS" crossorigin="anonymous"></script>
</body>

</html>
