<!DOCTYPE html>
<html lang="en" >

  <head>
    <meta charset="UTF-8">
    <title>INOAC | Sign Up</title>
    
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
      <link rel="stylesheet" href="<?php echo base_url();?>assests/styles/logstyle.css">

  </head>

  <body>
    <br>
    <div class="cta">
     <!--  &nbsp;&nbsp;&nbsp;<a href="<?php echo base_url();?>index.php"><img src="<?php echo base_url();?>assests/images/home-icon.png" width="60px" height="60px"></a> -->
    </div>
    <div class="pen-title">
      <h1><font color="RED">INOAC</font><font color="BLACK">  | Fashionline</font></h1><span>Bring the world to the door!</a></span>
    </div>
    <!-- Form Module-->
    <div class="module form-module">
      
      <div class="toggle"><a href="<?php echo base_url();?>index.php/Home/load_login"><i class="fa fa-times fa-pencil"></i></a>
        <div class="tooltip">MEMBER ?</div>
      </div>
      <div class="form">
        <h2>Create an account</h2>
        <form action="<?php echo base_url();?>index.php/Home/user_registration" method="POST" id="regform">

            <input type="text" name="fname" placeholder="Fisrt Name"/>
            <input type="text" name="lname" placeholder="Last Name"/>
            <input type="text" name="telephone" placeholder="Telephone No"/>
            <input type="email" name="email" placeholder="Email"/>
            <input type="password" name="password" minlength="5" placeholder="Password"/>
            <input type="password" name="repassword" minlength="5" placeholder="Re-enter password"/>

            <button type="submit" value="register">Register</button>

            <div class="cta"><a href="<?php echo base_url();?>index.php">Go to Home</a></div>
            
          </form>
        </div>
    </div>
    

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script  src="<?php echo base_url();?>assests/js/index.js"></script>

  </body>

</html>