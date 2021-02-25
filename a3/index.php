<?php require_once("tools.php"); ?>
<?php require_once("header.php"); ?>

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
    <?php if (isset($_SESSION['user'])): ?>
      <a href="edit-letters.php"> Edit Letters(secret page)</a>
    <?php endif; ?>
  </div>

</nav>
<main class="container">

  <img src="https://discoveringanzacs.naa.gov.au/media/mawson/108032.png"
  class ="portrait" alt="portrait of douglas raymond baker">
  <section class="home">
    <p>
      Hello and welcome,
      This year is the centenary of the birth of the ANZAC legend. As such, many people, particularly young people,
      are looking for ways to connect with people of that period and inparticular, those who created the ANZAC legend.
    </p>
    <p>
      This site presents the letters of Douglas Raymond Baker, who came from Gympie, Queensland, Australia.
    </p>

    <p>
      He enlisted in August 1914 and during the years that followed, he wrote letters and post cards to his family at home.
      In them, he describes much of the goings-on of the life of an ANZAC, his feeling and opinions, and experiences while visiting
      his relatives in England during leave.
    </p>
    <p>
      They start from the beginning of basic training in Brisbane in August 1914 and end in May 1918.
      They are offered here so that others may get an understanding of life as an ANZAC and get a sense of what life on the
      battlefield was like.
    </p>
    <p>
      First read the introduction below to set the scene. Then from the menu on the left, to start reading the letters,
      click on Letter and Post Cards in the menu on the left.
    </p>
    <p>
      <i>(Photograph courtesy of : https://discoveringanzacs.naa.gov.au/browse/person/63381 [Image number: 3])</i>
    </p>

  </section>

  <section class="home">
    <h4> Introduction </h4>
    <h4>By Douglas Richard Baker
      (son of Douglas Raymond Baker)</h4>
      <p>
        These are copies of letters written by my father Douglas Raymond Baker during the First World War (1914-1918)
        to his family in Gympie. I have three thick exercise books in which the letters were copied in hand writing
        by my Aunt Alice, his sister. I understand that this was done so his letters could be sent on to other members
        of the family. I don’t know if the originals are still in existence, probably not.
      </p>
      <p>
        In the early letters Alice has not included the name of the person they were written to but later she writes at
        the beginning, “Letter to Dot”,  “Letter to Mother”, etc. and later still copies the original, “Dear Al”, “Dear Mag”,
        etc..  Likewise the endings are often not laid out fully as we would do but Al may have done this or Dad may have
        been saving space on the page.
      </p>
      <p>
        Some letters are slightly out of date order in the books but as most of these are around
        the time his father died I have put them in the correct order as this is crucial to understanding
        the sense of the contents.  A lot will be missing – many, many ships were sunk but thanks to Aunt
        Alice we have these copies of the ones that did get through.
      </p>
      <p>
        Where Dad used brackets in a letter I have used [   ]  style and where I have made any comment or
        explanation I have used (   ) and Italics.
      </p>
      <p>
        Where he uses the word “gay” it is used in the true sense, bright, happy, carefree, etc., This is the
        original meaning of the word before it became associated with the homosexual community.
      </p>
      <p>
        The amounts of money are, of course, in Pounds, shillings and pence but as these are out of date and we
        have no pounds sign in the computer I have written them in, sometimes showing the decimal equivalents.
        One Pound equalled $2,  one shilling equalled 10 cents and one penny equalled a little under one cent.
        After a while I stopped putting the equivalents in as they had cno significance unless you knew the relative
        cost of things then and now. A shilling – equivalent to ten cents might actually alent to ten cents might
        actually buy  buy ten or twenty dollars worth of goods now.
      </p>
      <p>
        Some abbreviations and terms:
      </p>
      <table>
        <tr>
          <th> Term </th>
          <th> Meaning </th>
        </tr>
        <tr>
          <td> Coy </td>
          <td> Company(part of a Battalion) </td>
        </tr>
        <tr>
          <td> Batt </td>
          <td> Battalion </td>
        </tr>
        <tr>
          <td> Col. </td>
          <td> Colonel </td>
        </tr>

        <tr>
          <td> Serg. </td>
          <td> Sergeant </td>
        </tr>
        <tr>
          <td> Capt. </td>
          <td> Captain </td>
        </tr>
        <tr>
          <td> Lieut. </td>
          <td> Lieutenant (pronounced "Lef-tenant") </td>
        </tr>
        <tr>
          <td> Col. </td>
          <td> Colonel </td>
        </tr>
        <tr>
          <td>Q.M.</td>
          <td>Quarter Master</td>
        </tr>
        <tr>
          <td>Comp.</td>
          <td>Company</td>
        </tr>
        <tr>
          <td>PC</td>
          <td>Post Card.(not Personal Computer!)</td>
        </tr>
        <tr>
          <td>CB</td>
          <td>Confined to Barracks (leave stopped as a punishment)</td>
        </tr>
        <tr>
          <td>Big hits</td>
          <td>Top ranked officers.</td>
        </tr>
        <tr>
          <td>Brass hats</td>
          <td>Top ranked officers</td>
        </tr>
        <tr>
          <td>Dry canteen</td>
          <td>Bar and/or cafeteria, etc. where no alcohol is served.</td>
        </tr>
        <tr>
          <td>Wet canteen</td>
          <td>Bar and/or cafeteria, etc. where alcohol  is available.</td>
        </tr>
        <tr>
          <td>Sapping</td>
          <td>Digging a tunnel or deep trench to approach or undermine an enemy position.</td>
        </tr>
        <tr>
          <td>L. Horse</td>
          <td>Light Horse</td>
        </tr>
        <tr>
          <td>Good nick or great nick</td>
          <td>Good health</td>
        </tr>
        <tr>
          <td>Bonsorful</td>
          <td>Wonderful, marvellous. (in 2009speak,  “awesome”, “cool”.)</td>
        </tr>
        <tr>
          <td>M. G. S.</td>
          <td>Machine  Gun  Section.</td>
        </tr>
        <tr>
          <td>Territorials</td>
          <td>Soldiers of the English  Volunteer Reserve.</td>
        </tr>
        <tr>
          <td>Terriers</td>
          <td>Territorials</td>
        </tr>
        <tr>
          <td>Bomb</td>
          <td>Unless dropped from an aeroplane these would have been Mills Bombs – an early version of the hand grenade.</td>
        </tr>
        <tr>
          <td>Blighty</td>
          <td>England</td>
        </tr>
        <tr>
          <td>Duke</td>
          <td>Dad’s family’s dog</td>
        </tr>
        <tr>
          <td>O.R.</td>
          <td>Orderly Room.</td>
        </tr>
      </table>
      <h4>
        Additional Comments by Ian Stuart Baker
        (son of Douglas Richard Baker)
      </h4>

      <p>
        As the grandson of the Douglas Raymond, I'd like to share some thoughts with modern readers.
        Apart from the language issues that my Dad highlights, it would also help to recognise that
        in Grandfathers day, the letter was the only means of international communications for average
        people (telegrams were expensive and used rarely and international telephone calls, rarer still).
        That's why these letters are so important and why their content gives us window into their lives.
      </p>
      <p>
        From discussions with my Dad, it has came to light that the content of letters to his direct family
        deliberately leave out much of the dreadful suffering and drudgery experienced by the diggers. This
        intentional self-editing was intended to allay the fears and concerns of those at home, inparticular,
        his mother and sisters.
      </p>
      <p>
        Finally, let me express a debt of thanks to Great Aunt Alice for diligently transcribing the original
        letters for without this effort, we would not have the material we do today. Also, my gratitude to my
        father for his work transforming the hand-written script into a typed paper record and then into electronic
        format, making my part in this infinitely easier.
      </p>
    </section>
</main>
<?php require_once("footer.php"); ?>
