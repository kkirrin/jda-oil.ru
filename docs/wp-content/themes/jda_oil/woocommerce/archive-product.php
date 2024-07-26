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
	<div class="container">
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

<div class="container">
	<header class="woocommerce-products-header">
	<?php if (apply_filters('woocommerce_show_page_title', true)): ?>
			<h1 class="catalog-title">
				<?php woocommerce_page_title(); ?>
			</h1>
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
            <div class="container">  
                <div class="flex justify-between items-center ">
                    <div>
                        <h2 class="md:text-[45px] text-[30px] text-dark-green"> Каталог Товаров</h2>
                    </div>

					<div class="flex flex-row gap-[20px]">
						<div>
							<label for="price-select">Цена:</label> <select id="price-select" class="">
								<option value="">Select Price</option>
								<option value="low">Low</option>
								<option value="medium">Medium</option>
								<option value="high">High</option>
							</select>
						</div>
						<div>
							<label for="name-select">Название:</label> <select id="name-select" class="">
								<option value="">Select Name</option>
								<option value="alphabetical">Alphabetical</option>
								<option value="newest">Newest</option>
								<option value="popularity">Popularity</option>
							</select>
						</div>
					</div>
                </div>
                    
                <div class="flex md:flex-row flex-col gap-[50px]">
                    <div class="md:w-1/3 w-auto">
                        <form action="" class="flex flex-col gap-[20px] md:pt-[60px] pt-[20px]">
                            <div class="flex gap-[10px] flex-col">
                                <label>Марка</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите марку">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Модель</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите модель">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Номер кузова</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите номер кузова">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                <label>Год</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="date" name="marka" placeholder="Введите год">
                            </div>
                            <div class="flex gap-[10px] flex-col">
                                    <label>Номер двигателя</label>
                                <input class="border border-dark-green py-[12px] px-[20px]" type="text" name="marka" placeholder="Введите yомер двигателя">
                            </div>
                            <div class="my-[5px]">
                                <button style="width: -webkit-fill-available;" class="p-[10px] md:w-auto w-auto text-center bg-green text-white" type="submit" name="get_maslo">Подобрать</button>
                            </div>
                        </form>
                    </div>

                    <div class="md:w-10/12 w-auto">
                        <ul id="catalog__list" class="flex flex-col gap-[20px]">
							<?php                         
								$args = array(
									'post_type' => 'product'
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

										echo '<a href="'. $product_link .'">';
										echo '  <li class="flex md:flex-row flex-col gap-[20px] justify-between border-b border-dark-green pb-[30px]">';
										echo '      <div class="border border-dark-green p-[20px]">';
										echo '          <img src="'. $product_image .'" alt="">';
										echo '      </div>';
										echo '      <div class="flex justify-between flex-col">';
										echo '         <p class="text-dark-green md:text-[20px] text-[16px] font-semibold">'. $product_name .'</p>';
										echo '         <div class="flex flex-col gap-[16px]">';
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
										echo '                  '. $product_sku.'';
										echo '                </li>';
										echo '                <li class="text-dark-green font-semibold">';
										echo '                  '. $product_compound.'';
										echo '                </li>';
										echo '                <li class="text-dark-green font-semibold">';
										echo '                  '. $product_volume.'';
										echo '                </li>';
										echo '            </ul>';
										echo '         </div>';
										echo '      </div>';
										echo '      <div>';
										echo '         <p class="text-dark-green md:text-[20px] text-[20px] font-semibold">'. $product_price .'</p>';
										echo '      </div>';
										echo '		<div class="flex gap-[10px] md:flex-col flex-row">';
										echo '			<button href="?add-to-cart='.$product_id.'" data-quantity="1" class="product_type_simple add_to_cart_button ajax_add_to_cart h-max w-[172px] p-[10px] text-center border border-dark-green bg-white text-dark-green" data-product_id="'.$product_id.'" data-product_sku="'.$product_sku.'" aria-label="Добавить &quot;'.$product_name.'&quot; в корзину" rel="nofollow">В розницу</button>';
										echo '			<button href="?add-to-cart='.$product_id.'" data-quantity="1" class="product_type_simple add_to_cart_button ajax_add_to_cart h-max w-[172px] p-[10px] text-center bg-green text-white" data-product_id="'.$product_id.'" data-product_sku="'.$product_sku.'" aria-label="Добавить &quot;'.$product_name.'&quot; в корзину" rel="nofollow">Оптом</button>';
										echo '      </div>';
										echo '  </li>';
										echo '</a>';
									}
								}
								wp_reset_postdata(); // Reset the post data
							?>
                        </ul>
                    </div>
                </div>
            </div>
      

		</section>
<?php
get_footer('shop');
