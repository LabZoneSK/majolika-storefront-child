<?php
/**
 * Template part for displaying featured product.
 *
 * @package majolika
 */
$featured_products =  get_featured_products();
$product = $featured_products[ array_rand ( get_featured_products() ) ];

if($product) {
?>
<div class="featured">
<div class="featured-product">
<div class="featured-product-meta">
<div class="featured-product-text">Majolika Modra Vám odporúča:</div>
<div class="featured-product-title"><?=$product->get_name();?></div>
<div class="featured-product-tag"><?=''?></div>
<div>
  <a class="featured-product-button" href="<?=$product->get_permalink();?>">Zistit viac</a>
</div>
</div>
<div class="featured-product-showcase">
<div class="featured-product-image"><?=$product->get_image();?></div>
<div class="featured-product-price"><?=str_replace('.',',', number_format(floor($product->get_price() * 1.20 * 100) / 100, 2 ) ) ?> &euro;</div>
</div>
</div>
</div>
<?php }