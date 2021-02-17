<?php
require 'common.php';
?>
<?php
if (isset($_SESSION['email'])) {
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
        <title>Lifestyle Shopping</title>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
  
                <div id="banner_image">
                    <div class= "container">
                        <centre>
                       
                        <div id="banner_content">
                            <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands </p>
                        <?php
                        {?>
                            <a href="products.php"  class ="btn btn-danger btn-lg active">
                               Shop Now</a>
                        <?php
                        }?>
                        </div>
                        </centre>
                        
                    </div>
                    
                </div>
        <div class="container">
            <div class="row">
                 <div class="col-xs-4">
                     
                    <div class="thumbnail">
                         <a href="#">
                        <img src="img/1.jpg" alt="responsive img">
                        <div class="caption">
                            <h2>Cameras</h2>
                            
            <p>Choose among the best available in the world.</p>
                                
                        </div> </a>
                              </div>
                      </div>
                      <div class="col-xs-4">
                     
                    <div class="thumbnail">
                         <a href="#">
                              <img src="img/7.jpg" alt="responsive img">
                        <div class="caption">
                           
                              <h2> Watches</h2>
                            
            <p>Original watches from the best brands.</p>
                              </div> </a>
                              </div>
                      </div>
                           <div class="col-xs-4">
                     
                    <div class="thumbnail">
                         <a href="#">
                             <img src="img/8.jpg" alt="responsive img">
                        <div class="caption"> 
                            <h2>Shirts</h2>
                            
            <p>Our exquisite collection of shirts.</p> 
                                </div>  </a>
                              </div>
                                </div>
            </div>
        </div>
        
            
        
      <?php
      include 'footer.php';
      ?>
            
          
        
</body>
</html>