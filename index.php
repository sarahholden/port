<?php session_start() ?>

<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sarah Holden | Web Developer</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="icon" href="favicon.ico?v=2" type="image/x-icon" />

<!--   <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <script src="https://use.typekit.net/fee8kly.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script> -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/home.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>

  <header class="page-header">
    <div class="nav-wrapper">
      <nav>
        <a href="#" id="menu-toggle" class="menu-icon">
          <span></span>
          <span></span>
          <span></span>
        </a>
        <ul>
          <li><a href="#about">About</a></li>
          <li><a href="#build">Build</a></li>
          <li><a href="#teach">Teach</a></li>
          <li><a href="#contact">Contact</a></li>
          <!-- <li><a href="img/sarah_holden_resume_2015.pdf" target="_blank">Resume</a></li> -->
        </ul>
      </nav>
    </div>
    <div class="v-aligned-text">
      <h1>Sarah Holden</h1>
      <h2><strong>Web Developer</strong> &amp; Web Designer</h2>
    </div>

  </header>
  <section id="about" class="about">
    <div class="row">
      <header class="col-md-12">
        <h2>Hi, I&rsquo;m Sarah.<br> I build, I teach, and I make a mean batch of chocolate chip cookies.</h2>
        <h1>About</h1>
      </header>
      <div class="col-sm-6">
        <ul>
          <li>Backbone, Angular, React</li>
          <li>Gulp, Grunt, Bower, Yeoman</li>
          <li>Mocha</li>
          <li>Git, Github</li>
          <li>Foundation, Bootstrap, Susy</li>
        </ul>
      </div>
      <div class="col-sm-6">
        <ul>
          <li>Jade, Haml</li>
          <li>SCSS</li>
          <li>CSS3</li>
          <li>Illustrator/Photoshop/InDesign</li>
          <li>Teaching/Coaching</li>
        </ul>
      </div>
      <div class="col-md-12">
        <a href="img/sarah_holden_resume_2015.pdf" target="_blank" class="btn">View Resume</a>
      </div>
    </div>
  </section>
  <section id="build" class="build">
    <div class="row">
      <header class="col-md-12">
        <h2>I specialize in building quality-crafted apps driven by JavaScript.</h2>
        <h1>Build</h1>
      </header>
    </div>
    <div class="row">
      <article class="work-item">
         <img src="img/kin.jpg" alt="KinHR Screenshot">
        <h3>KinHR</h3>
        <h4>Lead Front-End Developer</h4>
        <p>Kin is an HR Software app focused on people. It helps small businesses manage onboarding, employee data and files, and time off. Site is built using Backbone, Require, JavaScript, HTML5, SCSS, Foundation, and compass.</p>
        <a href="https://app.kinhr.com/" target="_blank" class="btn">Visit Site</a>
      </article>
      <article class="work-item">
         <img src="img/kinhr.jpg" alt="KinHR Marketing Site Screenshot">
        <h3>KinHR Marketing</h3>
        <h4>Developer</h4>
        <p>Built alternate landing pages for the KinHR marketing site using WordPress. Conducted A/B tests on variations of those pages. Site is built using Wordpress, Foundation, SCSS, and HTML5.</p>
        <a href="http://kinhr.com/vacation-tracking-software/" target="_blank" class="btn">Visit Site</a>
      </article>

      <article class="work-item">
         <img src="img/luceris.png" alt="Luceris screenshot">
        <h3>Luceris</h3>
        <h4>Front-End Developer</h4>
        <p>Luceris is a cloud file storage and collaboration service built specifically to support real estate industry processes. Site built using Angular.js, SCSS, Foundation and Compass.</p>
        <a href="http://luceris.com/" target="_blank" class="btn">Visit Site</a>
      </article>
