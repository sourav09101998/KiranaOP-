<?php require('top.php') ?>
<div class="body__overlay"></div>




<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans);

    .search1 {
        width: 100%;
        position: relative;
        display: flex;
    }

    .searchTerm1 {
        width: 100%;
        border: 3px solid #000000;
        border-right: none;
        padding: 5px;
        height: 36px;
        border-radius: 5px 0 0 5px;
        outline: none;
        color: #000000;
    }

    .searchTerm1:focus {
        color: #00B4CC;
    }

    .searchButton1 {
        width: 40px;
        height: 36px;
        border: 1px solid #000000;
        background: #000000;
        text-align: center;
        color: #fff;
        border-radius: 0 5px 5px 0;
        cursor: pointer;
        font-size: 20px;
    }

    /*Resize the wrap to see the search bar change!*/
    .wrap1 {
        width: 68%;
        position: relative;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    @media only screen and (max-width: 300px) {
        .wrap1 {
            width: 68%;
            position: relative;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    }
</style>

<style type="text/css">
    /*=================================
    # parallax section
    ==================================*/


    .bt-block-home-parallax {
        background-attachment: fixed;
        background-position: left top;
        text-align: center;
        padding: 60px 0;
        background-size: cover;
        margin-bottom: 30px;
    }

    .bt-block-home-parallax h2 {
        font-family: "Lato", sans-serif;
        font-weight: 300;
        font-size: 50px;
        line-height: 52px;
        margin-bottom: 5px;
        color: #fff;
    }

    .bt-block-home-parallax .title p {
        color: #fff;
        margin: 0;
        font-size: 30px;
        font-weight: 300;
        line-height: 32px;
        letter-spacing: 1.5px;
    }





    /* ----------------- recent product -------------------------*/

    .style-14.index-2 section#recent-product {
        padding-bottom: 40px;
    }

    .style-14 section#recent-product {
        padding-bottom: 20px;
    }

    .style-14 .related-products .owl-theme .owl-controls {
        margin-top: 20px;
    }

    .style-14 .pagination {
        padding-bottom: 5px;
    }

    section#recent-product {
        padding-bottom: 50px;
    }

    .block-heading-two {
        margin: 10px 0px 15px 0px;
    }

    .block-heading-two h3 {
        font-size: 18px;
        line-height: 36px;
        font-weight: 600;
        padding: 0px 10px 6px 0px;
        margin-bottom: 10px;
        border-bottom: 1px solid #eee;
    }

    .block-heading-two h3 span {
        border-color: #32c8de;
    }

    .block-heading-two h3 span {
        padding-bottom: 11px;
        border-bottom: 3px solid;
    }


    .block-heading-two.block-heading-three {
        margin: 10px 0px 30px 0px;
        text-transform: uppercase;
    }


    /*============================================
    # sidebar category menu
    ==============================================*/

    .sidebar-navigation {
        border: 2px #323a45 solid;
        /*margin-bottom: 25px;*/
    }

    .sidebar-navigation .title {
        background: #323a45;
        padding: 20px 25px;
        line-height: 15px;
        color: #fff;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 700;
        margin-top: -2px;
        position: relative;
    }

    .sidebar-navigation .title .fa {
        display: none;
    }

    .sidebar-navigation .entry {
        cursor: pointer;
        border-bottom: 1px #ebebeb solid;
        display: block;
        font-weight: 500;
        font-size: 13px;
        line-height: 15px;
        color: #2e2e2e;
        padding: 17px 25px;
        position: relative;
    }

    body.mobile .sidebar-navigation .entry {
        color: #2e2e2e !important;
    }

    body.mobile .sidebar-navigation .entry:before {
        display: none;
    }

    .sidebar-navigation .entry:last-child {
        border: none;
    }

    .sidebar-navigation .entry:before {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 0;
        background: #03b4ea;
        content: "";
        opacity: 0;
    }

    .sidebar-navigation .entry span {
        position: relative;
    }

    .sidebar-navigation .entry:hover:before,
    .sidebar-navigation .entry.active:before {
        height: 100%;
        opacity: 1;
    }

    .sidebar-navigation .entry:hover,
    .sidebar-navigation .entry.active {
        color: #fff;
    }

    body:not(.mobile) #content-block .sidebar-navigation .entry:hover .fa {
        color: #fff;
    }

    .sidebar-navigation .entry .fa {
        color: #ca1515;
        display: inline-block;
        margin-right: 10px;
        position: relative;
        top: -1px;
    }

    .sidebar-navigation .list {
        display: none;
    }

    @media (min-width:992px) {
        .sidebar-navigation .list {
            display: block !important;
        }
    }

    @media (max-width:991px) {
        .sidebar-navigation {
            margin-bottom: 25px !important;
        }

        .sidebar-navigation .title {
            padding-right: 55px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            cursor: pointer;
        }

        .sidebar-navigation .title .fa {
            display: block;
            position: absolute;
            width: 55px;
            height: 55px;
            line-height: 55px;
            text-align: center;
            right: 0;
            top: 0;
            font-size: 22px;
        }

        .sidebar-navigation.active .title .fa {
            transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
        }
    }


    /*===============================================
    # Index product category
    ================================================*/

    .navigation-banner-swiper {
        margin-bottom: 30px;
    }

    .navigation-banner-wrapper {
        position: relative;
        background-size: cover;
    }

    .navigation-banner-wrapper.align-1 {
        background-position: right top;
    }

    .navigation-banner-wrapper.align-2 {
        background-position: left top;
    }

    .navigation-banner-content {
        width: 57%;
        padding: 0 50px 0 50px;
        height: 505px;
        position: relative;
    }

    .cell-view {
        display: table-cell;
        vertical-align: middle;
        height: inherit;
    }

    .navigation-banner-content .cell-view {
        width: 1500px;
    }

    .navigation-banner-wrapper.align-1 .navigation-banner-content {
        float: left;
    }

    .navigation-banner-wrapper.align-2 .navigation-banner-content {
        float: right;
    }

    .navigation-banner-wrapper.align-3 .navigation-banner-content {
        width: 100% !important;
        text-align: center;
    }

    .navigation-banner-content .subtitle {
        font-family: 'Dancing Script', cursive;
        font-size: 40px;
        line-height: 36px;
        color: #d349bd;
        margin-bottom: 3px;
        transform: translateX(-50px) translateY(-50px);
        -moz-transform: translateX(-50px) translateY(-50px);
        -webkit-transform: translateX(-50px) translateY(-50px);
        -ms-transform: translateX(-50px) translateY(-50px);
        opacity: 0;
    }

    .light-text .navigation-banner-content .subtitle {
        color: #fff;
    }

    .navigation-banner-content .title {
        font-family: 'Montserrat', sans-serif;
        font-weight: 400;
        font-size: 70px;
        line-height: 70px;
        color: #3c3c3c;
        text-transform: uppercase;
        letter-spacing: -5px;
        margin-bottom: 7px;
        transform: translateX(150px);
        -moz-transform: translateX(150px);
        -webkit-transform: translateX(150px);
        -ms-transform: translateX(150px);
        opacity: 0;
    }

    .light-text .navigation-banner-content .title {
        color: #fff;
    }

    .navigation-banner-content .description {
        font-size: 15px;
        line-height: 24px;
        color: #777;
        font-family: 'Merriweather', serif;
        font-weight: 300;
        font-style: italic;
        margin-bottom: 15px;
        padding-right: 50px;
        transform: translateX(-100px);
        -moz-transform: translateX(-100px);
        -webkit-transform: translateX(-100px);
        -ms-transform: translateX(-100px);
        opacity: 0;
    }

    .light-text .navigation-banner-content .description {
        color: #f1f0f0;
    }

    .navigation-banner-content .info {
        opacity: 0;
        transform: translateY(50px);
        -moz-transform: translateY(50px);
        -webkit-transform: translateY(50px);
        -ms-transform: translateY(50px);
    }

    .light-text .navigation-banner-content .info .button:not(:hover) {
        color: #fff;
        border-color: rgba(255, 255, 255, 0.5);
    }

    .swiper-slide.active .navigation-banner-content .subtitle,
    .swiper-slide.active .navigation-banner-content .title,
    .swiper-slide.active .navigation-banner-content .description,
    .swiper-slide.active .navigation-banner-content .info {
        transform: translateX(0px) translateY(0px);
        -moz-transform: translateX(0px) translateY(0px);
        -webkit-transform: translateX(0px) translateY(0px);
        -ms-transform: translateX(0px) translateY(0px);
        opacity: 1;
    }

    .navigation-banner-content .button {
        margin-right: 12px;
    }

    .navigation-banner-swiper .pagination {
        display: none;
    }

    @media (max-width:991px) {
        #content-block .navigation-banner-content {
            height: 350px;
        }

        #content-block .navigation-banner-content {
            width: 63%;
        }

        #content-block .navigation-banner-content .title {
            font-size: 60px;
            line-height: 60px;
        }

        #content-block .navigation-banner-swiper .pagination {
            display: block;
            margin-top: 20px;
        }

        .navigation-banner-swiper:before,
        .navigation-banner-swiper:after {
            position: absolute;
            width: 1px;
            height: 100%;
            top: 0;
            background: #fff;
            content: "";
        }

        .navigation-banner-swiper:before {
            left: 0;
            z-index: 2;
        }

        .navigation-banner-swiper:after {
            right: 0;
            z-index: 2;
        }
    }

    @media (max-width:767px) {
        #content-block .navigation-banner-content .title {
            font-size: 40px;
            line-height: 40px;
            letter-spacing: -4px;
        }

        #content-block .navigation-banner-content .subtitle {
            font-size: 25px;
            line-height: 25px;
            margin-bottom: 10px;
        }

        #content-block .navigation-banner-content .description {
            color: #3c3c3c;
            padding-right: 0;
        }

        #content-block .navigation-banner-content {
            height: 300px;
            padding: 0 15px;
            width: auto;
            text-align: center;
            float: none;
        }

        #content-block .navigation-banner-content .cell-view {
            width: 800px;
        }

        #content-block .navigation-banner-image {
            opacity: 0.2;
        }

        #content-block .navigation-banner-wrapper:before {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: rgba(255, 255, 255, 0.7);
            content: "";
        }

        #content-block .navigation-banner-wrapper.light-text:before {
            background: rgba(93, 93, 93, 0.7);
        }

        #content-block .navigation-banner-wrapper.light-text .description {
            color: #fff !important;
        }

        #content-block .navigation-banner-content .button {
            margin: 0 1%;
            width: 48%;
            float: left;
            min-width: 0;
        }

        .food-category {
            width: 49%;
            display: inline-block;
            box-sizing: border-box;
        }
    }

    .sidebar-navigation .title {
        background: #323a45;
        padding: 20px 25px;
        line-height: 15px;
        color: #fff;
        font-size: 13px;
        text-transform: uppercase;
        font-weight: 700;
        margin-top: -2px;
        position: relative;
    }

    body.style-14 .sidebar-navigation .title {
        background: #323a45;
    }

    body.style-14 .sidebar-navigation .entry:before {
        background: #323a45;
    }

    body.style-14 .sidebar-navigation {
        border-color: #323a45;
    }

    body.style-14 .swiper-tabs .block-title:before {
        background: #323a45;
    }

    body.style-14 .price .current {
        color: #6d4c3d;
    }

    body.style-14 .swiper-active-switch {
        border-color: #6d4c3d;
        background: #6d4c3d;
    }

    body.style-14 .navigation-banner-content .subtitle {
        font-weight: 600;
        font-size: 18px;
        color: #a25516;
        text-transform: uppercase;
        font-family: 'Raleway', sans-serif;
        letter-spacing: 3px;
    }

    body.style-14 .navigation-banner-content .title {
        font-family: 'Cantata One', serif;
        letter-spacing: 2px;
    }

    body.style-14 .mozaic-banners-wrapper.type-2 .mozaic-banner-content .subtitle {
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        line-height: 22px;
        color: #ad6e3f;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 5px;
    }

    body.style-14 .mozaic-banners-wrapper.type-2 .mozaic-banner-content .title {
        font-family: 'Cantata One', serif;
        font-size: 44px;
        line-height: 44px;
        text-transform: uppercase;
        color: #373737;
        letter-spacing: 2px;
    }

    body.style-14 .mozaic-banners-wrapper.type-2 .mozaic-banner-content .view {
        font-family: "Merriweather", serif;
        font-style: italic;
        font-size: 12px;
        line-height: 16px;
        color: #373737;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-bottom: 1px #373737 solid;
        display: inline-block;
    }

    body.style-14 .mozaic-banners-wrapper.type-2 .mozaic-banner-content .view:hover {
        border-color: transparent !important;
    }

    body.style-14 .mozaic-banners-wrapper.type-2 a.mozaic-banner-entry:before {
        background: rgba(109, 76, 61, 0.7);
    }

    body.style-14 .mozaic-banners-wrapper.type-2 .banner-column {
        padding: 0 15px;
    }

    body.style-14 .mozaic-banners-wrapper.type-2 .row {
        margin-left: -15px;
        margin-right: -15px;
    }

    body.style-14 a.sale-entry:before {
        background: rgba(80, 80, 80, 0.7);
    }

    body.style-14 .sale-entry .sale-price {
        /*font-family: 'Cantata One',serif;*/
        letter-spacing: 2px;
    }

    body.style-14 .read-more:hover {
        color: #2bcaae;
    }

    body.style-14 .product-slide-entry .title:hover {
        color: #6d4c3d;
    }

    body.style-14 .inline-product-entry .title:hover {
        color: #6d4c3d;
    }

    body.style-14 .bubbles span {
        background: #6d4c3d;
    }

    body.style-14 .mozaic-banners-wrapper.type-2 .banner-column {
        margin-bottom: 30px;
    }

    body.style-14 .sale-entry .sale-price span {
        color: #606060;
    }

    body:not(.mobile).style-14 .mozaic-banners-wrapper.type-2 a.mozaic-banner-entry:hover .title,
    body:not(.mobile).style-14 .mozaic-banners-wrapper.type-2 a.mozaic-banner-entry:hover .subtitle,
    body:not(.mobile).style-14 .mozaic-banners-wrapper.type-2 a.mozaic-banner-entry:hover .view {
        color: #fff;
        border-color: #fff;
    }

    body.style-14 .inline-product-entry .image:hover {
        border-color: #6d4c3d;
    }

    body.style-14 .sidebar-navigation .entry .fa {
        color: #aeaeae;
    }

    .header-wrapper.style-14 .menu-button {
        color: #fff;
    }

    body.style-14 .search-button {
        background: #6d4c3d;
    }

    body.style-14 .cart-box.popup .content .price {
        color: #6d4c3d;
    }

    body.style-14 .cart-box.popup .summary .grandtotal span {
        color: #6d4c3d;
    }

    body.style-14 .button.style-4 {
        background: #6d4c3d;
        border-color: #6d4c3d;
    }

    @media (max-width:1199px) {
        body.style-14 .header-top-entry {
            color: #fff;
        }
    }

    .text-widget .image {
        display: block;
        width: 100%;
        height: auto;
        max-width: 275px;
        margin-bottom: 15px;
    }

    .text-widget .description {
        font-size: 13px;
        line-height: 24px;
        color: #a3a2a2;
        margin-bottom: 10px;
    }

    @media (max-width:991px) {
        .text-widget .image {
            float: left;
            margin-right: 30px;
        }
    }

    @media (max-width:767px) {
        .text-widget .image {
            float: none;
            margin-right: 0;
        }
    }

    body.style-3 .sale-entry .sale-price span {
        color: #008acc;
    }

    .sale-entry .sale-image {
        display: none;
        max-width: 100%;
        height: auto;
        position: relative;
    }

    a.sale-entry:before {
        background: rgba(1, 138, 204, 0.7);
    }

    body:not(.mobile) a.sale-entry:hover:before {
        opacity: 1;
    }

    body:not(.mobile) a.sale-entry:hover .sale-price,
    body:not(.mobile) a.sale-entry:hover .sale-price span,
    body:not(.mobile) a.sale-entry:hover .sale-description {
        color: #fff !important;
    }

    @media (min-width:992px) {
        .sale-entry .sale-image {
            display: block;
            margin: 0 auto;
        }

        .sale-entry.vertical {
            text-align: center;
        }

        .sale-entry.vertical .sale-description {
            margin-left: 20px;
            margin-right: 20px;
        }

        .sale-entry.vertical .sale-price {
            float: none;
            width: auto;
            border: none;
            margin-bottom: 15px;
        }
    }

    .sidebar-navigation .entry:before,
    .sidebar-navigation .entry,
    .button,
    .socials-box a,
    .socials-box a .fa,
    .search-drop-down .category-entry,
    .search-button,
    .header-functionality-entry,
    footer a,
    .product-slide-entry .title,
    .product-slide-entry .tag,
    .inline-product-entry .title,
    .inline-product-entry .image,
    .list-type-1 a,
    .hover-class-1:after,
    .hover-label,
    .menu-slider-arrows a .fa,
    .bottom-line-a,
    .top-line-a,
    .fixed-header-square-button .fa,
    .read-more,
    .product-mix-info,
    .simple-search-form .simple-submit,
    .departmets-drop-down .list a,
    .copyright a,
    .styled-form .submit-wrapper,
    .socials-box a .fa,
    .sidebar-logos-row a img,
    a.sale-entry:before,
    a.sale-entry .sale-price,
    a.sale-entry .sale-price span,
    a.sale-entry .sale-description,
    .breadcrumb-box a,
    .icon-entry .image,
    .quantity-selector .entry.number-minus,
    .quantity-selector .entry.number-plus,
    .tabs-container.style-1 .tab-switcher,
    .size-selector .entry:after,
    .color-selector .entry:after,
    .color-selector .entry:before,
    .blog-entry .title,
    .blog-entry .subtitle a,
    .blog-entry .subtitle a b,
    .blog-entry .readmore,
    .square-button,
    .tags-box a,
    .categories-list ul li a,
    .container-404 .text a,
    .portfolio-navigation a,
    .portfolio-entry .title,
    .action-button,
    .hover-layer,
    .continue-link,
    .accordeon-title,
    .traditional-cart-entry .tag,
    .traditional-cart-entry .title,
    .remove-button,
    .cart-summary-box .simple-link,
    .checkout-progress-widget a.step-entry,
    .simple-field,
    .column-article-entry .title,
    .product-slide-entry .subtitle {
        -moz-transition: all 0.15s ease-out;
        -o-transition: all 0.15s ease-out;
        -webkit-transition: all 0.15s ease-out;
        transition: all 0.15s ease-out;
        -ms-transition: all 0.15s ease-out;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -6px;
        margin-left: -1px;
        -webkit-border-radius: 0 6px 6px 6px;
        -moz-border-radius: 0 6px 6px;
        border-radius: 0 6px 6px 6px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
    }

    .dropdown-submenu>a:after {
        display: block;
        content: " ";
        float: right;
        width: 0;
        height: 0;
        border-color: transparent;
        border-style: solid;
        border-width: 5px 0 5px 5px;
        border-left-color: #ccc;
        margin-top: 5px;
        margin-right: -10px;
    }

    .dropdown-submenu:hover>a:after {
        border-left-color: #fff;
    }

    .dropdown-submenu.pull-left {
        float: none;
    }

    .dropdown-submenu.pull-left>.dropdown-menu {
        left: -100%;
        margin-left: 10px;
        -webkit-border-radius: 6px 0 6px 6px;
        -moz-border-radius: 6px 0 6px 6px;
        border-radius: 6px 0 6px 6px;
    }
