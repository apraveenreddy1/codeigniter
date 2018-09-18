<!DOCTYPE html>
<html class="login" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ThemeKit</title>

  <link href="<?php echo base_url(); ?>assets/css/vendor/all.css" rel="stylesheet">

 
  <link href="<?php echo base_url(); ?>assets/css/app/app.css" rel="stylesheet">

</head>

<body>

  <div class="container-fluid">

    <div class="brand-logo">
      <img src="<?php echo base_url(); ?>assets/images/people/110/guy-5.jpg" alt="guy" />
    </div>
    <div class="row">

      <h1>Account Access</h1>
      <p><?php echo lang('login_subheading');?></p>

      <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">

            
          <div id="infoMessage"><?php echo $message;?></div>
         

            <?php echo form_open("auth/login");?>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <input type="text" class="form-control" placeholder="Username" id="identity" name="identity">
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" value="" id="password">
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-success" name="submit" value="Login">Login  <i class="fa fa-fw fa-unlock-alt"></i></button>
              </div>
            <?php echo form_close();?>

          </div>
        </div>

        <a href="forgot_password" class="forgot-pass">
            Forgot your Password?
            <i class="fa fa-question-circle"></i>
        </a>

      </div>
    </div>

  </div>

  <!-- Inline Script for colors and config objects; used by various external scripts; -->
  <script>
    var colors = {
      "danger-color": "#e74c3c",
      "success-color": "#81b53e",
      "warning-color": "#f0ad4e",
      "inverse-color": "#2c3e50",
      "info-color": "#2d7cb5",
      "default-color": "#6e7882",
      "default-light-color": "#cfd9db",
      "purple-color": "#9D8AC7",
      "mustard-color": "#d4d171",
      "lightred-color": "#e15258",
      "body-bg": "#f6f6f6"
    };
    var config = {
      theme: "admin",
      skins: {
        "default": {
          "primary-color": "#3498db"
        }
      }
    };
  </script>
  <script src="<?php echo base_url(); ?>assets/js/vendor/all.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/app/app.js"></script>

</body>

</html>







