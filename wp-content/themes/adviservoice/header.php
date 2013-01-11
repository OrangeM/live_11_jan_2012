<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php wp_title(); ?> AdviserVoice</title>

<link rel="stylesheet" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/events/events.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="print" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/print.css" />
<link rel="apple-touch-icon" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/global/apple_touch.png" type="image/png" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.adviservoice.com.au/feed/" />
<link rel="shortcut icon" href="http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/favicon.ico" />
<script language="javascript" src="http://www.adviservoice.com.au/wp-includes/js/jquery/jquery.js"></script>
<style type="text/css">
	<?php
		$image = get_post_meta($post->ID, 'background', true);
	?>

	#featured-gallery .featured-container {
		background:url(<?php echo get_post_meta($post->ID, 'background', true); ?>) no-repeat #ccc;
	}
</style>
<?php wp_head(); ?>
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
<?php
if (is_category( )) {
	$current_slug = get_category (get_query_var('cat'));
	echo "googletag.pubads().setTargeting('Category', '".$current_slug->slug."');";
}
?>
googletag.pubads().enableSingleRequest();
googletag.enableServices();
});
</script>
</head>

<body class="homepage">
<!--[if lte IE 6]><script src="<?php bloginfo('template_directory'); ?>/ie6/warning.js"></script><script>window.onload=function(){e("<?php bloginfo('template_directory'); ?>/ie6/")}</script><![endif]-->

<?php
 require_once('content-of-header.php');
?>
