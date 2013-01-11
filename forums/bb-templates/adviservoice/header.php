<?php
include("templateoptions.php");
$_head_profile_attr = '';
if ( bb_is_profile() ) {
	global $self;
	if ( !$self ) {
		$_head_profile_attr = ' profile="http://www.w3.org/2006/03/hcard"';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"<?php bb_language_attributes( '1.1' ); ?>>
<head<?php echo $_head_profile_attr; ?>>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php bb_title() ?>
</title>
<link rel="stylesheet" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="print" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/print.css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.adviservoice.com.au/feed/" />
<link rel="apple-touch-icon" href="http://www.adviservoice.com.au/images/global/apple_touch.png" type="image/png">
<link rel="shortcut icon" href="http://www.adviservoice.com.au/favicon.ico" />
<meta name='robots' content='noindex,nofollow' />
<link rel="alternate" type="application/rss+xml" title="AdviserVoice dev &raquo; Community Comments Feed" href="http://www.adviservoice.com.au/connect/community/feed/" />
<script type='text/javascript' src='http://www.adviservoice.com.au/wp-includes/js/jquery/jquery.js?ver=1.4.2'></script>
<!--script type="text/javascript" src="http://www.adviservoice.com.au/wp-content/plugins/pre-loaded/preloaded.js"></script-->
<script type="text/javascript"> 
	/*jQuery(document).ready(function(){
		jQuery.getpreLoaded();
	}); */
</script>

<?php bb_feed_head(); ?>
<?php bb_head(); ?>
<link rel="stylesheet" href="<?php bb_stylesheet_uri(); ?>" type="text/css" />
<script type='text/javascript'>
var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
(function() {
var gads = document.createElement('script');
gads.async = true;
gads.type = 'text/javascript';
var useSSL = 'https:' == document.location.protocol;
gads.src = (useSSL ? 'https:' : 'http:') + 
'//www.googletagservices.com/tag/js/gpt.js';
var node = document.getElementsByTagName('script')[0];
node.parentNode.insertBefore(gads, node);
})();
</script>
<script type='text/javascript'>
googletag.cmd.push(function() {
googletag.defineSlot('/4546811/homepage_top_center_728_90', [728, 90], 'div-gpt-ad-1344212299491-0').addService(googletag.pubads());
googletag.defineSlot('/4546811/hp_midpage_468_60', [468, 60], 'div-gpt-ad-1344209494585-0').addService(googletag.pubads());
googletag.defineSlot('/4546811/HP_bottom_468_60', [468, 60], 'div-gpt-ad-1344209713945-0').addService(googletag.pubads());
googletag.defineSlot('/4546811/SideBar_bottom_250_250', [250, 250], 'div-gpt-ad-1344210137887-0').addService(googletag.pubads());
googletag.defineSlot('/4546811/sidebar_top_250_250', [250, 250], 'div-gpt-ad-1344210257055-0').addService(googletag.pubads());
googletag.defineSlot('/4546811/sidebar_skyscraper_120_600', [120, 600], 'div-gpt-ad-1344214265017-0').addService(googletag.pubads());
googletag.defineSlot('/4546811/Category_secondpost_268_60', [468, 60], 'div-gpt-ad-1344219261300-0').addService(googletag.pubads());
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
</head>
<body id="<?php bb_location(); ?>" class="forum">
<?php
 require_once(ABSPATH . 'wp-content/themes/adviservoice/content-of-header.php');
?>
