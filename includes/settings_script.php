<?php
require 'common.php';
?>
<?php
if (!isset($_SESSION['email'])) {
 header('location:index.php');
}
?>
<?php



$oldpass= md5($_POST['oldpassword']);
$newpass= md5($_POST['newpassword']);
$re_type_new_pass= md5($_POST['retypenewpassword']);
       
if($newpass!=$re_type_new_pass)
{
    echo "<p>error!password not matched</p>";
}
else
{
    echo "loaded" ;
$user_id=$_SESSION['user_id'];
echo $user_id;
    $select_query="SELECT * FROM users WHERE users.id='$user_id'";
    $result=  mysqli_query($con, $select_query) or die(mysqli_error($con));
    $row=  mysqli_fetch_array($result)or die(mysqli_error($con));
    
    echo $row['password'];
    
    if($row['password']==$oldpass)
    {  
       $update_query="UPDATE users SET password='$newpass' WHERE users.id='$user_id'";
       $update_result=  mysqli_query($con, $update_query) or die(mysqli_error($con));
       echo 'password updated';
    }
    else
    {   echo "error! Wrong Password";
        header('location:settings.php');
    }
}
?>
    