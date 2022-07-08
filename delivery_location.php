<?php
require('top.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<!-- <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="manifest" href="/superpwa-manifest.json">
	<meta name="theme-color" content="#D5E0EB">
	]
	<script type="text/template" id="wc_psearch_tempTpl">
		This\'s temp Template from Predictive Search   
 	</script>
	<script type="text/template" id="wc_psearch_itemTpl">
		<div class="ajax_search_content">
			<div class="result_row">
				<span class="rs_avatar"><a href="{{= url }}"><img src="{{= image_url }}" /></a></span>
				<div class="rs_content_popup">
					<a href="{{= url }}">
						<span class="rs_name">{{= title }}</span>
						{{ if ( type == 'p_sku' && sku != null && sku != '' ) { }}<span class="rs_sku">SKU: <strong>{{= sku }}</strong></span>{{ } }}
						{{ if ( price != null && price != '' ) { }}<span class="rs_price">Price: {{= price }}</span>{{ } }}
						{{ if ( stock != null && stock != '' ) { }}<span class="rs_stock">{{= stock }}</span>{{ } }}
						{{ if ( description != null && description != '' ) { }}<span class="rs_description">{{= description }}</span>{{ } }}
					</a>
					{{ if ( categories.length > 0 ) { }}
						<span class="rs_cat posted_in">
							Category: 
							{{ var number_cat = 0; }}
							{{ _.each( categories, function( cat_data ) { number_cat++; }}
								{{ if ( number_cat > 1 ) { }}, {{ } }}<a class="rs_cat_link" href="{{= cat_data.url }}">{{= cat_data.name }}</a>
							{{ }); }}
						</span>
					{{ } }}
				</div>
			</div>
		</div>
	</script>
	<script type="text/template" id="wc_psearch_footerSidebarTpl">
		<div rel="more_result" class="more_result">
			<span>See more search results for &#039;{{= title }}&#039; in:</span>
			{{ if ( description != null && description != '' ) { }}{{= description }}{{ } }}
		</div>
	</script>
	<script type="text/template" id="wc_psearch_footerHeaderTpl">
		<div rel="more_result" class="more_result">
			<span>See more search results for &#039;{{= title }}&#039; in:</span>
			{{ if ( description != null && description != '' ) { }}{{= description }}{{ } }}
		</div>
	</script>

	
	<title>Our Delivery Locations | Sabzi Adda, Patna</title>
	<meta name="description" content="Sabzi Adda is expanding its service areas. Currently it delivers all goods to all localities of Patna, Bihar. Check out your serviceable pin codes here." />
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://www.sabziadda.com/delivery-locations/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Our Delivery Locations | Sabzi Adda, Patna" />
	<meta property="og:description" content="Sabzi Adda is expanding its service areas. Currently it delivers all goods to all localities of Patna, Bihar. Check out your serviceable pin codes here." />
	<meta property="og:url" content="https://www.sabziadda.com/delivery-locations/" />
	<meta property="og:site_name" content="Sabzi Adda" />
	<meta property="article:publisher" content="https://www.facebook.com/onlinesabziadda" />
	<meta property="article:modified_time" content="2017-08-13T18:26:04+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@sabziadda" />
	<script type="application/ld+json" class="yoast-schema-graph">
		{
			"@context": "https://schema.org",
			"@graph": [{
				"@type": "WebSite",
				"@id": "https://www.sabziadda.com/#website",
				"url": "https://www.sabziadda.com/",
				"name": "Sabzi Adda",
				"description": "Sasta Bhi, Accha Bhi!",
				"potentialAction": [{
					"@type": "SearchAction",
					"target": "https://www.sabziadda.com/?s={search_term_string}",
					"query-input": "required name=search_term_string"
				}],
				"inLanguage": "en-US"
			}, {
				"@type": "WebPage",
				"@id": "https://www.sabziadda.com/delivery-locations/#webpage",
				"url": "https://www.sabziadda.com/delivery-locations/",
				"name": "Our Delivery Locations | Sabzi Adda, Patna",
				"isPartOf": {
					"@id": "https://www.sabziadda.com/#website"
				},
				"datePublished": "2016-05-13T19:16:37+00:00",
				"dateModified": "2017-08-13T18:26:04+00:00",
				"description": "Sabzi Adda is expanding its service areas. Currently it delivers all goods to all localities of Patna, Bihar. Check out your serviceable pin codes here.",
				"breadcrumb": {
					"@id": "https://www.sabziadda.com/delivery-locations/#breadcrumb"
				},
				"inLanguage": "en-US",
				"potentialAction": [{
					"@type": "ReadAction",
					"target": ["https://www.sabziadda.com/delivery-locations/"]
				}]
			}, {
				"@type": "BreadcrumbList",
				"@id": "https://www.sabziadda.com/delivery-locations/#breadcrumb",
				"itemListElement": [{
					"@type": "ListItem",
					"position": 1,
					"item": {
						"@type": "WebPage",
						"@id": "https://www.sabziadda.com/",
						"url": "https://www.sabziadda.com/",
						"name": "Home"
					}
				}, {
					"@type": "ListItem",
					"position": 2,
					"item": {
						"@type": "WebPage",
						"@id": "https://www.sabziadda.com/delivery-locations/",
						"url": "https://www.sabziadda.com/delivery-locations/",
						"name": "Our Delivery Locations | Sabzi Adda, Patna"
					}
				}]
			}]
		}
	</script>
	

	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Sabzi Adda &raquo; Feed" href="https://www.sabziadda.com/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Sabzi Adda &raquo; Comments Feed" href="https://www.sabziadda.com/comments/feed/" />
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/www.sabziadda.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.6"
			}
		};
		! function(e, a, t) {
			var r, n, o, i, p = a.createElement("canvas"),
				s = p.getContext && p.getContext("2d");

			function c(e, t) {
				var a = String.fromCharCode;
				s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0);
				var r = p.toDataURL();
				return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL()
			}

			function l(e) {
				if (!s || !s.fillText) return !1;
				switch (s.textBaseline = "top", s.font = "600 32px Arial", e) {
					case "flag":
						return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]));
					case "emoji":
						return !c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212])
				}
				return !1
			}

			function d(e) {
				var t = a.createElement("script");
				t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
			}
			for (i = Array("flag", "emoji"), t.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, o = 0; o < i.length; o++) t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]);
			t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
				t.DOMReady = !0
			}, t.supports.everything || (n = function() {
				t.readyCallback()
			}, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
				"complete" === a.readyState && t.readyCallback()
			})), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css' href='https://www.sabziadda.com/wp-includes/css/dist/block-library/style.min.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='wc-block-vendors-style-css' href='https://www.sabziadda.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=3.8.1' type='text/css' media='all' />
	<link rel='stylesheet' id='wc-block-style-css' href='https://www.sabziadda.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=3.8.1' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css' href='https://www.sabziadda.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.3' type='text/css' media='all' />
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel='stylesheet' id='seed-wnb-css-css' href='https://www.sabziadda.com/wp-content/plugins/wordpress-notification-bar/inc/css/seed_wnb.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='dgwt-wcas-style-css' href='https://www.sabziadda.com/wp-content/plugins/ajax-search-for-woocommerce/assets/css/style.min.css?ver=1.8.1' type='text/css' media='all' />
	<link rel='stylesheet' id='xoo-wsc-fonts-css' href='https://www.sabziadda.com/wp-content/plugins/side-cart-woocommerce/assets/css/xoo-wsc-fonts.css?ver=2.1' type='text/css' media='all' />
	<link rel='stylesheet' id='xoo-wsc-style-css' href='https://www.sabziadda.com/wp-content/plugins/side-cart-woocommerce/assets/css/xoo-wsc-style.css?ver=2.1' type='text/css' media='all' />
	<style id='xoo-wsc-style-inline-css' type='text/css'>
		.xoo-wsc-sp-left-col img {
			max-width: 80px;
		}

		.xoo-wsc-sp-right-col {
			font-size: 14px;
		}

		.xoo-wsc-sp-container {
			background-color: #eee;
		}




		.xoo-wsc-footer {
			background-color: #ffffff;
			color: #000000;
			padding: 10px 20px;
		}

		.xoo-wsc-footer,
		.xoo-wsc-footer a,
		.xoo-wsc-footer .amount {
			font-size: 18px;
		}

		.xoo-wsc-ft-buttons-cont {
			grid-template-columns: auto;
		}

		.xoo-wsc-basket {
			bottom: 12px;
			right: 0px;
			background-color: #ffffff;
			color: #000000;
			box-shadow: 0 1px 4px 0;
		}

		.xoo-wsc-items-count {
			top: -15px;
			left: -15px;
		}

		.xoo-wsc-items-count,
		.xoo-wsc-sc-count {
			background-color: #000000;
			color: #ffffff;
		}

		.xoo-wsc-container,
		.xoo-wsc-slider {
			max-width: 320px;
			right: -320px;
			top: 0;
			bottom: 0;
			bottom: 0;
			font-family:
		}


		.xoo-wsc-cart-active .xoo-wsc-container,
		.xoo-wsc-slider-active .xoo-wsc-slider {
			right: 0;
		}

		.xoo-wsc-cart-active .xoo-wsc-basket {
			right: 320px;
		}

		.xoo-wsc-slider {
			right: -320px;
		}

		span.xoo-wsch-close {
			font-size: 16px;
			right: 10px;
		}

		.xoo-wsch-top {
			justify-content: center;
		}

		.xoo-wsch-text {
			font-size: 20px;
		}

		.xoo-wsc-header {
			color: #000000;
			background-color: #ffffff;
		}

		.xoo-wsc-sb-bar>span {
			background-color: #1e73be;
		}

		.xoo-wsc-body {
			background-color: #ffffff;
		}

		.xoo-wsc-body,
		.xoo-wsc-body span.amount,
		.xoo-wsc-body a {
			font-size: 16px;
			color: #000000;
		}

		.xoo-wsc-product {
			padding: 20px 15px;
		}

		.xoo-wsc-img-col {
			width: 30%;
		}

		.xoo-wsc-sum-col {
			width: 70%;
		}

		.xoo-wsc-sum-col {
			justify-content: center;
		}

		/***** Quantity *****/

		.xoo-wsc-qty-box {
			max-width: 75px;
		}

		.xoo-wsc-qty-box.xoo-wsc-qtb-square {
			border-color: #000000;
		}

		input[type="number"].xoo-wsc-qty {
			border-color: #000000;
			background-color: #ffffff;
			color: #000000;
			height: 28px;
			line-height: 28px;
		}

		input[type="number"].xoo-wsc-qty,
		.xoo-wsc-qtb-square {
			border-width: 1px;
			border-style: solid;
		}

		.xoo-wsc-chng {
			background-color: #ffffff;
			color: #000000;
		}
	</style>
	<link rel='stylesheet' id='dashicons-css' href='https://www.sabziadda.com/wp-includes/css/dashicons.min.css?ver=5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-styles-css' href='https://www.sabziadda.com/wp-content/plugins/woocommerce-predictive-search/admin/assets/css/font-awesome.min.css?ver=4.5.0' type='text/css' media='all' />
	<link rel='stylesheet' id='wc-predictive-search-style-css' href='https://www.sabziadda.com/wp-content/plugins/woocommerce-predictive-search/assets/css/wc_predictive_search.css?ver=5.3.9' type='text/css' media='all' />
	<link rel='stylesheet' id='wc-predictive-search-dynamic-style-css' href='//www.sabziadda.com/wp-content/uploads/sass/wc_predictive_search.min.css?ver=1608879607' type='text/css' media='all' />
	<link rel='stylesheet' id='kadence_app-css' href='https://www.sabziadda.com/wp-content/themes/virtue_premium/assets/css/virtue.css?ver=4.4.7' type='text/css' media='all' />
	<link rel='stylesheet' id='virtue_icons-css' href='https://www.sabziadda.com/wp-content/themes/virtue_premium/assets/css/virtue_icons.css?ver=4.4.7' type='text/css' media='all' />
	<link rel='stylesheet' id='virtue_skin-css' href='https://www.sabziadda.com/wp-content/themes/virtue_premium/assets/css/skins/default.css' type='text/css' media='all' />
	<link crossorigin="anonymous" rel='stylesheet' id='redux-google-fonts-virtue_premium-css' href='https://fonts.googleapis.com/css?family=Lato%3A400%2C700%7CMerriweather%3A300%2C400%2C700%2C900%2C300italic%2C400italic%2C700italic%2C900italic&#038;ver=1621078115' type='text/css' media='all' />
	<script type='text/javascript' src='https://www.sabziadda.com/wp-includes/js/jquery/jquery.min.js?ver=3.5.1' id='jquery-core-js'></script>
	<script type='text/javascript' src='https://www.sabziadda.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
	<script type='text/javascript' id='seed-wnb-js-js-extra'>
		/* <![CDATA[ */
		var seed_wnb_js_localize = {
			"msg": "\ud83d\udce3 Next Day Assured Delivery Before 9 PM",
			"button_link": "",
			"button_label": "",
			"button_target": "_self"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='https://www.sabziadda.com/wp-content/plugins/wordpress-notification-bar/inc/js/seed_wnb.js?ver=5.6' id='seed-wnb-js-js'></script>
	<link rel="https://api.w.org/" href="https://www.sabziadda.com/wp-json/" />
	<link rel="alternate" type="application/json" href="https://www.sabziadda.com/wp-json/wp/v2/pages/19" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.sabziadda.com/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.sabziadda.com/wp-includes/wlwmanifest.xml" />

	<link rel='shortlink' href='https://www.sabziadda.com/?p=19' />
	<link rel="alternate" type="application/json+oembed" href="https://www.sabziadda.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.sabziadda.com%2Fdelivery-locations%2F" />
	<link rel="alternate" type="text/xml+oembed" href="https://www.sabziadda.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.sabziadda.com%2Fdelivery-locations%2F&#038;format=xml" />
	<script>
		function expand(param) {
			param.style.display = (param.style.display == "none") ? "block" : "none";
		}

		function read_toggle(id, more, less) {
			el = document.getElementById("readlink" + id);
			el.innerHTML = (el.innerHTML == more) ? less : more;
			expand(document.getElementById("read" + id));
		}
	</script>
	<script>
		var blog_title = 'https://www.sabziadda.com/wp-content/plugins/woocommerce-check-pincode-zipcode-for-shipping/';
		var usejs = 0;
	</script>
	<style>
		#shade {
			background: none repeat scroll 0 0 #000000;
			opacity: 0.5;
		}

		#shade {
			height: 100%;
			left: 0;
			position: fixed;
			top: 0;
			width: 100%;
			z-index: 100;
		}

		form.cart #my_custom_checkout_field #pincode_field_id {
			width: 180px;
			border: 1px solid #d3d3d3;
			margin-right: 5px;
			font-size: 13px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
		}

		form.cart #my_custom_checkout_field #pincode_field_idp label {
			display: inline-block;
			margin-right: 5px;
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			color: #000000;
		}

		form.cart .wc-delivery-time-response .delivery-info-wrap {
			margin: 15px 0;
		}

		form.cart .wc-delivery-time-response .delivery-info-wrap .delivery-info {
			display: inline-block;
			width: 100%;
			position: relative;
		}

		form.cart .wc-delivery-time-response .delivery-info-wrap .delivery-info .header {
			float: left;
			width: 50%;
		}

		form.cart .wc-delivery-time-response .delivery-info-wrap .delivery-info .cash-on-delivery-info-wrap {
			float: right;
			width: 50%;
			position: relative;
		}

		form.cart .wc-delivery-time-response .delivery-info-wrap .delivery-info .delivery-help-icon {
			margin-left: 5px;
			cursor: pointer;
		}

		form.cart .wc-delivery-time-response .delivery-info-wrap .delivery-info .header .delivery .ul-disc {
			margin: 0;
			padding: 0;
			list-style: none;
		}

		form.cart .wc-delivery-time-response .delivery-info-wrap .delivery-info .cash-on-delivery-info-wrap .cash-on-delivery-info .header {
			float: none;
			width: 100%;
		}

		form.cart .wc-delivery-time-response .delivery-info-wrap .delivery-info .cash-on-delivery-info-wrap .cash-on-delivery-info .header .cash-on-delivery-help-icon {
			margin-left: 5px;
			cursor: pointer;
		}


		/*-------------------product1-----------------*/

		#my_custom_checkout_field2 #pincode_field_idp #pincode_field_id.input-text {
			border-radius: 0;
			display: inline-block;
			padding: 7px;
			width: 180px;
			border: 1px solid #666666;
			margin-right: 5px;
			font-size: 13px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			color: #999;
		}

		#my_custom_checkout_field2 #pincode_field_idp .button {
			cursor: pointer;
			display: inline-block;
			vertical-align: top;
			margin-top: 0px;
			padding: 7px 10px;
			float: none;
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			text-transform: uppercase;
			font-weight: normal;
		}

		#my_custom_checkout_field2 #pincode_field_idp .button:hover {
			box-shadow: none;
		}

		#my_custom_checkout_field #pincode_field_idp #pincode_field_id.input-text {
			border-radius: 0;
			display: inline-block;
			padding: 7px;
			width: 180px;
			border: 1px solid #666666;
			margin-right: 5px;
			font-size: 13px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
		}

		#my_custom_checkout_field #pincode_field_idp .button {
			margin-top: -3px;
			padding: 5px 10px;
			float: none;
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			text-transform: uppercase;
			font-weight: normal;
		}


		.delivery_help_text p {
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			color: #000000;
		}

		.delivery_help_text h3 {
			font-size: 16px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			color: #7d7b6d;
		}

		.header .cash_on_delivery_help_text p {
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			color: #000000;
		}

		.header .cash_on_delivery_help_text h3 {
			font-size: 16px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			color: #7d7b6d;
		}

		.delivery-help-cross {
			color: #000 !important;
			font-size: 17px;
			font-weight: bold;
			position: absolute;
			right: 0px;
			top: -2px;
			cursor: pointer;
		}

		/*-------------------product1-----------------*/


		.cash_on_delivery_help_text p {
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			color: #000000;
		}

		/*------------background & border color & EOD message color------------*/

		.avlpin {
			background: #e5e5e5;
		}

		.avlpin {
			border: 1px solid #e8e7e7;
		}

		.avlpin {
			margin: 24px 0 12px;
			padding: 20px;
			text-align: center;
			min-width: auto;
			display: inline-block;
			box-sizing: border-box;
		}

		.pin_div {
			background: #e5e5e5;
		}

		.pin_div {
			border: 1px solid #e8e7e7;
		}

		.pin_div {
			margin: 24px 0 12px;
			padding: 20px;
			text-align: center;
			width: 100%;
			display: inline-block;
		}

		/*------------background & border color & EOD message color------------*/

		/*------------Text color------------*/

		.avlpin p {
			color: #000000;
		}

		.avlpin p {
			display: inline-block;
			margin-right: 5px;
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			margin-bottom: 0;
		}

		#pincode_field_idp label {
			color: #000000;
			display: inline-block;
			margin-right: 5px;
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
		}

		/*------------Text color------------*/

		/*------------Button & Button Text color------------*/

		#change_pin.button {
			background: #4285f4;
		}

		#change_pin.button {
			color: #ffffff;
		}

		#my_custom_checkout_field2 #pincode_field_idp .button {
			color: #ffffff;
		}

		#my_custom_checkout_field2 #pincode_field_idp .button {
			background: none repeat scroll 0 0 #4285f4;
		}

		#my_custom_checkout_field #pincode_field_idp .button {
			color: #ffffff;
		}

		#my_custom_checkout_field #pincode_field_idp .button {
			background: none repeat scroll 0 0 #4285f4;
		}

		#change_pin.button {
			float: none;
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
			padding: 7px 12px;
			text-transform: uppercase;
			font-weight: normal;
		}

		/*------------Button & Button Text color------------*/

		/*-----Tooltip Border, Tooltip Background & Tooltip Text color-----*/

		.header .delivery_help_text {
			background: #EDEDED;
		}

		.header .delivery_help_text {
			border: 1px solid #e8e7e7;
		}

		.header .delivery_help_text {
			width: 100%;
			box-sizing: border-box;
			overflow: auto;
			height: 200px;
			position: absolute;
			z-index: 9999;
			top: 25px;
			left: 0;
			padding: 15px;
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
		}

		/*-----Tooltip Border, Tooltip Background & Tooltip Text color-----*/

		/*------------Delivered by Text color------------*/

		.delivery-info h6 {
			margin: 0;
			display: inline-block;
			font-size: 16px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
		}

		/*------------Delivered by Text color------------*/

		/*------------Date color------------*/

		.delivery .ul-disc li {
			font-size: 14px;
			font-family: "Source Sans Pro", Helvetica, sans-serif;
		}

		/*------------Date color------------*/

		.delivery_help_text_main {
			position: relative;
			width: 100%;
		}

		.delivery-info span h6 {
			color: #484747;
		}

		.width_class {}
	</style>
	<style type='text/css'>
		#bg_color {
			color: black;
		}

		.wnb-bar-button {
			color: white;
			text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
			background-color: black;
		}

		#wnb-bar {
			color: black;
			position: fixed;
			background-color: #FFD700;
			background-image: -moz-linear-gradient(top, #FFD700, #dbb900);
			background-image: -ms-linear-gradient(top, #FFD700, #dbb900);
			background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#FFD700), to(#dbb900));
			background-image: -webkit-linear-gradient(top, #FFD700, #dbb900);
			background-image: -o-linear-gradient(top, #FFD700, #dbb900);
			background-image: linear-gradient(top, #FFD700, #dbb900);
			background-repeat: repeat-x;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd700', endColorstr='#dbb900', GradientType=0);
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
	<script type="text/javascript">
		var light_error = "The Image could not be loaded.",
			light_of = "%curr% of %total%",
			light_load = "Loading...";
	</script>
	<style type="text/css" id="kt-custom-css">
		#logo {
			padding-top: 25px;
		}

		#logo {
			padding-bottom: 10px;
		}

		#logo {
			margin-left: 0px;
		}

		#logo {
			margin-right: 0px;
		}

		#nav-main,
		.nav-main {
			margin-top: 40px;
		}

		#nav-main,
		.nav-main {
			margin-bottom: 10px;
		}

		.headerfont,
		.tp-caption,
		.yith-wcan-list li,
		.yith-wcan .yith-wcan-reset-navigation,
		ul.yith-wcan-label li a,
		.price {
			font-family: Arial, Helvetica, sans-serif;
		}

		.topbarmenu ul li {
			font-family: Lato;
		}

		#kadbreadcrumbs {
			font-family: Merriweather;
		}

		#containerfooter h3,
		#containerfooter h5,
		#containerfooter,
		.footercredits p,
		.footerclass a,
		.footernav ul li a {
			color: #ffffff;
		}

		.kad-mobile-nav .kad-nav-inner li.current-menu-item>a,
		.kad-mobile-nav .kad-nav-inner li a:hover,
		#kad-banner .mobile-nav-trigger-id a.nav-trigger-case:hover .kad-menu-name,
		#kad-banner .mobile-nav-trigger-id a.nav-trigger-case:hover .kad-navbtn,
		.nav-trigger-case:hover .kad-navbtn {
			color: #fbcc00;
		}

		#nav-main ul.sf-menu a:hover,
		.nav-main ul.sf-menu a:hover,
		#nav-main ul.sf-menu li.current-menu-item>a,
		.nav-main ul.sf-menu li.current-menu-item>a,
		#nav-main ul.sf-menu ul li a:hover,
		.nav-main ul.sf-menu ul li a:hover {
			color: #ffffff;
		}

		#nav-main ul.sf-menu li a:hover,
		.nav-main ul.sf-menu a:hover,
		#nav-main ul.sf-menu li.current-menu-item>a,
		.nav-main ul.sf-menu li.current-menu-item>a,
		#nav-main ul.sf-menu ul li a:hover,
		.nav-main ul.sf-menu ul li a:hover {
			background: #f14b20;
		}

		.kad-mobile-nav .kad-nav-inner li.current-menu-item>a,
		.kad-mobile-nav .kad-nav-inner li a:hover,
		#kad-banner .mobile-nav-trigger-id a.nav-trigger-case:hover .kad-menu-name,
		#kad-banner .mobile-nav-trigger-id a.nav-trigger-case:hover .kad-navbtn {
			background: #ffffff;
		}

		.contentclass,
		.nav-tabs>li.active>a,
		.nav-tabs>li.active>a:hover,
		.nav-tabs>li.active>a:focus,
		.hrule_gradient:after {
			background: #ffffff;
		}

		.topclass {
			background: #4285f4;
		}

		.navclass {
			background: #34a853;
		}

		.footerclass {
			background: #34a853;
		}

		body {
			background: #34a853;
			background-position: 0% 0%;
		}

		@media (max-width: 991px) {
			.topbarmenu ul.sf-menu {
				display: none;
			}
		}

		@media only screen and (device-width: 768px) {
			.topbarmenu ul.sf-menu {
				display: none;
			}
		}

		@media (max-width: 768px) {
			#topbar-search form {
				display: none;
			}
		}

		.sidebar a,
		.product_price,
		.select2-container .select2-choice,
		.kt_product_toggle_container .toggle_grid,
		.kt_product_toggle_container .toggle_list,
		.kt_product_toggle_container_list .toggle_grid,
		.kt_product_toggle_container_list .toggle_list {
			color: #444444;
		}

		input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		input[type=number] {
			-moz-appearance: textfield;
		}

		.quantity input::-webkit-outer-spin-button,
		.quantity input::-webkit-inner-spin-button {
			display: none;
		}

		.sidebar a,
		.product_price,
		.select2-container .select2-choice,
		.kt_product_toggle_container .toggle_grid,
		.kt_product_toggle_container .toggle_list,
		.kt_product_toggle_container_list .toggle_grid,
		.kt_product_toggle_container_list .toggle_list {
			color: #444444;
		}

		@media (max-width: 992px) {

			#kad-banner,
			#kad-banner-sticky-wrapper {
				display: none;
			}

			#kad-mobile-banner,
			#kad-mobile-banner-sticky-wrapper {
				display: block;
			}
		}

		@media only screen and (device-width: 768px) {

			#kad-banner,
			#kad-banner-sticky-wrapper {
				display: none;
			}

			#kad-mobile-banner,
			#kad-mobile-banner-sticky-wrapper {
				display: block;
			}
		}

		.portfolionav {
			padding: 10px 0 10px;
		}

		.woocommerce-ordering {
			margin: 16px 0 0;
		}

		.product_item .product_details h5 {
			text-transform: none;
		}

		.product_item .product_details h5 {
			min-height: 40px;
		}

		#nav-second ul.sf-menu>li {
			width: 16.5%;
		}

		.kad-topbar-left,
		.kad-topbar-left .topbarmenu {
			float: right;
		}

		.kad-topbar-left .topbar_social,
		.kad-topbar-left .topbarmenu ul,
		.kad-topbar-left .kad-cart-total,
		.kad-topbar-right #topbar-search .form-search {
			float: left
		}

		#topbar .mobile-nav-trigger-id {
			float: left;
		}

		.kad-header-style-two .nav-main ul.sf-menu>li {
			width: 33.333333%;
		}

		[class*="wp-image"] {
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
			border: none;
		}

		[class*="wp-image"]:hover {
			-webkit-box-shadow: none;
			-moz-box-shadow: none;
			box-shadow: none;
			border: none;
		}

		.light-dropshaddow {
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;
		}

		header .nav-trigger .nav-trigger-case {
			width: auto;
		}

		.nav-trigger-case .kad-menu-name {
			display: none;
		}

		@media (max-width: 767px) {
			header .nav-trigger .nav-trigger-case {
				width: auto;
				top: 0;
				position: absolute;
			}

			#kad-mobile-nav {
				margin-top: 50px;
			}
		}

		.kad-mobile-nav .form-search .search-query,
		.kad-mobile-nav .form-search .search-icon {
			color: #ffffff;
		}

		.kad-mobile-nav .form-search :-moz-placeholder {
			color: #ffffff;
		}

		.kad-mobile-nav .form-search ::-moz-placeholder {
			color: #ffffff;
		}

		.kad-mobile-nav .form-search :-ms-input-placeholder {
			color: #ffffff;
		}

		.kad-mobile-nav .form-search ::-webkit-input-placeholder {
			color: #ffffff;
		}

		//Alignment problem due to long product name length

		a.product_item_link {
			min-height: 40px;
		}

		//top bar menu customization

		#topbar-search form {
			float: left;
		}

		.topclass .virtue_social_widget {
			float: right;
		}


		//product page
		.single_variation {
			float: left;
		}

		.delivery-info-wrap .delivery-info span {
			float: left;
			margin-right: 2px;
		}

		.delivery-info-wrap .delivery-info .delivery {
			font-weight: bold;
		}

		//secondary menu background color
		nav-second .sf-menu ul li {
			border: 0;
		}

		#nav-second ul.sf-menu ul li a {
			color: #000000;
		}

		.sf-menu ul {
			background: #ffd282;
			border: 0;
		}

		//extra space
		p {
			padding-bottom: 15px;
		}

		//footer font size
		#containerfooter h3 {
			font-size: 18px;
			font-family: lato;
			color: red;
		}


		.footerclass h3 {
			font-size: 26px;
		}

		//extra space below the slider images and content of the homepageext

		.home div#homeheader {
			display: none;
		}

		.home .home_blog.home-margin.clearfix.home-padding {
			display: none;
		}


		/*search box*/
		.kad-topbar-right #topbar-search .form-search {
			min-width: 275px;
			min-height: 10px;
			background: #4285f4;

		}






		.topclass .virtue_social_widget {
			float: left;
		}

		.kad-nav-inner .kad-mnav,
		.kad-mobile-nav .kad-nav-inner li a,
		.nav-trigger-case {
			background-color: #34A753;
		}

		.dgwt-wcas-search-wrapp {
			min-width: unset;
			width: 100%;
			left: 200px;
			bottom: 30px;
			height: 50px;
			font-size: 13px;

		}





		#nav-main ul.sf-menu a,
		.nav-main ul.sf-menu a {

			left: 50px;
		}

		.topbar-widget {
			height: 50px;
		}


		.topbar-widget .virtue_social_widget a,
		.topbarmenu ul li a {
			top: 10px;
			position: relative;
		}



		h3 {
			margin: 0;
			padding: 0;
		}

		h1 {
			margin: 0;
			padding: 0;
		}


		.wp-block-button:hover {
			background-color: #e77b36;
		}
	</style>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67526912-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-67526912-1');
		ga('require', 'ecommerce');
	</script>
	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<script>
		(window.gaDevIds = window.gaDevIds || []).push('5CDcaG');
	</script>

	<link rel="icon" href="https://www.sabziadda.com/wp-content/uploads/2021/02/cropped-Logo-Transparent-Original-32x32.png" sizes="32x32" />
	<link rel="icon" href="https://www.sabziadda.com/wp-content/uploads/2021/02/cropped-Logo-Transparent-Original-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="https://www.sabziadda.com/wp-content/uploads/2021/02/cropped-Logo-Transparent-Original-180x180.png" />
	<meta name="msapplication-TileImage" content="https://www.sabziadda.com/wp-content/uploads/2021/02/cropped-Logo-Transparent-Original-270x270.png" />
	<style type="text/css">
		*[id^='readlink'] {
			font-weight: normal;
			color: #e77b36;
			background: #ffffff;
			padding: 0px;
			border-bottom: 0px solid #ffffff;
			-webkit-box-shadow: none !important;
			box-shadow: none !important;
			-webkit-transition: none !important;
		}

		*[id^='readlink']:hover {
			font-weight: normal;
			color: #e85800;
			padding: 0px;
			border-bottom: 0px solid #ffffff;
		}

		*[id^='readlink']:focus {
			outline: none;
			color: #e77b36;
		}
	</style>
	<style type="text/css" title="dynamic-css" class="options-output">
		header #logo a.brand,
		.logofont {
			font-family: Lato;
			line-height: 40px;
			font-weight: 400;
			font-style: normal;
			font-size: 32px;
		}

		.kad_tagline {
			font-family: Lato;
			line-height: 20px;
			font-weight: 400;
			font-style: normal;
			color: #000000;
			font-size: 14px;
		}

		.product_item .product_details h5 {
			font-family: Lato;
			line-height: 20px;
			font-weight: 700;
			font-style: normal;
			color: #000000;
			font-size: 15px;
		}

		h1 {
			font-family: Arial, Helvetica, sans-serif;
			line-height: 25px;
			font-weight: normal;
			font-style: normal;
			color: #34a853;
			font-size: 25px;
		}

		h2 {
			font-family: Lato;
			line-height: 40px;
			font-weight: normal;
			font-style: normal;
			font-size: 32px;
		}

		h3 {
			font-family: Lato;
			line-height: 40px;
			font-weight: 400;
			font-style: normal;
			font-size: 28px;
		}

		h4 {
			font-family: Lato;
			line-height: 40px;
			font-weight: 400;
			font-style: normal;
			font-size: 24px;
		}

		h5 {
			font-family: Lato;
			line-height: 32px;
			font-weight: 700;
			font-style: normal;
			font-size: 20px;
		}

		body {
			font-family: Merriweather;
			line-height: 24px;
			font-weight: 300;
			font-style: normal;
			color: #444444;
			font-size: 16px;
		}

		#nav-main ul.sf-menu a,
		.nav-main ul.sf-menu a {
			font-family: Lato;
			line-height: 20px;
			font-weight: 700;
			font-style: normal;
			font-size: 14px;
		}

		#nav-second ul.sf-menu a {
			font-family: Lato;
			line-height: 22px;
			font-weight: 400;
			font-style: normal;
			font-size: 18px;
		}

		#nav-main ul.sf-menu ul li a,
		#nav-second ul.sf-menu ul li a,
		.nav-main ul.sf-menu ul li a {
			line-height: inheritpx;
			font-size: 12px;
		}

		.kad-nav-inner .kad-mnav,
		.kad-mobile-nav .kad-nav-inner li a,
		.nav-trigger-case {
			font-family: Lato;
			line-height: 20px;
			font-weight: 400;
			font-style: normal;
			color: #ffffff;
			font-size: 16px;
		}
	</style>
