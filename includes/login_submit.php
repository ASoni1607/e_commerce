<?php
require 'common.php';
?>
<?php
$Email= mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,md5($_POST['password']));
$select_query="SELECT id, email FROM users WHERE email='$Email' AND password='$password'";
$result=mysqli_query($con, $select_query)or die(mysqli_error($con));

if(mysqli_num_rows($result)==0)
{
    echo"incorrect User name or Password";
}
 else {
 $row=mysqli_fetch_array($result);
 $_SESSION['email']=$Email;
 $_SESSION['user_id']=  $row['id'];
 header('location:products.php');
}
?>
