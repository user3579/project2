
<?php
session_start();
if(!isset($_SESSION["uid"])){
  header("location:index.php");
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Khan Store</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js\jquery2.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\main.js"></script>
    <style >
      table tr td {padding: 10px;}
    </style>
  </head>
  <body>

      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="#" class="navbar-brand">Khan Store</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
          </ul>
        </div>
      </div>

<p><br/></p>
<p><br/></p>
<p><br/></p>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
              <h1>Thankyou</h1>
              <hr/>
              <p>Hello <?php echo $_SESSION["name"]; ?>,Your payment process is successfully completed you and your Transaction id is xxxxx-xx-x<br/>
              you can continue your Shopping<br/></p>
              <a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
            </div>
            <div class="panel-fooer">
            </div>

          </div>
        </div>
        <div class="col-md-2">
        </div>
      </div>
    </div>

  </body>
</html>
