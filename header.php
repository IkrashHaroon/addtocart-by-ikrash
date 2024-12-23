<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    .navbar {
      background: linear-gradient(90deg, #091021, #e3204a);
      padding: 1rem;
    }

    .navbar-brand {
      font-family: 'Poppins', sans-serif;
      font-size: 1.5rem;
      color: #fff;
      font-weight: bold;
    }

    .navbar-brand:hover {
      color: #f0f0f0;
      text-decoration: none;
    }

    .nav-link {
      color: #fff;
      font-size: 1rem;
      margin-right: 1rem;
      transition: color 0.3s ease;
      font-style: bold;
    }

    .nav-link:hover {
      color:  #f0f0f0;
    }

    .btn-outline-success {
      color: #fff;
      border-color: #e3204a;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-success:hover {
      background-color: #e3204a;
      color: #fff;
    }

    .cart-badge {
      background-color: #fff;
      color: #e3204a;
      padding: 0.2rem 0.5rem;
      border-radius: 50%;
      font-size: 0.9rem;
      position: relative;
      top: -2px;
      left: -5px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">My Cart</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color: #fff;"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
          </li>
        </ul>
        <?php
        $count = 0;
        if (isset($_SESSION['cart'])) {
          $count = count($_SESSION['cart']);
        }
        ?>
        <a href="mycart.php" class="btn btn-outline-dark">
          My Cart      <span class="cart-badge ms-3"><?php echo $count; ?></span>
        </a>
      </div>
    </div>
  </nav>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNrd3D2S7c6gI8r6TgCJ2jHjOWzOBOcked9xAUnK5MWvUJ4mjIswFk3NsxKTJ0x" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhG81kGmQeWeAn+m9ABbqj1m5Gk5/jLTl/tWR3tnLoEbYRDf3KxQ5iQg05K" crossorigin="anonymous"></script>
</body>

</html>
