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
    <a href="index.php">Home</a>
    <a href="postletters.php">Letters & Post Cards</a>
    <a href="action-description.php">Action Description</a>
    <a href="contact.php">Contact</a>
    <?php if (isset($_SESSION['user'])): ?>
      <a href="edit-letters.php" class="active"> Edit Letters(secret page)</a>
    <?php endif; ?>
  </div>

</nav>
<main class="container">
<?php
if (!isset($_SESSION["user"])) {
  // https://makeameme.org/meme/get-out-right-e2597d7b23
  echo "<img src=\"https://i.pinimg.com/originals/a2/58/d3/a258d362f6ad391e3619d7f0b79a1f42.gif\">
      <p> You are not authorized to view this page. Go away. </p>";
      /* yeah you aren't staying.. */
      header('Refresh: 3; URL=index.php');
}else {
  echo "<p> Welcome to the super secret page for.. editing letters? I don't want you to do that but okay.</p>
        <img src='../../media/website-under-construction.png'>";

} ?>
</main>
<?php require_once("footer.php"); ?>
