    <div id="footer">
    	<ul>
        	<li class="first"><a href="<?php bloginfo('url')?>/about">About us</a></li>
            <li><a href="<?php bloginfo('url')?>/contact">Contact us</a></li>
           	<li><a href="<?php bloginfo('url')?>/privacy">Privacy policy</a></li>
            <li><a href="<?php bloginfo('url')?>/sitemap">Site map</a></li>
            <li><a href="<?php bloginfo('url')?>/feedback-suggestions" class="problem">Feedback and suggestions</a></li>
            <li class="last"><a href="<?php bloginfo('url')?>/advertise">Advertise</a></li>
        </ul>
        <p>AdviserVoice 78 Lower Deck Jones Bay Wharf, 26-32 Pirrama Road Pyrmont Point 2009 NSW Australia.<br />
Copyright &copy; <?php echo date('Y'); ?> AdviserVoice PTY Limited. All rights reserved. ABN 17 145 288 375  Reproduction in whole or in part in any form or medium without express written permission of AdviserVoice PTY Limited is prohibited. Site design and development by <a href="http://www.inqbase.com" class="grey" target="_blank">inqbase</a>. Icon designs from the <a href="http://www.webdesignerdepot.com" class="grey" target="_blank">web designer depot</a>.</p>
    
    </div> <!--end footer-->
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
