<? if (IS_KIOSK_STORE == false) {
	// Only do this if this is the main snapfon store ?>
	<? if (!isset( $checkoutPage)) { ?>
    <hr />
	<div id='pageFooter'>
	<?
	// Let's use our new footer, but also make it easy to revert...
	if (true) { ?>
		<table width="100%" border="0" cellspacing="10">
			<tr>
				<td colspan="6" class="bigText" style="text-align: center;">
					<a class="footerLink" href='<?= $mainSitePath ?>'>Home</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>about-snapfon-products/bigbuttoncellphones'>Phone</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>services/onecall_mobile.php'>sosPlus</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>CellPhonePlansforSeniors'>Plans</a> |
					 <a class="footerLink" href="<?= $mainSitePath ?>catalog/index.php">Shop</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>services/handset_protection.php'>ezProtection</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>customer-testimonials/index.php'>Reviews</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>support/index.php'>Support</a> <br />
					 <a class='footerLink' href='<?= $mainSitePath ?>about/'>About</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>support/eztwo/index.php?sec=em'>Contact</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>support/index.php?sec=faq&fid=<?= FAQ_TOPIC_TROUBLESHOOTING ?>'>Trouble&nbsp;Shooting</a> |
					 <a class='footerLink' href='<?= HTTP_SERVER ?>/blog/instructional-video' target="_self">Instructional&nbsp;Videos</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>support/index.php?sec=dl'>Downloads</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>support/all_terms.php'>Terms & Conditons</a> |
					 <a class="footerLink" href='<?= $mainSitePath ?>blog/'>Blog</a> |
					 <a class="footerLink" href="https://plus.google.com/112689467266822002053/about" rel="publisher">Google+</a>
				</td>
			</tr>
			<? if (pageGroup() != 'activate') { ?>
				<tr>
					<td colspan="6" id='footerFinePrint'>
                        <!--* Our offices will be closed  Nov. 28th - Dec. 1st *<br />-->
                        * One-time service plan activation fee of $<?= ACTIVATION_FEE_AMOUNT ?> not included in $<?= PRICE_WITH_PLAN ?> phone price<br />
						** 130 monthly minutes + 150 Bonus Minutes Free for the first month<br />
						<!---<div>Holiday alert!!!
						---Offices will be closed July 4th for Independence Day---
						</div>--->
					</td>
				</tr>
			<? } ?>
			<tr>
				<td class='ezGreen bigText' colspan="6" style="text-align: center;">
<?php if (false) { // Unkmar footer ?>
<style>
#footerContact td {
	color: #367c2b;    /* ezGreen */
	font-size: 16px;   /* bigText */
	font-weight: bold; /* bigText */
	text-align: left;
	padding: 0 5px;
}
</style>
					<table id='footerContact' style='display: inline-block;'>
						<tr>
							<td>
								Call Toll Free:
							</td><td>
								(800) 937-1532
							</td>
						</tr><tr>
							<td>
								Monday - Friday:
							</td><td>
								9am - 7pm EST
							</td>
						</tr><tr>
							<td>
								Saturday:
							</td><td>
								9am - 1pm EST
							</td>
						</tr>
					</table>
<?php } else { ?>
					<span class ='biggerText'>(423) 535-9968</span><br />
                    <span class='normalText'>(800) 937-1532</span><br />
					(Monday - Friday 9am - 7pm / Saturday 9am - 1pm EST)
<?php } ?>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<div style="text-align:center;">
						<img src="<?= $mainSitePath ?>images/trustbar/better-business.png" alt="A+ Rated by Better Business Bureau" width="33" height="52" />
						<img src="<?= $mainSitePath ?>images/trustbar/amazon-logo.png" alt="Available on Amazon.com" width="94" height="50" />
						<img src="<?= $mainSitePath ?>images/trustbar/Manta-member-snapfon.jpg" alt="Manta Member" width="105" height="50" />
						<img src="<?= $mainSitePath ?>images/trustbar/Chattanooga-Chamber-Of-Commerce.png" alt="Chattanooga Chamber Of Commerce" width="88" height="60" />
					</div>
				</td>
				<td colspan="2" style="text-align: center;">
					<img src="<?= $mainSitePath ?>images/trustbar/credit-cards-v3.jpg" alt="Credit Cards We Accept" width="276" height="66" />
				</td>
				<td colspan="2">
					<div id='cctrust'>
						<script type="text/javascript" language="javascript">var ANS_customer_id="c167519e-4ebc-41c7-bbdb-6c736fed9c71";</script><script type="text/javascript" language="javascript" src="//verify.authorize.net/anetseal/seal.js" ></script><!--br><a href="http://www.authorize.net/" id="AuthorizeNetText" target="_blank">Online Payments</a-->
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="6" style="text-align: center;">
					&copy; 2004 - <?= date( "Y") ?>, <span class=''>Snapf&#333;n&reg;</span> and <a href='http://www.visikey.net/' target="visikey" class='footerLink'>Visikey&reg;</a> by SeniorTech, LLC&trade;<br /><br />
				</td>
			</tr>
		</table>
	<? } else { ?>
		<table width="100%" border="0">
			<tr>
				<td class='footerCell' width="200px">
					<span class='fakeHeading'>Products</span><br>
					<a class="footerLink" href='<?= $mainSitePath ?>about-snapfon-products/bigbuttoncellphones'>The <span class='snapName'>Snapf&#333;n&reg;</span> ezONE</a><br>
					<a class="footerLink" href="<?= $mainSitePath ?>catalog/index.php?showAcc=1">Accessories</a><br>
				</td>
				<td class='footerCell' width="200px">
					<span class='fakeHeading'>Services</span><br>
					<a class="footerLink" href='<?= $mainSitePath ?>CellPhonePlansforSeniors'>Service Plans & Coverage</a><br>
					<a class="footerLink" href='<?= $mainSitePath ?>services/ezcontact_setup.php'>ezContact</a><br>
					<a class="footerLink" href='<?= $mainSitePath ?>services/onecall_mobile.php'>oneCall Mobile<br>
					Response<br></a>
					<a class="footerLink" href='<?= $mainSitePath ?>services/handset_protection.php'>ezProtection</a>
				</td>
				<td class='footerCell' width="220px" rowspan="2">
					<span class='fakeHeading'>Support</span><br>
					<a class="footerLink" href='<?= $mainSitePath ?>index.php?sec=faq&fid=<?= FAQ_TOPIC_PURCHASING ?>'>Purchasing</a><br>
					<a class="footerLink" href='<?= $mainSitePath ?>index.php?sec=faq&fid=<?= FAQ_TOPIC_PHONESPECS ?>'>Phone Specifications</a><br>
					<a class="footerLink" href='<?= $mainSitePath ?>index.php?sec=faq&fid=<?= FAQ_TOPIC_PHONEFUNCS ?>'>Phone Functions</a><br>
					<a class="footerLink" href='<?= $mainSitePath ?>index.php?sec=faq&fid=<?= FAQ_TOPIC_ACTIVATION ?>'>Activation/Phone Service</a><br>
					<a class="footerLink" href='<?= $mainSitePath ?>index.php?sec=faq&fid=<?= FAQ_TOPIC_TROUBLESHOOTING ?>'>Trouble Shooting</a><br>
					<a class='footerLink' href='<?= HTTP_SERVER ?>/blog/videos/' target="_self">Video Support</a><br>
					<a class="footerLink" href='<?= $mainSitePath ?>index.php?sec=dl'>Downloads</a><br>
					<a class="footerLink" href='<?= $mainSitePath ?>index.php?sec=em'>E-Mail Support</a><br>
					<a class='footerLink' href='<?= $mainSitePath ?>tech_specs.php'>Technical Specs</a>
				</td>
				<td class='footerCell' width="120px" rowspan="2">
					<span class='fakeHeading'>About Us</span><br>
					<a class='footerLink' href='<?= $mainSitePath ?>about-snapfon-products/default.php'>About Us</a><br>
			   <br>
					<span class='fakeHeading'>Terms<br> &amp; Conditions</span><br>
					<a class='footerLink' href='<?= $mainSitePath ?>terms-conditions.php'>Use of Website</a><br>
					<a class='footerLink' href='<?= $mainSitePath ?>privacy-policy.php'>Privacy Policy</a><br>
					<a class='footerLink' href='<?= $mainSitePath ?>snapfon-warranty'>Mfg's Warranty</a><br>
					<a class='footerLink' href='http://puretalkusa.com/terms.php' target=_blank>Cellular Service</a><br>
					<a class='footerLink' href='<?= $mainSitePath ?>ezprotection-terms and condtions.php'>ezProtection</a><br>
					<a class='footerLink' href='<?= $mainSitePath ?>onecall-mobile-terms-conditions.php'>oneCall Mobile</a><br>
					<br><br>
					<span class="fakeHeading">Your Account</span><br>
					<a class="footerLink" href='<?= $mainSitePath ?>catalog/login.php'>Login</a><br>
					<a class="footerLink" href='<?= $mainSitePath ?>catalog/create_account.php'>Register</a>
				</td>
				<td width="40px">&nbsp;</td>
				<td class='footerCell' width="95px">
					<span class='fakeHeading'>Connect</span><br>
					<a class='footerLink' href="<?= $mainSitePath ?>index.php?sec=em">E-Mail</a><br>
					<a href="http://www.facebook.com/pages/Snapfon-Easy-to-See-Easy-to-use/317291298134" target='fb'><img src="<?= $mainSitePath ?>images/social/facebook-link-icon.jpg" alt="snapfon facebook-link-icon" width="21" height="20" align="top" /> facebook</a><br>
					<a href="http://www.twitter.com/snapfon" target="twitter"><img src="<?= $mainSitePath ?>images/social/twitter-link-icon.jpg" alt="snapfon twitter-link-icon" width="21" height="21" align="top" /> Twitter</a><br>
					<a href="http://www.youtube.com/user/snapfontv?feature=results_main" target="youtube"><img src="<?= $mainSitePath ?>images/social/youtube-link-icon.jpg" alt="snapfon youtube-link-icon" width="21" height="20" align="top"/> YouTube</a><br>
					<a href="<?= HTTP_SERVER ?>/blog" target="_self"><img src="<?= $mainSitePath ?>images/social/wordpress-blog-link-icon.jpg" alt="snapfon wordpress-blog-link-icon" width="21" height="20" align="top" /> Blog</a><br>
				</td>
			<tr>
				<td width="400px" colspan="2">
					<div style="text-align:left;">
						<img src="<?= $mainSitePath ?>images/trustbar/better-business.png" width="33" height="52" />
						<img src="<?= $mainSitePath ?>images/trustbar/amazon-logo.png" width="94" height="50" />
						<img src="<?= $mainSitePath ?>images/trustbar/Manta-member-snapfon.jpg" alt="Manta Member" width="105" height="50" />
						<img src="<?= $mainSitePath ?>images/trustbar/Chattanooga-Chamber-Of-Commerce.png" alt="Chattanooga-Chamber-Of-Commerce" width="88" height="60" /></a>
					</div>
				</td>
				<td width="125px" colspan="2">
					<div id='cctrust'>
						<img src="<?= $mainSitePath ?>images/trustbar/Credit-Cards-snapfon.jpg" alt="Credit-Cards-snapfon" width="80" height="52" />
						<script type="text/javascript" language="javascript">var ANS_customer_id="c167519e-4ebc-41c7-bbdb-6c736fed9c71";</script><script type="text/javascript" language="javascript" src="//verify.authorize.net/anetseal/seal.js" ></script><!--br><a href="http://www.authorize.net/" id="AuthorizeNetText" target="_blank">Online Payments</a-->
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="6">&nbsp;</td>
			</tr>
			</tr>
			<tr>
				<td colspan="6" align="center" id='footerFinePrint'>
					<span class="ezGreen">*One-time service plan activation fee of $35 not included in $19.99 phone price</span><br>
					<span class="ezGreen" style="h3">**130 monthly minutes + 150 Bonus Minutes Free for the first month</span><br>
					<span class='snapName'>Snapf&#333;n&reg;</span>, your source for <a href='<?= HTTP_SERVER ?>/bigbuttoncellphones'>Big Button Cell Phones</a>,
					<a href='<?= HTTP_SERVER ?>'>Cell Phones for Seniors</a> and <a href='<?= HTTP_SERVER ?>/CellPhonePlansforSeniors'>Cell Phone Plans for Seniors</a>
					<br>
					&copy; 2004 - <?= date( "Y") ?>, <span class='snapName'>Snapf&#333;n&reg;</span> and <a href='http://www.visikey.net/' target="visikey">Visikey&reg;</a> by Seniortech LLC&trade;</a><br><br>
				</td>
			</tr>
		</table>
		<!-- squish -->
	<? } ?>
		<!-- Google Code for Remarketing tag -->
		<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
		<script type="text/javascript">
			/* <![CDATA[ */
			var google_conversion_id = 996754550;
			var google_conversion_label = "cELkCLKqwAQQ9oil2wM";
			var google_custom_params = window.google_tag_params;
			var google_remarketing_only = true;
			/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
			<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/996754550/?value=0&amp;label=cELkCLKqwAQQ9oil2wM&amp;guid=ON&amp;script=0"/>
			</div>
		</noscript>
	 </div>
		<?php 
//				$alert_group = array('Home', 'Why Choose Us?', 'Phone', 'Plans', 'Shop', 'oneCall', 'Activate Phone');
//				$alert_group2 = array('home', 'phone', 'onecall', 'plans', 'catalog', 'reviews', 'services', 'contact', 'support', 'aboutus', 'activate');
				if (!((IS_KIOSK_STORE && isCSRPortal()) || isset($_SESSION['promo_alert']))) { 
					$promo_alert = 'seen';
					tep_session_register('promo_alert');
				?>
					<div id='promo_alert' title='Free Accessory !!!' style='display: none;'>
						<style>
							#promo_alert {
								position: relative;
								padding: 0;
							}
							#promo_alert div {
								background: transparent;
							}
							#promo_alert .ezGreen {
								position: relative;
								margin: 0.5em 1em;
								font-size: 36px;
								font-weight: bold;
								text-align: justify;
							}
							#promo_alert .lto {
								position: relative;
								font-size: 12px;
								font-style: italic;
								text-align: right;
							}
							#promo_alert .img {
								position: relative;
								text-align: center;
								width: 100%;
								z-index: 1;
							}
							#promo_alert .button289x38 {
								position: relative;
								width: 289px;
								z-index: 1;
							}
							#promo_alert .button289x38 {
								background-image: url(/catalog/images/buttons/plain-289x38.png);
							}
							#promo_alert .button289x38:hover {
								background-image: url(/catalog/images/buttons/plain-289x38-over.png);
							}
							#promo_alert .button289x38:active {
								background-image: url(/catalog/images/buttons/plain-289x38-click.png);
							}
							#promo_alert .gradient {
								position: absolute;
								bottom: 0px;
								left: 0px;
								background-image: url(<?= $mainSitePath; ?>/images/eztwo-free-accessory/lightbox-gradient.png);
								width: 100%;
								height: 420px;
								z-index: 0;
							}
						</style>
						<div class='ezGreen'>
							Get a <span class='ezOrange'>FREE</span> accessory with the purchase of any phone!
							<div class='lto'>Limited Time Offer!</div>
						</div>
						<div class='img'>
							<span><img src='<?= $mainSitePath; ?>/images/eztwo-free-accessory/lightbox.png' alt='FREE accessory with your purchase of any ezTWO phone'></span>
							<br /> <br />
							<span class='button button289x38'>C l o s e</span>
						</div>
						<div class='gradient'></div>
					</div>
					<script type="text/javascript">
						$(document).ready(function() {
							$('#promo_alert .button').click( function () {
								$('#promo_alert').dialog('close');
							});
							$promo_alert = $('#promo_alert').dialog({
								autoOpen: false, 
								closeOnEscape: true, 
								modal: true,
								width: 550,
//								height:215,
								resizable: false,
								title: false
							});
							$('#promo_alert').dialog('open');
						});
					</script>
		<?  } ?>
	<? } ?>
<? } else { ?>
	<hr />
	<table width="100%" border="0" cellspacing="10">
		<tr>
			<td colspan="6" style="text-align: center;">
				&copy; 2004 - <?= date( "Y") ?>, <span class=''>Snapf&#333;n&reg;</span> and Visikey&reg; by SeniorTech, LLC&trade;</a><br><br>
				<? if (IS_KIOSK_STORE && !isCSRPortal() && ($_SERVER['PHP_SELF'] == '/catalog/index.php') && $cart->qualifiesForFreeProduct()) { ?>
					<a href='index.php?promos=1'>Promos</a>
				<? } ?>
			</td>
		</tr>
	</table>
<? } ?>
<div id='lazy_load' style='display: none;'>
	<img src='/catalog/images/buttons/plain-over.png' />
	<img src='/catalog/images/buttons/plain-click.png' />
	<img src='/catalog/images/buttons/plain-blue-over.png' />
	<img src='/catalog/images/buttons/plain-blue-click.png' />
	<img src='/catalog/images/buttons/plain-289x38-over.png' />
	<img src='/catalog/images/buttons/plain-289x38-click.png' />
</div>
