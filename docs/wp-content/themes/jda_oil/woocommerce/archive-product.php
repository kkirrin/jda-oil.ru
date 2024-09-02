<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();


?>
<div class="container__special--woo">
	<?php
	/**
	 * Hook: woocommerce_before_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
	 * @hooked woocommerce_breadcrumb - 20
	 * @hooked WC_Structured_Data::generate_website_data() - 30
	 */
	do_action('woocommerce_before_main_content');
	?>
</div>

<div class="container__special--woo">
	<header class="woocommerce-products-header">
		<?php if (apply_filters('woocommerce_show_page_title', true)): ?>
			<div class="flex md:flex-row flex-col md:justify-between justify-start md:items-center items-start">
				<div class="flex items-center flex-row">
					<h1 class="catalog-title">
						<?php woocommerce_page_title(); ?>
					</h1>
				</div>

				<div class="flex md:flex-row flex-col gap-[20px]">
					<div>
						<?php echo do_shortcode('[wpf-filters id=2]') ?>
					</div>
					<div>
						<?php echo do_shortcode('[wpf-filters id=3]'); ?>
					</div>
				</div>
			</div>

		<?php endif; ?>

		<?php
		/**
		 * Hook: woocommerce_archive_description.
		 *
		 * @hooked woocommerce_taxonomy_archive_description - 10
		 * @hooked woocommerce_product_archive_description - 10
		 */
		do_action('woocommerce_archive_description');
		?>
	</header>
	<!-- Тут меню будет -->
	<section class="mt-[24px] mb-[120px]" data-scroll="">
		<div class="">


			<div class="flex md:flex-row flex-col gap-[50px]">
				<div class="md:w-1/3 w-auto">
					<form action="https://jda-oil.ru/?page_id=52" method="POST" class="flex flex-col gap-[20px] text-green">
						<div class="flex gap-[10px] flex-col">
							<label class="text-green">Марка</label>
							<select name="marka" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
								<option value="">Марка</option>
							</select>
						</div>
						<div class="flex gap-[10px] flex-col">
							<label class="text-green">Модель</label>
							<select name="model" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
								<option value="">Модель</option>

							</select>
						</div>
						<div class="flex gap-[10px] flex-col">
							<label class="text-green">Номер кузова</label>
							<select name="kuzov" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
								<option value="">Номер кузова</option>

							</select>
						</div>
						<div class="flex gap-[10px] flex-col text-green">
							<label class="text-green">Год</label>
							<select name="year" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
								<option value="">Год</option>
								<?php
								for ($year = (int) date('Y'); $year >= 1950; $year--) {
								?>
									<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
								<?php
								}
								?>
							</select>
						</div>
						<div class="flex gap-[10px] flex-col">
							<label class="text-green">Номер двигателя</label>
							<select name="dvig" class="border border-dark-green py-[12px] px-[20px] w-auto text-green">
								<option value="">Номер двигателя</option>
							</select>
						</div>
						<div style="width: -webkit-fill-available;">
							<button name="oil_search" style="width: -webkit-fill-available;" class="btn-green p-[13px] md:w-auto w-auto text-center bg-green text-white" type="submit" name="get_maslo">Подобрать</button>
						</div>

					</form>

				</div>

				<div class="md:w-10/12 w-auto">
					<ul id="catalog__list" class="flex flex-col gap-[20px]">
						<?php
						$args = array(
							'post_type' => 'product',
							'orderby' => 'menu_order',
							'order' => 'asc',

						);

						$query = new WP_Query($args);
						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$query->the_post();
								$terms = get_the_terms($post->ID, 'product_cat');

								$product = wc_get_product(get_the_ID());
								$product_name = $product->get_name();
								$product_sku = $product->get_sku();
								$product_image = wp_get_attachment_url($product->get_image_id());
								$product_price = $product->get_price_html();
								$product_link = $product->get_permalink();

								$product_class = $product->get_attribute('pa_class');
								$product_compound = $product->get_attribute('pa_compound');
								$product_viscosity = $product->get_attribute('pa_viscosity');
								$product_volume = $product->get_attribute('pa_volume');
								$product_id = $product->get_id();

								echo '  <li class="flex md:flex-row flex-col gap-[20px] justify-between border-b border-dark-green pb-[15px]">';
								echo '		<a href="' . $product_link . '">';
								echo '      	<div class="p-[20px]">';
								echo '          	<img class="scale-200" src="' . $product_image . '" alt="">';
								echo '      	</div>';
								echo '		</a>';

								echo '      <div class="flex justify-between flex-col">';
								echo '         <p class="text-dark-green md:text-[20px] text-[16px] font-semibold">' . $product_name . '</p>';
								echo '         <div class="flex flex-col gap-[16px] md:pb-[20px] pb-[0px]">';
								echo '         	  <ul class="flex flex-row gap-[40px] justify-between">';
								echo '            	<li>';
								echo '                 Код товара';
								echo '              </li>';
								echo '              <li>';
								echo '                 Состав';
								echo '              </li>';
								echo '              <li>';
								echo '                 Объем';
								echo '              </li>';
								echo '             </ul>';
								echo '            <ul class="flex flex-row gap-[40px] justify-between">';
								echo '                <li class="text-dark-green font-semibold">';
								echo '                  ' . $product_sku . '';
								echo '                </li>';
								echo '                <li class="text-dark-green font-semibold">';
								echo '                  ' . $product_compound . '';
								echo '                </li>';
								echo '                <li class="text-dark-green font-semibold">';
								echo '                  ' . $product_volume . '';
								echo '                </li>';
								echo '            </ul>';
								echo '         </div>';
								echo '      </div>';
								echo '      <div>';

								if (is_user_logged_in()) {
									echo '         <p class="text-dark-green md:text-[20px] text-[20px] font-semibold">' . $product_price . '</p>';
								} else {
									echo '<a href="#popup1" class="popup-link p-[10px] text-center" style="width: -webkit-fill-available;">Войти, чтобы увидеть цену</a>';
								}

								echo '      </div>';
								echo '		<div class="flex gap-[10px] md:flex-col flex-row flex-wrap">';

								echo '			<object style="width: -webkit-fill-available;" class="bg-white text-dark-green w-[172px] p-[10px] text-center border border-dark-green bg-white text-dark-green btn-white"><a href="#popup6" class="popup-link w-[172px] p-[10px] text-center">В розницу</a></object>';

								if (is_user_logged_in()) {
									echo '              <a href="' . $product_link . '" style="width: -webkit-fill-available;" class="btn-green p-[10px] text-white text-center bg-green bg-green--watch">Оптом</a>';
								} else {
									echo '              <a href="#popup1" style="width: -webkit-fill-available;" class="popup-link btn-green p-[10px] text-white text-center bg-green bg-green--watch">Оптом</a>';
								}

								echo '      </div>';
								echo '  </li>';
							}
						}
						wp_reset_postdata(); // Reset the post data
						?>
					</ul>
				</div>
			</div>
		</div>


	</section>
</div>
</div

	<?php get_footer(); ?>