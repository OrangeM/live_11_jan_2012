<?php 
/* 
Template Name: Splash Page
*/ 
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php bloginfo('name'); ?></title>
<script type="text/javascript" src="wp-content/themes/splash/iepngfix/iepngfix_tilebg.js"></script>



<style type="text/css" media="screen">

* {
	margin: 0;
	padding:0;
}

a img {
	border:0;
}

img, div, #wrapper, .button, p.intro, input { behavior: url(iepngfix/iepngfix.htc) }

body {
	background: url(wp-content/themes/splash/images/bground_200x200.png) repeat;
	color: #82C4DB/* 8ED8F8 */;
	padding: 0;
	margin: 0;
}
#wrapper {
	background: url(wp-content/themes/splash/images/wall_paper.png) repeat-x;
	height: 768px;
}

#twitter {
/* 	background:url(images/twitter.png);
	height:60px;
	width:135px;
	position: absolute;
	top:0;
	left: 900px;
 */}

#uptodate {
	width: 150px;
	height: 80px;
	background-image:url(wp-content/themes/splash/images/uptodate.png);
	position:absolute;
	top:520px;
	left:30px;
}
#header	{
	height: 80px;
	top: 40px;
	left:150px;
	position: absolute;
}

	#logo {
		height:80px;
		width:300px;
		background:url(wp-content/themes/splash/images/logo.png) no-repeat;
	}

#content	{
	top: 140px;
	left: 150px;
	position: absolute;
	padding-left: 52px;
/* 	padding-right: 300px;
 */}

h1	{
	font: normal 29px/46px Georgia, "Times New Roman", Times, serif;
	margin-bottom:30px;
	letter-spacing: 0.02em;
	 white-space: pre;  /* mantains the linebreaks as per HTML code */

}

p.intro	{
	background: url(wp-content/themes/splash/images/quote_sml.png) no-repeat;
	font: normal 17px/22px Georgia, "Times New Roman", Times, serif;
	padding-left: 90px;
	padding-top:10px;
	min-height: 60px;
	margin:20px 0;
	white-space: pre;  /* mantains the linebreaks as per HTML code */
}

fieldset input.btn {
	width:550px;
	height:50px;
	background: url(wp-content/themes/splash/images/submit2.png) no-repeat;
	border:0;
	color:#FFFFFF;
	font-size:14px;
	text-align:center;
	padding: 10px;
	display: block;
	margin: 10px 0;
	clear:both;
	cursor:pointer;

}

#mce-EMAIL {
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-border-radius: 4px; 
	padding: .2em 20px;
	width: 510px; 
	height:60px;
	z-index: 999; 
	background-color:#C6EBFB; 
	border:0; 
	font-size:26px; 
	line-height:60px;
	color:#999999;
	position:relative;

} 

input:focus { outline: 0 none; }

.email_container {
	width:100%;
	float:left;
}

#footer {
	display: block;
}
	#footer p {
		font: normal 11px/16px Arial, Helvetica, sans-serif;
		margin:0; 
	}




label {display:none;}


a { color: #8ED8F8;
	text-decoration:underline;}
	
	
/* input.input-text {
position: relative;
z-index: 2;
}
 
label {
position: relative;
z-index: 1;
}



label.inlined {
padding-left: 6px;
font-weight: normal;
font-size: 12px;
font-family: "Helvetica Neue";
opacity: 0.75;
-webkit-transition: opacity 0.15s linear;
}

label.inlined + input.input-text {
margin-top: -22px;
} */


</style>

</head>



<body>
	<div id="wrapper">
    	<div id="uptodate"></div>
		<div id="header"><div id="logo"></div></div><!--end header-->
<!--        <a href="http://twitter.com/AdviserVoice"><div id="twitter"></div></a>
--><div id="content">
        	<h1>The mission of AdviserVoice is to provide thought
leadership to financial advisers. This will include
industry-best education and training, panel discussions,
forums, blogs, latest'n'greatest product information
and one-on-one discussion opportunities.</h1>
<img src="wp-content/themes/splash/images/rule.png" width="500" height="2" />
        	<p class="intro">We’re not quite ready yet, but tell us who you are below
and we will let you know when we’re up and running.
<!-- In the meantime <a href="http://twitter.com/AdviserVoice">follow us on twitter</a> for the latest 
in AdviserVoice and industry related news.--></p>
    <img src="wp-content/themes/splash/images/rule.png" width="500" height="2" />
        
    <!-- Begin MailChimp Signup Form -->
<!--[if IE]>
<style type="text/css" media="screen">
	#mc_embed_signup fieldset {position: relative;}
	#mc_embed_signup legend {position: absolute; top: -1em; left: .2em;}
</style>
<![endif]--> 
<!--[if IE 7]>
<style type="text/css" media="screen">
	.mc-field-group {overflow:visible;}
