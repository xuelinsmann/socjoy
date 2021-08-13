<?php
	$site_url = elgg_get_site_url();
	# This php line gets the site url to direct when user click to your logo image
?>

<!-- Template line to change your logo by copy your image and paste as logo.png into mod/header_logo_changer/graphics/
	and also you can change width and height by % values or giving specific px values like "100px" -->
<!--
<a href="http://example.com/">
<img border="0" src="http://www.example.com/mod/header_logo_changer/graphics/logo.png" /></a>
-->

<a href="<?php echo $site_url?>">
	<img class="img-responsive" style="width: 90%; height: 90%;" src="<?php echo $site_url; ?>mod/header_logo_changer/graphics/socjoylogo.png" />
</a>
