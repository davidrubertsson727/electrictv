<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>		<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>		<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<title><?php wp_title(); ?></title>

	<?php if (current_theme_supports('bootstrap-responsive')) { ?><meta name="viewport" content="width=1100"><?php } ?>

	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.5.3.min.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.7.2.min.js"><\/script>')</script>

	<!--<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>-->
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/foundation.topbar.js"></script>

	<script>
		jQuery(document).ready(function($){
			$(document).foundation();
		})
		
	</script>

	<?php roots_head(); ?>
	<?php wp_head(); ?>

	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-11006636-1");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
	<meta name="google-site-verification" content="znU4R06PzqF4H7O4atTqTV1zwvWLlnrtl4Isow3MqyQ" />
	<meta name="google-site-verification" content="igggL7cu-R7qjcX9GN-J71gRdx4KgevjKn3Ky-BRx9k" />
        <meta name="google-site-verification" content="g7R-ETlQ-VjRUOqEtkuRzA6PuR7OUDbsVkc3eqYvLAg" />

	<script>
		$(document).ready(function() {
			if(getParameterByName('PlayID') == '')
			{ $('.featuredVideoBtn').hide(); }
			else { }
		});

		function getParameterByName(name)
		{
			name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
			var regexS = "[\\?&]"+name+"=([^&#]*)";
			var regex = new RegExp( regexS );
			var results = regex.exec( window.location.href );
			if( results == null )
			return "";
		else
			return decodeURIComponent(results[1].replace(/\+/g, " "));
		}
	</script> 

	 

	

</head>

<body <?php body_class(); ?>>

	<!--[if lt IE 7]><div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div><![endif]-->

	<?php roots_header_before(); ?>


	<?php roots_header_after(); ?>
	<?php roots_wrap_before(); ?>
	<div id="container" class="<?php echo WRAP_CLASSES; ?>" role="document">

		<div id="header" class="container">
			<div class="row">
				<div id="logo" class="large-4 medium-5 small-12 columns">
					<a href="/"><img src="/img/logo.png" alt="<?php echo get_bloginfo('name'); ?>"></a>
				</div>

				<div class="large-2 medium-1 columns"></div>
				
				<ul class="rssNewsArchive large-6 medium-6 small-12 columns">
					<li class="updates">Get Electric Video Updates:</li>
					<li class="rss"><a href="#"><img alt="RSS" src="/img/rss.png"></a><a href="<?php bloginfo("rss2_url"); ?>">RSS Feed</a></li>
					<li class="newsletter_signup"><a href="http://eepurl.com/na5hL" target="_blank">Newsletter Sign-up</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<nav class="top-bar" data-topbar role="navigation">
			  <!-- Title -->
			  <ul class="title-area">
			    <li class="name"><h1><a href="/">HOME</a></h1></li>

			    <!-- Mobile Menu Toggle -->
			    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			  </ul>

			  <!-- Top Bar Section -->
			  
			  <section class="top-bar-section">


			  	<ul class="left">

			  		<!--<li class="name"><h1><a href="/">HOME</a></h1></li>-->
			      
			      <li><a href="/videos">ELECTRICAL VIDEOS</a></li>
			      <li class="has-dropdown not-click"><a href="/resources">ELECTRICAL RESOURCES</a>
			      	<ul class="dropdown"><li class="title back js-generated"><h5><a href="javascript:void(0)">Back</a></h5></li><li class="parent-link hide-for-medium-up"><a class="parent-link js-generated" href="#">ELECTRICAL RESOURCES</a></li>
				      <li><a href="/neca">NECA</a></li>
			          <li><a href="/ibew">IBEW</a></li>
			          <li><a href="/njatc">NJATC</a></li>
				    </ul>  
				  </li>
			      <li><a href="/blog">BLOG</a></li>
			      
			    </ul>
			  

			    <ul class="right">

			      <!-- Search | has-form wrapper -->
			      <li class="has-form">
			      	<div class="row collapse">
			      	<form method="get" id="searchform" action="<?php echo home_url('/'); ?>">
				        <div id="plc_lt_zoneHeader_SearchBox_pnlSearch" class="row collapse searchBox">
				          <div class="large-11 small-9 columns">
				          	<label for="s" id="plc_lt_zoneHeader_SearchBox_lblSearch" style="display:none;">Search for:</label>
				          	<input type="text" class="txtSearch" placeholder="Search" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s">
				            <!-- <input type="text" placeholder="Search"> -->
				          </div>
				          <div class="large-1 small-3 columns">
				          	<input type="image" class="btnSearch" id="searchsubmit" src="/img/btnSearch.gif" alt="Search">
				            <!-- <a href="#" class="alert button expand">Search</a> -->
				          </div>
				        </div>
				    </form>
				    </div>
			      </li>
			    </ul>
			  </section>
			 </nav>


			<!-- <div id="topNavSearch">
				<div class="topNav">
					<ul id="menuElem">
						<li><a href="/">HOME</a></li>
						<li><a href="/videos">ELECTRICAL VIDEOS</a></li>
						<li><a href="/resources">ELECTRICAL RESOURCES</a>
							<ul id="subMenu">
								<li><a href="/neca">NECA</a></li>
								<li><a href="/ibew">IBEW</a></li>
								<li><a href="/njatc">NJATC</a></li>
							</ul>
						</li>
						<li><a href="/blog">BLOG</a></li>
					</ul>
				</div>

				<form method="get" id="searchform" action="<?php echo home_url('/'); ?>">
					<div id="plc_lt_zoneHeader_SearchBox_pnlSearch" class="searchBox">
						<label for="s" id="plc_lt_zoneHeader_SearchBox_lblSearch" style="display:none;">Search for:</label>
						<input type="text" class="txtSearch" placeholder="Search" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s">
						<input type="image" class="btnSearch" id="searchsubmit" src="/img/btnSearch.gif" alt="Search" style="border-width:0px; width: 30px; height: 28px;">
					</div>
				</form>
			</div> -->
		</div>
	</div>