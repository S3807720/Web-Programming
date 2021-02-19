<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="This site records the letters home during WW1 from ANZAC Douglas
  Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918.">
  <meta name="keywords" content="Letters & Post Cards - ANZAC Douglas Raymond Baker">
  <meta name="author" content="Ian Stuart Baker">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ANZAC Douglas Raymond Baker</title>
  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
  <link id='stylecss' type="text/css" rel="stylesheet" href="contact-style.css">
  <script type="text/javascript" src='../wireframe.js'></script>
  <script type="text/javascript" src='../scripts.js'></script>
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
      <a href="index.php">Home</a>
      <a href="postletters.html">Letters & Post Cards</a>
      <a href="action-description.html">Action Description</a>
      <a href="contact.html" class="active">Contact</a>
    </div>

  </nav>

  <main class="container">
<!-- //target="_blank" -->
    <form name="form" action="" method="post" target="_blank">

      <label for="name">Name</label>
      <input oninput="validateName(this)" type="text"
      value="<?php if(isset($_COOKIE["name"])) {
        echo $_COOKIE["name"];
      } ?>"
      id="name" name="name" placeholder="Enter your name.">
      <div id="errorName"></div>

      <label for="email">Email</label>
      <input oninput="validateField('errorEm', this)" type="email"
      value="<?php if(isset($_COOKIE["email"])) {
        echo $_COOKIE["email"];
      } ?>"
      id="email" name="email" placeholder="Enter your email.">
      <div id="errorEm"></div>

      <label for="number">Mobile Number</label>
      <input oninput="validateNum(this)" type="tel"
      value="<?php if(isset($_COOKIE["number"])) {
        echo $_COOKIE["number"];
      } ?>"
      id="number" name="number" placeholder="Enter your phone num.">
      <div id="errorNum"></div>

      <label for="subject">Subject</label>
      <input oninput="validateField('errorSub', this)" type="text" id="subject" name="subject" placeholder="Enter the subject.">
      <div id="errorSub"></div>

      <label for="message">Message</label>
      <textarea oninput="validateField('errorMsg', this)" id="message" name="message" placeholder="Type your message here"></textarea>
      <div id="errorMsg"></div>

      <input type="checkbox" value="lsRememberMe" id="rememberMe" name="rememberMe">
      <label for="rememberMe">Remember me</label>

      <input onclick="validateEmptyFields()" type="submit" value="Submit" >
    </form>

  </main>

  <footer>

    <div>&copy;<script>
      document.write(new Date().getFullYear());
    </script> Luke Smith, S3807720. <a href="https://github.com/S3807720/wp" target="blank"> Github repo</a>.</div>
    <div>Disclaimer: This website is not a real website and is being developed as part of a School of
      Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
  </html>
