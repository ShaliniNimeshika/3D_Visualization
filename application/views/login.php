<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>INOAC | Sign in</title>
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="<?php echo base_url();?>assests/styles/logstyle.css">

</head>

<body>

<div class="pen-title">
  <h1>INOAC | Fashionline</h1><span>Bring the world to the door!</a></span>
</div>

<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><a href="signup.html"><i class="fa fa-times fa-pencil"></i></a>
    <div class="tooltip">NEW USER ?</div>
  </div>

  <div class="form">
    <h2>Sign in to your account</h2>
    
    <form action="<?php echo base_url();?>index.php/Home/login_user" method="post" id="loginform">
      <?php if(! is_null($msg)) echo $msg;?>
      <br>

        <input type="email" name="username" placeholder="Email"/>
        <input type="password" name="password" placeholder="Password" minlength="5"/>
        <button type="submit" value="sign in">Login</button>
        <div class="cta"><a href="<?php echo base_url();?>index.php">Go to Home</a></div>
    </form>
  
  </div>
  
  <div class="cta"><a href="#">Forgot your password?</a></div>
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="<?php echo base_url();?>assests/js/login.js"></script>

</body>
</html>