</style>

<style type="text/css">
    /* Wrapper */
    #slider {
        margin: 0 auto;
        position: absolute;
        width: 95%;
        overflow: hidden;
    }

    .slides {
        overflow: hidden;
        animation-name: fade;
        animation-duration: 1s;
        display: none;
    }

    img {
        width: 100%;
        height: auto;
    }

    #dot1 {
        margin: 0 auto;
        text-align: center;
    }

    .dot1 {
        display: inline-block;
        border-radius: 50%;
        background: #d3d3d3;
        padding: 8px;
        margin: 10px 5px;
    }

    .active1 {
        background: black;
    }

    @media (max-width:567px) {
        #slider {
            display: contents;
            width: 100%;

        }
    }

    #heading {
        display: block;
        text-align: center;
        font-size: 2em;
        margin: 10px 0px;

    }

    /* End Wrapper */
</style>



<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <section id="content-block" class="slider_area">
        <div class="container">
            <div class="content-push">
                <div class="row">

                    <div class="col-md-3 col-md-push-9">
                        <div class="sidebar-navigation">
                            <div class="title">Product Categories<i class="fa fa-angle-down"></i></div>
                            <div class="list">

                                <ul class="dropdown-submenu">

                                    <?php
                                    foreach ($cat_arr as $list) {
                                    ?>
                                        <li class="dropdown-submenu"><a class="entry" href="categories.php?id=<?php echo $list['id'] ?>"><span><i class="fa fa-angle-right"></i><?php echo $list['categories'] ?></span></a>

                                            <?php
                                            $cat_id = $list['id'];
                                            $sub_cat_res = mysqli_query($con, "select * from sub_categories where status='1' and categories_id='$cat_id'");
                                            if (mysqli_num_rows($sub_cat_res) > 0) {
                                            ?>

                                                <ul class="dropdown-menu">
                                                    <?php
                                                    while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
                                                        echo '<li><a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a></li>';
                                                    }
                                                    ?>
                                                </ul>
                                            <?php } ?>

                                        </li>
                                    <?php
                                    }
                                    ?>

                                </ul>

                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="col-md-9 col-md-pull-3">
                        <!-- Wrapper -->
                        <div id="slider">
                            <div class="slides">
                                <img src="./images/banner/Banner-1-1.jpg" width="100%" />
                            </div>

                            <div class="slides">
                                <img src="./images/banner/Banner-4.png" width="100%" />
                            </div>

                            <div class="slides">
                                <img src="./images/banner/Banner-5.jpg" width="100%" />
                            </div>

                            <div class="slides">
                                <img src="./images/banner/kp.png" width="100%" />
                            </div>

                            <div class="slides">
                                <img src="./images/banner/20210521_101205_0000.png" width="100%" />
                            </div>

                            <div id="dot1"><span class="dot1"></span><span class="dot1"></span><span class="dot1"></span><span class="dot1"></span><span class="dot1"></span></div>
                        </div>
                        <!-- End Wrapper -->
                    </div>
                </div>


            </div>

        </div>

    </section>







    <div class="search__inner" style="text-align: center;">
        <h3>Order here by uploading your item list</h3>
        <a href="order_by_image.php" class="btn btn-primary" style"=background-color:gray;" role="button" data-bs-toggle="button">click here</a>

    </div>
 

