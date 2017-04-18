<section class="main-column">
  <article>
    <div class="content">
      <h2>About Seether</h2>
      <p>Seether are a South African hard rock band founded in May 1999 in Pretoria, South Africa.
      The band originally performed under the name Saron Gas until 2002, when they adopted the Seether name.
      Disclaimer is their original album and major label debut. They gained mainstream popularity in 2002 with
      their US Active Rock #1 single "Fine Again", and their success was sustained in 2004 with the single
      "Broken" which peaked at No. 20 on the Billboard Hot 100. They have experienced continued success with
      #1 hits on the Hot Mainstream Rock Tracks chart such as "Remedy", "Fake It", "Country Song" and
      "Words as Weapons".</p>
    </div>
  </article>

  <div class="purchase-tickets">
    <img class="flag-one" alt="Aus flag" src="images/aus_flag.png">
    <a class="btn" href="#"><span>Purchase Tickets</span> Click!!!</a>
    <img class="flag-two" alt="Aus flag" src="images/aus_flag.png">
  </div>

  <aside>
    <h2>Featured Video</h2>
    <div class="content">
      <!-- <img alt="video" src="images/seetherYouTube.png"> -->
      <video controls>
        <source src="video/video.mp4" type="video/mp4">
        <source src="video/video.ogg" type="video/ogg">
        Your browser does not support the video tag.
      </video>
    </div>
  </aside>
</section>

<section class="side-column">
  <article class="news-letter">
    <div class="content">
      <h2>Join Seether</h2>
      <form role="form" id="feedbackForm" class="text-center" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Name">
          <span class="help-block" style="display: none;">Please enter your name.</span>
        </div>
        <div>
          <label for="email">E-Mail</label>
          <input type="email" class="" id="email" name="email" placeholder="Email Address"><br>
        <button type="submit" name="submit" id="feedbackSubmit" class="" style=" margin-top: 10px;"> Sign up!</button>
        </div>
      </form>
       <?php
        if($message) {
          echo "<div><strong>$message</strong></div>";
        }
       ?>
    </div>
  </article>

  <aside class="upcoming-tour">
    <div class="content">
      <h2>Upcoming Tour :</h2>
      <img alt="upcoming tour flag" src="images/aus_flag.png">
    </div>
  </aside>

  <aside class="instagram">
    <div class="content">
      <h2>Instagram</h2>
      <img alt="instagram photo" src="images/aside_insta/seether_image3_220.jpg">
      <img alt="instagram photo" src="images/aside_insta/seether_image4_220.jpg">
      <div class="remove_mobile">
      <img alt="instagram photo" src="images/aside_insta/seether_cover2.jpg">
      <img alt="instagram photo" src="images/aside_insta/insta_smoke.jpg">
      <img alt="instagram photo" src="images/aside_insta/seether_image5_300.jpg">
      <img alt="instagram photo" src="images/aside_insta/seether_image6_300.jpg">
      </div>
    </div>
  </aside>
</section>
