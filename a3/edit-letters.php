<?php
require_once("header.php");
require_once("post-validation.php");
?>
<nav>
  <!-- https://www.w3schools.com/howto/howto_js_mobile_navbar.asp -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <div id="navLinks">
    <a href="index.php" class="active">Home</a>
    <a href="postletters.php">Letters & Post Cards</a>
    <a href="action-description.php">Action Description</a>
    <a href="contact.php">Contact</a>
  </div>

</nav>
<main class="container">
<?php
if (!isset($_SESSION["user"])) {
  echo "<img url=\"denied.jpg\"> <p class='container'> You are not authorized to view this page. Goodbye. </p>
      <a class ='container' href=\"index.php\">Return to home</a>";
}else {
  echo "<p class='container'> hi how u </p>";
} ?>
</main>
