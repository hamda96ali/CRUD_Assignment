<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'product_crud');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        
        $name = $_POST['name'];
        $price = $_POST['price'];
        $qty = $_POST['qty'];
        $desc = $_POST['desc'];

        $query ="UPDATE `product` SET `name`='$name',`price`='$price',`qty`='$qty',`description`='$desc' WHERE id='$id'  "; 
        
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:index.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>
