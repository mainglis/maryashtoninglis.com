<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- CSS Files we want on every page -->
	<link rel="stylesheet" href="../css/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />

	<!-- Bootstrap Core CSS -->
	<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="/css/bootstrap-responsive.css" rel="stylesheet">

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="../assets/js/html5shiv.js"></script>
	<![endif]-->
</head>

<body class="loading">	
	<div class="container">
	  <div id='header'>
	    <img src="images/headerNoPadding.gif">
	  </div>
	  <div class="clear"></div>
	  <div class="navbar">
	    <ul class="nav nav-tabs">
	      <li class="active"><a href="/index">About Me</a></li>
	      <li><a href="/portfolios/index">Portfolio</a></li>
	      <li><a href="resume/index">Resume</a></li>
	    </ul>
	  </div>
	  <div class="hero-unit">
	    <?php if(isset($content)) echo $content; ?>
		<?php if(isset($client_files_body)) echo $client_files_body; ?>
	  </div> <!--/hero-unit-->
	</div> <!--/container -->

	<!-- JAVASCRIPT________________________________________________________________________________________ -->

	<!-- JS File we want on every page. placed at the end of the document so the pages load faster  -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>				
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

	<!-- Bootstrap core JavaScript -->
	<script src="/js/bootstrap.min.js"></script>

	<!-- Supporting Bootstrap JavaScript -->
	<script src="/js/jquery.js"></script>
    <script src="/js/bootstrap-transition.js"></script>
    <script src="/js/bootstrap-alert.js"></script>
    <script src="/js/bootstrap-modal.js"></script>
    <script src="/js/bootstrap-dropdown.js"></script>
    <script src="/js/bootstrap-scrollspy.js"></script>
    <script src="/js/bootstrap-tab.js"></script>
    <script src="/js/bootstrap-tooltip.js"></script>
    <script src="/js/bootstrap-popover.js"></script>
    <script src="/js/bootstrap-button.js"></script>
    <script src="/js/bootstrap-collapse.js"></script>
    <script src="/js/bootstrap-carousel.js"></script>
    <script src="/js/bootstrap-typeahead.js"></script>

    <script src="jquery.flexslider.js"></script>
    <!-- Place in the <head>, after the three links -->
    <script type="text/javascript" charset="utf-8">
      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          controlNav: "thumbnails"
        });
      });
    </script>


</body>
</html>