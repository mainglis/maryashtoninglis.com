<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta content="charset=utf-8">
	<title>Mary Ashton Inglis</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

  
  <!-- Demo CSS -->
	<link rel="stylesheet" href="../css/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />

  <link rel="stylesheet" href="../css/nav.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  	<script src="../js/modernizr.js"></script>

</head>
<body>
<div class="navbar">
    <ul class="nav nav-tabs">
      <li class="active" id='about-wrapper'>
        <input CHECKED type='button' class="button" name='type' value='about' id='about'> 
      </li>
      <li class="active"  id='portfolio-wrapper'>
        <input type='button' class="button" name='type' value='portfolio' id='portfolio'> 
      </li>
      <li class="active"  id='resume-wrapper'>
        <input type='button' class="button" name='type' value='resume' id='resume'> 
      </li>
      <li>
    </ul>
  </div>
<div class="hero-unit">
<div class='grid-row' id='type_container'>
  <div id='customize_about'>
    <p>All about me</p>
  </div> <!--/cutomize_individual-->
  <div id='customize_portfolio'>
    <p>What I've done</p>
    <div id="container" class="cf">

      <div id="main" role="main"><!-- will pull to right -->
          <section class="slider">
            <div id="slider" class="flexslider">
              <ul class="slides">
                <li><img src="images/front5.png" /></li>
                  <li data-thumb="images/front5.png">
                    <img src="images/front5.png" />
                  </li>
              <li><img src="images/back5.png" /></li>
                <li data-thumb="images/back5.png">
                      <img src="images/back5.png" />
                  </li>
              <!-- <li><img src="images/kitchen_adventurer_donut.jpg" /></li>
              <li><img src="images/kitchen_adventurer_caramel.jpg" /></li> -->
              </ul>
            </div>
           <!--  <div id="carousel-flex" class="flexslider">
              <ul class="slides">
                <li><img src="images/kitchen_adventurer_cheesecake_brownie.jpg" /></li>
              <li><img src="images/kitchen_adventurer_lemon.jpg" /></li>
              <li><img src="images/kitchen_adventurer_donut.jpg" /></li>
              <li><img src="images/kitchen_adventurer_caramel.jpg" /></li>
              </ul>
            </div>
          </section> -->
        </div> <!--/div="main"-->
      </div>
  </div> <!--/cutomize_individual-->
  <div id='customize_resume'>
    <p>Something?</p>
  </div> <!--/cutomize_individual-->
</div><!--/grid-row-->




  </div> <!--/hero-unit-->
  </div> <!--/container -->

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="../js/flexslider.js"></script>
  <script src="../js/nav.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
 </script>

  <script type="text/javascript">
  $(window).load(function() {
    // The slider being synced must be initialized first
    $('#carousel-flex').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      itemWidth: 210,
      itemMargin: 5,
      asNavFor: '#slider'
    });
   
    $('#slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: false,
      slideshow: false,
      sync: "#carousel-flex"
    });
  });
  </script>

  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="../js/shCore.js"></script>
  <script type="text/javascript" src="../js/shBrushXml.js"></script>
  <script type="text/javascript" src="../js/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="../js/jquery.easing.js"></script>
  <script src="../js/jquery.mousewheel.js"></script>
  <script defer src="../js/demo.js"></script>


</body>
</html>