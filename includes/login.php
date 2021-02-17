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
        <title>Lifestyle Shopping login</title>
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
        <div class="container">
            <div class="row">
            <div class="col-xs-4 col-xs-offset-4 column_style">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"><i>Login to make a purchase</i></p>
                        <form method="POST" action="login_submit.php">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="email" name="email" required="true">
                                </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="password" name="password" required="true">
                                </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                        
                    </div>
                    <div class="panel-footer">
                        <p>Don't have an account? <?php
                        {?><a href="signup.php">Register</a><?php
                         }?></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>
          <?php
      include 'footer.php';
      ?>
           
    </body>
</html>
