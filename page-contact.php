<?php get_header();?>
<main>
  <section class="showcase" style="background-image: url('https://images.pexels.com/photos/4831/hands-coffee-smartphone-technology.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940')">
    <div class="darkener">
    </div>
    <svg preserveAspectRatio="xMidYMin" viewBox="0 0 500 500"><!-- preserveAspectRatio="xMidYMin" is what allows the circle to always stay in the center of the svg element regardless of viewport size -->
      <circle stroke="white" fill="none" stroke-width="4.5"/>
      <text x="50%" y="30%" class="circle-caption">Contact Us</text>
      <text x="50%" y="50%" class="circle-caption circle-caption-small">We are</text>
      <text x="50%" y="60%" class="circle-caption circle-caption-small">here to</text>
      <text x="50%" y="70%" class="circle-caption circle-caption-small">help!</text>
    </svg>
    <div class="scroll-sign">
      <p>&larr; SCROLL</p>
    </div>
  </section>
  <section id="contact">
    <!-- Insert contact form here -->
  </section>
  <section id="map">
    <div style="height:60vh;width:100vw;background:none; position:relative;">
      <div class="map-api" style="height:100%;width:100%;">

      </div>
    </div>
  </section>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
  <script>
  // Initialize and add the map
  function initMap() {

  console.log('initMap is working');
  // The location of Uluru
  var uluru = {lat: 51.5110, lng: -0.2034};
  // The map, centered at Uluru
  var map = new google.maps.Map(
   document.querySelector('.map-api'), {zoom: 13, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
  }
  </script>
  <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAJPw6qkBJ1Xr6YAhPtCWElSD6Zf2Yf5g&callback=initMap">
  </script>
</main>
<?php get_footer(); ?>