</style>
<![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
<script type="text/javascript" src="http://downloads.mailchimp.com/js/jquery.validate.js"></script>
<script type="text/javascript" src="http://downloads.mailchimp.com/js/jquery.form.js"></script>

<div id="mc_embed_signup" style="width: 650px;">
<form action="http://adviservoice.us1.list-manage.com/subscribe/post?u=5e096d7faf7fe267be899fe83&amp;id=dd5aa22ef0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" style="font: normal 100% Arial, sans-serif;font-size: 13px;">
	
<fieldset style="padding-top: 1.5em;margin: 10px 0 0 0;background-color: transparent ;color: #fff;text-align: left; border:0;">
	
<div class="mc-field-group" style="margin: 1.3em 0;clear: both;overflow: hidden;">

<label for="mce-EMAIL" class="inlined" style="position: relative; left: -9999em;margin: .3em 0;line-height: 1em;font-weight: bold;">Email Address </label>
<input type="text" value="" name="EMAIL" class="required email input-text" id="mce-EMAIL" placeholder="your email address">
		<div class="button"><input type="submit" value="submit" name="subscribe" id="mc-embedded-subscribe" class="btn" style="width: 550px;"></div>


</div>


		<div id="mce-responses" style="float: left;padding: 0em;overflow: hidden;width:550px;margin:0;clear: both;">
			<div class="response" id="mce-error-response" style="display: none;margin: 1em 0;padding: 1em .5em .5em 0;font-weight: bold;float: left;z-index: 1;width: 80%;background: #FBE3E4;color: #D12F19; -moz-border-radius: 4px; border-radius: 4px; -webkit-border-radius: 4px;"></div>
			<div class="response" id="mce-success-response" style="display: none;margin: 10px 0;padding: 5px 10px;font-weight: bold;float: left;z-index: 1;width: 530px;background: #E3FBE4;color: #009933; 	-moz-border-radius: 4px; border-radius: 4px; -webkit-border-radius: 4px;"></div>
		</div>
	</fieldset>	
	<a href="#" id="mc_embed_close" class="mc_embed_close" style="display: none;">Close</a>
</form>
</div>
<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = 'margin: 10px 0 5px 0; padding: 5px 10px; background: #ffeeee; font-weight: bold; float: left; z-index: 1; width: 530px; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; color: #c00; -moz-border-radius: 4px; border-radius: 4px; -webkit-border-radius: 4px;';
}
var mce_jQuery = jQuery.noConflict();
mce_jQuery(document).ready( function($) {
  var options = { errorClass: 'mce_inline_error', errorElement: 'div', errorStyle: err_style, onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
  var mce_validator = mce_jQuery("#mc-embedded-subscribe-form").validate(options);
  options = { url: 'http://adviservoice.us1.list-manage.com/subscribe/post-json?u=5e096d7faf7fe267be899fe83&id=dd5aa22ef0&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                beforeSubmit: function(){
                    mce_jQuery('#mce_tmp_error_msg').remove();
                    mce_jQuery('.datefield','#mc_embed_signup').each(
                        function(){
                            var txt = 'filled';
                            var fields = new Array();
                            var i = 0;
                            mce_jQuery(':text', this).each(
                                function(){
                                    fields[i] = this;
                                    i++;
                                });
                            mce_jQuery(':hidden', this).each(
                                function(){
                                	if ( fields[0].value=='MM' && fields[1].value=='DD' && fields[2].value=='YYYY' ){
                                		this.value = '';
									} else if ( fields[0].value=='' && fields[1].value=='' && fields[2].value=='' ){
                                		this.value = '';
									} else {
	                                    this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                }
                                });
                        });
                    return mce_validator.form();
                }, 
                success: mce_success_cb
            };
  mce_jQuery('#mc-embedded-subscribe-form').ajaxForm(options);

});
function mce_success_cb(resp){
    mce_jQuery('#mce-success-response').hide();
    mce_jQuery('#mce-error-response').hide();
    if (resp.result=="success"){
        mce_jQuery('#mce-'+resp.result+'-response').show();
        mce_jQuery('#mce-'+resp.result+'-response').html(resp.msg);
        mce_jQuery('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                mce_jQuery('#mce-'+resp.result+'-response').show();
                mce_jQuery('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = mce_jQuery(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = mce_jQuery(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = mce_jQuery(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = mce_jQuery().parent(input_id).get(0);
                }
                if (f){
                    mce_jQuery(f).append(html);
                    mce_jQuery(input_id).focus();
                } else {
                    mce_jQuery('#mce-'+resp.result+'-response').show();
                    mce_jQuery('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            mce_jQuery('#mce-'+resp.result+'-response').show();
            mce_jQuery('#mce-'+resp.result+'-response').html(msg);
        }
    }
}
</script>
<!--End mc_embed_signup-->

        <div id="footer">
       	  <p>AdviserVoice PTY LTD. | 78 Lower Deck, Jones Bay Wharf, 26-32 Pirrama Road, Pymont Point NSW 2009<br />
              <a href="mailto:beheard@adviservoice.com.au">beheard@adviservoice.com.au</a> | 02 9692 9844 | copyright © 2010 inqbase PTY LTD. All Rights Reserved.</p>
        
        </div><!--end footer-->


      </div><!--end content-->
	</div><!--end wrapper-->
</body>
</html>
