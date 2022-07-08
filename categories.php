<?php
require('top.php');

if (!isset($_GET['id']) && $_GET['id'] != '') {
?>
	<script>
		window.location.href = 'index.php';
	</script>
<?php
}

$cat_id = get_safe_value($con, $_GET['id']);

$sub_categories = '';
if (isset($_GET['sub_categories'])) {
	$sub_categories = get_safe_value($con, $_GET['sub_categories']);
}
$price_high_selected = "";
$price_low_selected = "";
$new_selected = "";
$old_selected = "";
$sort_order = "";
if (isset($_GET['sort'])) {
	$sort = get_safe_value($con, $_GET['sort']);
	if ($sort == "price_high") {
		$sort_order = " order by product.price desc ";
		$price_high_selected = "selected";
	}
	if ($sort == "price_low") {
		$sort_order = " order by product.price asc ";
		$price_low_selected = "selected";
	}
	if ($sort == "new") {
		$sort_order = " order by product.id desc ";
		$new_selected = "selected";
	}
	if ($sort == "old") {
		$sort_order = " order by product.id asc ";
		$old_selected = "selected";
	}
}

if ($cat_id > 0) {
	$get_product = get_product($con, '', $cat_id, '', '', $sort_order, '', $sub_categories);
} else {
?>
	<script>
		window.location.href = 'index.php';
	</script>
<?php
}
?>
<div class="body__overlay"></div>

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="    background-color: black;">
	<div class="ht__bradcaump__wrap">
		<div class="container">
			<div class="row">

				<div class="col-xs-12">
					<div class="bradcaump__inner">
						<nav class="bradcaump-inner">
							<a class="breadcrumb-item" href="index.php">Home</a>
							<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
							<span class="breadcrumb-item active">Products</span>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Bradcaump area -->
<!-- Start Product Grid -->
<section class="htc__product__grid bg__white ptb--100">
	<div class="container">
		<div class="row">
			<?php if (count($get_product) > 0) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="htc__product__rightidebar">
						<div class="htc__grid__top">
							<div class="htc__select__option">
								<select class="ht__select" onchange="sort_product_drop('<?php echo $cat_id ?>','<?php echo SITE_PATH ?>')" id="sort_product_id">
									<option value="">Default softing</option>
									<option value="price_low" <?php echo $price_low_selected ?>>Sort by price low to hight</option>
									<option value="price_high" <?php echo $price_high_selected ?>>Sort by price high to low</option>
									<option value="new" <?php echo $new_selected ?>>Sort by new first</option>
									<option value="old" <?php echo $old_selected ?>>Sort by old first</option>
								</select>
							</div>

						</div>
						<!-- Start Product View -->

						<section class="u-align-center u-clearfix u-section-3" id="sec-9aaa">
							<div class="u-clearfix u-sheet u-sheet-1">

								<div class="u-expanded-width u-layout-grid u-products u-products-1">
									<div class="u-repeater u-repeater-1">

										<?php
										foreach ($get_product as $list) {
										?>
											<div class="card m-wthree" style=" border-radius: 15px;   height: fit-content;">
												<div class="col-m">
													<a href="product.php?id=<?php echo $list['id'] ?>"><img style="border-radius: 15px 15px 15px 15px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="product images"></a>
													<div class="mid-1">
														<div class="women">
															<h6>
																<a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a>
															</h6>
														</div>
														<div class="mid-2">
															<p style="margin: 5px 0px 5px 0px;"><em class="item_price"> ₹<?php echo $list['price'] ?></em></p>
															<button class="btn btn-danger my-cart-btn my-cart-b " style="margin: 5px 0px 5px 0px;" href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')">Add to Cart</button>
															<a class="btn btn-danger my-cart-btn my-cart-b " style="margin: 5px 0px 5px 0px;" href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id'] ?>','add')"><i class="fas fa-heart"></i> Wishlist</a>
															<div class="clearfix"></div>
														</div>

														<!-- <div class="add">
													<button class="btn btn-danger my-cart-btn my-cart-b " href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')">Add to Cart</button>
												</div> -->

													</div>
												</div>
											</div>
										<?php } ?>

									</div>
								</div>

							</div>
						</section>
						<!-- start product view -->
						
					</div>
				</div>
			<?php } else {
				echo "Data not found";
			} ?>

		</div>
	</div>
</section>
<!-- <section class="u-align-center u-clearfix u-section-3" id="sec-9aaa">
	<div class="u-clearfix u-sheet u-sheet-1">

		<div class="u-expanded-width u-layout-grid u-products u-products-1">
			<div class="u-repeater u-repeater-1">
				
				<?php
				foreach ($get_product as $list) {
				?>
					<div class="u-align-center u-container-style u-products-item u-repeater-item u-white u-repeater-item-1">
						<div class="u-container-layout u-similar-container u-valign-middle-md u-valign-middle-xs u-container-layout-1">
					
							<a href="product.php?id=<?php echo $list['id'] ?>"><img alt="product images" class="u-align-center u-expanded-width-sm u-expanded-width-xs u-image u-product-control u-image-1" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>"></a>
							<h4 class="u-product-control u-text u-text-1">
								<a class="u-product-title-link" href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a>
							</h4>
							<div class="u-product-control u-product-price u-product-price-1">
								<div class="u-price-wrapper u-spacing-10">
									<div class="u-price u-text-palette-1-base" style="font-size: 1.5rem; font-weight: 700;">₹<?php echo $list['price'] ?></div>
								</div>
							</div>
							<a class="u-btn u-btn-rectangle u-button-style u-palette-1-light-2 u-product-control u-btn-1" href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')">Add to cart</a>

						</div>
					</div>
				<?php } ?>

			</div>
		</div>
	
	</div>
</section> -->

<!-- End Product Grid -->
<!-- End Banner Area -->
<input type="hidden" id="qty" value="1" />
<?php require('footer.php') ?>