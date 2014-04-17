<?php
SrizonFBUI::BoxHeader('box1', "Get The Pro Version", true);
?>
<div>
	<h4>Limitations of this version</h4>
	<ol>
		<li>Each album can display only 25 images or less</li>
		<li>Each gallery can display 25 or less album covers. Each cover will open an album with not more than 25 images</li>
		<li>No caption for images</li>
	</ol>
	<h4>What's in the pro version</h4>
	<ol>
		<li>Each album can display all the images from facebook. No limitation</li>
		<li>Each gallery will show all the album covers. Each cover will open the full album</li>
		<li>Description of each image from facebook will be used as image caption which is shown below the lightbox photo</li>
		<li>For each gallery you can Include a selected few albums or exclude a few albums and show all other albums</li>
	</ol>
	<h4>Get the pro version now</h4>
	<a target="_blank" href="http://www.srizon.com/wordpress-plugin/srizon-facebook-album">http://www.srizon.com/wordpress-plugin/srizon-facebook-album</a>
	<p>If you already have purchased the pro version contact the developer (afzal.csedu@gmail.com) with your purchase ID or email address you used for purchasing.</p>
</div>
<?php
SrizonFBUI::BoxFooter();
?>
<?php 
SrizonFBUI::BoxHeader('box0', "What to do");
	echo '<p><ol>
<li>Click on the Albums or Galleries submenu</li>		
<li>Click "Add New" button to add a new album or gallery. (or click on an existing album title to edit that)</li>
<li>Fill-up or modify the form and save that</li>
<li>Your albums or galleries will be listed along with the shortcodes. Use the shortcodes into your page/post to show the photo album or gallery</li>
<li>Try out different options to suit your need</li>
</ol></p>';
SrizonFBUI::BoxFooter();
SrizonFBUI::BoxHeader('box2', "Lightbox Options (Common for all albums)", true);?>
<form action="admin.php?page=SrzFb" method="post">
	<table>
		<tr>
			<td>
				<span class="label">Use Lightbox:</span>
			</td>
			<td>
				<input type="radio" name="loadlightbox" value="yes"<?php if($optvar['loadlightbox'] == 'yes') echo ' checked="checked"';?> />Built in Slimbox <br />
				<input type="radio" name="loadlightbox" value="mp"<?php if($optvar['loadlightbox'] == 'mp') echo ' checked="checked"';?> />Built in Magnificent Popup (Responsive) <br />
				<input type="radio" name="loadlightbox" value="no"<?php if($optvar['loadlightbox'] == 'no') echo ' checked="checked"';?> />Other Lightbox
			</td>
		</tr>
		<tr>
			<td>
				<span class="label">Lightbox Link Attribute <br /> <em>(Might be required for Other Lightbox)</em></span>
			</td>
			<td>
				<input type="text" name="lightboxattrib" value='<?php echo stripslashes($optvar['lightboxattrib']);?>' />
			</td>
		</tr>
		<tr>
			<td>
				<span class="label"><?php wp_nonce_field('SrjFb', 'srjfb_submit');?></span>
			</td>
			<td>
				<input type="submit" class="button-primary" name="submit" value="Save Options" />
			</td>
		</tr>
		
	</table>
</form>
<?php
SrizonFBUI::BoxFooter();
SrizonFBUI::BoxHeader('box3', "How to setup other lightbox: (An example showing setup instructions for FancyBox)", true);
?>
<table>
	<tr>
			<td>
				<ol>
					<li>Select 'Other Lightbox' above</li>
					<li>Put rel="something" on the next field (should be already there by default) and save</li>
					<li>Install <a target="_blank" href="http://wordpress.org/extend/plugins/fancybox-for-wordpress/">FancyBox for Wordpress</a></li>
					<li>After installation and activation of FancyBox plugin go to it's settings panel</li>
					<li>Select 'Extra Calls' Tab</li>
					<li>Check (activate) 'Additional FancyBox Calls'</li>
					<li>A textbox will expand. Put the following code there <br />
					<textarea disabled="disabled" rows="7" cols="50">jQuery(".jfbalbum > div.imgboxouter > a").fancybox({
  'transitionIn': 'elastic',
  'transitionOut': 'elastic',
  'speedIn': 600,
  'speedOut': 200,
  'type': 'image'
}); </textarea>
					</li>
					<li>Save Changes and reload the album on frontend</li>
					<li>Now you should see the images of this plugin loading in fancybox</li>
				</ol>
			</td>
		</tr>
</table>