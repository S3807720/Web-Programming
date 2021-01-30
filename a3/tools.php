<?php
session_start();
function top_module($pageTitle) {
  $html = <<<"OUTPUT"
  <!DOCTYPE html>
  <html lang='en'>
  <head>
  <meta charset="UTF-8">
  <meta name="description" content="This site records the letters home during WW1 from ANZAC Douglas
  Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918.">
  <meta name="keywords" content="Letters & Post Cards - ANZAC Douglas Raymond Baker">
  <meta name="author" content="Ian Stuart Baker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>$pageTitle</title>
  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <script src='../wireframe.js'></script>
  <script src='../scripts.js'></script>
  </head>

  <body>

  <header class = "banner">
  <h2>ANZAC Douglas Raymond Baker</h2> <h3> Letters Home</h3>
  </header>

  <nav>
  <!-- https://www.w3schools.com/howto/howto_js_mobile_navbar.asp -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
  <i class="fa fa-bars"></i>
  </a>
  <div id="navLinks">
  <a href="index.php" class="active">Home</a>
  <a href="postletters.html">Letters & Post Cards</a>
  <a href="action-description.html">Action Description</a>
  <a href="contact.html">Contact</a>
  </div>

  </nav>
  OUTPUT;
  echo $html;
}

?>
