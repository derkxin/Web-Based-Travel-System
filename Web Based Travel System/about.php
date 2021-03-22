<?php
    session_start();
    $title = "About Us";
    
?>
<html>
<?php include('header.php');?>
  <style>
  <?php include('css/about.css')?>
  </style>
  <body>
    <section>
    <div class="content">
            <strong>Dream4Us</strong><br>
            <strong>Don't Make Your Dreams Be Dream</strong>
    </div>
    <div>
        <img src="pic/bgabout.jpg" alt="bgabout" class="bgabout">

    </div>
    </section>

    <div class="about-margin" />
		<hr class="breakline"></hr>
    <h1><center>About Us</center></h1>
		<hr class="breakline"></hr>
    <p class="wording">
      DREAM4US, a company that trying to grow bigger from time to time
      with over 1000 of employees and over 100,000 of members, making us
      one of the Malaysia's leading online travel agencies.<br>
    </p>
    <p class="wording">
      With over 100 of hotels around the Malaysia, we have provide packages
      that with affordable prices which will let our customer have a
      memorable experiences.<br>
    </p>
    <p class="wording">
      This website is operated by a group of teenagers that trying to
      benefits the people around them and tell others to spend their
      time with families.<br>
    </p>
    <p class="wording">
      DREAM4US Malaysia is licensed under the Travel Agents Act (Chapter 334)
      with license number 17171.
    </p>

    <section>
      <div class="bookus">
        <table>
          <tr>
            <td class="tablecolumn"><center>
              <img src="pic/worldwide.png" alt="worldwide" class="img1">
              <h3 class="word1";>Worldwide</h3>
              No matter where you want to travel in Malaysia, we
              got you covered. From flights to hotels,our extensive
              network connects all corners of Malaysia.
            </center></td>
            <td class="tablecolumn"><center>
              <img src="pic/quality.png" alt="quality" class="img2">
              <h3 class="word2">High-Quality Service</h3></h3>
              We provide you individual care whenever you need it, from the
              moment you book and while you're away, to the moment you get home.
            </center></td>
            <td class="tablecolumn"><center>
              <img src="pic/experience.png" alt="experience" class="img3">
              <h3 class="word3">Unique Experiences </h3>
              We want you to have a unique and immersive experience,
              taking you to hidden gems, we can also add those extra
              touches to make things feel all the more special.
            </center></td>
          </tr>
        </table>
      </div>
    </section>

  	<?php include('footer.php'); ?>

  </body>
</html>
