<!DOCTYPE html>
<!--
 * Copyright (c) All Rights Reserved, VERGOSOFT LLC
 * Title: HypnoRem Website
 * Author: Scott Zastrow
//-->
<html>

<head>
	<title>Demo HypnoRem</title>
	<meta name="keywords" content="relaxation, sleep, rem, non-rem" />
	<meta name="description" content="HypnoRem is an app designed to aid in achieving a healthy sleep pattern." />
	<link rel="stylesheet" href="TemplateData/style.css">
	<script src="TemplateData/UnityProgress.js"></script>
<?php include("includes/head.php");?>
<body>
<a name="top"></a>
<div class="menu-wrap">
	<nav class="menu">
		<ul class="active">
			<li><a href="index.php">Main</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="support.php">Learn</a></li>
			<li class="current-item"><a href="demo.php">Demo</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul> 
		<a class="toggle-nav" href="#">&#9776;</a>
	</nav>
</div><!--menu-wrap-->
<div class="demotitle" style="font-family: hrfont, arial, verdana, helvetica; font-size: 25px; line-height: 10px;">
HypnoRem Demo
</div>
<div class="demo" class="template">
   <div class="template-wrap clear">
      <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="480px" width="320px"></canvas>
    </div>

    <script type='text/javascript'>
  var Module = {
    TOTAL_MEMORY: 31457280,
    errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
    compatibilitycheck: null,
    dataUrl: "Release/Default.data",
    codeUrl: "Release/Default.js",
    memUrl: "Release/Default.mem",
  };
</script>
<script src="Release/UnityLoader.js"></script>
</div><!--demo-->
<div class="content" style="text-align: center;">
      <div class="fullscreen"><img src="TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
Preview Theme: Thunderstorm
</div><!--content-->
<?php include("includes/footer.php");?>
</body>
</html>