<div align="center">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post"> 
<input type="hidden" name="cmd" value="_s-xclick"> 
<input type="hidden" name="hosted_button_id" value="9725636"> 
<input type="image" src="http://redsoxmaniac.wordpress.com/files/2009/11/plugin_donation.jpg" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> 
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"> 
</form> 

</div>
<?php

## IF CATEGORY IS NOT SET
if(!isset($_GET['CatId'])){
?>

<!---------------            MAIN HEADING          -------------->
<div class="wrap">
<?php    echo "<h2>" . __( 'Category Redirect Options' ) . "</h2>"; ?>
</div>



<table class="widefat fixed" cellspacing="0">
	<thead>
	 <tr>
	  <th scope="col" id="name" class="manage-column column-name" style="">Name</th>
	  <th scope="col" id="description" class="manage-column column-description" style="">Description</th>
	  <th scope="col" id="slug" class="manage-column column-slug" style="">Slug</th>
	  <th scope="col"  class="manage-column column-slug" style="">URL</th>
	 </tr>
	</thead>

	<tfoot>
	 <tr>
	  <th scope="col"  class="manage-column column-name" style="">Name</th>
	  <th scope="col"  class="manage-column column-description" style="">Description</th>
	  <th scope="col"  class="manage-column column-slug" style="">Slug</th>
	  <th scope="col"  class="manage-column column-slug" style="">URL</th>
	 </tr>
	</tfoot>
	
   <tbody id="the-list" class="list:cat">
   <?php
   
   $Term_ID = array();
   $Taxonomoy_Sql  = "SELECT * FROM ". $wpdb->prefix ."term_taxonomy WHERE `taxonomy` = 'category'"; 
   $Taxonomoy_Res  = $wpdb->get_results($Taxonomoy_Sql,OBJECT);
   foreach ($Taxonomoy_Res as $Txonomy){
   	$category = get_category( $Txonomy->term_id, OBJECT, 'display' );
   	//$SQL_SELECT = "SELECT * FROM ". $wpdb->prefix ."cat_redirect WHERE `cat_id` = '$category->cat_ID'"; 
   	//$URLRES  = $wpdb->get_results($SQL_SELECT,OBJECT);
   	
   	$REDR_URL = Cat_redirect_Link( $category->cat_ID );
  
  
    ?>

    <tr id='cat-3' class='iedit alternate'>
      <td class="name column-name">
	    <a class='row-title' href='options-general.php?page=Category_Redirect&CatId=<?php echo $category->cat_ID;?>' title='Edit &#8220;<?php echo $category->cat_name;?>&#8221;'> <?php echo $category->cat_name;?></a><br />
	    <div class="row-actions"><span class='edit'><a href="options-general.php?page=Category_Redirect&CatId=<?php echo $category->cat_ID;?>">Edit</a></span></div>
	    <div class="hidden" id="inline_3">
	    <div class="name"><?php echo $category->cat_name;?></div>
	    </div>
	  </td>
	  <td class="description column-description"><?php echo $category->description;?></td>
	  <td class="slug column-slug"><?php echo $category->slug;?></td>
	  <td class="slug column-slug"><?php echo $REDR_URL;?></td>
	</tr>	


    <?php
 	unset($category);	
    unset($REDR_URL);	
 	}
 	?>

</tbody>
</table>



<?php

### IF CAT ID IS SET
} else {
	
	$CatID = $_GET['CatId'];
	
	$category = get_category( $CatID, OBJECT, 'display' );
	 
	//$SQL_SELECT = "SELECT * FROM ". $wpdb->prefix ."cat_redirect WHERE `cat_id` = '$CatID'"; 
	 
	//$URLRES  = $wpdb->get_results($SQL_SELECT,OBJECT);
	
	$REDR_URL = Cat_redirect_Link( $CatID );
	
	
?>





         <div class="wrap">
			<?php    echo "<h2>" . __( 'Category Redirect Options for:<b>' ) .$category->name . "</b></h2>"; ?>
			
			<?php
			if(isset($_POST['catredirect'])){
				if(trim($_POST['url'])!=''){
					
					if($_POST['url']=='NULL'){
						
						$sql = "DELETE FROM `". $wpdb->prefix ."cat_redirect`  WHERE `cat_id` = '". $CatID ."'";
						$result = $wpdb->query($sql);
							
						echo "<div id=\"message\" class=\"updated fade\"><p><strong>" . __( 'URL REMOVED SUCCESSFULLY' ) . "</strong></p></div>"; 
						
					} else {
					
					if(preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $_POST['url'])){
		             	
						if(trim( $REDR_URL )==''){
							
							$sql = "INSERT INTO `". $wpdb->prefix ."cat_redirect`  (`cat_id`,`url`) VALUES('". $CatID ."','". $_POST['url'] ."')"; 
							
							$result = $wpdb->query($sql);
							
							echo "<div id=\"message\" class=\"updated fade\"><p><strong>" . __( 'URL INSERTED SUCCESSFULLY' ) . "</strong></p></div>"; 
							
						} else {
							
							$sql = "UPDATE ". $wpdb->prefix ."cat_redirect SET `url` ='". $_POST['url'] ."' WHERE `cat_id` = '". $CatID ."'"; 
							
							$result = $wpdb->query($sql);
							
							echo "<div id=\"message\" class=\"updated fade\"><p><strong>" . __( 'URL UPDATED SUCCESSFULLY' ) . "</strong></p></div>"; 
							
						}
                       
						
						
						
						
						
						
								
					} 
					
					
					else {
						echo "<div id=\"message\" class=\"updated fade\"><p><strong>" . __( 'URL IS NOT VALID' ) . "</strong></p></div>"; 
					} }
				} else {
					echo "<div id=\"message\" class=\"updated fade\"><p><strong>" . __(  'Redirect URL IS NULL' ) . "</strong></p></div>"; 
				}
			}
			
			
			$REDR_URL = Cat_redirect_Link( $CatID );
			
			?>
			
			
			<hr />
			<form name="oscimp_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
				<input type="hidden" name="catredirect" value="Y">
				
				<p><?php _e("Redirect URL: " ); ?><input type="text" name="url" value="<?php echo $REDR_URL;?>" size="30"><?php _e(" ex: http://www.solvease.com or NULL to Remove IT" ); ?></p>
				
			
				<p class="submit">
				<input type="submit" name="Submit" value="<?php _e('Update Options', 'catredrirect' ) ?>" />
				</p>
			</form>
		</div>
	
<?php

}
?>