<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | UCSCcloth</title>
    <link rel="shortcut icon" href="<?php echo base_url();?> assests/webgl/TemplateData/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url();?> assests/webgl/TemplateData/style.css">
    <script src="<?php echo base_url();?>assests/webgl/TemplateData/UnityProgress.js"></script>  
    <script src="<?php echo base_url();?>assests/webgl/Build/UnityLoader.js"></script>
      <div class="red_button shop_now_button" style="font-size:30px; width:300px;color:white; text-decoration:none; margin-left:945px;" ><a href="<?php echo base_url();?>3dWorld.html"> Enter to the 3D world>></a></div></center>
 
    <script>
      var gameInstance = UnityLoader.instantiate("gameContainer", "<?php echo base_url();?>assests/webgl/Build/dummy.json", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <center><div class="webgl-content">
      <div id="gameContainer" style="width: 960px; height: 600px; top:10px;"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="gameInstance.SetFullscreen(1)"></div>
        <div class="title">UCSCcloth</div>
      </div>
    </div></center>
  </body>
</html>