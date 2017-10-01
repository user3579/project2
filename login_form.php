<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Khan Store</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js\jquery2.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\main.js"></script>
  </head>
  <body>

      <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a href="#" class="navbar-brand">Khan Store</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
          </ul>
          </div>
          </div>

          <p><br/></p>
          <p><br/></p>
          <p><br/></p>

          <div class="container-fluid">
              <div class="row">
                    <div class="col-md-2">           </div>
                    <div class="col-md-8" id="signup_msg">
                      <!-- Alert from signup  form-->
                    </div>
                    <div class="col-md-2">           </div>
              </div>
              <div class="row">
                <div class="col-md-2">

                </div>
              <div class="col-md-8">
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    Customer Login Form
                  </div>
                  <div class="panel-body">


                    <form method="post">


                    <div class="row">

                    <div class="row">
                          <div class="col-md-12">
                              <label for="email">Email</label>
                              <input type="text" id="email"  name="email" class="form-control">
                          </div>
                    </div>
                    <div class="row">
                          <div class="col-md-12">
                              <label for="password">Password</label>
                              <input type="password" id="password"  name="password" class="form-control">
                          </div>
                    </div>

                    <p></br></p>
                    <div class="row">
                      <div class="col-md-12">
                        <input style="float:right;" value="Log In" type="button" id="login" name="signup-button" class="btn btn-success btn-lg">
                      </div>
                    </div>


                  </div>
                  </form>
                  <div class="panel-footer">

                  </div>
                </div>
              </div>
              <div class="col-md-2">

              </div>
            </div>
          </div>

    </body>
</html>
