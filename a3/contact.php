<?php require_once("header.php"); ?>
<?php require_once("tools.php"); ?>
<link id='stylecss' type="text/css" rel="stylesheet" href="contact-style.css">
<nav>
  <!-- https://www.w3schools.com/howto/howto_js_mobile_navbar.asp -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  <div id="navLinks">
    <a href="index.php">Home</a>
    <a href="postletters.php">Letters & Post Cards</a>
    <a href="action-description.php">Action Description</a>
    <a href="contact.php" class="active">Contact</a>
    <?php if (isset($_SESSION['user'])): ?>
      <a href="edit-letters.php"> Edit Letters(secret page)</a>
    <?php endif; ?>
  </div>

</nav>

<main class="container">

  <form id="contact" name="form" method="post">

    <label for="name">Name</label>
    <input oninput="validateName(this)" type="text"
    value="<?php if(isset($_COOKIE["name"])) {
      echo $_COOKIE["name"];
    } ?>"
    id="name" name="name" placeholder="Enter your name.">
    <div id="errorName">
      <?php echo $nameError; ?>
    </div>

    <label for="email">Email</label>
    <input oninput="validateField('errorEm', this)" type="email"
    value="<?php if(isset($_COOKIE["email"])) {
      echo $_COOKIE["email"];
    } ?>"
    id="email" name="email" placeholder="Enter your email.">
    <div id="errorEm">
      <?php echo $emailError; ?>
    </div>

    <label for="number">Mobile Number</label>
    <input oninput="validateNum(this)" type="tel"
    value="<?php if(isset($_COOKIE["number"])) {
      echo $_COOKIE["number"];
    } ?>"
    id="number" name="number" placeholder="Enter your phone num.">
    <div id="errorNum">
      <?php echo $numberError; ?>
    </div>

    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Enter the subject.">
    <div id="errorSub">
      <?php echo $subjectError; ?>
    </div>

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Type your message here"></textarea>
    <div id="errorMsg">
      <?php
      /* set messageError to session msg and destroy
      then print error and reset */
      if(isset($_SESSION['message'])) {
        $messageError = $_SESSION['message'];
        unset($_SESSION['message']);
      }
      ?>
      <?php echo $messageError; $messageError = "";?>

    </div>
    <input type="checkbox" value="isRememberMe"
    <?php if(isset($_COOKIE['rememberMe'])) {
      echo "checked='checked'";
    } ?>
    id="rememberMe" name="rememberMe">
    <label for="rememberMe">Remember me</label>
    <!-- onclick="validateEmptyFields()" -->
    <input name="submit" type="submit" value="Submit" >
  </form>

</main>
<?php require_once("footer.php"); ?>