</head> -->

<body data-rsssl=1 class="page-template page-template-page-fullwidth page-template-page-fullwidth-php page page-id-19 theme-virtue_premium woocommerce-no-js wide notsticky  not_ie delivery-locations" data-smooth-scrolling="0" data-smooth-scrolling-hide="1" data-jsselect="1" data-product-tab-scroll="0" data-animate="1" data-sticky="0">
	<div id="wrapper" class="container">
		
		<!-- <header id="kad-banner" class="banner headerclass kt-not-mobile-sticky " data-header-shrink="0" data-mobile-sticky="0" data-menu-stick="0">
			<div id="topbar" class="topclass">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 kad-topbar-left">
							<div class="topbarmenu clearfix">
								<div id="mobile-nav-trigger-top" class="nav-trigger mobile-nav-trigger-id">
									<a class="nav-trigger-case" data-toggle="collapse" rel="nofollow" data-target=".top_mobile_menu_collapse">
										<div class="kad-navbtn clearfix"><i class="icon-menu"></i></div>
									</a>
								</div>
								<div class="topbar_social">
									<ul>
										<li><a href="" data-toggle="tooltip" data-placement="bottom" target="_self" class="topbar-icon-1" data-original-title=""><i class=""></i></a></li>
									</ul>
								</div>
								<ul class="kad-cart-total">
									<li>
										<a class="cart-contents" href="https://www.sabziadda.com/basket/" title="View your shopping cart">
											<i class="icon-basket" style="padding-right:5px;"></i>
											Your Cart
											<span class="kad-cart-dash">-</span>
											<span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">&#8377;</span>0.00</bdi></span> </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 kad-topbar-right">
							<div id="topbar-search" class="topbar-widget">
								<div class="widget-1 widget-first topbar-widgetcontent topbar-widgetcontain">
									<div class="virtue_social_widget clearfix">

										<a href="https://www.facebook.com/onlinesabziadda" class="facebook_link" title="Facebook" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="icon-facebook"></i></a><a href="https://twitter.com/sabziadda" class="twitter_link" title="Twitter" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="icon-twitter"></i></a><a href="https://plus.google.com/+Sabziadda" class="googleplus_link" title="GooglePlus" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="GooglePlus" rel="publisher"><i class="icon-google-plus4"></i></a><a href="https://www.pinterest.com/sabziadda" class="pinterest_link" title="Pinterest" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="icon-pinterest"></i></a><a href="https://www.linkedin.com/company/sabzi-adda" class="linkedin_link" title="LinkedIn" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="LinkedIn"><i class="icon-linkedin"></i></a>
									</div>
								</div>
								<div class="widget-2 widget-last topbar-widgetcontent topbar-widgetcontain">
									<div class="dgwt-wcas-search-wrapp dgwt-wcas-no-submit woocommerce js-dgwt-wcas-layout-classic dgwt-wcas-layout-classic js-dgwt-wcas-mobile-overlay-enabled">
										<form class="dgwt-wcas-search-form" role="search" action="https://www.sabziadda.com/" method="get">
											<div class="dgwt-wcas-sf-wrapp">
												<svg version="1.1" class="dgwt-wcas-ico-magnifier" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 51.539 51.361" enable-background="new 0 0 51.539 51.361" xml:space="preserve">
													<path fill="#444" d="M51.539,49.356L37.247,35.065c3.273-3.74,5.272-8.623,5.272-13.983c0-11.742-9.518-21.26-21.26-21.26 S0,9.339,0,21.082s9.518,21.26,21.26,21.26c5.361,0,10.244-1.999,13.983-5.272l14.292,14.292L51.539,49.356z M2.835,21.082 c0-10.176,8.249-18.425,18.425-18.425s18.425,8.249,18.425,18.425S31.436,39.507,21.26,39.507S2.835,31.258,2.835,21.082z" />
												</svg>
												<label class="screen-reader-text" for="dgwt-wcas-search-input-122e">Products search</label>

												<input id="dgwt-wcas-search-input-122e" type="search" class="dgwt-wcas-search-input" name="s" value="" placeholder="Search for products..." autocomplete="off" />
												<div class="dgwt-wcas-preloader"></div>


												<input type="hidden" name="post_type" value="product" />
												<input type="hidden" name="dgwt_wcas" value="1" />


											</div>
										</form>
									</div>
								</div>
							</div>
						</div> 
					</div> 
					<div id="kad-mobile-nav-top" class="kad-mobile-nav id-kad-mobile-nav">
						<div class="kad-nav-inner mobileclass">
							<div id="mobile_menu_collapse_top" class="kad-nav-collapse collapse top_mobile_menu_collapse">
								<form role="search" method="get" class="form-search" action="https://www.sabziadda.com/">
									<label>
										<span class="screen-reader-text">Search for:</span>
										<input type="text" value="" name="s" class="search-query" placeholder="Search for products...">
									</label>
									<button type="submit" class="search-icon" aria-label="Submit Search"><i class="icon-search"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix kad-header-left">
						<div id="logo" class="logocase">
							<a class="brand logofont" href="https://www.sabziadda.com" title="Sabzi Adda">

								<div id="thelogo"><img src="https://www.sabziadda.com/wp-content/uploads/2016/05/Final-logo.jpg" alt="Sabzi Adda" class="kad-standard-logo" />
								</div>
							</a>
						</div> 
					</div>
					<div class="col-md-8 kad-header-right">
						<nav id="nav-main" class="clearfix">
							<ul id="menu-primary-menu" class="sf-menu">
								<li class="menu-loginsignup menu-item-2704"><a href="https://www.sabziadda.com/my-account"><span>Login | Sign up</span></a></li>
								<li class="menu-deliverylocations current-menu-item menu-item-2706"><a href="https://www.sabziadda.com/delivery-locations/"><span>Delivery Locations</span></a></li>
								<li class="menu-fontcolorwhitemarqueebgcolorf14b20businessopportunitymarqueefont menu-item-2705"><a href="https://www.sabziadda.com/business-opportunity/"><span>
											<font color="white">
												<marquee bgcolor=#f14b20>Business Opportunity</marquee>
											</font>
										</span></a></li>
							</ul>
						</nav>
					</div> 
				</div> 

			</div>
			<div id="cat_nav" class="navclass">
				<div class="container">
					<nav id="nav-second" class="clearfix">
						<ul id="menu-secondary-menu-test" class="sf-menu">
							<li class="menu-strongfontcolorffffffsize3pxvegetablesfruitsfontstrong sf-dropdown menu-item-1223"><a><span><strong>
											<font color="#FFFFFF" size="3px">Vegetables &#038; Fruits</font>
										</strong></span></a>
								<ul class="sf-dropdown-menu dropdown">
									<li class="menu-fontcolor000000size3pxfreshvegetablesfont menu-item-4263"><a href="https://www.sabziadda.com/online-vegetables/"><span>
												<font color="#000000" size="3px">Fresh Vegetables</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxfreshfruitsfont menu-item-1233"><a href="https://www.sabziadda.com/buy-fruits-online/"><span>
												<font color="#000000" size="3px">Fresh Fruits</font>
											</span></a></li>
								</ul>
							</li>
							<li class="menu-strongfontcolorffffffsize3pxgroceriesstaplesfontstrong sf-dropdown menu-item-1225"><a><span><strong>
											<font color="	#FFFFFF" size="3px">Groceries &#038; Staples</font>
										</strong></span></a>
								<ul class="sf-dropdown-menu dropdown">
									<li class="menu-fontcolor000000size3pxattaflourssoojifont menu-item-1237"><a href="https://www.sabziadda.com/buy-atta-flours-online/"><span>
												<font color="#000000" size="3px">Atta, Flours &#038; Sooji</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxricericeproductsfont menu-item-1249"><a href="https://www.sabziadda.com/buy-rice-products-online/"><span>
												<font color="#000000" size="3px">Rice &#038; Rice Products</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxdalpulsesfont menu-item-1240"><a href="https://www.sabziadda.com/buy-dal-pulses-online/"><span>
												<font color="#000000" size="3px">Dal &#038; Pulses</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxmasalaorspicesfont menu-item-1243"><a href="https://www.sabziadda.com/buy-masala-spices-online/"><span>
												<font color="#000000" size="3px">Masala or Spices</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxoilgheefont menu-item-1252"><a href="https://www.sabziadda.com/buy-oil-ghee-online/"><span>
												<font color="#000000" size="3px">Oil &#038; Ghee</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxdryfruitsfont menu-item-1246"><a href="https://www.sabziadda.com/buy-dry-fruits-online/"><span>
												<font color="#000000" size="3px">Dry Fruits</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxsugarsaltfont menu-item-2053"><a href="https://www.sabziadda.com/buy-sugar-salt-online/"><span>
												<font color="#000000" size="3px">Sugar &#038; Salt</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxotheringredientsfont menu-item-1256"><a href="https://www.sabziadda.com/buy-other-grocery-ingredients-online/"><span>
												<font color="#000000" size="3px">Other Ingredients</font>
											</span></a></li>
								</ul>
							</li>
							<li class="menu-strongfontcolorffffffsize3pxsnacksbrandedfoodsfontstrong sf-dropdown menu-item-1228"><a><span><strong>
											<font color="	#FFFFFF" size="3px">Snacks &#038; Branded Foods</font>
										</strong></span></a>
								<ul class="sf-dropdown-menu dropdown">
									<li class="menu-fontcolorblacksize3pxbiscuitscookiesfont menu-item-3534"><a href="https://www.sabziadda.com/buy-biscuits-cookies-onlline/"><span>
												<font color="black" size="3px">Biscuits &#038; Cookies</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxnoodlepastavermicellifont menu-item-3533"><a href="https://www.sabziadda.com/buy-noodle-pasta-vermicelli-online/"><span>
												<font color="black" size="3px">Noodle, Pasta, Vermicelli</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxbreakfastcerealsfont menu-item-3532"><a href="https://www.sabziadda.com/buy-breakfast-cereals-online/"><span>
												<font color="black" size="3px">Breakfast Cereals</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxsnacksnamkeenfont menu-item-3531"><a href="https://www.sabziadda.com/buy-snacks-namkeen-online/"><span>
												<font color="black" size="3px">Snacks &#038; Namkeen</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxreadytocookeatfont menu-item-3530"><a href="https://www.sabziadda.com/buy-ready-to-cook-eat-foods-online/"><span>
												<font color="black" size="3px">Ready To Cook &#038; Eat</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxpicklesjamketchupfont menu-item-3529"><a href="https://www.sabziadda.com/buy-pickles-jam-ketchup-online/"><span>
												<font color="black" size="3px">Pickles, Jam &#038; Ketchup</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxcomingsoonfont menu-item-1258"><a><span>
												<font color="black" size="3px">Coming Soon</font>
											</span></a></li>
								</ul>
							</li>
							<li class="menu-strongfontcolorffffffsize3pxbeveragesfontstrong sf-dropdown menu-item-1227"><a><span><strong>
											<font color="	#FFFFFF" size="3px">Beverages</font>
										</strong></span></a>
								<ul class="sf-dropdown-menu dropdown">
									<li class="menu-fontcolorblacksize3pxhealthnutritionfont menu-item-2465"><a href="https://www.sabziadda.com/buy-health-energy-nutrition-drinks-online/"><span>
												<font color="black" size="3px">Health &#038; Nutrition</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxenergydrinksfont menu-item-4289"><a href="https://www.sabziadda.com/energy-drink-online/"><span>
												<font color="black" size="3px">Energy Drinks</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxmilkfont menu-item-3066"><a href="https://www.sabziadda.com/dairy-milk-and-products/"><span>
												<font color="black" size="3px">Milk</font>
											</span></a></li>
								</ul>
							</li>
							<li class="menu-strongfontcolorffffffsize3pxpersonalcarefontstrong sf-dropdown menu-item-1224"><a><span><strong>
											<font color="	#FFFFFF" size="3px">Personal Care</font>
										</strong></span></a>
								<ul class="sf-dropdown-menu dropdown">
									<li class="menu-fontcolorblacksize3pxskincarefont menu-item-3418"><a href="https://www.sabziadda.com/buy-skin-care-products-online/"><span>
												<font color="black" size="3px">Skin Care</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxbathhandwashfont menu-item-3645"><a href="https://www.sabziadda.com/buy-bathing-soap-and-handwash-online/"><span>
												<font color="black" size="3px">Bath &#038; Hand Wash</font>
											</span></a></li>
									<li class="menu-fontcolorblacksize3pxoralcarefont menu-item-4248"><a href="https://www.sabziadda.com/oral-care/"><span>
												<font color="black" size="3px">Oral Care</font>
											</span></a></li>
								</ul>
							</li>
							<li class="menu-strongfontcolorffffffsize3pxhomecarefontstrong sf-dropdown menu-item-3789"><a><span><strong>
											<font color="#FFFFFF" size="3px">Home Care</font>
										</strong></span></a>
								<ul class="sf-dropdown-menu dropdown">
									<li class="menu-fontcolor000000size3pxdetergentsbarsfont menu-item-3787"><a href="https://www.sabziadda.com/detergents-and-washing-bars/"><span>
												<font color="#000000" size="3px">Detergents &#038; Bars</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxdishwashbarliquidsfont menu-item-3827"><a href="https://www.sabziadda.com/dishwash-bar-and-liquids/"><span>
												<font color="#000000" size="3px">Dishwash Bar &#038; Liquids</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxfloortoiletcleanerfont menu-item-3871"><a href="https://www.sabziadda.com/floor-and-toilet-all-purpose-cleaners/"><span>
												<font color="#000000" size="3px">Floor &#038; Toilet Cleaner</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxfreshenersrepellentsfont menu-item-3964"><a href="https://www.sabziadda.com/fresheners-repellents-online/"><span>
												<font color="#000000" size="3px">Fresheners &#038; Repellents</font>
											</span></a></li>
									<li class="menu-fontcolor000000size3pxpoojaneedsfont menu-item-4148"><a href="https://www.sabziadda.com/pooja-needs/"><span>
												<font color="#000000" size="3px">Pooja Needs</font>
											</span></a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
				
			</div>

		</header> -->
		<!-- <div id="kad-mobile-banner" class="banner mobile-headerclass" data-mobile-header-sticky="1">
			<div class="container mobile-header-container" style="height:100px">
				<div class="clearfix kad-mobile-header-logo">
					<a class="mobile-logo" href="https://www.sabziadda.com" style="padding-right:200px; height:100px">
						<div class="mobile-logo-inner" style="height:100px">

							<img src="https://www.sabziadda.com/wp-content/uploads/2016/05/Final-logo.jpg" style="max-height:100px;" alt="Sabzi Adda" class="kad-mobile-logo" />
						</div>
					</a> Close #mobile-logo
				</div>Close .kad-mobile-header-logo
				<button class="mh-nav-trigger-case collapsed" data-toggle="collapse" rel="nofollow" data-target=".mh-mobile_menu_collapse" style="line-height:100px;">
					<span class="kad-navbtn clearfix"><i class="icon-menu"></i></span>
				</button>


				<a class="menu-cart-btn mh-menu-cart-btn" title="Your Cart" style="line-height:100px;" href="https://www.sabziadda.com/basket/">
					<div class="kt-cart-container"><i class="icon-cart"></i><span class="kt-cart-total">0</span></div>
				</a>
				<a class="menu-account-btn mh-menu-account-btn" title="My Account" style="line-height:100px; right:110px;" href="https://www.sabziadda.com/my-account/">
					<div class="kt-account-container"><i class="icon-user2"></i></div>
				</a>
				<a class="kt-menu-search-btn mh-kt-menu-search-btn collapsed" style="line-height:100px; right:160px;" title="Search" data-toggle="collapse" data-target="#mh-kad-menu-search-popup">
					<i class="icon-search"></i>
				</a>
				<div id="mh-kad-menu-search-popup" class="search-container container collapse">
					<div class="mh-kt-search-container">


						<form role="search" method="get" class="form-search product-search-form" action="https://www.sabziadda.com/">
							<label class="screen-reader-text" for="woocommerce-product-search-field-0">Search for:</label>
							<input type="text" value="" id="woocommerce-product-search-field-0" name="s" class="search-query search-field" placeholder="Search for products" />
							<button type="submit" class="search-icon"><i class="icon-search"></i></button>
							<input type="hidden" name="post_type" value="product" />
						</form>
					</div>
				</div>
			</div> Close Container
			<div class="container mobile-dropdown-container">
				<div id="mg-kad-mobile-nav" class="mh-kad-mobile-nav kad-mobile-nav">
					<div class="mh-kad-nav-inner kad-nav-inner mobileclass">
						<div id="mh-mobile_menu_collapse" class="mh-kad-nav-collapse collapse mh-mobile_menu_collapse">
							<ul id="menu-secondary-menu-test-1" class="kad-mnav">
								<li class="menu-strongfontcolorffffffsize3pxvegetablesfruitsfontstrong sf-dropdown sf-dropdown-toggle menu-item-1223"><a><span><strong>
												<font color="#FFFFFF" size="3px">Vegetables &#038; Fruits</font>
											</strong></span></a><span class="kad-submenu-accordion collapse-next  kad-submenu-accordion-open" data-parent=".kad-nav-collapse" data-toggle="collapse" data-target=""><i class="icon-arrow-down"></i><i class="icon-arrow-up"></i></span>
									<ul class="sf-dropdown-menu collapse">
										<li class="menu-fontcolor000000size3pxfreshvegetablesfont menu-item-4263"><a href="https://www.sabziadda.com/online-vegetables/"><span>
													<font color="#000000" size="3px">Fresh Vegetables</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxfreshfruitsfont menu-item-1233"><a href="https://www.sabziadda.com/buy-fruits-online/"><span>
													<font color="#000000" size="3px">Fresh Fruits</font>
												</span></a></li>
									</ul>
								</li>
								<li class="menu-strongfontcolorffffffsize3pxgroceriesstaplesfontstrong sf-dropdown sf-dropdown-toggle menu-item-1225"><a><span><strong>
												<font color="	#FFFFFF" size="3px">Groceries &#038; Staples</font>
											</strong></span></a><span class="kad-submenu-accordion collapse-next  kad-submenu-accordion-open" data-parent=".kad-nav-collapse" data-toggle="collapse" data-target=""><i class="icon-arrow-down"></i><i class="icon-arrow-up"></i></span>
									<ul class="sf-dropdown-menu collapse">
										<li class="menu-fontcolor000000size3pxattaflourssoojifont menu-item-1237"><a href="https://www.sabziadda.com/buy-atta-flours-online/"><span>
													<font color="#000000" size="3px">Atta, Flours &#038; Sooji</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxricericeproductsfont menu-item-1249"><a href="https://www.sabziadda.com/buy-rice-products-online/"><span>
													<font color="#000000" size="3px">Rice &#038; Rice Products</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxdalpulsesfont menu-item-1240"><a href="https://www.sabziadda.com/buy-dal-pulses-online/"><span>
													<font color="#000000" size="3px">Dal &#038; Pulses</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxmasalaorspicesfont menu-item-1243"><a href="https://www.sabziadda.com/buy-masala-spices-online/"><span>
													<font color="#000000" size="3px">Masala or Spices</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxoilgheefont menu-item-1252"><a href="https://www.sabziadda.com/buy-oil-ghee-online/"><span>
													<font color="#000000" size="3px">Oil &#038; Ghee</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxdryfruitsfont menu-item-1246"><a href="https://www.sabziadda.com/buy-dry-fruits-online/"><span>
													<font color="#000000" size="3px">Dry Fruits</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxsugarsaltfont menu-item-2053"><a href="https://www.sabziadda.com/buy-sugar-salt-online/"><span>
													<font color="#000000" size="3px">Sugar &#038; Salt</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxotheringredientsfont menu-item-1256"><a href="https://www.sabziadda.com/buy-other-grocery-ingredients-online/"><span>
													<font color="#000000" size="3px">Other Ingredients</font>
												</span></a></li>
									</ul>
								</li>
								<li class="menu-strongfontcolorffffffsize3pxsnacksbrandedfoodsfontstrong sf-dropdown sf-dropdown-toggle menu-item-1228"><a><span><strong>
												<font color="	#FFFFFF" size="3px">Snacks &#038; Branded Foods</font>
											</strong></span></a><span class="kad-submenu-accordion collapse-next  kad-submenu-accordion-open" data-parent=".kad-nav-collapse" data-toggle="collapse" data-target=""><i class="icon-arrow-down"></i><i class="icon-arrow-up"></i></span>
									<ul class="sf-dropdown-menu collapse">
										<li class="menu-fontcolorblacksize3pxbiscuitscookiesfont menu-item-3534"><a href="https://www.sabziadda.com/buy-biscuits-cookies-onlline/"><span>
													<font color="black" size="3px">Biscuits &#038; Cookies</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxnoodlepastavermicellifont menu-item-3533"><a href="https://www.sabziadda.com/buy-noodle-pasta-vermicelli-online/"><span>
													<font color="black" size="3px">Noodle, Pasta, Vermicelli</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxbreakfastcerealsfont menu-item-3532"><a href="https://www.sabziadda.com/buy-breakfast-cereals-online/"><span>
													<font color="black" size="3px">Breakfast Cereals</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxsnacksnamkeenfont menu-item-3531"><a href="https://www.sabziadda.com/buy-snacks-namkeen-online/"><span>
													<font color="black" size="3px">Snacks &#038; Namkeen</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxreadytocookeatfont menu-item-3530"><a href="https://www.sabziadda.com/buy-ready-to-cook-eat-foods-online/"><span>
													<font color="black" size="3px">Ready To Cook &#038; Eat</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxpicklesjamketchupfont menu-item-3529"><a href="https://www.sabziadda.com/buy-pickles-jam-ketchup-online/"><span>
													<font color="black" size="3px">Pickles, Jam &#038; Ketchup</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxcomingsoonfont menu-item-1258"><a><span>
													<font color="black" size="3px">Coming Soon</font>
												</span></a></li>
									</ul>
								</li>
								<li class="menu-strongfontcolorffffffsize3pxbeveragesfontstrong sf-dropdown sf-dropdown-toggle menu-item-1227"><a><span><strong>
												<font color="	#FFFFFF" size="3px">Beverages</font>
											</strong></span></a><span class="kad-submenu-accordion collapse-next  kad-submenu-accordion-open" data-parent=".kad-nav-collapse" data-toggle="collapse" data-target=""><i class="icon-arrow-down"></i><i class="icon-arrow-up"></i></span>
									<ul class="sf-dropdown-menu collapse">
										<li class="menu-fontcolorblacksize3pxhealthnutritionfont menu-item-2465"><a href="https://www.sabziadda.com/buy-health-energy-nutrition-drinks-online/"><span>
													<font color="black" size="3px">Health &#038; Nutrition</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxenergydrinksfont menu-item-4289"><a href="https://www.sabziadda.com/energy-drink-online/"><span>
													<font color="black" size="3px">Energy Drinks</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxmilkfont menu-item-3066"><a href="https://www.sabziadda.com/dairy-milk-and-products/"><span>
													<font color="black" size="3px">Milk</font>
												</span></a></li>
									</ul>
								</li>
								<li class="menu-strongfontcolorffffffsize3pxpersonalcarefontstrong sf-dropdown sf-dropdown-toggle menu-item-1224"><a><span><strong>
												<font color="	#FFFFFF" size="3px">Personal Care</font>
											</strong></span></a><span class="kad-submenu-accordion collapse-next  kad-submenu-accordion-open" data-parent=".kad-nav-collapse" data-toggle="collapse" data-target=""><i class="icon-arrow-down"></i><i class="icon-arrow-up"></i></span>
									<ul class="sf-dropdown-menu collapse">
										<li class="menu-fontcolorblacksize3pxskincarefont menu-item-3418"><a href="https://www.sabziadda.com/buy-skin-care-products-online/"><span>
													<font color="black" size="3px">Skin Care</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxbathhandwashfont menu-item-3645"><a href="https://www.sabziadda.com/buy-bathing-soap-and-handwash-online/"><span>
													<font color="black" size="3px">Bath &#038; Hand Wash</font>
												</span></a></li>
										<li class="menu-fontcolorblacksize3pxoralcarefont menu-item-4248"><a href="https://www.sabziadda.com/oral-care/"><span>
													<font color="black" size="3px">Oral Care</font>
												</span></a></li>
									</ul>
								</li>
								<li class="menu-strongfontcolorffffffsize3pxhomecarefontstrong sf-dropdown sf-dropdown-toggle menu-item-3789"><a><span><strong>
												<font color="#FFFFFF" size="3px">Home Care</font>
											</strong></span></a><span class="kad-submenu-accordion collapse-next  kad-submenu-accordion-open" data-parent=".kad-nav-collapse" data-toggle="collapse" data-target=""><i class="icon-arrow-down"></i><i class="icon-arrow-up"></i></span>
									<ul class="sf-dropdown-menu collapse">
										<li class="menu-fontcolor000000size3pxdetergentsbarsfont menu-item-3787"><a href="https://www.sabziadda.com/detergents-and-washing-bars/"><span>
													<font color="#000000" size="3px">Detergents &#038; Bars</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxdishwashbarliquidsfont menu-item-3827"><a href="https://www.sabziadda.com/dishwash-bar-and-liquids/"><span>
													<font color="#000000" size="3px">Dishwash Bar &#038; Liquids</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxfloortoiletcleanerfont menu-item-3871"><a href="https://www.sabziadda.com/floor-and-toilet-all-purpose-cleaners/"><span>
													<font color="#000000" size="3px">Floor &#038; Toilet Cleaner</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxfreshenersrepellentsfont menu-item-3964"><a href="https://www.sabziadda.com/fresheners-repellents-online/"><span>
													<font color="#000000" size="3px">Fresheners &#038; Repellents</font>
												</span></a></li>
										<li class="menu-fontcolor000000size3pxpoojaneedsfont menu-item-4148"><a href="https://www.sabziadda.com/pooja-needs/"><span>
													<font color="#000000" size="3px">Pooja Needs</font>
												</span></a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div> -->
		<div class="wrap clearfix contentclass hfeed" role="document">

			<div class="container">
				<div class="woocommerce"></div>
			</div>
			<div id="pageheader" class="titleclass">
				<div class="container">
					<div class="page-header">
						<h1 class="entry-title" itemprop="name">
						</h1>
						<p class="subtitle">
							<font color="34A853">
								<p align="center">For any queries related to our delivery areas, feel free to contact us or Whats App at: <a href="tel:8340440534">8340440534</a></p>
							</font>
						</p>
					</div>
				</div>
			</div>
			<!--titleclass-->
			<div id="content" class="container">
				<div class="row">
					<div class="main col-md-12" id="ktmain" role="main">
						<div class="entry-content" itemprop="mainContentOfPage">
							<p align="justify">We are constantly growing and will expand our delivery areas soon. Stay tuned though, as we&#8217;re always working on ways to reach you soon! Our services currently cover delivery to almost all locations of Patna, Bihar. We are serving at all the pin codes listed below:</p>
							<p>
								<!DOCTYPE html><br />
								<html><br />

								<head>
							</p>
							<style>
								table {
									width: 75%;
								}

								table,
								th,
								td {
									border: 1px solid black;
									border-collapse: collapse;
								}

								th,
								td {
									padding: 5px;
									text-align: left;
								}

								table#t01 tr:nth-child(even) {
									background-color: #eee;
								}

								table#t01 tr:nth-child(odd) {
									background-color: #fff;
								}

								table#t01 th {
									background-color: #4285F4;
									color: white;
								}
							</style>
							<p>
								</head>
							</p>
							<table id="t01" align="center">
								<tr>
									<td>812002</td>
									<td>812003</td>
									<td>812004</td>
								</tr>
								<tr>
								    <td>812005</td>
									<td>812007</td>
									<td>813113</td>

								</tr>

							</table>
							<p></br><br />
							<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=bhagalpur,Bihar,India%20+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.maps.ie/draw-radius-circle-map/"></a></div>

							</p>
						</div>
					</div><!-- /.main -->
				</div><!-- /.row-->
			</div><!-- /.content -->
		</div><!-- /.wrap -->
		<!-- <footer id="containerfooter" class="footerclass">
			<div class="container">
				<div class="row">

					<div class="col-md-3 col-sm-6 footercol1">
						<div class="widget-1 widget-first footer-widget widget">
							<aside id="pages-2" class="widget_pages">
								<h3>Sabzi Adda</h3>
								<ul>
									<li class="page_item page-item-46"><a href="https://www.sabziadda.com/blog/">Blog</a></li>
									<li class="page_item page-item-1271"><a href="https://www.sabziadda.com/about-us/">About us</a></li>
									<li class="page_item page-item-1273"><a href="https://www.sabziadda.com/privacy-policy/">Privacy Policy</a></li>
									<li class="page_item page-item-1275"><a href="https://www.sabziadda.com/terms-and-condition/">Terms and Condition</a></li>
									<li class="page_item page-item-1277"><a href="https://www.sabziadda.com/careers/">Careers</a></li>
								</ul>

							</aside>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 footercol2">
						<div class="widget-1 widget-first footer-widget widget">
							<aside id="pages-3" class="widget_pages">
								<h3>Need Help ?</h3>
								<ul>
									<li class="page_item page-item-1279"><a href="https://www.sabziadda.com/faq/">FAQ&#8217;s</a></li>
									<li class="page_item page-item-1281"><a href="https://www.sabziadda.com/contact-us/">Contact Us</a></li>
									<li class="page_item page-item-1283"><a href="https://www.sabziadda.com/sitemap/">Sitemap</a></li>
									<li class="page_item page-item-1811"><a href="https://www.sabziadda.com/replace-return-policy/">Replace and Return Policy</a></li>
									<li class="page_item page-item-2658"><a href="https://www.sabziadda.com/business-opportunity/">Business Opportunity</a></li>
								</ul>

							</aside>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 footercol3">
						<div class="widget-1 widget-first footer-widget widget">
							<aside id="widget_kadence_social-2" class="widget_kadence_social">
								<h3>Get Social With Us</h3>
								<div class="virtue_social_widget clearfix">

									<a href="https://www.facebook.com/onlinesabziadda" class="facebook_link" title="Facebook" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Facebook"><i class="icon-facebook"></i></a><a href="https://twitter.com/sabziadda" class="twitter_link" title="Twitter" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Twitter"><i class="icon-twitter"></i></a><a href="https://www.pinterest.com/sabziadda" class="pinterest_link" title="Pinterest" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Pinterest"><i class="icon-pinterest"></i></a><a href="https://www.linkedin.com/company/sabzi-adda" class="linkedin_link" title="LinkedIn" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="LinkedIn"><i class="icon-linkedin"></i></a>
								</div>
							</aside>
						</div>
						<div class="widget-2 widget-last footer-widget widget">
							<aside id="virtue_about_with_image-2" class="virtue_about_with_image">
								<div class="kad_img_upload_widget kt-shape-type- kt-image-align-center kt-image-widget-virtue_about_with_image-2">
									<div class="kt-image-contain  ">
										<div class="kt-image-inner-contain"><img src="https://www.sabziadda.com/wp-content/uploads/2016/08/payumoney.jpg"></div>
									</div>
								</div>
							</aside>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 footercol4">
						<div class="widget-1 widget-first footer-widget widget">
							<aside id="widget_kadence_contact-2" class="widget_kadence_contact">
								<h3>Address</h3>
								<div class="vcard">

									<p class="vcard-address"><i class="icon-location"></i>Gulzarbagh <span>Patna, Bihar 800007</span></p>
									<p class="tel"><i class="icon-mobile"></i>+91 9328986772</p>
									<p><a class="email" href="mailto:i&#110;&#102;o&#64;&#115;ab&#122;&#105;&#97;dda.c&#111;&#109;"><i class="icon-envelope"></i>&#105;n&#102;o&#64;&#115;a&#98;&#122;ia&#100;da&#46;&#99;om</a></p>
								</div>
							</aside>
						</div>
						<div class="widget-2 widget-last footer-widget widget">
							<aside id="text-4" class="widget_text">
								<div class="textwidget"><a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=sabziadda.com','SiteLock','width=600,height=600,left=160,top=170');"><img class="img-responsive" alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/sabziadda.com" /></a></div>
							</aside>
						</div>
					</div>
				</div> 
			</div>
			<div class="footerbase">
				<div class="container">
					<div class="footercredits clearfix">

						<p>
						<p align="center">Copyright © 2014-2021 www.sabziadda.com</p>
						<p align="center">All trademarks and registered marks are the properties of their respective companies</p>
						</p>

					</div>
				</div>
			</div>
		</footer> -->
		<style>
			.mini_cart_content .checkout {
				display: none !important;
			}
		</style>
		<style>
			:root {
				--main-bg-color: #fafafa;
				--main-bor-color: #7daaf8;
				--main-bor-text-color: #000000;
				--main-button-color: #f37e57;
				--main-buttontext-color: #fff;

			}
		</style>
		<script id="mcjs">
			! function(c, h, i, m, p) {
				m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
			}(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/75b48bd1f09a92dd833af2b30/1a840b429a8a7a45e9ad885d8.js");
		</script>

		
		

		<!-- <div class="xoo-wsc-modal">


			<div class="xoo-wsc-container">

				<div class="xoo-wsc-basket">

					<span class="xoo-wsc-items-count">0</span>

					<span class="xoo-wsc-bki xoo-wsc-icon-basket1"></span>


				</div>

				<div class="xoo-wsc-header">



					<div class="xoo-wsch-top">

						<div class="xoo-wsc-notice-container" data-section="cart">
							<ul class="xoo-wsc-notices"></ul>
						</div>
						<div class="xoo-wsch-basket">
							<span class="xoo-wscb-icon xoo-wsc-icon-bag2"></span>
							<span class="xoo-wscb-count">0</span>
						</div>

						<span class="xoo-wsch-text">Your Cart</span>

						<span class="xoo-wsch-close xoo-wsc-icon-cross"></span>

					</div>

				</div>


				<div class="xoo-wsc-body">



					<div class="xoo-wsc-empty-cart"><span>Your cart is empty</span><a class="button btn" href="https://www.sabziadda.com/shop/">Return to Shop</a></div>

				</div>

				<div class="xoo-wsc-footer">






					<div class="xoo-wsc-ft-buttons-cont">

						<a href="#" class="xoo-wsc-ft-btn button btn xoo-wsc-ft-btn-continue">Continue Shopping</a>
					</div>



				</div>

				<span class="xoo-wsc-loader"></span>

			</div>
			<span class="xoo-wsc-opac">

		</div> -->
		<!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v3.3.2 -->
		<style id="ht_ctc_fromcenter">
			@keyframes ht_ctc_fromcenter {
				from {
					transform: scale(0);
				}

				to {
					transform: scale(1);
				}
			}

			.ht-ctc {
				animation: ht_ctc_fromcenter .25s;
			}
		</style>
		<style id="ht-ctc-animations">
			.ht_ctc_animation {
				animation-duration: 1s;
				animation-fill-mode: both;
				animation-delay: 3s;
				animation-iteration-count: 1;
			}
		</style>
		<style id="ht-ctc-an-flash">
			@keyframes flash {

				from,
				50%,
				to {
					opacity: 1
				}

				25%,
				75% {
					opacity: 0
				}
			}

			.ht_ctc_an_flash {
				animation-name: flash
			}
		</style>

		<div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-3_1 " id="ht-ctc-chat" style="display: none;  position: fixed; bottom: 15px; left: 15px;">
			<style id="ht-ctc-s3">
				.ht-ctc:hover svg stop {
					stop-color: #25D366;
				}

				.ht-ctc:hover .ht_ctc_padding {
					background-color: #25D366 !important;
					box-shadow: 0px 0px 11px rgba(0, 0, 0, .5);
				}
			</style>

			<!-- <div style="display:flex;justify-content:center;align-items:center; ">
				<p class="ctc-analytics ctc_cta ht-ctc-cta  ht-ctc-cta-hover " style="padding: 0px 16px; line-height: 1.6; font-size: 15px; background-color: #25d366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; order: 1; ">Live Chat</p>
				<div class="ctc-analytics ht_ctc_padding" style="background-color: #25D366; padding: 14px; border-radius: 50%; box-shadow: 0px 0px 11px rgba(0,0,0,.5);">
					<svg style="pointer-events:none; display:block; height:40px; width:40px;" width="40px" height="40px" viewBox="0 0 1219.547 1225.016">
						<path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z" />
						<linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
							<stop id="s3_1_offset_1" offset="0" stop-color="#25D366" />
							<stop id="s3_1_offset_2" offset="1" stop-color="#25D366" />
						</linearGradient>
						<path fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z" />
						<image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)" />
						<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" />
						<path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z" />
					</svg>
				</div>
			</div> -->
		</div>
	
	</div>
	<!--Wrapper-->
	<?php require('footer.php') ?>
</body>

</html>