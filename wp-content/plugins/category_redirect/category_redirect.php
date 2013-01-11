<?php   
/* 
Plugin Name: Category Redirect
Plugin URI: http://www.wpjudge.com
Description: Plugin for redirect the category
Author: Marquis Hunt & Mr. Rahman (contact@webtechads.com)
Version: 1.1 
Author URI: http://www.webtechads.com
*/




### SET THE ADMIN MENU ##
function CatRedr_Admin_Menu(){
	
	add_options_page("Category Redirect", "Category Redirect", "activate_plugins" , "Category_Redirect", "CatRedr_Admin_Form");  
	
}


## CREATE NEW TABLE TO STORE REDIRECT LINK ##
function DB_Install(){
	global $wpdb;
    $table = $wpdb->prefix."cat_redirect";
    $structure = "CREATE TABLE $table (
                      `id` MEDIUMINT( 10 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
                      `cat_id` MEDIUMINT( 10 ) NOT NULL ,
                      `url` TEXT NOT NULL 
                      );";
    $wpdb->query($structure);
    
}



### GET THE CATEGORY REDIRECT LINK FROM DB ##
function Cat_redirect_Link($catID){
	global $wpdb;
	$SQL = "SELECT * FROM ". $wpdb->prefix."cat_redirect". " WHERE `cat_id` = '$catID'";
	$Result =  $wpdb->get_results($SQL,OBJECT);
	return $Result[0]->url;
}



###  MAIN FUNCTION TO SHOW CATEGORY LINK ##
function PrePare_Cat_Link($LINK,$Cat_ID){
		
	$Cat_Link = Cat_redirect_Link($Cat_ID);
	
	if($Cat_Link==''){
		$Cat_Link = $LINK;
	}
	
	return $Cat_Link;
	
}


## SET THE ADMIN PANEL TO CHANGE OR SET CAT REDRIRECT URL ###
function CatRedr_Admin_Form(){
	
	global $wpdb;
	
    include('cat_form.php');
	
}


## CATGEORY LINK
add_filter('category_link', 'PrePare_Cat_Link' ,10 ,2);
## INSTALL DB
add_action('activate_category_redirect/category_redirect.php', 'DB_Install');
## CREATE ADMIN MENU
add_action('admin_menu', 'CatRedr_Admin_Menu');  


?>