<?php
/*
Template Name: Страница поиска - шаблон НЕ ТО!!!!!!!!!!!!!!!!!!!!!!!!
*/
?>


<?php
get_header();
?>


<main>
	<div class="container">
		<section class="inner-page-main mt-40">

			<div class="flex mb-5">
				<h1 class="text-xl lg:text-6xl text-jost font-extrabold line uppercase relative">
					Результаты поиска для:
					<?php echo get_search_query(); ?>
				</h1>
			</div>


			<div class="flex md:flex-row flex-col gap-[50px] mt-[24px] mb-[120px]" style="width: 100%; margin-top: 30px;">
				<div class="flex md:flex-row flex-col gap-[50px] w-full" style="margin-top: 30px;">
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


							<?php if (have_posts()): ?>
								<?php while (have_posts()):
									the_post(); ?>
									<?php
									if ('product' === get_post_type()):
										// Получаем объект продукта
										global $product;

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

									else:
										// Ваш обычный код для вывода постов, если это не продукт
									?>

										<!-- item вывода мероприятия -->



										<!-- item вывода мероприятия -->

									<?php endif; ?>
								<?php endwhile; ?>
						</ul>




						<div class="navigation">
							<?php
								global $wp_query;

								$big = 999999999; // нужно большое число
								$current = max(1, get_query_var('paged'));

								echo paginate_links(
									array(
										'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
										'format' => '?paged=%#%',
										'current' => $current,
										'total' => $wp_query->max_num_pages,
										'prev_text' => '←',
										'next_text' => '→',
									)
								);
							?>
						</div>
					<?php else: ?>
						<p>По вашему запросу ничего не найдено.</p>
					<?php endif; ?>

					</div>
				</div>
			</div>
		</section>
	</div>
</main>
<?php
get_footer();
?>