<?php 
/* 
Template Name:  Registration
*/ 

require_once( ABSPATH . WPINC . '/registration.php' );
/* Check if users can register. */
$registration = get_option( 'users_can_register' );
/* If user registered, input info. */
if ( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) && $_POST['action'] == 'adduser' ) {
	//$user_pass = wp_generate_password();
	$userdata = array(
		'user_pass' => esc_attr( $_POST['password'] ),
		//'user_login' => esc_attr( $_POST['first_name']."_".$_POST['last_name'] ),
		'user_login' => esc_attr( $_POST['email'] ),
		'first_name' => esc_attr( $_POST['first_name'] ),
		'last_name' => esc_attr( $_POST['last_name'] ),
		'display_name' => esc_attr( $_POST['first_name']." ".$_POST['last_name'] ),
		'nickname' => "",
		'user_email' => esc_attr( $_POST['email'] ),
		'user_url' => "",
		'aim' => "",
		'yim' => "",
		'jabber' => "",
		'description' => "",
		'role' => get_option( 'default_role' ),
	);
 
	if ( !$userdata['user_login'] )
		$error = __('A username is required for registration.', 'frontendprofile');
	elseif ( username_exists($userdata['user_login']) )
		$error = __('Sorry, that username already exists!', 'frontendprofile');
 
	elseif ( !is_email($userdata['user_email'], true) )
		$error = __('You must enter a valid email address.', 'frontendprofile');
	elseif ( email_exists($userdata['user_email']) )
		$error = __('Sorry, that email address is already used!', 'frontendprofile');
 
	else{
		$new_user = wp_insert_user( $userdata );
		wp_new_user_notification($new_user, esc_attr( $_POST['password'] ));
		
		update_usermeta( $new_user, 'jobtitle', esc_attr( $_POST['jobtitle']  )  );
		update_usermeta( $new_user, 'company', esc_attr( $_POST['company']   ) );
		update_usermeta( $new_user, 'postcode', esc_attr( $_POST['postcode']   ) );
		update_usermeta( $new_user, 'dealergroup', esc_attr( $_POST['dealergroup']   ) );
		update_usermeta( $new_user, 'industry', esc_attr( $_POST['industry']   ) );
		update_usermeta( $new_user, 'jobfunction', esc_attr( $_POST['jobfunction']  )  );
		
		
	}
 
}


