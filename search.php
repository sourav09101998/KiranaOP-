<?php
require('top.php');
$str = mysqli_real_escape_string($con, $_GET['str']);
if ($str != '') {
	$get_product = get_product($con, '', '', '', $str);
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
							<span class="breadcrumb-item active">Search</span>
							<span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
							<span class="breadcrumb-item active"><?php echo $str ?></span>
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
						<!-- Start Product View -->
						<div class="row">
							<div class="shop__grid__view__wrap" style="margin: 0px 75px 0px 75px;">
								<div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
									<?php
									foreach ($get_product as $list) {
									?>
										<div class="card m-wthree" style=" border-radius: 15px;   height: fit-content;">
											<div class="col-m">
												<a href="product.php?id=<?php echo $list['id'] ?>"><img style="border-radius: 15px 15px 15px 15px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="product images"></a>
												<div class="mid-1" style="    text-align: center;">
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



												</div>
											</div>
										</div>
									<?php } ?>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <section class="u-align-center u-clearfix u-section-3" id="sec-9aaa"> -->
				<!-- <div class="u-clearfix u-sheet u-sheet-1">

					<div class="u-expanded-width u-layout-grid u-products u-products-1">
						<div class="u-repeater u-repeater-1">


						</div>
					</div>

				</div> -->
				<!-- </section> -->
			<?php } else {
				echo "Data not found";
			} ?>

		</div>
	</div>
</section>
<!-- End Product Grid -->
<!-- End Banner Area -->
<input type="hidden" id="qty" value="1" />
<?php require('footer.php') ?>