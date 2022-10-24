<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'product_crud');

if(isset($_POST['insertdata']))
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $desc = $_POST['desc'];
    $query = "INSERT INTO `product`(`name`, `price`, `qty`, `description`) VALUES  ('$name','$price','$qty','$desc')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>

