<?php
require 'common.php';
?>
<?php
if (!isset($_SESSION['email'])) {
 header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="newcss.css" type="text/css">
        <title>Lifestyle Shopping Success</title>
    </head>
    <body>
       <?php 
       include 'header.php';
       ?>
        <div class="content">
        <br>
        <br>
        <br>
        <br>
        <?php 
        $user_id=$_SESSION['user_id'];

        $u_query="UPDATE users_items SET status='Confirmed' WHERE users_items.user_id='$user_id'";
$insert_query_result=mysqli_query($con, $u_query)or die(mysqli_error($con));
?>
        
        <p>Your order is confirmed. Thank you for shopping with us.
            <?php
            {
                ?>
            <a href="products.php"> Click here</a>
            <?php
            }?>
            to purchase any other item.</p>
        
    </div>
           <?php
           include 'footer.php';
           ?>
    </body>
</html>