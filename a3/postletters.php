<?php require_once("tools.php"); ?>
<?php require_once("header.php"); ?>

  <nav>
    <!-- https://www.w3schools.com/howto/howto_js_mobile_navbar.asp -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>

    <div id="navLinks">
      <a href="index.php">Home</a>
      <a href="postletters.php" class="active">Letters & Post Cards</a>
      <li>
        <a href="postletters.php">
          1914
        </a>
      </li>
      <a href="action-description.php">Action Description</a>
      <a href="javascript:void(0);" onclick= "toggleFont()">Change Font</a>
      <a href="contact.php">Contact</a>
      <?php if (isset($_SESSION['user'])): ?>
        <a href="edit-letters.php"> Edit Letters(secret page)</a>
      <?php endif; ?>
    </div>
  </nav>

  <main class="container">

    <div class="pc">

      <div class="post-card">

        <div class="post-card-back">
          <!-- choose a random card -->
          <div id="card1">
            <p> <?php print_letter() ?> </p>

          </div>

          <div id="card2">
            <p> <?php print_letter() ?> </p>

          </div>

          <div id="card3">
            <p> <?php print_letter() ?> </p>

          </div>

        </div>

        <div id="post-card-front"></div>

      </div>

    </div>

    <div class="button">
      <a href="javascript:void(0);" onclick= "togglePage('card1', 'card')"> #1 </a>
      <a href="javascript:void(0);" onclick= "togglePage('card2', 'card')"> #2 </a>
      <a href="javascript:void(0);" onclick= "togglePage('card3', 'card')"> #3 </a>
    </div>

  </main>

      <?php require_once("footer.php"); ?>