<!--     </div>
    <div class="row"> -->
      <article class="work-item">
         <img src="img/neatandsweet.jpg" alt="Neat and Sweet Recipes Screenshot">
        <h3>Neat &amp; Sweet Recipes</h3>
        <h4>Design &amp; Development</h4>
        <p>A visual guide to recipes featuring a responsive design, built-in-timer, step-by-step navigation, optimized images, and ingredient highlighter. Site developed using HTML5, CSS3, jQuery, JavaScript, PHP and Bootstrap.</p>
        <a href="http://neatandsweetrecipes.com/" target="_blank" class="btn">Visit Site</a>
      </article>
      <article class="work-item">
         <img src="img/spi.jpg" alt="Society for Psychoanalytic Inquiry Screenshot">
        <h3>SPI</h3>
        <h4>Development</h4>
        <p>Site featuring projects, upcoming events and resources for The Society for Psychoanalytic Inquiry. Site developed using WordPress, Grunt, Timber, Masonry and SCSS.</p>
        <a href="http://freudians.org/" target="_blank" class="btn">Visit Site</a>
      </article>
      <article class="work-item">
         <img src="img/colorconverter.jpg" alt="Color Converter Screenshot">
        <h3>SCSS Color Converter</h3>
        <h4>Design/Development</h4>
        <p>Designed and built this simple tool that outputs a SCSS color function to convert one color to another.</p>
        <a href="http://sasstoolkit.com/" target="_blank" class="btn">Visit Site</a>
      </article>
    </div>
  </section>
  <section id="teach" class="teach">
    <div class="row">
      <header class="col-md-12">
        <h2>I love breaking down complex concepts and making learning fun.</h2>
        <h1>Teach</h1>
      </header>
      <blockquote class="col-md-4">
        <p>Sarah Holden is an amazing instructor. She always went above and beyond to help me out when I was stuck. Her keen sense of design made her presentations and labs more engaging. She exemplifies who I want to become (a superhuman designer/developer hybrid).</p>
        <footer>
          &mdash; Erica Rodriguez
        </footer>
      </blockquote>

      <blockquote class="col-md-4">
        <p>Sarah has been a joy to work with at General Assembly. Her knowledge of the content is amazing and she is always willing to go above and beyond what she has to do as an instructor to make sure her students are successful. She also has the ability to work with diverse populations and adapt to needs of beginning learners. I would highly recommend Sarah for Programming and education jobs in the future.</p>
        <footer>
          &mdash; Gabe Nelson
        </footer>
      </blockquote>
      <blockquote class="col-md-4">
        <p>Sarah was a fantastic front-end web development instructor at General Assembly. Sarah&rsquo;s knowledge and patience made the learning process that much easier, especially for the daunting world of JavaScript! I strongly recommend Sarah as an web development instructor or mentor and hope our paths somehow cross in the future!</p>
        <footer>
          &mdash; Rory Baumstein
        </footer>
      </blockquote>
      <div class="col-md-12">
        <a href="https://www.youtube.com/watch?v=6m6iqN1uynE" target="_blank" class="btn">Watch Sample Tutorial <i class="fa fa-play"></i></a>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="row">
      
      <header class="col-md-12">
        <h2>Let&rsquo;s work together.<br> I&rsquo;m always looking to take on new and interesting projects.</h2>
        <h1>Contact</h1>
      </header>

      <?php
      //init variables
      $cf = array();
      $sr = false;
       
      if(isset($_SESSION['cf_returndata'])){
          $cf = $_SESSION['cf_returndata'];
          $sr = true;
      }
      ?>
      <div class="col-md-12">
        <p id="success" class="success message <?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! I will get back to you as soon as possible.</p>
      </div>


      <form action="process.php" method="post" id="contactForm">
        <div class="col-md-6">
          <div class="field-wrapper">
            <input type="text" placeholder="Your Name *" name="name" id="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" required>
          </div>
          <div class="field-wrapper">
            <input type="email" placeholder="Email Address *" name="email" id="email" required>
          </div>
          <div class="field-wrapper">
            <input type="text" placeholder="Subject" name="subject" id="subject">
          </div>
        </div>
        <div class="col-md-6">
          <div class="field-wrapper">
            <textarea name="message" id="" placeholder="Message *" required></textarea>
          </div>
          </div>
        <div class="col-md-12">
          <button type="submit">Send Message <i class="fa fa-paper-plane"></i></button>
        </div>
        <?php unset($_SESSION['cf_returndata']); ?>
      </form>
    </div>
  </section>

  <footer>
    <div class="row">
      <div class="col-sm-6">
        <p>&copy; 2015 Sarah Holden.</p>
      </div>
      <div class="col-sm-6">
        <p class="footer-links">
          <a href="https://www.linkedin.com/in/sarah-holden-0321a72b"><i class="fa fa-linkedin-square"></i></a>
          <a href="https://www.instagram.com/sarah__holden/"><i class="fa fa-instagram"></i></a>
          <a href="https://www.facebook.com/sarahbethholden"><i class="fa fa-facebook-square"></i></a>
          <a href="https://www.pinterest.com/sarahbethholden/"><i class="fa fa-pinterest"></i></a>
        </p>
      </div>
    </div>
    
  </footer>






<!--   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <script src="js/contact.js"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!--   <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X','auto');ga('send','pageview');
  </script> -->
</body>
</html>
