<?php 
/* 
Template Name: Google search page
*/ 
?>

<?php get_header(); ?>  

<div id="container">
	
    <h1 class="blue-bg"><?php the_title(); ?></h1> 
    <div class="separator-arrow"> </div>

	<div id="cse-search-form" style="width: 100%;">Loading</div>
		<script src="http://www.google.com/jsapi" type="text/javascript"></script>
		<script type="text/javascript">
			google.load('search', '1', {language : 'en'});
		  	google.setOnLoadCallback(function() {
				var customSearchControl = new google.search.CustomSearchControl('013235726421117375294:9865xnwcjui');
				customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
				var options = new google.search.DrawOptions();
				options.setSearchFormRoot('cse-search-form');
				customSearchControl.draw('cse', options);
		  	}, true);
		</script>

        <link rel="stylesheet" href="http://www.google.com/cse/style/look/default.css" type="text/css" />
        <style type="text/css">
          
              #cse-search-form {
                margin: 20px 0;
                
              }
              .gsc-control-cse {
                font-family: Arial, sans-serif;
                border-color: #FFFFFF;
              }
              input.gsc-input {
                border-color: #BCCDF0;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
              }
              table.gsc-search-box td.gsc-input {
              
              padding-right:5px;}
              
              input.gsc-search-button {
                /* border-color: #336699;
                background-color: #E9E9E9; */
                background: url(http://www.adviservoice.com.au/wp-content/themes/adviservoice/images/search/search-button.png) no-repeat top left;
                border:0;
                text-indent:-9999em;
                width:75px;
                height:30px;
                cursor: pointer;	
              
              }
              .gsc-tabHeader.gsc-tabhInactive {
                border-color: #E9E9E9;
                background-color: #E9E9E9;
              }
              .gsc-tabHeader.gsc-tabhActive {
                border-top-color: #FF9900;
                border-left-color: #E9E9E9;
                border-right-color: #E9E9E9;
                background-color: #FFFFFF;
              }
              .gsc-tabsArea {
                border-color: #E9E9E9;
              }
              .gsc-webResult.gsc-result {
                border-color: #FFFFFF;
                background-color: #FFFFFF;
              }
              .gsc-webResult.gsc-result:hover {
                border-color: #FFFFFF;
                background-color: #FFFFFF;
              }
              .gs-webResult.gs-result a.gs-title:link,
              .gs-webResult.gs-result a.gs-title:link b {
                color: #1B75BC;
              }
              .gs-webResult.gs-result a.gs-title:visited,
              .gs-webResult.gs-result a.gs-title:visited b {
                color: #8db2ce;
              }
              .gs-webResult.gs-result a.gs-title:hover,
              .gs-webResult.gs-result a.gs-title:hover b {
                color: #1B75BC;
              }
              .gs-webResult.gs-result a.gs-title:active,
              .gs-webResult.gs-result a.gs-title:active b {
                color: #1B75BC;
              }
              .gsc-cursor-page {
                color: #00314F;
              }
              a.gsc-trailing-more-results:link {
                color: #00314F;
              }
              .gs-webResult.gs-result .gs-snippet {
                color: #646464;
              }
              .gs-webResult.gs-result .gs-visibleUrl {
                color: #1B75Bc;
              }
              .gs-webResult.gs-result .gs-visibleUrl-short {
                display:none;
              }
              .gsc-cursor-box {
                border-color: #FFFFFF;
              }
              .gsc-results .gsc-cursor-box .gsc-cursor-page {
                color:#1B75Bc;
                background-color: #FFFFFF;
              }
              
              .gsc-results .gsc-cursor-page.gsc-cursor-current-page {
                background-color: #FFFFFF;
                color:#00314F;
                font-weight:bold;
                text-shadow:none;
              }
              .gs-promotion.gs-result {
                border-color: #336699;
                background-color: #FFFFFF;
              }
              .gs-promotion.gs-result a.gs-title:link {
                color: #0000CC;
              }
              .gs-promotion.gs-result a.gs-title:visited {
                color: #0000CC;
              }
              .gs-promotion.gs-result a.gs-title:hover {
                color: #0000CC;
              }
              .gs-promotion.gs-result a.gs-title:active {
                color: #0000CC;
              }
              .gs-promotion.gs-result .gs-snippet {
                color: #000000;
              }
              .gs-promotion.gs-result .gs-visibleUrl,
              .gs-promotion.gs-result .gs-visibleUrl-short {
                color: #008000;
              }
        </style>


		<div id="cse"></div>

</div> <!--end container-->

<?php get_footer(); ?>

</div> <!--end wrapper-->

</body>
</html>
