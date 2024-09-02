<?php

/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ($price_html = $product->get_price_html()) : ?>

	

	<?php if (is_user_logged_in()) {
		echo ' <span class="price">' . $price_html . '</span>';
	} else {
		echo '<a href="#popup1" class="popup-link p-[10px] text-center" style="width: -webkit-fill-available;">Войти, чтобы увидеть цену</a>';
	}
	?>
<?php endif; ?>