</section>
<section class="u-align-center u-clearfix u-section-1" id="sec-0550">
    <div class="u-clearfix u-sheet u-sheet-1">
        <?php
        foreach ($cat_arr as $list) {
        ?>
            
            <h2 class="u-text u-text-1 animated bounceIn-played" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" font-size="40px" data-animation-direction="" style="will-change: transform, opacity;animation-duration: 3000ms;font-size: 20px;text-align: initial;"><?php echo $list['categories'] ?></h2>
            <br>
           


                <div class="u-expanded-width u-layout-grid u-products u-products-1">
                    <div id="owl-carousel1" class="owl-carousel owl-theme mt--10">
                        <?php
                        $cat_id = $list['id'];
                        $sub_cat_res = mysqli_query($con, "select * from sub_categories where status='1' and categories_id='$cat_id'");
                        if (mysqli_num_rows($sub_cat_res) > 0) {
                        ?>
                            <?php
                            while ($sub_cat_rows = mysqli_fetch_assoc($sub_cat_res)) {
                                echo '<div class="card m-wthree" style=" border-radius: 15px;   height: fit-content;">
                                        <div class="col-m">
                                            <a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '"><img style="border-radius: 15px 15px 0px 0px;" src="media/product/' . $sub_cat_rows['image'] . '" alt="product images"></a>
                                            <div class="mid-1">

                                                <div class="women">
                                                    <h6>
                                                        <a href="categories.php?id=' . $list['id'] . '&sub_categories=' . $sub_cat_rows['id'] . '">' . $sub_cat_rows['sub_categories'] . '</a>
                                                    </h6>
                                                </div>
                                    
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                            ?>
                        <?php } ?>
                    
                    </div>
                </div>
            <br>
            <div class="wp-block-button is-style-outline"><a class="btn btn-primary" role="button" data-bs-toggle="button" href="categories.php?id=<?php echo $list['id'] ?>"style="background:linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(231,123,54) 16%,rgb(155,81,224) 100%)"><span class="has-inline-color has-white-color">View All <?php echo $list['categories'] ?></span></a></div>
            <hr class="wp-block-separator">
        <?php
        }
        ?>
        
    </div>
</section>

<section class="u-align-center u-clearfix u-section-1" id="sec-0550">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1 animated bounceIn-played" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" font-size="38px" data-animation-direction="" style="will-change: transform, opacity;animation-duration: 3000ms;font-size: 28px; margin: 0px auto;">BEST SELLER</h2>
    </div>
</section>



<section class="u-align-center u-clearfix u-section-3" id="sec-9aaa"">
    <div class=" u-clearfix u-sheet u-sheet-1">


    <div class="u-expanded-width u-layout-grid u-products u-products-1">
        <div id="owl-carousel2" class="owl-carousel owl-theme mt--10">

            <?php
            $get_product = get_product($con, 8, '', '', '', '', 'yes');
            foreach ($get_product as $list) {
            ?>
                <div class="card m-wthree" style=" border-radius: 15px;   height: fit-content;">
                    <div class="col-m">
                        <a href="product.php?id=<?php echo $list['id'] ?>"><img style="border-radius: 15px 15px 0px 0px;" src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>" alt="product images" /></a>
                        <div class="mid-1">

                            <div class="women">
                                <h6>
                                    <a href="product.php?id=<?php echo $list['id'] ?>"><?php echo $list['name'] ?></a>
                                </h6>
                            </div>
                            <div class="mid-2">
                                <p style="margin: 5px 0px 5px 0px;"><em class="item_price"> ₹<?php echo $list['price'] ?></em></p>
                                <!-- <i class="bi bi-suit-heart-fill">wishlist</i> -->
                                <a class="btn btn-danger my-cart-btn my-cart-b " style="margin: 5px 0px 5px 0px;" href="javascript:void(0)" onclick="manage_cart('<?php echo $list['id'] ?>','add')"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                                <!-- <div class="clearfix"></div> -->
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
</section>


<div id="content" class="container homepagecontent">
    <div class="row">
        <div class="main col-md-12" role="main">
            <div class="entry-content" itemprop="mainContentOfPage">
               



                <hr class="wp-block-separator">



                <div class="wp-block-image">
                    <figure class="aligncenter"><img loading="lazy" width="1260" height="97" src="./img/Grocery Delivery Ad.jpg" alt="ads image" sizes="(max-width: 1260px) 100vw, 1260px"></figure>
                </div>



                <p></p>
            </div>

        </div>

    </div><!-- /.main -->
</div><!-- /.row-->
</div>


<section class="u-clearfix u-image u-shading u-section-2" src="" data-image-width="870" data-image-height="450" id="sec-bd58">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h2 class="u-text u-text-1">Ab Shopping Karo Aaram Se...</h2>
                <p class="u-text u-text-2" style="color: black;">KiranaOP.com brings to you the comfort of shopping online from your preferred neighbourhood retailer. You can view exclusive offers and discounts on grocery items from retailers in your location and get grocery home delivered through our user-friendly platform.<br>
                </p>
                <a href="index.php" class="u-active-palette-3-light-2 u-border-1 u-border-black u-btn u-btn-round u-button-style u-hover-palette-3-dark-2 u-palette-3-light-1 u-radius-14 u-btn-1" data-animation-name="zoomIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Shop Now</a>
            </div>
        </div>
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div class="u-align-center u-container-style u-list-item u-repeater-item u-video-cover u-list-item-1">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                        <h1 class="u-text u-text-default u-title u-text-3" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000"><?php

                                                                                                                                                                        $file = 'count.txt';
                                                                                                                                                                        $c = file_get_contents($file);
                                                                                                                                                                        file_put_contents($file, $c + 1);
                                                                                                                                                                        echo  $c;
                                                                                                                                                                        ?></h1>
                        <p class="u-text u-text-4" style="color: black;">Users Visited</p>

                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item u-video-cover u-list-item-2">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                        <h1 class="u-text u-text-default u-title u-text-5" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">112</h1>
                        <p class="u-text u-text-6" style="color: black;">Happy Customers</p>
                    </div>
                </div>
                <div class="u-align-center u-container-style u-list-item u-repeater-item u-video-cover u-list-item-3">
                    <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                        <h1 class="u-text u-text-default u-title u-text-7" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">72</h1>
                        <p class="u-text u-text-8" style="color: black;">Orders Successfully Delivered</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $('#owl-carousel1').owlCarousel({
        loop: true,
        margin: 5,
        autoplay: true,
        autoplayTimeout: 3000,
        nav: false,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    $('#owl-carousel2').owlCarousel({
        loop: true,
        margin: 5,
        autoplay: true,
        autoplayTimeout: 4000,
        nav: false,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    owl.on('mousewheel', '.owl-stage', function(e) {
        if (e.deltaY > 0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
</script>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 5,
        autoplay: true,
        autoplayTimeout: 4000,
        nav: false,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
    owl.on('mousewheel', '.owl-stage', function(e) {
        if (e.deltaY > 0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }
        e.preventDefault();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {


        $.fn.iglyphicmenu = function(options) {

            var cssmenu = $(this),
                settings = $.extend({
                    title: "Menu",
                    format: "dropdown",
                    sticky: false
                }, options);

            return this.each(function() {

                cssmenu.prepend('<div id="menu-button">' + settings.title + '</div>');
                $(this).find("#menu-button").on('click', function() {
                    $(this).toggleClass('menu-opened');
                    var mainmenu = $(this).next('ul');
                    if (mainmenu.hasClass('open')) {
                        mainmenu.slideUp().removeClass('open');
                    } else {
                        mainmenu.slideDown().addClass('open');
                        if (settings.format === "dropdown") {
                            mainmenu.find('ul').slideDown();
                        }
                    }
                });

                cssmenu.find('li ul').parent().addClass('has-sub');

                multiTg = function() {
                    cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                    cssmenu.find('.submenu-button').on('click', function() {
                        $(this).toggleClass('submenu-opened');
                        if ($(this).siblings('ul').hasClass('open')) {
                            $(this).siblings('ul').removeClass('open').slideUp();
                        } else {
                            $(this).siblings('ul').addClass('open').slideDown();
                        }
                    });
                };

                if (settings.format === 'multitoggle') multiTg();
                else cssmenu.addClass('dropdown');


            });
        };

        $(".navy").iglyphicmenu({
            title: "Menu",
            format: "multitoggle"
        });
    });


    /* --------------------------------------------------------
    Accordion widget in sidebar
    * -------------------------------------------------------*/
    $(".accordion-widget").click(function(event) {
        if ($(this).find(".accordion-widget-plus").length) {
            $(".accordion-widget .accordion-widget-minus").parent().prepend("<span class='accordion-widget-plus'>+</span>").find(".accordion-widget-minus").remove();
            $(".accordion-widget").next(".collapse.in").collapse('hide');
            $(this).prepend("<span class='accordion-widget-minus'>-</span>").find(".accordion-widget-plus").remove();
            $(this).parent().find(".collapse").collapse('show');
        } else {
            $(".accordion-widget .accordion-widget-minus").parent().prepend("<span class='accordion-widget-plus'>+</span>").find(".accordion-widget-minus").remove();
            $(".accordion-widget").next(".collapse.in").collapse('hide');
        }
    });

    /*==============================*/
    /* 08 - buttons, clicks, hovers */
    /*==============================*/

    $('.swiper-tabs .title, .links-drop-down .title').on('click', function() {
        $(this).toggleClass('active');
        $(this).next().slideToggle(300);
    });

    /*sidebar menu*/
    $('.sidebar-navigation .title').on('click', function() {
        if ($('.sidebar-navigation .title .fa').is(':visible')) {
            $(this).parent().find('.list').slideToggle(300);
            $(this).parent().toggleClass('active');
        }
    });

    function closePopups() {
        $('.popup.active').animate({
            'opacity': '0'
        }, 300, function() {
            $(this).removeClass('active');
            $('.cart-box').removeClass('cart-left cart-right');
        });
    }



    var index = 0;
    var slides = document.querySelectorAll(".slides");
    var dot1 = document.querySelectorAll(".dot1");

    function changeSlide() {

        if (index < 0) {
            index = slides.length - 1;
        }

        if (index > slides.length - 1) {
            index = 0;
        }

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            dot1[i].classList.remove("active1");
        }

        slides[index].style.display = "block";
        dot1[index].classList.add("active1");

        index++;

        setTimeout(changeSlide, 2000);

    }

    changeSlide();
</script>


<!-- End Product Area -->
<input type="hidden" id="qty" value="1" />
<?php require('footer.php') ?>