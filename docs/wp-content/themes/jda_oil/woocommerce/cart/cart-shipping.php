<?php
/**
 * Shipping Methods Display
 *
 * In 2.1 we show methods per package. This allows for multiple methods per order if so desired.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-shipping.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

$formatted_destination    = isset( $formatted_destination ) ? $formatted_destination : WC()->countries->get_formatted_address( $package['destination'], ', ' );
$has_calculated_shipping  = ! empty( $has_calculated_shipping );
$show_shipping_calculator = ! empty( $show_shipping_calculator );
$calculator_text          = '';
?>
<h3 class="h3_order">Способ доставки</h3>
<?php 
if(isset($available_methods) && is_array($available_methods))
{ 
?>
	<!-- Способы доставки -->
	<ul id="shipping_method" class="woocommerce-shipping-methods">
	<?php 
	$actives = array();
	foreach($available_methods as $method)
	{ 
	?>
		<li class="_tabs-item" data-tab="#tab_<?php echo esc_attr(sanitize_title($method->id)); ?>">
		<!-- <li> -->
			<?php
			if(1 < count($available_methods))
			{
				printf('<input type="radio" name="shipping_method[%1$d]" data-index="%1$d" id="shipping_method_%1$d_%2$s" value="%3$s" class="shipping_method" %4$s hidden />', $index, esc_attr(sanitize_title($method->id)), esc_attr($method->id), checked($method->id, $chosen_method, false)); // WPCS: XSS ok.
				if(checked($method->id, $chosen_method, false) !== '')
				{
					$actives[esc_attr(sanitize_title($method->id))] = ' _active';
				}
				else
				{
					$actives[esc_attr(sanitize_title($method->id))] = '';
				}
			}
			else
			{
				printf('<input type="hidden" name="shipping_method[%1$d]" data-index="%1$d" id="shipping_method_%1$d_%2$s" value="%3$s" class="shipping_method" />', $index, esc_attr(sanitize_title($method->id)), esc_attr($method->id)); // WPCS: XSS ok.
			}

			printf('<label for="shipping_method_%1$s_%2$s"><span class="radio_icon"><span class="icon_check"></span></span><span class="radio_text">%3$s</span></label>', $index, esc_attr(sanitize_title($method->id)), wc_cart_totals_shipping_method_label($method)); // WPCS: XSS ok.
			do_action('woocommerce_after_shipping_rate', $method, $index);
			?>
		</li>
	<?php 
	} 
	?>
	</ul>

	<div id="tab_local_pickup3" class="shop_address _tabs-block<?php echo isset($actives['local_pickup3']) ? $actives['local_pickup3'] : ''; ?>">
		<span class="address_mark">Cамовывоз</span> в г. Владивосток, ул. Проспект Острякова, д. 13, Пн-Сб с 09:00 до 20:00, Вс с 09:00 до 18:00
	</div>

	<div id="tab_flat_rate2" class="shipping_address _tabs-block<?php echo isset($actives['flat_rate2']) ? $actives['flat_rate2'] : ''; ?>">
		<div>
			<?php
			do_action('woocommerce_checkout_shipping');
			?>
		</div>
		<p>Доставка по городу <b>от 5000 ₽ бесплатно</b></p>
		<p><b>До 5000 ₽</b> в пределах города - <b>400 ₽</b></p>
		<p>За чертой города - <b>800 ₽</b></p>
	</div>

	<?php 
	//  ?????
	if(is_cart())
	{
	?>
	<p class="woocommerce-shipping-destination">
		<?php
		if($formatted_destination)
		{
			// Translators: $s shipping destination.
			printf(esc_html__('Shipping to %s.', 'woocommerce') .' ', '<strong>'. esc_html($formatted_destination) .'</strong>');
			$calculator_text = esc_html__('Change address', 'woocommerce');
		}
		else
		{
			echo wp_kses_post(apply_filters('woocommerce_shipping_estimate_html', __('Shipping options will be updated during checkout.', 'woocommerce')));
		}
		?>
	</p>
	<?php
	}
	//  [?????]
} 
elseif(!$has_calculated_shipping || !$formatted_destination) 
{
	if(is_cart() && 'no' === get_option('woocommerce_enable_shipping_calc'))
	{
		echo wp_kses_post(apply_filters('woocommerce_shipping_not_enabled_on_cart_html', __('Shipping costs are calculated during checkout.', 'woocommerce')));
	}
	else
	{
		echo wp_kses_post(apply_filters('woocommerce_shipping_may_be_available_html', __('Enter your address to view shipping options.', 'woocommerce')));
	}
}
elseif(!is_cart())
{
	echo wp_kses_post(apply_filters('woocommerce_no_shipping_available_html', __('There are no shipping options available. Please ensure that your address has been entered correctly, or contact us if you need any help.', 'woocommerce')));
}
else
{
	echo wp_kses_post(
		/**
		 * Provides a means of overriding the default 'no shipping available' HTML string.
		 *
		 * @since 3.0.0
		 *
		 * @param string $html                  HTML message.
		 * @param string $formatted_destination The formatted shipping destination.
		 */
		apply_filters(
			'woocommerce_cart_no_shipping_available_html',
			// Translators: $s shipping destination.
			sprintf(esc_html__('No shipping options were found for %s.', 'woocommerce') .' ', '<strong>'. esc_html($formatted_destination) .'</strong>'),
			$formatted_destination
		)
	);
	$calculator_text = esc_html__('Enter a different address', 'woocommerce');
}

if($show_package_details)
{
	echo '<p class="woocommerce-shipping-contents"><small>' . esc_html($package_details) . '</small></p>';
}

if($show_shipping_calculator)
{
	woocommerce_shipping_calculator($calculator_text);
}
