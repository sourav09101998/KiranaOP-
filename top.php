<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');
$wishlist_count = 0;
$cat_res = mysqli_query($con, "select * from categories where status=1 order by categories asc");
$cat_arr = array();
while ($row = mysqli_fetch_assoc($cat_res)) {
	$cat_arr[] = $row;
}

$obj = new add_to_cart();
$totalProduct = $obj->totalProduct();

if (isset($_SESSION['USER_LOGIN'])) {
	$uid = $_SESSION['USER_ID'];

	if (isset($_GET['wishlist_id'])) {
		$wid = get_safe_value($con, $_GET['wishlist_id']);
		mysqli_query($con, "delete from wishlist where id='$wid' and user_id='$uid'");
	}

	$wishlist_count = mysqli_num_rows(mysqli_query($con, "select product.name,product.image,product.price,product.mrp,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));
}

$script_name = $_SERVER['SCRIPT_NAME'];
$script_name_arr = explode('/', $script_name);
$mypage = $script_name_arr[count($script_name_arr) - 1];

$meta_title = "Kiranaop";
$meta_desc = "Kiranaop";
$meta_keyword = "Kiranaop";
if ($mypage == 'product.php') {
	$product_id = get_safe_value($con, $_GET['id']);
	$product_meta = mysqli_fetch_assoc(mysqli_query($con, "select * from product where id='$product_id'"));
	$meta_title = $product_meta['meta_title'];
	$meta_desc = $product_meta['meta_desc'];
	$meta_keyword = $product_meta['meta_keyword'];
}
if ($mypage == 'contact.php') {
	$meta_title = 'Contact Us';
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $meta_title ?></title>
	<link rel="shortcut icon" type="image" href="images/logo/WhatsApp Image 2021-05-22 at 00.21.07.jpeg">

	<meta name="description" content="<?php echo $meta_desc ?>">
	<meta name="keywords" content="<?php echo $meta_keyword ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/core.css">
	<link rel="stylesheet" href="css/shortcode/shortcodes.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/custom.css">
	<!-- <link rel="stylesheet" href="scss/style.css"> -->

	<!-- ----------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- ---------------------------------------------------------------------------------------------- -->
	<link rel="stylesheet" href="css/nicepage.css" media="screen">
	<link rel="stylesheet" href="css/Home.css" media="screen">
	<script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
	<script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
	<!-- <meta name="generator" content="Nicepage 3.17.5, nicepage.com"> -->
	<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
	<!-- ------------------------------------------------------------------------------------------------ -->
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'><link rel="stylesheet" href="./style.css">
	<!-- <link rel="stylesheet" href="css/virtue.css"> -->
	<link rel="stylesheet" href="css/_carousel.scss">
	<!-- <script src="js/vendor/modernizr-3.5.0.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
	<script>
		/* When the user clicks on the button, toggle between hiding and showing the dropdown content */
		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
			if (!event.target.matches('.dropbtn')) {
				var dropdowns = document.getElementsByClassName("dropdown-content");
				var i;
				for (i = 0; i < dropdowns.length; i++) {
					var openDropdown = dropdowns[i];
					if (openDropdown.classList.contains('show')) {
						openDropdown.classList.remove('show');
					}
				}
			}
		}
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style>
		.dropdown-submenu {
			position: relative;
		}

		.dropdown-submenu .dropdown-menu {
			top: 0;
			left: 100%;
			margin-top: -1px;
		}
	</style>
	<script>
		$(document).ready(function() {
			$('.dropdown-submenu a.test').on("click", function(e) {
				$(this).next('ul').toggle();
				e.stopPropagation();
				e.preventDefault();
			});
		});
	</script>
	<style>
		.htc__shopping__cart a span.htc__wishlist {
			background: #c43b68;
			border-radius: 100%;
			color: #fff;
			font-size: 9px;
			height: 17px;
			line-height: 19px;
			position: absolute;
			right: 4px;
			text-align: center;
			top: -4px;
			width: 17px;
			margin-right: 15px;
		}
	</style>

	<style type="text/css">
		.dgwt-wcas-ico-magnifier,
		.dgwt-wcas-ico-magnifier-handler {
			max-width: 20px
		}

		.dgwt-wcas-search-wrapp {
			max-width: 600px
		}
	</style>

	<style>
		.top-bar {
			background: #323a45;
			color: #999;
			padding: 6px 0px;
			font-size: 13px;
			line-height: 25px;
			border-bottom: 1px solid #f5f5f5;
		}

		.top-bar a {
			color: #999;
		}

		@media (max-width: 785px) {
			.top-bar .tb-contact {
				display: none;
			}
		}

		.top-bar .tb-search {
			position: relative;
			display: none;
		}

		.top-bar .tb-search .b-dropdown-block {
			padding: 7px;
			border: 1px solid #ddd;
			width: 250px;
			position: absolute;
			background: #ffffff;
			top: 30px;
			left: 0px;
			border-radius: 2px;
			box-shadow: 0px 3px 3px rgba(0, 0, 0, 0.05);
			display: none;
			z-index: 10000;
		}

		@media (max-width: 785px) {
			.top-bar .tb-search {
				display: block;
			}
		}

		.top-bar .tb-social {
			margin-right: 10px;
		}

		.top-bar .tb-social i {
			font-size: 13px;
			margin: 0px;
			margin-right: 2px;
		}

		@media (max-width:785px) {
			.top-bar .tb-social {
				display: none;
			}
		}

		.top-bar .tb-shopping-cart {
			position: relative;
			margin-left: 15px;
		}

		.top-bar .tb-shopping-cart i {
			font-size: 14px;
		}

		.top-bar .tb-shopping-cart .b-dropdown-block {
			width: 250px;
			background: #ffffff;
			right: 0px;
			border: 1px solid #e2e2e2;
			position: absolute;
			margin-top: 5px;
			z-index: 10000;
			padding: 10px 10px;
			border-radius: 5px;
			box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.1);
			display: none;
		}

		.top-bar .tb-shopping-cart .b-dropdown-block h4 {
			font-size: 13px;
			font-weight: 600;
			margin-top: 0px;
			padding-top: 0px;
			border-bottom: 1px dashed #eee;
		}

		.top-bar .tb-shopping-cart .b-dropdown-block ul li {
			padding: 10px 0px;
			border-bottom: 1px dashed #eee;
		}

		.top-bar .tb-shopping-cart .cart-img {
			width: 40px;
			float: left;
		}

		.top-bar .tb-shopping-cart .cart-title {
			position: relative;
			margin-left: 50px;
		}

		.top-bar .tb-shopping-cart .cart-title h5 {
			font-size: 13px;
			line-height: 23px;
			font-weight: 400;
		}

		.top-bar .tb-shopping-cart .cart-title h5 a {
			color: #666666;
		}

		.top-bar .tb-shopping-cart .cart-title h5 a:hover {
			color: #808080;
		}

		.top-bar .tb-language {
			margin-left: 10px;
		}

		.top-bar .tb-language a {
			color: #888;
		}

		.top-bar .tb-language a:hover {
			color: #666;
		}

		/* Header 1 Navigation menu */


		/* Header One 	   */
		/* Logo            */
		/* Navigation menu */
		.header-1 {
			padding: 15px 0px 0px 0px;
		}

		.header-1 .logo {
			margin: -20px 0px 2px 50px;
		}

		.header-1 .logo h1 {
			font-weight: 600;
		}

		.header-1 .logo h1 a {
			color: #323a45;
			font-size: 30px;
		}

		.header-1 .logo h1 a:hover {
			color: #666666;
		}

		@media (max-width: 767px) {
			.header-1 .logo h1 {
				text-align: center;
			}
		}

		.header-1 .header-search {
			max-width: 555px;
			margin: 0px auto;
		}

		.header-1 .logo {
			margin: -20px 0px 0px 50px;
		}

		.header-1 {
			padding: 15px 0px 0px 0px;
		}

		.header-1 .navy ul,
		.header-1 .navy ul li,
		.header-1 .navy ul li a,
		.header-1 .navy #menu-button {
			margin: 0;
			padding: 0;
			border: 0;
			list-style: none;
			display: block;
			position: relative;
			z-index: 10;
		}

		.header-1 .navy #menu-button {
			display: none;
		}

		.header-1 .navy {
			width: auto;
			background: #fff;
		}

		.header-1 .navy>ul>li {
			float: left;
		}

		.header-1 .navy>ul>li>a {
			padding: 10px 15px;
			font-size: 13px;
			line-height: 28px;
			color: #fff;
			font-weight: 600;
		}

		.header-1 .navy>ul>li:hover>a,
		.header-1 .navy>ul>li>a:hover {
			color: #fff;
		}

		.header-1 .navy ul>li.has-sub>a:after {
			content: "\f107";
			font-family: "FontAwesome";
			margin-left: 6px;
			font-weight: 400;
			font-size: 14px;
		}

		.header-1 .navy ul ul {
			position: absolute;
			left: -9999px;
			opacity: 0;
			transition: bottom .4s ease, opacity .3s ease;
		}

		.header-1 .navy>ul>li>ul {
			top: 50px;
			background: #fff;
			padding: 5px 0px;
			box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
		}

		.header-1 .navy>ul>li:hover>ul {
			left: auto;
			top: 45px;
			opacity: 1;
		}

		.header-1 .navy ul ul ul {
			top: 50px;
			padding: 5px 0;
			box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.15);
		}

		.header-1 .navy ul ul>li:hover>ul {
			top: 0;
			left: 170px;
			opacity: 1;
			background: #fff;
		}

		.header-1 .navy ul ul li a {
			width: 170px;
			padding: 4px 20px;
			font-size: 12px;
			font-weight: 400;
			color: #666;
		}

		.header-1 .navy ul ul li:hover>a,
		.header-1 .navy ul ul li>a:hover {
			color: #888;
		}

		.header-1 .navy ul ul>li.has-sub>a:after {
			content: "\f105";
			font-family: "FontAwesome";
			margin-left: 7px;
			font-weight: 400;
			float: right;
			font-size: 14px;
		}

		@media (max-width:785px) {
			.header-1 .navi {
				background: transparent !important;
				border-bottom: 0px !important;
			}

			.header-1 .navy {
				max-width: 400px;
				margin: 0px auto;
			}

			.header-1 .navy ul,
			.header-1 .navy ul ul,
			.header-1 .navy ul ul ul,
			.header-1 .navy>ul,
			.header-1 .navy>ul>li>ul,
			.header-1 .navy>ul>li:hover>ul,
			.header-1 .navy ul ul li:hover>ul,
			.header-1 .navy ul ul ul li:hover>ul {
				position: relative;
				left: 0;
				right: auto;
				top: 0;
				width: 100%;
				display: none;
				padding: 0;
				opacity: 1;
				text-align: left;
				box-shadow: none;
			}

			.header-1 .navy>ul>li {
				border: 1px solid #eee;
				border-bottom: 0px;
			}

			.header-1 .navy>ul>li>a {
				color: #666;
			}

			.header-1 .navy>ul>li:hover>a,
			.header-1 .navy>ul>li>a:hover {
				color: #777;
			}

			.header-1 .navy ul li {
				width: 100%;
				border-top: 1px solid #eee;
			}

			.header-1 .navy ul li:last-child {
				border-bottom: 1px solid #eee;
			}

			.header-1 .navy>ul>li>ul,
			.header-1 .navy ul ul ul {
				border-top: 1px solid #eee !important;
				border-bottom: 1px solid #eee !important;
			}

			.header-1 .navy ul li a {
				padding: 10px 20px;
			}

			.header-1 .navy ul ul li a {
				width: 100%;
				padding: 10px 20px 10px 35px;
			}

			.header-1 .navy ul ul ul li a {
				padding: 10px 20px 10px 50px;
			}

			.header-1 .navy ul ul ul ul li a {
				padding: 10px 20px 10px 65px;
			}

			.header-1 .navy>ul>li.has-sub>a:after,
			.header-1 .navy ul ul li.has-sub>a:after {
				display: none;
			}

			.header-1 .navy #menu-button {
				position: relative;
				display: block;
				padding: 10px 20px;
				cursor: pointer;
				font-size: 13px;
				color: #fff;
				font-weight: 600;
				text-transform: uppercase;
				margin-bottom: -15px;
			}

			.header-1 .navy #menu-button:after {
				content: "\f0c9";
				font-family: "FontAwesome";
				margin-left: 7px;
				font-weight: 400;
				float: right;
				font-size: 14px;
			}

			.header-1 .navy .submenu-button {
				position: absolute;
				right: 0;
				display: block;
				width: 50px;
				height: 50px;
				z-index: 12;
				cursor: pointer;
				border-left: 1px solid #eee;
			}

			.header-1 .navy ul ul .submenu-button {
				height: 50px;
			}

			.header-1 .navy ul .submenu-button:after {
				content: "\f107";
				font-family: "FontAwesome";
				font-weight: 400;
				font-size: 14px;
				line-height: 50px;
				text-align: center;
				display: block;
			}

			.slider_area {
				margin: 10px 0 10px 0;
			}
		}

		@media (min-width:786px) {
			.header-1 .navy ul {
				display: block !important;
			}

		}


		/* Transparent button */
		.btn.btn-transparent {
			border: 1px solid #ffffff !important;
			background: transparent !important;
			color: #ffffff !important;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			-ms-transition: all 0.5s ease;
			transition: all 0.5s ease;
		}

		.btn.btn-transparent:hover,
		.btn.btn-transparent:focus,
		.btn.btn-transparent.active,
		.btn.btn-transparent:active {
			background: #ffffff !important;
			color: #808080 !important;
			-webkit-transition: all 0.5s ease;
			-moz-transition: all 0.5s ease;
			-o-transition: all 0.5s ease;
			-ms-transition: all 0.5s ease;
			transition: all 0.5s ease;
		}

		.btn.btn-white {
			background: #ffffff;
			color: #666666;
			border: 1px solid #dddddd;
		}

		.btn.btn-white:hover,
		.btn.btn-white:focus,
		.btn.btn-white.active,
		.btn.btn-white:active {
			background: #f7f7f7;
			color: #666666;
		}

		.btn.btn-white.btn-outline {
			background: transparent !important;
			border: 1px solid #f7f7f7 !important;
			color: #666666;
		}

		.btn.btn-grey {
			background: #eeeeee;
			color: #666666;
			border: 1px solid #d5d5d5;
		}

		.btn.btn-grey:hover,
		.btn.btn-grey:focus,
		.btn.btn-grey.active,
		.btn.btn-grey:active {
			background: #d5d5d5;
			color: #999;
		}

		.btn.btn-grey.btn-outline {
			background: transparent !important;
			border: 1px solid #d5d5d5 !important;
			color: #666666;
		}

		.btn.btn-black {
			color: #ffffff;
			background: #666666;
			border: 1px solid #4d4d4d;
		}

		.btn.btn-black:hover,
		.btn.btn-black:focus,
		.btn.btn-black.active,
		.btn.btn-black:active {
			background: #4d4d4d;
			color: #ffffff;
		}

		.btn.btn-black.btn-outline {
			background: transparent !important;
			border: 1px solid #4d4d4d !important;
			color: #4d4d4d;
		}

		.btn.btn-lblue {
			color: #ffffff;
			background: #32c8de;
			border: 1px solid #1faabe;
		}

		.btn.btn-lblue:hover,
		.btn.btn-lblue:focus,
		.btn.btn-lblue.active,
		.btn.btn-lblue:active {
			background: #1faabe;
			color: #ffffff;
		}

		.btn.btn-lblue.btn-outline {
			background: transparent !important;
			border: 1px solid #1faabe !important;
			color: #1faabe;
		}



		/* Brand & Social Media */
		/* Brand with background color */
		.brand-bg a i {
			display: inline-block;
			text-decoration: none;
			text-align: center;
			margin-right: 5px;
			color: #fff;
			font-size: 14px;
			-webkit-transition: background 1s ease;
			-moz-transition: background 1s ease;
			-o-transition: background 1s ease;
			-ms-transition: background 1s ease;
			transition: background 1s ease;
		}

		.brand-bg a i:hover {
			-webkit-transition: background 1s ease;
			-moz-transition: background 1s ease;
			-o-transition: background 1s ease;
			-ms-transition: background 2s ease;
			transition: background 1s ease;
		}

		.brand-bg a.facebook i {
			/*background: #3280e7;*/
		}

		.brand-bg a.facebook i:hover {
			background: #134fa0;
		}

		.brand-bg a.twitter i {
			/*background: #32c8de;*/
		}

		.brand-bg a.twitter i:hover {
			background: #188392;
		}

		.brand-bg a.google-plus i {
			/*background: #f96f4a;*/
		}

		.brand-bg a.google-plus i:hover {
			background: #eb6440;
		}

		.brand-bg a.linkedin i {
			background: #729fda;
		}

		.brand-bg a.linkedin i:hover {
			background: #3069b6;
		}

		.brand-bg a.pinterest i {
			background: #ed5441;
		}

		.brand-bg a.pinterest i:hover {
			background: #b72411;
		}

		.brand-bg a.flickr i {
			background: #ff61e7;
		}

		.brand-bg a.flickr i:hover {
			background: #fa00d4;
		}

		.brand-bg a.github i {
			background: #666666;
		}

		.brand-bg a.github i:hover {
			background: #333333;
		}

		.brand-bg a.instagram i {
			background: #d6917a;
		}

		.brand-bg a.instagram i:hover {
			background: #b35637;
		}

		/* Brand without background color */
		.brand a i {
			display: inline-block;
			text-decoration: none;
			text-align: center;
			margin-right: 10px;
			color: #fff;
			font-size: 14px;
			-webkit-transition: color 2s ease;
			-moz-transition: color 2s ease;
			-o-transition: color 2s ease;
			-ms-transition: color 2s ease;
			transition: color 2s ease;
		}

		.brand a i:hover {
			-webkit-transition: color 2s ease;
			-moz-transition: color 2s ease;
			-o-transition: color 2s ease;
			-ms-transition: color 2s ease;
			transition: color 2s ease;
		}

		.brand a.facebook i {
			color: #3280e7;
		}

		.brand a.facebook i:hover {
			color: #134fa0;
		}

		.brand a.twitter i {
			color: #32c8de;
		}

		.brand a.twitter i:hover {
			color: #188392;
		}

		.brand a.google-plus i {
			color: #f96f4a;
		}

		.brand a.google-plus i:hover {
			color: #eb6440;
		}

		.brand a.linkedin i {
			color: #729fda;
		}

		.brand a.linkedin i:hover {
			color: #3069b6;
		}


		/* Shapes */
		/* Square */
		.square-1 {
			display: inline-block;
			height: 20px;
			width: 20px;
			line-height: 20px;
			text-align: center;
		}

		.square-2 {
			display: inline-block;
			height: 25px;
			width: 25px;
			line-height: 25px;
			text-align: center;
		}

		.square-3 {
			display: inline-block;
			height: 35px;
			width: 35px;
			line-height: 35px;
			text-align: center;
		}

		.square-4 {
			display: inline-block;
			height: 50px;
			width: 50px;
			line-height: 50px;
			text-align: center;
		}

		.square-5 {
			display: inline-block;
			height: 70px;
			width: 70px;
			line-height: 70px;
			text-align: center;
		}

		/* Circle */
		.circle-1 {
			display: inline-block;
			height: 20px;
			width: 20px;
			line-height: 20px;
			text-align: center;
			border-radius: 100%;
		}

		.circle-2 {
			display: inline-block;
			height: 25px;
			width: 25px;
			line-height: 25px;
			text-align: center;
			border-radius: 100%;
		}

		.circle-3 {
			display: inline-block;
			height: 35px;
			width: 35px;
			line-height: 35px;
			text-align: center;
			border-radius: 100%;
		}

		.circle-4 {
			display: inline-block;
			height: 50px;
			width: 50px;
			line-height: 50px;
			text-align: center;
			border-radius: 100%;
		}

		.circle-5 {
			display: inline-block;
			height: 70px;
			width: 70px;
			line-height: 70px;
			text-align: center;
			border-radius: 100%;
		}

		/* Border radius */
		.sharp {
			border-radius: 0px !important;
		}

		.rounded-1 {
			border-radius: 2px !important;
		}

		.rounded-2 {
			border-radius: 4px !important;
		}

		.rounded-3 {
			border-radius: 6px !important;
		}

		.rounded-4 {
			border-radius: 10px !important;
		}

		.rounded-5 {
			border-radius: 100% !important;
		}

		/* Badges */
		.badge {
			min-width: 10px;
			padding: 3px 7px !important;
			font-size: 12px;
			line-height: 12px;
			font-weight: normal;
			display: inline-block;
			color: #fff;
			border-radius: 10px;
		}

		.badge.badge-white {
			color: #666666;
			background: #ffffff;
		}

		.badge.badge-grey {
			color: #a2a2a2;
			background: #eeeeee;
		}

		.badge.badge-black {
			color: #ffffff;
			background: #666666;
		}

		.badge.badge-lblue {
			color: #ffffff;
			background: #32c8de;
		}

		.badge.badge-blue {
			color: #ffffff;
			background: #609cec;
		}



		/* Text color classes */
		.white {
			color: #ffffff !important;
		}

		a.white {
			color: #ffffff !important;
		}

		a.white:hover,
		a.white:focus {
			color: #ffffff !important;
		}

		.grey {
			color: #eeeeee !important;
		}

		a.grey {
			color: #eeeeee !important;
		}

		a.grey:hover,
		a.grey:focus {
			color: #d5d5d5 !important;
		}

		.black {
			color: #666666 !important;
		}

		a.black {
			color: #666666 !important;
		}

		a.black:hover,
		a.black:focus {
			color: #4d4d4d !important;
		}

		.lblue {
			color: #32c8de !important;
		}

		a.lblue {
			color: #32c8de !important;
		}

		a.lblue:hover,
		a.lblue:focus {
			color: #1faabe !important;
		}

		/* Background color classes */
		.bg-white {
			background-color: #ffffff !important;
		}

		.bg-grey {
			background-color: #eeeeee !important;
		}

		.bg-black {
			background-color: #666666 !important;
		}

		.bg-red {
			background-color: #ed5441 !important;
		}

		.bg-green {
			background-color: #51d466 !important;
		}

		.bg-lblue {
			background-color: #32c8de !important;
		}

		.bg-blue {
			background-color: #609cec !important;
		}

		.bg-orange {
			background-color: #f8a841 !important;
		}

		.bg-yellow {
			background-color: #fcd419 !important;
		}

		.bg-purple {
			background-color: #cb79e6 !important;
		}

		.bg-rose {
			background-color: #ff61e7 !important;
		}

		.bg-brown {
			background-color: #d08166 !important;
		}

		/* Border class */
		/* Border color */
		.br-white {
			border: 1px solid #ffffff;
		}

		.br-grey {
			border: 1px solid #eeeeee;
		}

		.br-black {
			border: 1px solid #666666;
		}

		.br-lblue {
			border: 1px solid #32c8de;
		}

		/* Border size */
		.br-size-1 {
			border-width: 2px !important;
		}

		.br-size-2 {
			border-width: 4px !important;
		}

		.br-size-3 {
			border-width: 6px !important;
		}

		.br-size-4 {
			border-width: 10px !important;
		}

		.br-size-5 {
			border-width: 15px !important;
		}

		/* Border style */
		.br-style-1 {
			border-style: dotted !important;
		}

		.br-style-2 {
			border-style: dashed !important;
		}

		.br-style-3 {
			border-style: double !important;
			border-width: 3px !important;
		}

		/* Border position */
		.br-no-left {
			border-left: 0px !important;
		}

		.br-no-right {
			border-right: 0px !important;
		}

		.br-no-top {
			border-top: 0px !important;
		}

		.br-no-bottom {
			border-bottom: 0px !important;
		}

		/*for latest blog section */
		/* Owl carousel */
		.style-14.index-3 .owl-theme .owl-controls {
			padding-bottom: 20px;
		}

		.lookcare-product-single .related-products-wrapper .owl-theme .owl-controls {
			margin-top: 40px;
		}

		.owl-theme .owl-controls {
			margin-top: 10px;
		}

		.owl-theme .owl-controls .owl-buttons div {
			color: #FFF;
			display: inline-block;
			margin: 5px;
			padding: 3px 10px;
			font-size: 12px;
			-webkit-border-radius: 30px;
			-moz-border-radius: 30px;
			border-radius: 30px;
			background: #869791;
			filter: Alpha(Opacity=50);
			/*IE7 fix*/
			opacity: 0.5;
		}

		.owl-theme .owl-controls.clickable .owl-buttons div:hover {
			filter: Alpha(Opacity=100);
			/*IE7 fix*/
			opacity: 1;
			text-decoration: none;
		}

		.owl-theme .owl-controls .owl-page {
			display: inline-block;
		}

		.owl-theme .owl-controls .owl-pagination {
			text-align: center;
		}

		.owl-theme .owl-controls .owl-page span {
			display: block;
			width: 12px;
			height: 12px;
			margin: 5px;
			-webkit-border-radius: 20px;
			-moz-border-radius: 20px;
			border-radius: 20px;
			background: #fff;
			box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.4);
		}

		.owl-theme .owl-controls .owl-page span.owl-numbers {
			height: auto;
			width: auto;
			color: #FFF;
			padding: 0px 10px;
			font-size: 12px;
			-webkit-border-radius: 30px;
			-moz-border-radius: 30px;
			border-radius: 30px;
		}

		.owl-nav {
			text-align: right;
			margin-bottom: 10px;
		}

		.owl-nav a i {
			width: 23px;
			height: 23px;
			line-height: 23px;
			background: #f3f3f3;
			border-bottom: 1px solid #ccc;
			color: #ccc;
			display: inline-block;
			border-radius: 2px;
			font-size: 12px;
			text-align: center;
			cursor: pointer;
		}

		.owl-nav a i:hover {
			color: #fff;
		}

		.owl-nav a.owl-nav-prev i {
			margin-right: 3px;
		}

		.owl-carousel .owl-content {
			/* margin:10px 5px;*/
		}




		/* featured product*/

		.Top-Title-SideBar h3 {
			font-weight: 700;
			color: #373636;
			margin: 0 0 20px;
			text-transform: uppercase;
			font-size: 17px;
			line-height: 23px;
		}

		ul.shop-res-items li {
			display: inline-block;
			width: 100%;
			margin-bottom: 15px;
			padding-bottom: 15px;
			border-bottom: 1px Solid #e9e9e9;
		}

		.shop-res-items li>a {
			float: left;
		}

		.shop-res-items>li h6 {
			padding-left: 70px;
			font-size: 14px;
			line-height: 20px;
			color: #acacac;
			text-transform: uppercase;
			font-weight: 700;
			margin: 0;
		}

		.shop-res-items>li h6 a:hover {
			color: #32c8de;
		}

		.shop-res-items>li h6 a {
			display: inline;
			padding: 0;
			font-size: 13px;
			line-height: 20px;
			/*font-family: 'Raleway', sans-serif;*/
			color: #373636;
			text-transform: uppercase;
			font-weight: 400;
		}

		ul.shop-res-items span {
			color: #fff;
			font-size: 12px;
			font-weight: 700;
			line-height: 24px;
			background-color: #32c8de;
			padding: 2px 4px;
			border-radius: 2px;
		}

		.Last-items-shop ul {
			padding: 0;
		}

		.Last-items-shop ul img {
			max-width: 60px;
			margin-right: 10px;
		}

		/* ------------------ middle shop item ----------------*/
	</style>

	<style type="text/css">
		#preloader {
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			z-index: 999999;
			background: #000;
		}

		.loader {
			width: 40px;
			height: 40px;
			position: absolute;
			top: 50%;
			left: 50%;
			margin-top: -13px;
			margin-left: -13px;
			border-radius: 60px;
			animation: loader 0.8s linear infinite;
			-webkit-animation: loader 0.8s linear infinite;
		}

		@keyframes loader {
			0% {
				-webkit-transform: rotate(0deg);
				transform: rotate(0deg);
				border: 4px solid #f44336;
				border-left-color: transparent;
			}

			50% {
				-webkit-transform: rotate(180deg);
				transform: rotate(180deg);
				border: 4px solid #673ab7;
				border-left-color: transparent;
			}

			100% {
				-webkit-transform: rotate(360deg);
				transform: rotate(360deg);
				border: 4px solid #f44336;
				border-left-color: transparent;
			}
		}

		@-webkit-keyframes loader {
			0% {
				-webkit-transform: rotate(0deg);
				border: 4px solid #f44336;
				border-left-color: transparent;
			}

			50% {
				-webkit-transform: rotate(180deg);
				border: 4px solid #673ab7;
				border-left-color: transparent;
			}

			100% {
				-webkit-transform: rotate(360deg);
				border: 4px solid #f44336;
				border-left-color: transparent;
			}
		}
	</style>

