<?php
require 'common.php';
?>
<?php
$name=mysqli_real_escape_string($con,$_POST['name']);
$email= mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$select_query="SELECT email FROM users WHERE email='$_email';";
$result=  mysqli_query($con, $select_query)or die(mysqli_error($con));
if(mysqli_num_rows($result)>0)
{
    echo"Email id already exists.";
}
 else {
  $insert_query="INSERT INTO store.users(name, email, password, contact, city, address) values('$name', '$email', '$password', '$contact', '$city', '$address');";
     $insert_query_submit=  mysqli_query($con, $insert_query) or die(mysqli_error($con));
 $_SESSION['email']=$email;
 $_SESSION['user_id']=mysqli_insert_id($con);
 header('location:products.php');
     
 }
