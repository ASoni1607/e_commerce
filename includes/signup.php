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
        <title>Lifestyle Shopping SignUp</title>
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
                <div class="col-xs-4 col-xs-offset-4">
                    <h1><strong>SIGNUP</strong></h1>
                    <form method="POST" action="signup_script.php">
                         <div class="form-group">
                                <input type="text" class="form-control" placeholder="name" name="name" required="true">
                                </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="password" name="password" required="true" pattern=".{6,}">
                                </div>
                           
                          <div class="form-group">
                                <input type="number" class="form-control" placeholder="contact" name="contact" required="true">
                                </div>
                         <div class="form-group">
                                <input type="text" class="form-control" placeholder="city" name="city" required="true">
                                </div>
                         <div class="form-group">
                                <input type="text" class="form-control" placeholder="address" name="address" required="true">
                                </div>
                          <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
        </div>
         <?php
      include 'footer.php';
      ?>
           
    </body>
</html>