?>
<?php get_header(registration); ?>  
    <div id="container">
            
		<?php if ($new_user) : ?>       
        	<h1 class="blue-bg">Welcome</h1> 
        <?php else : ?>
			<h1 class="blue-bg"><?php the_title(); ?></h1>
        <?php endif; ?>    

            <div class="separator-arrow"> </div>
            
            <div id="content" role="main" class="staticp fullwidth">
        
		
                <div class="post-wrapper">
        	        
					<?php if (have_posts()) : ?>
                
                        <?php while (have_posts()) : the_post(); ?>
                
                            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                                <div class="entry">
                                	<div class="begin-post"></div>
                                    
                                    <?php if ($new_user) : ?>
                                    
                                    <h2>Thank you <?php echo $_POST['first_name']; ?> for joining AdviserVoice. Your password has been emailed to you for your records. You can change this anytime you wish</h2>
                                    <p><a href="/"><img border="0" src="<?php bloginfo('template_directory'); ?>/images/global/go-to-home.jpg" width="216" height="47" alt="Go to homepage" id="thankyouhome" /></a></p>
                                    
                                    <?php else: ?>
                                    
                                    <?php the_content(''); ?>
                                    
                                    <ul id="rpx-login-container">
                                    
									<?php dynamic_sidebar ('login'); ?>
									
                                    <li style="padding-top: 6px;">Use one of these social network accounts to login to AdviserVoice.</li>
                                    
                                    </ul>
                                    
                                    
                                    <!-- REGISTER FORM STARTS HERE -->
 
		<?php if ( is_user_logged_in() && !current_user_can( 'create_users' ) ) : ?>
 
			<p class="log-in-out alert">
			<?php printf( __('You are logged in as <a href="%1$s" title="%2$s">%2$s</a>.  You don\'t need another account.', 'frontendprofile'), get_author_posts_url( $curauth->ID ), $user_identity ); ?> <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php _e('Log out of this account', 'frontendprofile'); ?>"><?php _e('Logout &raquo;', 'frontendprofile'); ?></a>
			</p><!-- .log-in-out .alert -->
 
		
 
		<?php else : ?>
 
			<?php if ( $error ) : ?>
				<p class="error">
					<?php echo $error; ?>
				</p><!-- .error -->
			<?php endif; ?>
  
			<?php if ( $registration || current_user_can( 'create_users' ) ) : ?>
             
            
            <form method="post" id="adduser" class="user-forms" action="http://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
 
 
    <p class="first_name">
					<label class="required" for="first_name"><?php _e('First Name', 'frontendprofile'); ?></label>
					<input class="text-input" name="first_name" type="text" id="first_name" value="<?php if ( $error ) echo wp_specialchars( $_POST['first_name'], 1 ); ?>" />
				</p><!-- .first_name -->
 
				<p class="last_name">
					<label class="required" for="last_name"><?php _e('Last Name', 'frontendprofile'); ?></label>
					<input class="text-input" name="last_name" type="text" id="last_name" value="<?php if ( $error ) echo wp_specialchars( $_POST['last_name'], 1 ); ?>" />
				</p><!-- .last_name -->
                
                <p class="form-jobtitle">
					<label for="jobtitle"><?php _e("Job Title"); ?></label>
					<input type="text" name="jobtitle" id="jobtitle" value="<?php echo esc_attr( get_user_meta($user->ID, 'jobtitle',  true) ); ?>" class="regular-text" />
				</p><!-- .form-jobtitle -->

				<p class="form-company">
					<label for="company"><?php _e("Company"); ?></label>
					<input type="text" name="company" id="company" value="<?php echo esc_attr( get_user_meta($user->ID, 'company',  true ) ); ?>" class="regular-text" />
				</p><!-- .form-company -->
                
              <p class="form-suburb">
				<label class="required" for="postcode"><?php _e("Postcode"); ?></label>
					<input type="text" name="postcode" id="postcode" value="<?php echo esc_attr( get_user_meta($user->ID, 'postcode',  true ) ); ?>" class="regular-text" />

				</p><!-- .form-suburb -->
                
                <p class="form-dealergroup">
					<label for="dealergroup"><?php _e("Dealer Group"); ?></label>
					<input type="text" name="dealergroup" id="dealergroup" value="<?php echo esc_attr( get_user_meta($user->ID, 'dealergroup',  true ) ); ?>" class="regular-text" />
                <img src="<?php bloginfo('template_directory'); ?>/images/global/where-applicable.jpg" width="114" height="23" alt="Where Applicable" /> </p>
                <!-- .form-dealergroup -->
                
                <p class="form-industry">
				  <label class="required" for="industry"><?php _e("Industry"); ?></label>
					<?php $selval = esc_attr( get_user_meta($user->ID, 'industry',  true ) ); ?>
<select  name="industry" id="industry">
<option <?php if($selval=="") echo "selected" ?> value="">Select...</option>
<option <?php if($selval=="Financial Planning Practice") echo "selected" ?> value="Financial Planning Practice">Financial Planning Practice</option>
<option <?php if($selval=="Dealer Group Head Office") echo "selected" ?> value="Dealer Group Head Office">Dealer Group Head Office</option>
<option <?php if($selval=="Fund ManagerAccounting Practice") echo "selected" ?> value="Fund ManagerAccounting Practice">Fund ManagerAccounting Practice</option>
<option <?php if($selval=="Service Provider") echo "selected" ?> value="Service Provider">Service Provider</option>
<option <?php if($selval=="Other") echo "selected" ?> value="Other">Other</option>
</select>

			  </p><!-- .form-industry -->
                
                <p class="form-jobfunction">
				  <label class="required" for="jobfunction"><?php _e("Job Function"); ?></label>
					<?php $selval = esc_attr( get_user_meta($user->ID, 'jobfunction',  true ) ); ?>
<select  name="jobfunction" id="jobfunction">
<option <?php if($selval=="") echo "selected" ?> value="">Select...</option>
<option <?php if($selval=="Financial Planner") echo "selected" ?> value="Financial Planner">Financial Planner</option>
<option <?php if($selval=="Principle") echo "selected" ?> value="Principle">Principle</option>
<option <?php if($selval=="Sales/Marketing") echo "selected" ?> value="Sales/Marketing">Sales/Marketing</option>
<option <?php if($selval=="Business Development") echo "selected" ?> value="Business Development">Business Development</option>
<option <?php if($selval=="Technical") echo "selected" ?> value="Technical">Technical</option>
<option <?php if($selval=="Administration") echo "selected" ?> value="Administration">Administration</option>
<option <?php if($selval=="Portfolio Management") echo "selected" ?> value="Portfolio Management">Portfolio Management</option>
<option <?php if($selval=="Relationship Management") echo "selected" ?> value="Relationship Management">Relationship Management</option>
<option <?php if($selval=="Other") echo "selected" ?> value="Other">Other</option>

