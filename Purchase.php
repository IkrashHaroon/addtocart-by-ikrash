<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "add_to_cart");

if (mysqli_connect_error()) {
    echo "<script> alert('Cannot connect to the database'); window.location.href='mycart.php'; </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['purchase'])) {
        $query1 = "INSERT INTO `order_manager`(`Full_Name`, `Phone_No`, `Address`, `Pay_Mode`) VALUES (?,?,?,?)";
        $stmt1 = mysqli_prepare($conn, $query1);

        if ($stmt1) {
            // Validate and sanitize inputs
            $full_name = htmlspecialchars($_POST['Full_name'], ENT_QUOTES, 'UTF-8');
            $phone_no = htmlspecialchars($_POST['Phone_No'], ENT_QUOTES, 'UTF-8');
            $address = htmlspecialchars($_POST['Address'], ENT_QUOTES, 'UTF-8');
            $cod = htmlspecialchars($_POST['COD'], ENT_QUOTES, 'UTF-8');

            // Ensure the phone number length matches your database schema
            if (strlen($phone_no) > 15) {
                echo "<script> alert('Phone number is too long'); window.location.href='mycart.php'; </script>";
                exit();
            }

            mysqli_stmt_bind_param($stmt1, "ssss", $full_name, $phone_no, $address, $cod);
            if (mysqli_stmt_execute($stmt1)) {
                $order_id = mysqli_insert_id($conn);
                $query2 = "INSERT INTO `user_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";

                foreach ($_SESSION['cart'] as $key => $values) {
                    $item_name = htmlspecialchars($values['Item_Name'], ENT_QUOTES, 'UTF-8');
                    $price = $values['Price'];
                    $quantity = $values['Quantity'];

                    $stmt2 = mysqli_prepare($conn, $query2);

                    if ($stmt2) {
                        mysqli_stmt_bind_param($stmt2, "isii", $order_id, $item_name, $price, $quantity);
                        if (!mysqli_stmt_execute($stmt2)) {
                            echo "<script> alert('SQL Error: Could not insert order details'); window.location.href='mycart.php'; </script>";
                            exit();
                        }
                    } else {
                        echo "<script> alert('SQL Query Prepare Error'); window.location.href='mycart.php'; </script>";
                        exit();
                    }
                }

                unset($_SESSION['cart']);
                echo "<script> alert('Order Placed'); window.location.href='index.php'; </script>";
            } else {
                echo "<script> alert('SQL Error: Could not insert order'); window.location.href='mycart.php'; </script>";
            }
        } else {
            echo "<script> alert('SQL Query Prepare Error'); window.location.href='mycart.php'; </script>";
        }
    }
}
?>
