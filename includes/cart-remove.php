<?php
require 'common.php';
?>
<?php
$user_id=$_SESSION['user_id'];
$id = $_GET['id'];
$delete_query="DELETE FROM users_items WHERE users_items.user_id='$user_id' AND users_items.item_id='$id'";
$result_delete_query=mysqli_query($con, $delete_query)or die(mysqli_error($con));
header('location:cart.php');
?>