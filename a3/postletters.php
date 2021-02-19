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
    </div>
  </nav>

  <main class="container">
    <div class="pc">
      <div class="post-card">
        <div class="post-card-back">
          <div id="card1">
            <p> <?php print_letter(0) ?> </p>
            <!-- <h4> August 25th 1914. </h4>
            <p >
              Just have a chance to write a few lines at a small shop near the Camp. We had about four hours in Brisbane before
              going to Camp and had a good look round. Arrived in Camp about 6 p.m. and all the Gympie lads [Infantry] were
              placed in one tent [11 of us].  The Light Horse are nearly a mile from us. Of course it was my luck to be made
              Tent Orderly for the first day – getting the tucker and cleaning up. We have had nothing issued to us yet, so
              just as well I brought something.  There is no child’s play in this camp – plenty of hard work – they mean
              business. We have a free hand at night so far and can write as we like.  Saw Herb as we were marching to
              the Camp. He was going back from work and I had only time to shake hands with him – could not leave the ranks.
              We will be under Captain Jackson. He has been appointed Captain of the Northern Rivers men and managed to get us
              in with him. Cannot write any more, am in a hurry. Will write more later on. Am feeling quite homesick. Had our
              feet examined today, teeth tomorrow I think.
            </p> -->
          </div>
          <div id="card2">
            <p> <?php print_letter(1) ?> </p>
            <!-- <h4>  August 28th. 1914. </h4>
            <p>
              We are doing plenty of hard work, the officers here think we will be sent straight into the firing line when we get
              there and the men all seem eager for it. Taking things altogether the life here is not too bad. All the Gympie fellows
              are very decent and we stick together. Today we were issued with new rifles and bayonets, etc. but so far no uniform.
              My regimental number is 692 but you need not put that in the address of any letters. We were advised to let our people
              know our number in case  - - - -.
            </p>
            <p>
              Yesterday about 150,000 rounds of ball cartridges arrived, we will have to go through a stiff shooting test. Our feet are
              examined every day. We sit in a long row with bare feet sticking out. I will have to dress for parade now so hooray with
              best love from Ray.
            </p> -->
          </div>
          <div id="card3">
            <p> <?php print_letter(2) ?> </p>
            <!-- <h4>  August 31st. 1914. </h4>
            <p>
              On Saturday when we came into camp from drill at 12 o’clock, we were told that the Commandant was very pleased with the progress
              made and had granted us a half holiday so the Gympie lads decided to go to the city. We had a good time in Brisbane and had
              tea at a fish shop.  Met Herb at about 7 p.m. and we all went to the Empire but the show was very poor. We have had issued to
              us two towels, two pairs under-pants, two singlets, two pairs socks, a sweater and a cake of soap. I think we will get boots
              in a day or two and other things.
            </p>
            <p>
              A church parade was held but none of the Gympie lads attended. It happened to be a voluntary one! We are all keeping in pretty
              good health and hope you all are at home. Today is payday, we are to get paid every fortnight, this time we will get 11 days.
              I am only drawing half of mine and banking the rest. Love to all.
            </p> -->
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
