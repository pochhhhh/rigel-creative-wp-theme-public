<?php

 get_header();

 /*

 When looping through the team members, choose either to loop via alphabetical order or via post date. If ordering
 via post date, put the most senior members of the company first and then go down the list in ranks, so for example
 Director, Vice President, Senior Developer, Developer etc etc.....



 */


?>
<main>
  <section class="showcase" style="background-image: url('https://images.pexels.com/photos/1246743/pexels-photo-1246743.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
    <div class="darkener">
    </div>
    <svg preserveAspectRatio="xMidYMin" viewBox="0 0 500 500"><!-- preserveAspectRatio="xMidYMin" is what allows the circle to always stay in the center of the svg element regardless of viewport size -->
      <circle stroke="white" fill="none" stroke-width="4.5"/>
      <text x="50%" y="30%" class="circle-caption">Our Team</text>
      <text x="50%" y="50%" class="circle-caption circle-caption-small">Here are</text>
      <text x="50%" y="60%" class="circle-caption circle-caption-small">The guys</text>
      <text x="50%" y="70%" class="circle-caption circle-caption-small">Behind the magic</text>
    </svg>
    <div class="scroll-sign">
      <p>&larr; SCROLL</p>
    </div>
  </section>
  <section id="the-team">
    <div class="caption">
      <h1>Meet the team</h1>
    </div>
    <div class="container">

      <?php

      while(have_posts()){

        the_post();


         ?>

         <div class="team-member">
           <div class="photo">
             <img src="<?php echo get_field('photo')[url];?>" alt="Tony Marian">
           </div>
           <div class="name-title">
             <h1><?php echo get_the_title(); ?></h1>
             <p><?php echo get_field('role'); ?></p>
           </div>
         </div>


         <?php

          }

          ?>
      <!--

      TAKE ALL THE OTHER TEAM MEMBERS AT POST THEM ON THE WP ADMIN DASHBOARD. CLEAR THE COMMENTS AFTER THIS IS DONE.


      ************************************************************************************************************

      <div class="team-member">
        <div class="photo">
          <img src="https://images.pexels.com/photos/839011/pexels-photo-839011.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="Tony Marian">
        </div>
        <div class="name-title">
          <h1>Tony Marian</h1>
          <p>Director</p>
        </div>
      </div>
      <div class="team-member">
        <div class="photo">
          <img src="https://media.licdn.com/dms/image/C4E03AQED5_Thu0Y9CA/profile-displayphoto-shrink_200_200/0?e=1554336000&v=beta&t=BZHBVSYwctMJJWDyzAvgu4cdHO2CvPpCfmVVn3NSV98" alt="Kevin Lyons">
        </div>
        <div class="name-title">
          <h1>Kevin Lyons</h1>
          <p>Lead Web Developer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="photo">
          <img src="https://images.pexels.com/photos/846741/pexels-photo-846741.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="James Vickers">
        </div>
        <div class="name-title">
          <h1>James Vickers</h1>
          <p>Web Developer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="photo">
          <img src="https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Barbara Saunders">
        </div>
        <div class="name-title">
          <h1>Barbara Saunders</h1>
          <p>Web Developer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="photo">
          <img src="https://images.pexels.com/photos/937481/pexels-photo-937481.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Jack Goh">
        </div>
        <div class="name-title">
          <h1>Jack Goh</h1>
          <p>Web Developer</p>
        </div>
      </div>
      <div class="team-member">
        <div class="photo">
          <img src="https://images.pexels.com/photos/840916/pexels-photo-840916.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="Valenteen Michaels">
        </div>
        <div class="name-title">
          <h1>Valenteen Michaels</h1>
          <p>Lead Graphic Artist</p>
        </div>
      </div>
      <div class="team-member">
        <div class="photo">
          <img src="https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Sharon Briggs">
        </div>
        <div class="name-title">
          <h1>Sharon Briggs</h1>
          <p>Marketing Executive</p>
        </div>
      </div>
      <div class="team-member">
        <div class="photo">
          <img src="https://images.pexels.com/photos/834863/pexels-photo-834863.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Nathan Leahy">
        </div>
        <div class="name-title">
          <h1>Nathan Leahy</h1>
          <p>Accounts Manager</p>
        </div>
      </div>
      <div class="team-member">
        <div class="photo">
          <img src="https://images.pexels.com/photos/1254502/pexels-photo-1254502.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Mark Gordon">
        </div>
        <div class="name-title">
          <h1>Mark Gordon</h1>
          <p>Lead Marketing Executive</p>
        </div>
      </div>
      <div class="team-member">
        <div class="photo">
          <img src="https://images.pexels.com/photos/415829/pexels-photo-415829.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Hiro Yoko">
        </div>
        <div class="name-title">
          <h1>Hiro Yoko</h1>
          <p>Graphic Artist</p>
        </div>
      </div>
    -->
    </div>
  </section>
  <section>
    <!-- Careers, if you are interested in working for Rigel, etc etc etc ... -->
  </section>
</main>
<?php get_footer(); ?>
