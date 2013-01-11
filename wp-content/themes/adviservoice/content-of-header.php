<div class="top-page-background">
    <div class="header">
        <div id="masthead">

        	<div id="branding"><a href="<?php bloginfo('url') ?>"></a></div> <!--end branding-->

            <div class="floatR">

                <div id="small-menu">
                	<ul>
                    	<li class="first homelink"><a href="<?php bloginfo('url') ?>">home</a></li>
                        <li><a href="<?php bloginfo('url') ?>/about">about us</a></li>
                       <!-- <li><a href="<?php bloginfo('url') ?>/forums">Forums</a></li>-->
                       	<li><a href="<?php bloginfo('url') ?>/advertise">advertise</a></li>
						<li><a href="<?php bloginfo('url') ?>/connect/gurus/">gurus</a></li>
						<li class="first forumlink"><a href="<?php bloginfo('url') ;?>/forums">forums</a></li>

						<li class="first fb"><a href="http://www.facebook.com/adviservoice"><span>Facebook</span></a></li>
						<li class="first twitter"><a href="http://www.twitter.com/AdviserVoice"><span>Twitter</span></a></li>
						<li class="first linkedin"><a href="http://www.linkedin.com/company/adviservoice-pty-limited/"><span>Linkedin</span></a></li>
						<li class="first gplus"><a href="https://plus.google.com/108967861053599065292/posts"><span>Google+</span></a></li>
						<li class="first rss"><a href="<?php bloginfo('url') ;?>/feed/">&nbsp;</a></li>

                    </ul>

                </div> <!--end small menu-->

                <div id="search"> <a href="<?php bloginfo('url') ?>/search" title="Search on AdviserVoice"></a></div> <!--end search-->

				<?php
					if ( is_user_logged_in() ) {?>
                		<a href="<?php echo wp_logout_url(( $_SERVER['REQUEST_URI'])); ?>" title="Logout"><div id="logout"> </div> </a><!--end sign in-->

                <?php
				    } else { ?>

                        <div id="join"> <a href="<?php bloginfo('url') ?>/registration"></a></div><!--end join-->
                		<a href="<?php echo wp_login_url(( $_SERVER['REQUEST_URI'] )); ?>" class="button" title="Sign In"><div id="sign-in"> </div> </a><!--end sign in-->
					<?php };
				?>

        	</div> <!--end div floatR-->

        </div> <!--end masthead-->
    </div>
</div>
<!-- news ticker -->
		<?php if ( function_exists('insert_newsticker') ) {  insert_newsticker(); } ?>
<!-- end news ticker -->
<div class="menu-background">
  <div class="wrapper">
    <div class="header">
            <div id="access" role="navigation">
<!-- MENU -->

<?php $walker = new earn_cpd_points_walker();

wp_nav_menu (array (
'theme_location' => 'main-nav-menu',
'container' => 'false',
'menu_id' => 'main-menu',
'walker' => $walker,
'depth' => 0
) ); 
	
?>
            </div> <!--end access-->

	</div> <!--end header-->