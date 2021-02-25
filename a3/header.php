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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>
  <script type="text/javascript" src='../wireframe.js'></script>
  <script type="text/javascript" src='../scripts.js'></script>
</head>

<body>
  <?php require('post-validation.php') ?>
  <form id='login' action='post-validation.php' method='post' accept-charset='UTF-8'>
    <?php if (isset($_SESSION['user'])): ?>
      <label>Welcome <?php echo $_SESSION['user']; ?> </label>
      <button name = "login" type="submit">Log out</button>

    <?php else: ?>
     <label for="username">Username:</label>
      <input type="username" id="username" placeholder="Enter username" name="username"
      value="<?php if(isset($_COOKIE["username"])) {
        echo $_COOKIE["username"];
      } ?>"
      <label for="password">Password:</label>
      <input type="password" id="password" placeholder="Enter password" name="password">
      <button name ="login" type="submit">Login</button>
       <div id="logError">
         <?php if(isset($_SESSION['error'])) {
           $logError = $_SESSION['error'];
           echo $logError;
           unset($_SESSION['error']);
         }
         ?>
      </div>
    <?php endif; ?>
  </form>

  <header class = "banner">
    <h2>ANZAC Douglas Raymond Baker</h2> <h3> Letters Home</h3>
  </header>
