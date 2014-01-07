<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta content="charset=utf-8">
	<title>FlexSlider 2</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

  <!-- Demo CSS -->
	<link rel="stylesheet" href="../css/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  	<script src="../js/modernizr.js"></script>

</head>
<body>
<p>Changing it up</p>	
  <div id="container" class="cf">

	<!-- <div id="main" role="main"> --> <!-- This will pull it to the right -->
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li data-thumb="images/kitchen_adventurer_cheesecake_brownie.jpg">
  	    	    <img src="http://placekitten.com/200/300" />
  	    		</li>
  	    		<li data-thumb="images/kitchen_adventurer_lemon.jpg">
  	    	    <img src="../images/front5.pdf" />
  	    		</li>
  	    		<li data-thumb="images/kitchen_adventurer_donut.jpg">
  	    	    <img src="images/kitchen_adventurer_donut.jpg" />
  	    		</li>
  	    		<li data-thumb="images/kitchen_adventurer_caramel.jpg">
  	    	    <img src="images/kitchen_adventurer_caramel.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>
      <aside>
        <div class="cf">
          <h3>Thumbnail ControlNav Pattern</h3>
          <ul class="toggle cf">
            <li class="js"><a href="#view-js">JS</a></li>
            <li class="html"><a href="#view-html">HTML</a></li>
          </ul>
        </div>
        <div id="view-js" class="code">
          <pre class="brush: js; toolbar: false; gutter: false;">
            // Can also be used with $(document).ready()
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
              });
            });
          </pre>
        </div>
        <div id="view-html" class="code">
          <pre class="brush: xml; toolbar: false; gutter: false;">
            &lt;!-- Place somewhere in the &lt;body&gt; of your page -->
            &lt;div class="flexslider">
              &lt;ul class="slides">
                &lt;li data-thumb="slide1-thumb.jpg">
                  &lt;img src="slide1.jpg" />
                &lt;/li>
                &lt;li data-thumb="slide2-thumb.jpg">
                  &lt;img src="slide2.jpg" />
                &lt;/li>
                &lt;li data-thumb="slide3-thumb.jpg">
                  &lt;img src="slide3.jpg" />
                &lt;/li>
                &lt;li data-thumb="slide4-thumb.jpg">
                  &lt;img src="slide4.jpg" />
                &lt;/li>
              &lt;/ul>
            &lt;/div>
          </pre>
        </div>
      </aside>
    </div>

  </div>

  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="../js/flexslider.js"></script>

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