<?php
require 'common.php';
?>
<?php
if (!isset($_SESSION['email'])) {
 header('location: products.php');
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
        <title>Lifestyle Shopping Cart</title>
    <style>
       
    </style>
    </head>
    <body>
        
         <?php
        include 'header.php';
        ?>
        
        <?php
        $user_id=$_SESSION['user_id'];
        $sum=0;
        $id='';
        $select_query="SELECT * FROM users_items INNER JOIN items ON users_items.item_id=items.pid WHERE users_items.user_id='$user_id' and status='Added to cart'";
        $select_query_result=  mysqli_query($con, $select_query)or die(mysqli_error($con));
        if(mysqli_num_rows($select_query_result)==0)
        {
            echo "Add items to the cart first!";
        }
 else {
  ?>
  
        <div class="content">
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <table class="table table-striped">
                     
                        <thead>
                            <tr>
                                <th class ="tstyle">
                            Item Number
                        </th>
                         <th class ="tstyle">
                            Item Name
                        </th>
                         <th class ="tstyle">
                            Price
                        </th>
                           <th class ="tstyle">
                            
                        </th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          while($row=mysqli_fetch_array($select_query_result))
                {
         $sum=$sum+$row['price'];
         $id.=$row["id"].",";
         ?>
                            <tr>
                                <td><?php $pid=$row['pid'];
                                
                                echo"$pid";
                                ?></td>
                                <td><?php $name=$row['name'];
                                        echo"$name"?></td>
                                <td><?php $price=$row['price'];
                             echo"Rs".$price;  ?></td>
                                <td> <a href='cart-remove.php?id=<?php echo $row["pid"]; ?>' class='remove_item_link'> Remove</a></td>
                            </tr>
                            <?php
  }} ?>
                            <tr>
                                <td>
                                    
                                </td>
                                <td>
                                    <strong>Total</strong>
                                </td>
                                <td><?php echo"Rs"."$sum";?></td>
                                <td id="btn-cell">
                                    
                                 
                                        <a href='success.php?itemsid=<?php echo $id ;?>' class="btn btn-primary">
                                        Confirm Order
                                    </a>
                                       
                                   
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        
        </div>
  

        <?php
          include 'footer.php';
          ?>
    </body>
</html>