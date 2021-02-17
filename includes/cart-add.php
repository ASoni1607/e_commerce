<?php
require 'common.php';
?>
<?php
$user_id=$_SESSION['user_id'];
$item_id = $_GET['id'];
echo $item_id;
echo 2;
echo "<br>";
$insert_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', $item_id, 'Added to cart')";
$insert_query_result=mysqli_query($con, $insert_query)or die(mysqli_error($con));
header('location:products.php');
?>
