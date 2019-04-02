<?php get_header();?>
<?php //echo get_queried_object() -> name; ?>
<main>
  <section id="portfolio-list">
    <div class="container">

      <?php

      /*

      This is just a test of the standard WP loop. Please note that you will most likley have to use a custom
      loop. The standard WP loop loops through data and puts most recent post at the top. Custom queries
      and custom loop will allow us to change the order of which the data is processed.

      */

      while(have_posts()){

        the_post(); ?>

          <!--<div class="">
            <h1><?php echo get_field('project_title');?></h1>
            <p><?php echo get_field('project_image')[url];?></p>
          </div> -->

          <div class="portfolio-item">
            <div class="image-thumbnail">
              <a href="#"><img src="<?php echo get_field('project_image')[url];?>" alt="Chimes Clocks"></a>
            </div>
            <div class="project-title">
              <p>CLIENT WORK</p>
              <a href="#" target="_blank"><h3><?php echo get_field('project_title');?></h3></a>
            </div>
          </div>

        <?php

      }

      /*

      Standard WP loop works but it does not order the projects in the correct order. Use custom queries to change
      list order from high to low to low to high.

      */

       ?>
      <!--
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://ichef.bbci.co.uk/news/660/cpsprodpb/7AB7/production/_104051413_gettyimages-858635444.jpg" alt="Chimes Clocks"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Chimes Clocks</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/1205651/pexels-photo-1205651.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Steele University"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Steele University</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/320335/pexels-photo-320335.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Piano Buff"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Piano Buff</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/1353346/pexels-photo-1353346.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Richard Stein Investors"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Stein Investors</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/1282270/pexels-photo-1282270.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Indigo Recruitment"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Indigo Recruitment</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="<?php ?>/img/featured-work-1.jpeg" alt="Megalife"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Megalife</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="<?php ?>/img/featured-work-2.jpeg" alt="Sapphire Resort"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Sapphire Resort</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="<?php ?>/img/featured-work-3.jpeg" alt="Jameson Solicitors"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Jameson Solicitors</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="<?php ?>/img/featured-work-4.jpeg" alt="Bench Clothing"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Bench Clothing</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="<?php ?>/img/featured-work-5.jpeg" alt="Coca Cola"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Coca Cola</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/1455962/pexels-photo-1455962.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Imperial Dragon"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Imperial Dragon</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/159358/construction-site-build-construction-work-159358.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="Lyons Construction"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Lyon Construction</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/681333/pexels-photo-681333.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Clyde McEwen Estates"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>McEwen Estates</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/1643326/pexels-photo-1643326.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Aware About Autism"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Autism Aware</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/1268855/pexels-photo-1268855.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Aleenta Resort"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Aleenta Resort</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://media.rbl.ms/image?u=%2Ffiles%2F2016%2F08%2F12%2F636065617172688036-2124156116_merci.png&ho=https%3A%2F%2Faz616578.vo.msecnd.net&s=505&h=eed6fef84f0e0710766c2b67876d31aa810d332e07a5fee1f49c9eab09f0fa7f&size=980x&c=3929064959" alt="Crystal Interpreting & Translation Services"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Crystal Interpreting</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://fcbstudios.com/images/Raw/0-feilden-clegg-bradley-studios_birmingham-conservatoire.jpg" alt="Northbank Conservatoire"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Northbank Conservatoire</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/161017/kickboxer-girl-moscow-thai-161017.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Tipamat Muay Thai Academy"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Tipamat Muay Thai Academy</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/1426939/pexels-photo-1426939.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Bell Communications Ltd"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Bell Communications Ltd</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://www.newcriterion.com/cm/images//Kissin-2-Credit-Photo-by-Steve-J.-Sherman.jpg" alt="Evgeny Kissin - Pianist"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Evgeny Kissin - Pianist</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/813011/pexels-photo-813011.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Nomadic Cruise Tours"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Nomadic Cruise Tours</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/17840/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Stronghold Barbell Club"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Stronghold Barbell Club</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/268283/pexels-photo-268283.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Bliss Centre of Ayurveda"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Bliss Center of Ayurveda</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/169647/pexels-photo-169647.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Highgate & Neilson Development"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Highgate & Neilson Development</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/1153976/pexels-photo-1153976.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Kinabukasang Liwanag Outreach"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Kinabukasang Liwanag Outreach</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/1274260/pexels-photo-1274260.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Studio Nebula"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Studio Nebula</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/6067/coffee-flower-reading-magazine.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Passionista Magazine"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Passionista Magazine</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/355952/pexels-photo-355952.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="MBTI Aware"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>MBTI Aware</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/889709/pexels-photo-889709.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Airsoft Universe"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Airsoft Universe</h3></a>
        </div>
      </div>
      <div class="portfolio-item">
        <div class="image-thumbnail">
          <a href="#"><img src="https://images.pexels.com/photos/744318/pexels-photo-744318.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Anderson Lane Music Studios"></a>
        </div>
        <div class="project-title">
          <p>CLIENT WORK</p>
          <a href="#" target="_blank"><h3>Anderson Lane Music Studios</h3></a>
        </div>
      </div>
    -->
    </div>
  </section>
</main>

<?php get_footer(); ?>
