<?php SrizonFBUI::BoxHeader('box2', "Lightbox Options (Common for all albums)", true);?>
<form action="admin.php?page=SrzFb" method="post">
	<table>
		<tr>
			<td>
				<span class="label">Use Lightbox:</span>
			</td>
			<td>
				<?php
					$chk1 = $chk2 = '';
					if($optvar['loadlightbox'] == 'no'){
						$chk2 = ' checked="checked"';
					}
					else{
						$chk1 = ' checked="checked"';
					}
				?>
				<input type="radio" name="loadlightbox" value="yes"<?php echo $chk1;?> />Built in Slimbox
				<input type="radio" name="loadlightbox" value="no"<?php echo $chk2;?> />Other Lightbox
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