</head>

<body>
	<div id="preloader">
		<div class="loader"></div>
	</div>

	<!-- start header -->
	<header>
		<!-- Top bar starts -->
		<div class="top-bar">
			<div class="container">

				<!-- Contact starts -->
				<div class="tb-contact pull-left">
					<!-- Email -->
					<i class="fa fa-envelope color"></i> &nbsp; <a>contactkiranaop@gmail.com</a>
					&nbsp;&nbsp;
					<!-- Phone -->
					<i class="fa fa-phone color"></i> &nbsp;<a> 8340440534</a>
				</div>
				<!-- Contact ends -->

				<!-- Shopping kart starts -->
				<div class="tb-shopping-cart pull-right">
					<!-- <div class="account-curr-lang-wrap f-right"> -->


					<?php
					if (isset($_SESSION['USER_ID'])) {
					?>

						<a href="wishlist.php" class="mr15"><i style="color: white;" class="glyphicon glyphicon-heart"></i><span class="htc__wishlist"><?php echo $wishlist_count ?></span></a>
						<!-- <a href="cart.php" class="mr15" q2><i class="icon-handbag icons"></i><span class="htc__qua"><?php echo $totalProduct ?></span></a> -->

					<?php } else {
						echo '<a href="login.php" style="margin: 15px;"><i class="icon-user icons header_icon"></i> login</a>';
					}
					?>
					<a href="cart.php" class="mr15" q2><i style="font-size:15px;    color: white;" class="fa">&#xf07a;</i><span class="htc__qua"><?php echo $totalProduct ?></span></a>
				</div>
				<div class="account-curr-lang-wrap f-right" style="margin-top: -30px;margin-bottom: -20px;">

					<?php
					if (isset($_SESSION['USER_LOGIN'])) {
					?>
						<ul>


							<li class="top-hover"><a href="#"><i class="icon-user icons header_icon"></i> <?php echo "Welcome <span id='user_top_name'>" . $_SESSION['USER_NAME']; ?></span>
									<span class="kad-submenu-accordion collapse-next kad-submenu-accordion-open" data-parent=".kad-nav-collapse" data-toggle="collapse" data-target=""><i class="icon-arrow-down"></i></i></span> <i class="ion-chevron-down"></i></a>
								<ul>
									<li><a href="profile.php">Profile </a></li>
									<li><a href="my_order.php">Order</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					<?php } else {
					}
					?>
				</div>

				<!-- Shopping kart ends -->

				<!-- Search section for responsive design -->
				<div class="tb-search pull-left">
					<a href="#" class="b-dropdown"><i class="fa fa-search square-2 rounded-1 bg-color white"></i></a>
					<div class="b-dropdown-block">
						<form action="search.php" method="get">
							<!-- Input Group -->
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Type Something" name="str">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-color" type="button">Search</button>
								</span>
							</div>
						</form>
					</div>
				</div>
				<!-- Search section ends -->

				<!-- Social media starts -->
				<div class="tb-social pull-right">
					<div class="brand-bg text-right">
						<!-- Brand Icons -->
						<a href="#" class="facebook"><i class="fa fa-facebook square-2 rounded-1"></i></a>
						<a href="#" class="twitter"><i class="fa fa-twitter square-2 rounded-1"></i></a>
						<a href="#" class="google-plus"><i class="fa fa-google-plus square-2 rounded-1"></i></a>
					</div>
				</div>
				<!-- Social media ends -->

				<div class="clearfix"></div>
			</div>
		</div>

		<!-- Top bar ends -->

		<!-- Header One Starts -->
		<div class="header-1" style="background-color:white;">

			<!-- Container -->
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<!-- Logo section -->
						<div class="logo">
							<h1><a href="index.php" style="text-decoration: auto" ;><i class="fa fa-bookmark-o"></i> KOP it! </a></h1>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-2 col-sm-5 col-sm-offset-3 hidden-xs">
						<!-- Search Form -->
						<div class="header-search">
							<form action="search.php" method="get">
								<!-- Input Group -->
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Type Something" name="str">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-color" type="button">Search</button>
									</span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<!-- Navigation starts -->

			<div class="navi" style="    background-color: #323a45;">
				<div class="container">
					<div class="navy" style="    background-color: #323a45;">
						<ul>
							<!-- Main menu -->
							<li><a href="index.php">Home</a></li>
							
							<li><a href="aboutus.php">About Us</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Navigation ends -->

		</div>

		<!-- Header one ends -->

	</header>
	<!-- end header -->
	<script type="text/javascript">
		$(document).ready(function() {
			var hidden = true;
			$(".b-dropdown").click(function(e) {
				e.preventDefault();
				if (hidden) {
					$(this).next('.b-dropdown-block').slideToggle(400, function() {
						hidden = false;
					});
				}
			});
			$('html').click(function() {
				if (!hidden) {
					$('.b-dropdown-block').slideUp();
					hidden = true;
				}
			});
			$('.b-dropdown-block').click(function(event) {
				event.stopPropagation();
			});
		});
	</script>

	<script type="text/javascript">
		$(window).on('load', function() {
			$(".loader").fadeOut();
			$("#preloader").delay(200).fadeOut("slow");

			/* Featured Products */
			$('.featured__controls li').on('click', function() {
				$('.featured__controls li').removeClass('active');
				$(this).addClass('active');
			});
			if ($('.featured__filter').length > 0) {
				var containerEl = $('.featured__filter');
				var mixer = mixitup(containerEl);
			}
		});
	</script>