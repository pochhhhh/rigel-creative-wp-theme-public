<?php get_header();?>
<main>
<section class="showcase" style="background-image: url('https://images.pexels.com/photos/990826/pexels-photo-990826.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
  <div class="darkener">
  </div>
  <svg preserveAspectRatio="xMidYMin" viewBox="0 0 500 500"><!-- preserveAspectRatio="xMidYMin" is what allows the circle to always stay in the center of the svg element regardless of viewport size -->
    <circle stroke="white" fill="none" stroke-width="4.5"/>
    <text x="50%" y="30%" class="circle-caption">Our Vision</text>
    <text x="50%" y="50%" class="circle-caption circle-caption-small">We are</text>
    <text x="50%" y="60%" class="circle-caption circle-caption-small">a brand of</text>
    <text x="50%" y="70%" class="circle-caption circle-caption-small">collective genius</text>
  </svg>
  <div class="scroll-sign">
    <p>&larr; SCROLL</p>
  </div>
</section>
<section id="vision">
  <div class="content-1">
    <p><?php if(the_field('section_1')){

      echo get_field('section_1');

    } ?></p>
    <img src="https://images.pexels.com/photos/41949/earth-earth-at-night-night-lights-41949.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="test">
  </div>
  <div class="content-2">
    <p><?php if(the_field('section_2')){

      echo get_field('section_2');

    } ?></p>
    <img src="https://images.pexels.com/photos/297648/pexels-photo-297648.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="test">
  </div>
  <div class="content-3">
    <p><?php if(the_field('section_3')){

      echo get_field('section_3');

    } ?></p>
    <img src="https://images.pexels.com/photos/1268558/pexels-photo-1268558.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="test">
  </div>
  </div>
</section>
</main>
<?php get_footer(); ?>
