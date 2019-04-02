<!DOCTYPE html>
<html>
  <?php get_header(); ?>
    <main>
    <section class="showcase" style="background-image: url('<?php echo get_theme_file_uri();?>/img/landing-page.jpeg')">
      <div class="darkener">
      </div>
      <svg preserveAspectRatio="xMidYMin" viewBox="0 0 500 500"><!-- preserveAspectRatio="xMidYMin" is what allows the circle to always stay in the center of the svg element regardless of viewport size -->
        <circle stroke="white" fill="none" stroke-width="4.5"/>
        <text x="50%" y="30%" class="circle-caption">Design Agency</text>
        <text x="50%" y="50%" class="circle-caption circle-caption-small">We pave the way</text>
        <text x="50%" y="60%" class="circle-caption circle-caption-small">for</text>
        <text x="50%" y="70%" class="circle-caption circle-caption-small">digital success &#10004;</text>
      </svg>
      <div class="scroll-sign">
        <p>&larr; SCROLL</p>
      </div>
    </section>
    <section class="frontpage__services">
      <div class="container">
        <h3>Our Services</h3>
        <ul>
          <li>Web Development</li>
          <li>Digital Marketing</li>
          <li>Content Production</li>
          <a href="#"><li class="link">Learn More</li></a>
        </ul>
      </div>
    </section>
    <section class="recent__works">
      <div class="darkener">
      </div>
      <img id="project-1" class="recent__work__image" src="<?php echo get_theme_file_uri();?>/img/featured-work-1.jpeg" alt="megalife-rock-band">
      <img id="project-2" class="recent__work__image" src="<?php echo get_theme_file_uri();?>/img/featured-work-2.jpeg" alt="sapphire-resort">
      <img id="project-3" class="recent__work__image" src="<?php echo get_theme_file_uri();?>/img/featured-work-3.jpeg" alt="jameson-solicitors">
      <img id="project-4" class="recent__work__image" src="<?php echo get_theme_file_uri();?>/img/featured-work-4.jpeg" alt="bench-clothing">
      <img id="project-5" class="recent__work__image" src="<?php echo get_theme_file_uri();?>/img/featured-work-5.jpeg" alt="coca-cola">
      <svg preserveAspectRatio="xMidYMin" viewBox="0 0 500 500">
        <foreignobject x="30%" y="15%">
          <div class="panel">
            <div id="dot-1" class="recent__work active"></div>
            <div id="dot-2" class="recent__work"></div>
            <div id="dot-3" class="recent__work"></div>
            <div id="dot-4" class="recent__work"></div>
            <div id="dot-5" class="recent__work"></div>
          </div>
        </foreignobject>
        <text x="50%" y="30%" class="recent-work">Recent Work</text>
        <text id="project-name" x="50%" y="45%" fill="white" font-size="2.2rem">MEGALIFE</text>
        <foreignobject class="explore-recent-works" x="43%" y="50%">
          <div>
            <a href="https://www.google.com/" target="_blank"><p>Explore Details</p></a>
          </div>
        </foreignobject>
        <circle viewBox="0 0 100 100" cx="160" cy="155" r="140" stroke="white" fill="none" stroke-width="4.5"/>
      </svg>
      <div class="cycle-buttons">
        <button class="previous" type="button" name="cycle-previous"><p>&larr;</p></button>
        <button class="next" type="button" name="cycle-next"><p>&rarr;</p></button>
      </div>
    </section>
    </main>
    <footer>

      <!-- No footer on homepage -->

      <?php wp_footer(); ?>

    </footer>
  </body>
</html>
