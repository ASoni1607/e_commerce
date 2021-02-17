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
        <title>Lifestyle Shopping Setting</title>
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
        <h3>Change Password</h3>
        <form method="POST" action="settings_script.php ">
                         <div class="form-group">
                                <input type="password" class="form-control" placeholder="oldpassword" name="oldpassword" required="true">
                                </div>
              <div class="form-group">
                                <input type="password" class="form-control" placeholder="newpassword" name="newpassword" required="true">
                                </div>
                           
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="retypenewpassword" name="retypenewpassword" required="true">
                                </div>
                           
                        
                          <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary">Change</button>
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