	</div><!-- /#wrap -->


	<div id="footer" class="container">
		<div class="footerContainer row">
			<div class="footer-left large-2 medium-4 small-12 columns">
				<div class="rss"><img alt="RSS" src="/img/rss.png" />RSS Feed</div>
				<ul class="footerRSS">
					<li><a href="http://eepurl.com/na5hL" target="_blank">subscribe</a></li>
					<li><a href="https://plus.google.com/113279337207576038180" rel="publisher">Google+</a></li>
					<!--<li><a href="#">learn more</a></li>-->
				</ul>
			</div>
			
			<div class="footer-right large-10 medium-8 small-12 columns">
				<div class="newsletter">Newsletter Sign-up</div>

				<div class="row">

					<div id="plc_lt_zoneFooter_NewsletterSubscriptionFooter_pnlSubscription" class="Subscription large-7 medium-7 small-12 columns">
		
						<div class="NewsletterSubscription">
							<form action="http://electrictv.us4.list-manage1.com/subscribe/post?u=ffcb7e918564d542fe0cdb4e2&amp;id=59d636fc06" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
								<table cellspacing="0" cellpadding="0" border="0" class="Table">
									<tr>
										<td>
											<input name="FNAME" type="text" maxlength="200" id="mce-FNAME" class="SubscriptionTextbox" placeholder="First Name" />
										</td>
										<td>
											<input name="LNAME" type="text" maxlength="200" id="mce-LNAME" class="SubscriptionTextbox" placeholder="Last Name" />
										</td>
									</tr>
									<tr>
										<td>
											<input name="EMAIL" type="email" maxlength="400" id="mce-EMAIL" class="SubscriptionTextbox" placeholder="Email Address" />
										</td>
										<td class="right">
											<input type="image" name="subscribe" id="mc-embedded-subscribe" src="/img/btnSubscribeFooter.png" />
										</td>
									</tr>
								</table>
							</form>
						</div>

					</div> <!-- plc_lt_zoneFooter_NewsletterSubscriptionFooter_pnlSubscription -->

					<div class="newsletterText large-5 medium-5 small-12 columns">
						Each time a new edition of videos is posted on Electric TV, we send out an e-mail announcement to everyone who has subscribed to receive updates.
					</div>
				</div>
				<ul id="footerNav">
					<?php if (is_front_page()) { ?>
						<!--<li><a rel="nofollow" href="http://www.blueriotlabs.com/">Web Development Denver</a> by Blue Riot Labs</li>-->
					<?php } ?>
					<!--<li><a href="#">Learn more</a></li>-->
					<li><a href="/contact">Contact Us</a></li>
					<li>Created and produced by <a href="http://www.oswegocreative.com/">Oswego Creative</a></li>
					<li class="last"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></li>
				</ul>
			</div>
			
	</div>



	<?php roots_footer_before(); ?>
<!--
	<footer id="content-info" class="<?php echo WRAP_CLASSES; ?>" role="contentinfo">
		<?php roots_footer_inside(); ?>
		<?php dynamic_sidebar('sidebar-footer'); ?>
		<p class="copy"><small>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></small></p>
	</footer>
-->
	<?php roots_footer_after(); ?>

	<?php wp_footer(); ?>
	<?php roots_footer(); ?>
	
	<?php
		if ( 'etv_video' == get_post_type() && is_single() ) { ?>
			<script>
			// Video Embed //
			$('body').html(function(i, html) {
			    return html.replace(/(?:http:\/\/)?(?:www\.)?(?:youtube\.com|youtu\.be)\/(?:watch\?v=)?(.+)/g, '<iframe width="640" height="385" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>');
			});
			</script>
		<?php }
	?>
</body>

<?php

if ( is_page( 1245 ) ) { ?>

<!-- Google Code for ETV Newsletter Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 971488678;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "O1yGCOqugAkQpvuezwM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js ">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/971488678/?label=O1yGCOqugAkQpvuezwM&amp;guid=ON&amp;script=0 "/>
</div>
</noscript>
<!-- END - Google Code for ETV Newsletter Conversion Page -->
<?php } ?>

<!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 971488678;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/971488678/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</html>