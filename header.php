<head>
  <meta charset="utf-8" name="viewport" content="width=device-width">
  <!-- name="viewport" content="width=device-width" is SUPER important to put in your
  meta tag. If you don't put this, your CSS media queries will not work in the chrome
  developer tools mobile device emulation screen -->
  <title>Rigel Creative</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<body id="body">
  <header>
    <div class="loading-screen">
      <svg preserveAspectRatio="xMidYMin" viewBox="0 0 500 500"><!-- preserveAspectRatio="xMidYMin" is what allows the circle to always stay in the center of the svg element regardless of viewport size -->
        <circle stroke="" fill="none" stroke-width="4.5"/>
        <circle class="progress-value" fill="none" stroke-width="4.5"/>
        <text x="50%" y="50%" class="circle-caption title">Rigel Creative</text><!-- transform="rotate(90)" x="250" y="-250"  -->
      </svg>
    </div>
    <div class="navbar-toggle-background-overlay">

    </div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo navbar-fixed-top">
      <a class="navbar-brand" href="<?php echo site_url();?>">Rigel Creative</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
          <span class="custom-icon">
          <i class="fa fa-navicon"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?php if (is_front_page()) echo 'active';?>">
            <a class="nav-link" href="<?php echo site_url();?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item <?php if(get_queried_object() -> name === 'projects') echo 'active';?>">
            <a class="nav-link" href="<?php echo site_url().'/projects';?>">Projects</a>
          </li>
          <li class="nav-item <?php if(is_page('vision')) echo 'active';?>">
            <a class="nav-link" href="<?php echo site_url().'/vision';?>">Vision</a>
          </li>
          <li class="nav-item <?php if(get_queried_object() -> name === 'team') echo 'active';?>">
            <a class="nav-link" href="<?php echo site_url().'/team';?>">The Team</a>
          </li>
          <li class="nav-item <?php if(is_page('contact')) echo 'active';?>">
            <a class="nav-link" href="<?php echo site_url().'/contact';?>">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
