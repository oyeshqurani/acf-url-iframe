<?php
/* Custom iFrame to Load 360 Product Image from External Source */

// Load value from '360_product_image' field
$iframe_url = get_field('360_product_image');

// Create iframe HTML with the new URL and extra attributes
$iframe = '<iframe src="' . $iframe_url . '" frameborder="0" width="100%" height="500px"></iframe>';

// Display customized HTML
echo $iframe;

?>