</select>

				</p><!-- .form-jobfunction -->

    <p class="form-email">
					<label class="required" for="email"><?php _e('E-mail (required)', 'frontendprofile'); ?></label>
					<input class="text-input" name="email" type="text" id="email" value="<?php if ( $error ) echo wp_specialchars( $_POST['email'], 1 ); ?>" />
				</p><!-- .form-email -->
                
                
                <p class="form-password">
				<label class="required" for="password"><?php _e("Password"); ?></label>
					<input type="password" name="password" id="password" value="" class="regular-text" />
					<span id="confirmpasswordlabel"><?php _e("Confirm Password"); ?></span>
                    <input type="password" name="confirmpassword" id="confirmpassword" value="" class="regular-text" />
				</p><!-- .form-password -->


				<div id="terms">
                  <p>The AdviserVoice Forums are not moderated.</p>
                  <p>You agree to an accepted measure of forum protocol.</p>
                  <p>You agree to be respectful to other users. Forums are not the place to air grievances between users, nor are they the place to disclose sensitive information. You also agree not to post any abusive, slanderous, threatening, sexually-orientated or discriminatory material. If you violate this code or any laws, you may be immediately and permanently banned, with notification to your Internet Service Provider if required.</p>
                  <p>You agree that AdviserVoice has the right to remove, edit, move or close any topic at any time.</p>
                  <p>You are not to post somebody else's private details. This is a serious breach of the AdviserVoice code and will result in your profile being immediately and permanently deleted.</p>
                  <p>Posting website URLS in forum subjects is forbidden. (You may use URLs in the message body however they will be removed if they link to material contrary to the forum terms of use.) </p>
                  <p>You agree not to spam other users and you agree not to use the forum for selling unless we create a section of the forum dedicated to 'personal' trading and selling. This includes unsolicited emails or private messages to other members. Please note that spamming is an offence in Australia. </p>
                  <p>As a member and user you agree to any information you have entered being stored in a database. This information will not be disclosed to any third party without your consent, however AdviserVoice is not to be held responsible in the unlikely event this data is externally compromised through hacking or virus.</p>
				</div>
                
                <p class="form-agree">
					<input type="checkbox" name="agree" id="agree" value="yes" class="regular-check" />
                  <label class="required widelabel" for="agree">I agree to the AdviserVoice forum Terms &amp; Conditions</label>
					
				</p><!-- .form-agree -->

					<?php
                      //require_once('captcha/recaptchalib.php');
                      //$publickey = "6LdsN78SAAAAANXTGg40F6j01MoCeXIaOv4w-0xc"; // you got this from the signup page
                      //echo recaptcha_get_html($publickey);
                    ?>

                
                
                
  			 <p class="form-submit">
					<?php echo $referer; ?>
					<input name="adduser" type="submit" id="addusersub" class="submit button" value="<?php if ( current_user_can( 'create_users' ) ) _e('Join', 'frontendprofile'); else _e('submit', 'frontendprofile'); ?>" />
					<?php wp_nonce_field( 'add-user' ) ?>
					<input name="action" type="hidden" id="action" value="adduser" />
				</p><!-- .form-submit -->
 
			</form><!-- #adduser -->

			<?php endif; ?>
 
		<?php endif; ?>
 
<!-- REGISTER FORM ENDS HERE -->

<ul id="registrationlinks">
	<li><a href="/about">Find out more about AdviserVoice</a></li> 
    <span>|</span>
    <li><a href="/privacy">Read our Privacy Policy</a></li>     	                               
</ul>

<?php endif; /* end if new_user*/ ?>

                                </div>
                
                            </div>
                
                        <?php endwhile; ?>

                
                    <?php endif; ?>
				
                </div> <!--end post wrapper-->
            
        </div> <!--end content-->        		
        
        
    	
    </div> <!--end container-->
    
	<?php get_footer(); ?>
</div> <!--end wrapper-->

</body>
</html>
