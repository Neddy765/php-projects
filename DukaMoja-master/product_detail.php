<?php
require 'config.php';
require 'header.php';

$title=$price=$description=$time=$image='';

// get product id
if(isset($_GET['id'])){
	$id = $_GET['id'];
	// use id to pull data from the dateabse table
	$sql = "SELECT `id`, `supplier_id`, `title`, `price`, `description`, `image`, `time_posted` FROM `products` WHERE id='$id'";
	$product = mysqli_query($conn, $sql);
    while($row=  mysqli_fetch_assoc($product)){
    
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
            $description = $row['description'];
            $time = $row['time_posted'];
            $image= $row['image'];


        require 'product_detail_form.php';
        }
}








require 'footer.php';
?>