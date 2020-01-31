<style type="text/css">
     <?php if($theme_options->get( 'text_heading_align' ) == '1') { ?>
     .box .box-heading {
          text-align: left;
     }
     
     .filter-product .filter-tabs, 
     .refine_search,
     .htabs {
          text-align: left;
     }
     
          .filter-product .filter-tabs ul > li:first-child,
          .htabs a:first-child {
               padding-left: 0px;
               margin-left: 0px;
          }
     <?php } ?>
     
     <?php if($theme_options->get( 'text_heading_align_in_box_category' ) == '1') { ?>
     #main .box-with-categories .box-heading {
          text-align: left;
     }
     <?php } else { ?>
     #main .box-with-categories .box-heading {
          text-align: center;
     }
     <?php } ?>
     
     <?php if(($theme_options->get( 'main_layout' ) == 2 || $theme_options->get( 'main_layout' ) == 3) && $theme_options->get( 'main_content_background_color' ) == '#ffffff') { ?>
     .center-column .tab-content {
          padding: 10px 0px 0px 0px;
     }
     <?php } ?>
     
     <?php if($theme_options->get( 'border_width_in_elements' ) == '1') { ?>
     textarea, 
     input[type="text"], 
     input[type="password"], 
     input[type="datetime"], 
     input[type="datetime-local"], 
     input[type="date"], 
     input[type="month"], 
     input[type="time"], 
     input[type="week"], 
     input[type="number"], 
     input[type="email"], 
     input[type="url"], 
     input[type="search"], 
     input[type="tel"], 
     input[type="color"], 
     .uneditable-input, 
     select,
     #top #cart_block .cart-heading,
     .button,
     .btn,
     #main .button-white,
     #main .button-dark-blue-with-background,
     #main .button-white-with-background,
     .button-footer,
     .button-footer-type-2,
     .box > .prev, 
     .box > .next,
     .product-info .thumbnails-carousel .owl-buttons .owl-prev,
     .product-info .thumbnails-carousel .owl-buttons .owl-next,
     .product-info .radio-type-button span,
     .product-info .radio-type-button span:hover,
     .product-info .radio-type-button span.active,
     .product-info .radio-type-button2 span,
     .review-list .text,
     .center-column .background .panel,
     .carousel-brands .owl-prev,
     .carousel-brands .owl-next,
     .camera_wrap .owl-controls .owl-buttons .owl-prev,
     .camera_wrap .owl-controls .owl-buttons .owl-next,
     #top .container .megamenuToogle-wrapper,
     .mfilter-image ul li,
     .mfilter-image ul li.mfilter-image-checked,
     .htabs a.selected,
     ul.megamenu li h3,
     .filter-product .filter-tabs ul > li.active > a, .filter-product .filter-tabs ul > li.active > a:hover, .filter-product .filter-tabs ul > li.active > a:focus,
     table.attribute td, table.list td, .wishlist-product table td, .wishlist-info table td, .compare-info td, .cart-info table td, .checkout-product table td, .table td,
     table.attribute, table.list, .wishlist-product table, .wishlist-info table, .compare-info, .cart-info table, .checkout-product table, .table,
     .center-column .background .panel-body,
     #main .mfilter-image ul li,
     #main .box .box-content,
     #main .col-sm-3 .box .box-content.products, #main .col-sm-4 .box .box-content.products, #main .col-md-3 .box .box-content.products, #main .col-md-4 .box .box-content.products {
          border-width: 1px;
     }
     <?php } ?>
     
	<?php if($theme_options->get( 'colors_status' ) == '1') { ?>
		<?php if($theme_options->get( 'body_font_text' ) != '') { ?>
		body,
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input,
		select {
			color: <?php echo $theme_options->get( 'body_font_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_headings_color' ) != '') { ?>
		.box .box-heading,
		h1, h2, h3, h4, h5, h6 {
			color: <?php echo $theme_options->get( 'body_headings_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_font_links' ) != '') { ?>
		a {
			color: <?php echo $theme_options->get( 'body_font_links' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_font_links_hover' ) != '') { ?>
		a:hover {
			color: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		}
		
		.box-special-products {
		     border-color: <?php echo $theme_options->get( 'body_font_links_hover' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_text' ) != '') { ?>
		.compare-info .price-new, 
		.product-grid .product .price, 
		.hover-product .price,
		.product-list .actions > div .price,
		.product-info .price .price-new,
		ul.megamenu li .product .price,
		.mini-cart-total td:last-child,
		.cart-total table tr td:last-child,
		.mini-cart-info td.total,
		.product-list .price,
		.box-special-products .product .left .price {
			color: <?php echo $theme_options->get( 'body_price_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_price_old_text' ) != '') { ?>
		.compare-info .price-old,
		.product-grid .product .price .price-old,
		.product-list .price .price-old,
		.product-info .price .price-old,
		.box-special-products .product .left .price .price-old {
			color: <?php echo $theme_options->get( 'body_price_old_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_input_background_color' ) != '') { ?>
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input,
		select,
		.product-info .radio-type-button2 span {
			background: <?php echo $theme_options->get( 'body_input_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_input_border_color' ) != '') { ?>
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input,
		select,
		.product-info .radio-type-button2 span,
		.product-info .radio-type-button span,
		#main .mfilter-image ul li {
			border-color: <?php echo $theme_options->get( 'body_input_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_input_text_color' ) != '') { ?>
		textarea, 
		input[type="text"], 
		input[type="password"], 
		input[type="datetime"], 
		input[type="datetime-local"], 
		input[type="date"], 
		input[type="month"], 
		input[type="time"], 
		input[type="week"], 
		input[type="number"], 
		input[type="email"], 
		input[type="url"], 
		input[type="search"], 
		input[type="tel"], 
		input[type="color"], 
		.uneditable-input,
		select,
		.product-info .radio-type-button2 span {
			color: <?php echo $theme_options->get( 'body_input_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_input_focus_background_color' ) != '') { ?>
		textarea:focus,
		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="time"]:focus,
		input[type="week"]:focus,
		input[type="number"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="search"]:focus,
		input[type="tel"]:focus,
		input[type="color"]:focus,
		.uneditable-input:focus {
			background: <?php echo $theme_options->get( 'body_input_focus_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_input_focus_border_color' ) != '') { ?>
		textarea:focus,
		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="time"]:focus,
		input[type="week"]:focus,
		input[type="number"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="search"]:focus,
		input[type="tel"]:focus,
		input[type="color"]:focus,
		.uneditable-input:focus,
		.product-info .radio-type-button2 span:hover,
		.product-info .radio-type-button2 span.active,
		.product-info .radio-type-button span:hover,
		.product-info .radio-type-button span.active,
		#main .mfilter-image ul li.mfilter-image-checked {
			border-color: <?php echo $theme_options->get( 'body_input_focus_border_color' ); ?>;
		}
		
		.product-info .radio-type-button2 span.active {
		     background: <?php echo $theme_options->get( 'body_input_focus_border_color' ); ?>;
		     color: #fff;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_input_focus_text_color' ) != '') { ?>
		textarea:focus,
		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="time"]:focus,
		input[type="week"]:focus,
		input[type="number"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="search"]:focus,
		input[type="tel"]:focus,
		input[type="color"]:focus,
		.uneditable-input:focus {
			color: <?php echo $theme_options->get( 'body_input_focus_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_dropdown_background_color' ) != '') { ?>
		.dropdown-menu,
		ul.megamenu li .sub-menu .content,
		ul.megamenu li .sub-menu .content .hover-menu .menu ul ul,
		.box-category-wall-2 {
			background: <?php echo $theme_options->get( 'body_dropdown_background_color' ); ?>;
		}
		
		#top #cart_block .cart-heading:after,
		#top form .dropdown.open .dropdown-menu:before,
		.ui-autocomplete:after,
		ul.megamenu > li > .sub-menu > .content > .arrow:after {
		     border-bottom-color: <?php echo $theme_options->get( 'body_dropdown_background_color' ); ?>;
		}
		
		ul.megamenu li .sub-menu .content .hover-menu .menu ul ul:after {
		     border-right-color: <?php echo $theme_options->get( 'body_dropdown_background_color' ); ?>;
		}
		
		.ui-autocomplete {
		     background: <?php echo $theme_options->get( 'body_dropdown_background_color' ); ?> !important;
		}
		
		@media (max-width: 991px) { 
		     .responsive .megamenu-wrapper {
		          background: <?php echo $theme_options->get( 'body_dropdown_background_color' ); ?> !important;
		     }
		     
		     .responsive #top .container .megamenu-wrapper ul.megamenu {
		          padding: 5px 20px !important;
		     }
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_dropdown_text_color' ) != '') { ?>
		.dropdown-menu,
		ul.megamenu li .sub-menu .content,
		.responsive ul.megamenu > li.with-sub-menu .open-menu,
		.responsive ul.megamenu > li.active .close-menu,
		.responsive ul.megamenu .menu > ul > li > .open-categories,
		.responsive ul.megamenu .menu > ul > li.active > .close-categories {
			color: <?php echo $theme_options->get( 'body_dropdown_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_dropdown_links_color' ) != '') { ?>
		.dropdown-menu a,
		ul.megamenu li .sub-menu .content a,
		ul.megamenu li .sub-menu .content .static-menu a.main-menu,
		.box-category-wall-2 .categories > ul > li ul a {
			color: <?php echo $theme_options->get( 'body_dropdown_links_color' ); ?>;
		}
		
		@media (max-width: 991px) {
		     .responsive ul.megamenu > li > a {
		          color: <?php echo $theme_options->get( 'body_dropdown_links_color' ); ?> !important;
		     }
		}
		
		.ui-autocomplete li a {
		     color: <?php echo $theme_options->get( 'body_dropdown_links_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_dropdown_links_hover_color' ) != '') { ?>
		.dropdown-menu a:hover,
		ul.megamenu li .sub-menu .content a:hover,
		ul.megamenu li .sub-menu .content .static-menu a.main-menu:hover,
		ul.megamenu li .sub-menu .content .hover-menu li:hover > a.with-submenu:after,
		ul.megamenu li .sub-menu .content .hover-menu li:hover > a.with-submenu,
		.box-category-wall-2 .categories > ul > li ul a:hover {
			color: <?php echo $theme_options->get( 'body_dropdown_links_hover_color' ); ?>;
		}
		
		.ui-autocomplete li a.ui-state-focus,
		.ui-autocomplete li a:hover {
		     color: <?php echo $theme_options->get( 'body_dropdown_links_hover_color' ); ?> !important;
		}
		
		@media (max-width: 991px) {
     		.responsive ul.megamenu > li:hover > a,
     		.responsive ul.megamenu > li.active > a {
     		     color: <?php echo $theme_options->get( 'body_dropdown_links_hover_color' ); ?> !important;
     		}
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_dropdown_headings_color' ) != '') { ?>
		ul.megamenu li h3,
		.box-category-wall-2 .categories > ul > li > a {
			color: <?php echo $theme_options->get( 'body_dropdown_headings_color' ); ?>;
		}
		
		ul.megamenu li h3 {
			border-color: <?php echo $theme_options->get( 'body_dropdown_headings_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'body_background_color' ) != '') { ?>
		body,
		#mfilter-content-container > span:before {
			background: <?php echo $theme_options->get( 'body_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'main_content_background_color' ) != '') { ?>
		.center-column .background,
		.category-list,
		.product-filter,
		.product-list > div,
		.box .box-content,
		.col-sm-3 .box .box-content.products, .col-sm-4 .box .box-content.products, .col-md-3 .box .box-content.products, .col-md-4 .box .box-content.products,
		.category-info,
		.product-info .product-image,
		.product-grid .product,
		.product-grid .product-hover .only-hover,
		.product-info .product-center:before,
		.product-block,
		div.pagination-results,
		.center-column .tab-content,
		.review-list .text,
		table.attribute tr,
		table.list tr,
		.wishlist-product table tr,
		.wishlist-info table tr,
		.compare-info tr,
		.cart-info table tr,
		.checkout-product table tr,
		.table,
		.manufacturer-list,
		.center-column .panel,
		.carousel-brands,
		.quickview body,
		table.attribute thead td, table.list thead td, .wishlist-product table thead td, .wishlist-info table thead td, .compare-info thead td, .cart-info table thead td, .checkout-product table thead td, .table thead td,
		.modal-content,
		.box-features,
		.box-special-products {
			background: <?php echo $theme_options->get( 'main_content_background_color' ); ?>;
		}
		
		.mfp-iframe-scaler iframe,
		.artblock,
		.article-content  {
		     background-color: <?php echo $theme_options->get( 'main_content_background_color' ); ?> !important;
		}
		
		.review-list .text:after {
		     border-bottom-color: <?php echo $theme_options->get( 'main_content_background_color' ); ?>;
		}
		<?php } ?>
				
		<?php if($theme_options->get( 'main_content_border_color' ) != '') { ?>
		.product-info .review,
		.product-info .description,
		.product-info .price,
	     .product-info .options,
		.product-info .cart,
		table.attribute, table.list, .wishlist-product table, .wishlist-info table, .compare-info, .cart-info table, .checkout-product table, .table,
		table.attribute td, table.list td, .wishlist-product table td, .wishlist-info table td, .compare-info td, .cart-info table td, .checkout-product table td, .table td,
		.center-column .background .panel,
		.center-column .background .panel-body,
		.review-list .text,
		.modal-header,
		.product-list .price,
		.table-responsive,
		.box-special-products .product {
			border-color: <?php echo $theme_options->get( 'main_content_border_color' ); ?>;
		}
		
		.review-list .text:before {
		     border-bottom-color: <?php echo $theme_options->get( 'main_content_border_color' ); ?>;
		}
		
		#main .mfilter-price-slider {
		     background: <?php echo $theme_options->get( 'main_content_border_color' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'main_content_button_color_in_product_filter' ) != '') { ?>
		.product-filter .options .button-group button {
			color: <?php echo $theme_options->get( 'main_content_button_color_in_product_filter' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'main_content_button_active_color_in_product_filter' ) != '') { ?>
		.product-filter .options .button-group button:hover, .product-filter .options .button-group .active {
			color: <?php echo $theme_options->get( 'main_content_button_active_color_in_product_filter' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_text_color' ) != '') { ?>
		.breadcrumb .container {
			color: <?php echo $theme_options->get( 'breadcrumb_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_page_name_color' ) != '') { ?>
		.breadcrumb .container h1 {
			color: <?php echo $theme_options->get( 'breadcrumb_page_name_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_links_color' ) != '') { ?>
		.breadcrumb .container ul li a {
			color: <?php echo $theme_options->get( 'breadcrumb_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'breadcrumb_links_hover_color' ) != '') { ?>
		.breadcrumb .container ul li a:hover {
			color: <?php echo $theme_options->get( 'breadcrumb_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'tabs_links_color' ) != '') { ?>
		.htabs a,
		.filter-product .filter-tabs ul > li > a {
			color: <?php echo $theme_options->get( 'tabs_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'tabs_links_active_color' ) != '') { ?>
		.filter-product .filter-tabs ul > li.active > a, .filter-product .filter-tabs ul > li.active > a:hover, .filter-product .filter-tabs ul > li.active > a:focus,
		.htabs a.selected,
		.htabs a:hover,
		.filter-product .filter-tabs ul > li > a:hover {
			color: <?php echo $theme_options->get( 'tabs_links_active_color' ); ?>;
		}
		
		.filter-product .filter-tabs ul > li.active > a, .filter-product .filter-tabs ul > li.active > a:hover, .filter-product .filter-tabs ul > li.active > a:focus,
		.htabs a.selected {
			border-color: <?php echo $theme_options->get( 'tabs_links_active_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_on_left_column_background_color' ) != '') { ?>
		.box .box-content,
		.col-sm-3 .box .box-content.products, .col-sm-4 .box .box-content.products, .col-md-3 .box .box-content.products, .col-md-4 .box .box-content.products,
		.box-category-wall {
			background: <?php echo $theme_options->get( 'box_on_left_column_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_on_left_column_border_color' ) != '') { ?>
		.box .box-content,
		.col-sm-3 .box .box-content.products, .col-sm-4 .box .box-content.products, .col-md-3 .box .box-content.products, .col-md-4 .box .box-content.products,
		.box-category-wall {
			border: 2px solid <?php echo $theme_options->get( 'box_on_left_column_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_on_left_column_text_color' ) != '') { ?>
		.box .box-content,
		.col-sm-3 .box .box-content.products, .col-sm-4 .box .box-content.products, .col-md-3 .box .box-content.products, .col-md-4 .box .box-content.products {
			color: <?php echo $theme_options->get( 'box_on_left_column_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_on_left_column_heading_color' ) != '') { ?>
		.box .box-heading {
			color: <?php echo $theme_options->get( 'box_on_left_column_heading_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_on_left_column_links_color' ) != '') { ?>
		.box .box-content a {
			color: <?php echo $theme_options->get( 'box_on_left_column_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_on_left_column_links_hover_color' ) != '') { ?>
		.box .box-content a:hover {
			color: <?php echo $theme_options->get( 'box_on_left_column_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_category_heading_color' ) != '') { ?>
		#main .box-with-categories .box-heading {
			color: <?php echo $theme_options->get( 'box_category_heading_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_category_links_color' ) != '') { ?>
		#main .box-category ul li a,
		.list-box li a,
		.list-box li {
			color: <?php echo $theme_options->get( 'box_category_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_category_links_hover_color' ) != '') { ?>
		#main .box-category ul li a:hover,
		#main .box-category ul li a.active,
		#main .box-category ul li .head a:hover,
		.list-box li a:hover {
			color: <?php echo $theme_options->get( 'box_category_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_category_border_color' ) != '') { ?>
		.box-category ul li ul {
			border-color: <?php echo $theme_options->get( 'box_category_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_category_plus_and_minus_text_color' ) != '') { ?>
		#main .box-category ul li .head a {
			color: <?php echo $theme_options->get( 'box_category_plus_and_minus_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_category_background_color' ) != '') { ?>
		.box-with-categories {
			background: <?php echo $theme_options->get( 'box_category_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'box_category_background_color' ) == '#ffffff' && $theme_options->get( 'box_on_left_column_border_color' ) != '') { ?>
		#main .box-with-categories .box-heading {
		     padding-left: 0px !important;
		     padding-right: 0px !important;
		     padding-bottom: 25px;
		     padding-top: 20px;
		}
		
		#main .box-with-categories {
		     background: none;
		}
		
		#main .box-with-categories .box-content {
		     background: #fff;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_menu_links' ) != '') { ?>
		#top .header-links li a,
		#top .dropdown > a {
			color: <?php echo $theme_options->get( 'top_menu_links' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_menu_links_hover' ) != '') { ?>
		#top .header-links li a:hover,
		#top .dropdown > a:hover {
			color: <?php echo $theme_options->get( 'top_menu_links_hover' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_menu_arrows' ) != '') { ?>
		#top .dropdown > a > i {
			color: <?php echo $theme_options->get( 'top_menu_arrows' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_border_color' ) != '') { ?>
		#top #cart_block .cart-heading {
			border-color: <?php echo $theme_options->get( 'top_cart_block_border_color' ); ?>;
		}
		<?php } ?>
		
          <?php if($theme_options->get( 'top_cart_block_background_top_color' ) != '' && $theme_options->get( 'top_cart_block_background_bottom_color' ) != '') { ?>
          #top #cart_block .cart-heading {
          	background: <?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?>; /* Old browsers */
          	background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_block_background_top_color' ); ?> 0%, <?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 99%); /* FF3.6+ */
          	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_cart_block_background_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?>)); /* Chrome,Safari4+ */
          	background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_block_background_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
          	background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_block_background_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 99%); /* Opera 11.10+ */
          	background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_block_background_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 99%); /* IE10+ */
          	background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_block_background_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_cart_block_background_bottom_color' ); ?> 99%); /* W3C */
          }
               
               <?php if($theme_options->get( 'top_cart_block_background_top_color' ) != $theme_options->get( 'top_cart_block_background_bottom_color' )) { ?>
               #top #cart_block .cart-heading {
                    border: none;
                    padding-top: 2px;
               }
               <?php } ?>
          <?php } ?>
          
          <?php if($theme_options->get( 'top_cart_icon_color' ) != '') { ?>
               <?php if($theme_options->get( 'top_cart_icon_color' ) == '#d35f72') { ?>
               #top #cart_block .cart-heading .cart-icon {
               	background: url(catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/img/icon-cart-kids.png) top left no-repeat;
               	border: none;
               	width: 23px;
               	height: 20px;
               	margin-top: 5px;
               	margin-right: 2px;
               	margin-left: 0px;
               }
               
                    #top #cart_block .cart-heading .cart-icon:before,
                    #top #cart_block .cart-heading .cart-icon:after {
                         display: none;
                    }
               <?php } else { ?>
               #top #cart_block .cart-heading .cart-icon {
               	border-color: <?php echo $theme_options->get( 'top_cart_icon_color' ); ?>;
               }
               
                    #top #cart_block .cart-heading .cart-icon:after {
                         border: 1px solid <?php echo $theme_options->get( 'top_cart_icon_color' ); ?>;
                         -webkit-box-shadow: inset 0px 0px 1px 0px <?php echo $theme_options->get( 'top_cart_icon_color' ); ?>;
                         -moz-box-shadow: inset 0px 0px 1px 0px <?php echo $theme_options->get( 'top_cart_icon_color' ); ?>;
                         box-shadow: inset 0px 0px 1px 0px <?php echo $theme_options->get( 'top_cart_icon_color' ); ?>;
                    }
                    
                    #top #cart_block .cart-heading .cart-icon:before {
                         border: 1px solid <?php echo $theme_options->get( 'top_cart_icon_color' ); ?>;
                    }
               <?php } ?>
          <?php } ?>
          
          <?php if($theme_options->get( 'top_cart_icon_hover_color' ) != '') { ?>
          #top #cart_block:hover .cart-heading .cart-icon {
          	border-color: <?php echo $theme_options->get( 'top_cart_icon_hover_color' ); ?>;
          }
          
               #top #cart_block:hover .cart-heading .cart-icon:after {
                    border: 1px solid <?php echo $theme_options->get( 'top_cart_icon_hover_color' ); ?>;
                    -webkit-box-shadow: inset 0px 0px 1px 0px <?php echo $theme_options->get( 'top_cart_icon_hover_color' ); ?>;
                    -moz-box-shadow: inset 0px 0px 1px 0px <?php echo $theme_options->get( 'top_cart_icon_hover_color' ); ?>;
                    box-shadow: inset 0px 0px 1px 0px <?php echo $theme_options->get( 'top_cart_icon_hover_color' ); ?>;
               }
               
               #top #cart_block:hover .cart-heading .cart-icon:before {
                    border: 1px solid <?php echo $theme_options->get( 'top_cart_icon_hover_color' ); ?>;
               }
          <?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_price' ) != '') { ?>
		#top #cart_block .cart-heading p {
			color: <?php echo $theme_options->get( 'top_cart_block_price' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_cart_block_price_hover' ) != '') { ?>
		#top #cart_block:hover .cart-heading p {
			color: <?php echo $theme_options->get( 'top_cart_block_price_hover' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_background_color' ) != '') { ?>
		#top .search_form input {
			background: <?php echo $theme_options->get( 'top_search_input_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_border_color' ) != '') { ?>
		#top .search_form input {
			border-color: <?php echo $theme_options->get( 'top_search_input_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_text_color' ) != '') { ?>
		#top .search_form input {
			color: <?php echo $theme_options->get( 'top_search_input_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_focus_background_color' ) != '') { ?>
     		<?php if($theme_options->get( 'top_search_input_focus_background_color' ) == '#dfeff4') { ?>
     		#top .search_form input:focus,
     		#top .search_form:hover input {
     			background: <?php echo $theme_options->get( 'top_search_input_focus_background_color' ); ?>;
     		}
     		<?php } else { ?>
     		#top .search_form input:focus {
     			background: <?php echo $theme_options->get( 'top_search_input_focus_background_color' ); ?>;
     		}
		<?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_focus_border_color' ) != '') { ?>
     		<?php if($theme_options->get( 'top_search_input_focus_border_color' ) == '#dfeff4') { ?>
     		#top .search_form input:focus,
     		#top .search_form:hover input {
     			border-color: <?php echo $theme_options->get( 'top_search_input_focus_border_color' ); ?>;
     		}
     		<?php } else { ?>
     		#top .search_form input:focus {
     			border-color: <?php echo $theme_options->get( 'top_search_input_focus_border_color' ); ?>;
     		}
     		<?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_input_focus_text_color' ) != '') { ?>
		#top .search_form input:focus {
			color: <?php echo $theme_options->get( 'top_search_input_focus_text_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_icon_color' ) != '') { ?>
     		<?php if($theme_options->get( 'top_search_icon_color' ) == '#38515c') { ?>
     		.search_form .button-search, .search_form .button-search2 {
     		     background: url(catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/img/icon-search-kids.png) 10px 12px no-repeat;
     		     width: 40px;
     		}
     		
     		     .search_form .button-search:before, .search_form .button-search2:before {
     		          display: none;
     		     }
     		<?php } else { ?>
     		.search_form .button-search, .search_form .button-search2 {
     			color: <?php echo $theme_options->get( 'top_search_icon_color' ); ?>;
     		}
     		<?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'top_search_icon_hover_color' ) != '') { ?>
		.search_form .button-search:hover, .search_form .button-search2:hover {
			color: <?php echo $theme_options->get( 'top_search_icon_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'top_background_gradient_top_color' ) != '' && $theme_options->get( 'top_background_gradient_bottom_color' ) != '') { ?>
		#top .background {
			background: <?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 0%, <?php echo $theme_options->get( 'top_background_gradient_top_color' ); ?> 0%, <?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'top_background_gradient_top_color' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_top_color' ); ?> 0%,<?php echo $theme_options->get( 'top_background_gradient_bottom_color' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_main_links' ) != '') { ?>
		ul.megamenu > li > a,
		.megamenuToogle-wrapper .container,
		#top .container .megamenu-wrapper ul.megamenu > li > a {
			color: <?php echo $theme_options->get( 'menu_main_links' ); ?>;
		}
		
		.megamenuToogle-wrapper .container > div span {
			background: <?php echo $theme_options->get( 'menu_main_links' ); ?>;
		}
		     <?php if($theme_options->get( 'menu_main_links' ) == '#d35f72') { ?>
		     @media (min-width:991px) {
     		     ul.megamenu li .sub-menu .content .static-menu a.main-menu {
     		          color: #d35f72;
     		     }
     		     
     		     ul.megamenu li .sub-menu .content .static-menu a.main-menu:hover {
     		          color: #3a525d;
     		     }
		     }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_main_links_hover' ) != '') { ?>
		ul.megamenu > li > a:hover,
		ul.megamenu > li:hover > a,
		#top .container .megamenu-wrapper ul.megamenu > li:hover > a,
		#top .container .megamenu-wrapper ul.megamenu > li.active > a {
			color: <?php echo $theme_options->get( 'menu_main_links_hover' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_home_icon_color' ) != '') { ?>
     		<?php if($theme_options->get( 'menu_home_icon_color' ) == '#339dd8') { ?>
     		#main #top .container .megamenu-wrapper ul.megamenu > li.home > a  > .fa-home {
     		     background: url(catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/img/icon-home-computers.png) top left no-repeat;
     		}
     		<?php } elseif ($theme_options->get( 'menu_home_icon_color' ) == '#fff' || $theme_options->get( 'menu_home_icon_color' ) == '#ffffff') { ?>
     		#main ul.megamenu > li.home > a  > .fa-home {
     		     background: url(catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/img/icon-home-furniture.png) top left no-repeat;
     		     display: block;
     		     width: 13px;
     		     height: 12px;
     		     margin-top: 4px;
     		}
     		
     		     #main ul.megamenu > li.home > a  > .fa-home:before {
     		          display: none;
     		     }
     		<?php } elseif ($theme_options->get( 'menu_home_icon_color' ) == '#262626') { ?>
     		#main #top .container .megamenu-wrapper ul.megamenu > li.home > a  > .fa-home {
     		     background: url(catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/img/icon-home-jewelry.png) top left no-repeat;
     		     margin-top: 7px;
     		}
     		<?php } elseif ($theme_options->get( 'menu_home_icon_color' ) == '#3a525d') { ?>
     		#main #top .container .megamenu-wrapper ul.megamenu > li.home > a  > .fa-home {
     		     background: url(catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/img/icon-home-kids.png) top left no-repeat;
     		     margin-left: 1px;
     		     margin-top: -4px;
     		     width: 23px;
     		     height: 21px;
     		}
     		<?php } else { ?>
     		ul.megamenu > li.home > a,
     		#top .container .megamenu-wrapper ul.megamenu > li.home > a {
     			color: <?php echo $theme_options->get( 'menu_home_icon_color' ); ?>;
     		}     
     		
     		     #top .container .megamenu-wrapper ul.megamenu > li > a > .fa-home {
     		          background: none;
     		          width: auto;
     		          height: auto;
     		          margin: 0px;
     		          padding-top: 2px;     
     		     }
     		     
     		     #top .container .megamenu-wrapper ul.megamenu > li > a > .fa-home:before {
     		          display: block;
     		     }
     		<?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_home_icon_hover_color' ) != '') { ?>
		ul.megamenu > li.home:hover > a,
		#top .container .megamenu-wrapper ul.megamenu > li.home:hover > a {
			color: <?php echo $theme_options->get( 'menu_home_icon_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_background_gradient_top' ) != '' && $theme_options->get( 'menu_background_gradient_bottom' ) != '') { ?>
		.megamenu-wrapper,
		.megamenuToogle-wrapper {
			background: <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_mobile_button_background_gradient_top' ) != '' && $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ) != '') { ?>
		#top .container .megamenuToogle-wrapper {
			background: <?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'menu_mobile_button_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'menu_mobile_button_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		
		     <?php if($theme_options->get( 'menu_mobile_button_background_gradient_top' ) != $theme_options->get( 'menu_mobile_button_background_gradient_bottom' )) { ?>
		     #top .container .megamenuToogle-wrapper {
		          border: none;
		          padding: 2px;
		     }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_mobile_button_border_color' ) != '') { ?>
		#top .container .megamenuToogle-wrapper {
			border-color: <?php echo $theme_options->get( 'menu_mobile_button_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'menu_mobile_button_text_color' ) != '') { ?>
		#top .container .megamenuToogle-wrapper .container > div span {
			background: <?php echo $theme_options->get( 'menu_mobile_button_text_color' ); ?>;
		}
		<?php } ?>
		
          <?php if($theme_options->get( 'slider_bullets_background_color' ) != '') { ?>
          .camera_wrap .owl-controls .owl-pagination span {
          	background: <?php echo $theme_options->get( 'slider_bullets_background_color' ); ?>;
          }
          <?php } ?>
          
          <?php if($theme_options->get( 'slider_bullet_active_background_color' ) != '') { ?>
          .camera_wrap .owl-controls .owl-pagination .active span {
          	background: <?php echo $theme_options->get( 'slider_bullet_active_background_color' ); ?>;
          }
          <?php } ?>
          
          <?php if($theme_options->get( 'slider_background_color' ) != '') { ?>
          .spinner {
          	background-color: <?php echo $theme_options->get( 'slider_background_color' ); ?>;
          }
          <?php } ?>
		
		<?php if($theme_options->get( 'sale_color_text' ) != '') { ?>
		.sale {
			color: <?php echo $theme_options->get( 'sale_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'sale_background_gradient_top' ) != '' && $theme_options->get( 'sale_background_gradient_bottom' ) != '') { ?>
		.sale {
			background: <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?>; /* Old browsers */
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'sale_background_gradient_bottom' ); ?> 99%); /* W3C */
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'ratings_background_color' ) != '') { ?>
		.rating i {
			color: <?php echo $theme_options->get( 'ratings_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'ratings_active_background_color' ) != '') { ?>
		.rating i.active {
			color: <?php echo $theme_options->get( 'ratings_active_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_color_text' )) { ?>
		.button,
		.btn {
			color: <?php echo $theme_options->get( 'buttons_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_background_gradient_top' ) != '' && $theme_options->get( 'buttons_background_gradient_bottom' ) != '') { ?>
		.button,
		.btn {
			background: <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'buttons_background_gradient_top' ) != $theme_options->get( 'buttons_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_background_gradient_bottom' ); ?> 99%); /* W3C */
			<?php } ?>
		}
		     <?php if($theme_options->get( 'buttons_background_gradient_top' ) != $theme_options->get( 'buttons_background_gradient_bottom' )) { ?>
		     .button,
		     .btn {
		          border: none;
		          padding-top: 6px;
		          padding-bottom: 5px;
		          padding-left: 20px;
		          padding-right: 20px;
		     }
		     <?php } ?>
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_border_color' )) { ?>
		.button,
		.btn {
			border-color: <?php echo $theme_options->get( 'buttons_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_hover_color_text' )) { ?>
		.button:hover,
		.btn:hover {
			color: <?php echo $theme_options->get( 'buttons_hover_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_hover_background_gradient_top' ) != '' && $theme_options->get( 'buttons_hover_background_gradient_bottom' ) != '') { ?>
		.button:hover,
		.btn:hover {
			background: <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'buttons_hover_background_gradient_top' ) != $theme_options->get( 'buttons_hover_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'buttons_hover_background_gradient_bottom' ); ?> 99%); /* W3C */
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'buttons_hover_border_color' )) { ?>
		.button:hover,
		.btn:hover {
			border-color: <?php echo $theme_options->get( 'buttons_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_color_text' )) { ?>
		.input-group-btn .btn,
		table .btn,
		.pull-right .btn,
		.product-info .cart .add-to-cart .button,
		.button-type-2 {
			color: <?php echo $theme_options->get( 'second_buttons_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_background_gradient_top' ) != '' && $theme_options->get( 'second_buttons_background_gradient_bottom' ) != '') { ?>
		.input-group-btn .btn,
		table .btn,
		.pull-right .btn,
		.product-info .cart .add-to-cart .button,
		.button-type-2 {
			background: <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'second_buttons_background_gradient_top' ) != $theme_options->get( 'second_buttons_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_background_gradient_bottom' ); ?> 99%); /* W3C */
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_border_color' )) { ?>
		.input-group-btn .btn,
		table .btn,
		.pull-right .btn,
		.product-info .cart .add-to-cart .button,
		.button-type-2 {
			border-color: <?php echo $theme_options->get( 'second_buttons_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_hover_color_text' )) { ?>
		.input-group-btn .btn:hover,
		table .btn:hover,
		.pull-right .btn:hover,
		.product-info .cart .add-to-cart .button:hover,
		.button-type-2:hover {
			color: <?php echo $theme_options->get( 'second_buttons_hover_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_hover_background_gradient_top' ) != '' && $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ) != '') { ?>
		.input-group-btn .btn:hover,
		table .btn:hover,
		.pull-right .btn:hover,
		.product-info .cart .add-to-cart .button:hover,
		.button-type-2:hover {
			background: <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'second_buttons_hover_background_gradient_top' ) != $theme_options->get( 'second_buttons_hover_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'second_buttons_hover_background_gradient_bottom' ); ?> 99%); /* W3C */
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'second_buttons_hover_border_color' )) { ?>
		.input-group-btn .btn:hover,
		table .btn:hover,
		.pull-right .btn:hover,
		.product-info .cart .add-to-cart .button:hover,
		.button-type-2:hover {
			border-color: <?php echo $theme_options->get( 'second_buttons_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'carousel_buttons_arrow_color' )) { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev,
		.camera_wrap .owl-controls .owl-buttons .owl-next,
		.box > .prev, 
		.box > .next,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev,
		.product-info .thumbnails-carousel .owl-buttons .owl-next,
		.carousel-brands .owl-prev,
		.carousel-brands .owl-next,
		.tab-content .prev-button, 
		.tab-content .next-button {
			color: <?php echo $theme_options->get( 'carousel_buttons_arrow_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'carousel_buttons_border_color' )) { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev,
		.camera_wrap .owl-controls .owl-buttons .owl-next,
		.box > .prev, 
		.box > .next,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev,
		.product-info .thumbnails-carousel .owl-buttons .owl-next,
		.carousel-brands .owl-prev,
		.carousel-brands .owl-next,
		.tab-content .prev-button, 
		.tab-content .next-button {
			border-color: <?php echo $theme_options->get( 'carousel_buttons_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'carousel_buttons_background_color' )) { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev,
		.camera_wrap .owl-controls .owl-buttons .owl-next,
		.box > .prev, 
		.box > .next,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev,
		.product-info .thumbnails-carousel .owl-buttons .owl-next,
		.carousel-brands .owl-prev,
		.carousel-brands .owl-next,
		.tab-content .prev-button, 
		.tab-content .next-button {
			background: <?php echo $theme_options->get( 'carousel_buttons_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'carousel_buttons_hover_arrow_color' )) { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev:hover,
		.camera_wrap .owl-controls .owl-buttons .owl-next:hover,
		.box > .prev:hover, 
		.box > .next:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
		.carousel-brands .owl-prev:hover,
		.carousel-brands .owl-next:hover,
		.tab-content .prev-button:hover, 
		.tab-content .next-button:hover {
			color: <?php echo $theme_options->get( 'carousel_buttons_hover_arrow_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'carousel_buttons_hover_border_color' )) { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev:hover,
		.camera_wrap .owl-controls .owl-buttons .owl-next:hover,
		.box > .prev:hover, 
		.box > .next:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
		.carousel-brands .owl-prev:hover,
		.carousel-brands .owl-next:hover,
		.tab-content .prev-button:hover, 
		.tab-content .next-button:hover {
			border-color: <?php echo $theme_options->get( 'carousel_buttons_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'carousel_buttons_hover_background_color' )) { ?>
		.camera_wrap .owl-controls .owl-buttons .owl-prev:hover,
		.camera_wrap .owl-controls .owl-buttons .owl-next:hover,
		.box > .prev:hover, 
		.box > .next:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-prev:hover,
		.product-info .thumbnails-carousel .owl-buttons .owl-next:hover,
		.carousel-brands .owl-prev:hover,
		.carousel-brands .owl-next:hover,
		.tab-content .prev-button:hover, 
		.tab-content .next-button:hover {
			background-color: <?php echo $theme_options->get( 'carousel_buttons_hover_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_text' ) != '') { ?>
		.custom-footer .pattern,
		.custom-footer .pattern a,
		ul.contact-us li,
		.box-contact ul li p {
			color: <?php echo $theme_options->get( 'customfooter_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_heading' ) != '') { ?>
		.box-contact h3,
		.custom-footer h4 {
			color: <?php echo $theme_options->get( 'customfooter_color_heading' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_icon_contact_us' ) != '') { ?>
		ul.contact-us li i,
		.box-contact ul li i {
			color: <?php echo $theme_options->get( 'customfooter_color_icon_contact_us' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_color_icon_twitter' ) != '') { ?>
		.tweets li:before {
			color: <?php echo $theme_options->get( 'customfooter_color_icon_twitter' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_heading_in_about_us_color' ) != '') { ?>
		.customfooter-about-us h5 {
			color: <?php echo $theme_options->get( 'customfooter_heading_in_about_us_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_social_icons_color' ) != '') { ?>
		.customfooter-about-us ul.social-icons li a {
			color: <?php echo $theme_options->get( 'customfooter_social_icons_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_social_icons_hover_color' ) != '') { ?>
		.customfooter-about-us ul.social-icons li a:hover {
			color: <?php echo $theme_options->get( 'customfooter_social_icons_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'customfooter_background_color' ) != '') { ?>
		.custom-footer .background, .standard-body .custom-footer .background,
		.box-contact {
			background: <?php echo $theme_options->get( 'customfooter_background_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_cf_color_text' )) { ?>
		#main .button-footer {
			color: <?php echo $theme_options->get( 'button_us_cf_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_cf_background_gradient_top' ) != '' && $theme_options->get( 'button_us_cf_background_gradient_bottom' ) != '') { ?>
		#main .button-footer {
			background: <?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'button_us_cf_background_gradient_top' ) != $theme_options->get( 'button_us_cf_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'button_us_cf_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_background_gradient_bottom' ); ?> 99%); /* W3C */
			border: none;
			padding-top: 6px;
			padding-bottom: 5px;
			padding-left: 20px;
			padding-right: 20px;
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_cf_border_color' )) { ?>
		#main .button-footer {
			border-color: <?php echo $theme_options->get( 'button_us_cf_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_cf_hover_color_text' )) { ?>
		#main .button-footer:hover {
			color: <?php echo $theme_options->get( 'button_us_cf_hover_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_cf_hover_background_gradient_top' ) != '' && $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ) != '') { ?>
		#main .button-footer:hover {
			background: <?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'button_us_cf_hover_background_gradient_top' ) != $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* W3C */
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_cf_hover_border_color' )) { ?>
		#main .button-footer:hover {
			border-color: <?php echo $theme_options->get( 'button_us_cf_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_contact_us_cf_color_text' )) { ?>
		#main .button-footer-type-2 {
			color: <?php echo $theme_options->get( 'button_contact_us_cf_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_contact_us_cf_background_gradient_top' ) != '' && $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ) != '') { ?>
		#main .button-footer-type-2 {
			background: <?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'button_contact_us_cf_background_gradient_top' ) != $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_background_gradient_bottom' ); ?> 99%); /* W3C */
			border: none;
			padding-top: 6px;
			padding-bottom: 5px;
			padding-left: 20px;
			padding-right: 20px;
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_contact_us_cf_border_color' )) { ?>
		#main .button-footer-type-2 {
			border-color: <?php echo $theme_options->get( 'button_contact_us_cf_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_contact_us_cf_hover_color_text' )) { ?>
		#main .button-footer-type-2:hover {
			color: <?php echo $theme_options->get( 'button_contact_us_cf_hover_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_contact_us_cf_hover_background_gradient_top' ) != '' && $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ) != '') { ?>
		#main .button-footer-type-2:hover {
			background: <?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'button_contact_us_cf_hover_background_gradient_top' ) != $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_contact_us_cf_hover_background_gradient_bottom' ); ?> 99%); /* W3C */
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_contact_us_cf_hover_border_color' )) { ?>
		#main .button-footer-type-2:hover {
			border-color: <?php echo $theme_options->get( 'button_contact_us_cf_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_f_color_text' )) { ?>
		#main .footer-about-us .button-footer {
			color: <?php echo $theme_options->get( 'button_us_f_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_f_background_gradient_top' ) != '' && $theme_options->get( 'button_us_f_background_gradient_bottom' ) != '') { ?>
		#main .footer-about-us .button-footer {
			background: <?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'button_us_f_background_gradient_top' ) != $theme_options->get( 'button_us_f_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'button_us_f_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_background_gradient_bottom' ); ?> 99%); /* W3C */
			border: none;
			padding-top: 6px;
			padding-bottom: 5px;
			padding-left: 20px;
			padding-right: 20px;
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_f_border_color' )) { ?>
		#main .footer-about-us .button-footer {
			border-color: <?php echo $theme_options->get( 'button_us_f_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_f_hover_color_text' )) { ?>
		#main .footer-about-us .button-footer:hover {
			color: <?php echo $theme_options->get( 'button_us_f_hover_color_text' ); ?> !important;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_f_hover_background_gradient_top' ) != '' && $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ) != '') { ?>
		#main .footer-about-us .button-footer:hover {
			background: <?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?>; /* Old browsers */
			<?php if($theme_options->get( 'button_us_f_hover_background_gradient_top' ) != $theme_options->get( 'button_us_f_hover_background_gradient_bottom' )) { ?>
			background: -moz-linear-gradient(top, <?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 0%, <?php echo $theme_options->get( 'button_us_f_hover_background_gradient_top' ); ?> 0%, <?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 99%); /* FF3.6+ */
			background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?>), color-stop(0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_top' ); ?>), color-stop(99%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?>)); /* Chrome,Safari4+ */
			background: -webkit-linear-gradient(top, <?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 99%); /* Chrome10+,Safari5.1+ */
			background: -o-linear-gradient(top, <?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 99%); /* Opera 11.10+ */
			background: -ms-linear-gradient(top, <?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 99%); /* IE10+ */
			background: linear-gradient(to bottom, <?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_top' ); ?> 0%,<?php echo $theme_options->get( 'button_us_f_hover_background_gradient_bottom' ); ?> 99%); /* W3C */
			<?php } ?>
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'button_us_f_hover_border_color' )) { ?>
		#main .footer-about-us .button-footer:hover {
			border-color: <?php echo $theme_options->get( 'button_us_f_hover_border_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_text' ) != '') { ?>
		.footer .pattern,
		.copyright .pattern {
			color: <?php echo $theme_options->get( 'footer_color_text' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_links_color' ) != '') { ?>
		.footer .pattern a,
		.copyright .pattern a {
			color: <?php echo $theme_options->get( 'footer_links_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_links_hover_color' ) != '') { ?>
		.footer .pattern a:hover,
		.copyright .pattern a:hover {
			color: <?php echo $theme_options->get( 'footer_links_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_social_icons_color' ) != '') { ?>
		.footer-about-us ul.social-icons li a {
			color: <?php echo $theme_options->get( 'footer_social_icons_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_social_icons_hover_color' ) != '') { ?>
		.footer-about-us ul.social-icons li a:hover {
			color: <?php echo $theme_options->get( 'footer_social_icons_hover_color' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_heading' ) != '') { ?>
		.footer h4 {
			color: <?php echo $theme_options->get( 'footer_color_heading' ); ?>;
		}
		<?php } ?>
		
		<?php if($theme_options->get( 'footer_color_heading_in_about_us' ) != '') { ?>
		.footer-about-us h5 {
			color: <?php echo $theme_options->get( 'footer_color_heading_in_about_us' ); ?>;
		}
		<?php } ?>

		<?php if($theme_options->get( 'footer_background_color' ) != '') { ?>
		.footer .background,
		.standard-body .footer .background,
		.copyright .background,
		.standard-body .copyright .background {
			background: <?php echo $theme_options->get( 'footer_background_color' ); ?>;
		}
		
		     <?php if($theme_options->get( 'footer_background_color' ) == '#fff' || $theme_options->get( 'footer_background_color' ) == '#ffffff') { ?>
		     .copyright .pattern {
		          background: url(catalog/view/theme/<?php echo $config->get( 'config_template' ); ?>/img/patterns/footer/02.png) top center repeat-x;
		     }
		     <?php } ?>
		<?php } ?>
	<?php } ?>
			
	<?php if($theme_options->get( 'font_status' ) == '1') { ?>
		body {
			font-size: <?php echo $theme_options->get( 'body_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'body_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'body_font' ) != '' && $theme_options->get( 'body_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'body_font' ); ?>;
			<?php } ?>
		}
		
		#top .header-links li a,
		#top .dropdown > a {
			font-size: <?php echo $theme_options->get( 'top_menu_font_px' ); ?>px;
			<?php if( $theme_options->get( 'top_menu_font' ) != '' && $theme_options->get( 'top_menu_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'top_menu_font' ); ?>;
			<?php } ?>
		}
		
		<?php if( $theme_options->get( 'body_font' ) == 'Lato') { ?>
		#main .box-category ul li .head a {
		     font-size: 16px;
		}
		<?php } ?>
		
		<?php if( $theme_options->get( 'body_font' ) == 'Playfair Display') { ?>
		#top .header-links,
		#top .dropdown,
		.banner-with-zoom .banner-content h3,
		.banner-with-zoom .banner-content h4,
		.banner-with-zoom .banner-content h5,
		.box-features,
		.box-contact ul li p,
		.sale,
		.product-grid .product .price,
		.product-list .price,
		.compare-info .price-new,
		.cart-total table tr td:last-child,
		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		ul.megamenu > li > a,
		ul.megamenu li .sub-menu .content .static-menu a.main-menu,
		.megamenuToogle-wrapper .container,
		ul.megamenu li .product .price {
			-webkit-font-smoothing: subpixel-antialiased;
			-moz-osx-font-smoothing: unset;
		}
		
		#main .tp-simpleresponsive .caption, #main .tp-simpleresponsive .tp-caption {
		     -webkit-font-smoothing: subpixel-antialiased !important;
		}
		
		ul.megamenu li .sub-menu .content .static-menu a.main-menu {
		     font-weight: 800 !important;
		}
		<?php } ?>
	
		.sale,
		.product-filter,
		.product-info .radio-type-button2 span,
		.product-info .cart .add-to-cart p,
		.product-info .cart .links a,
		.product-info .review > div,
		.product-info .review a,
		div.pagination-results .text-right,
		div.pagination-results ul li,
		ul.box-filter > li > span {
			font-size: <?php echo $theme_options->get( 'body_font_smaller_px' ); ?>px;
		}
		
		.ui-autocomplete li a {
		     font-size: <?php echo $theme_options->get( 'body_font_smaller_px' ); ?>px !important;
		}
		
		ul.megamenu > li > a strong {
			font-size: <?php echo $theme_options->get( 'categories_bar_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar' ) != '' && $theme_options->get( 'categories_bar' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'categories_bar' ) == 'Amatic SC' ) { ?>
			line-height: 0.5;
			<?php } ?>
			<?php if( $theme_options->get( 'categories_bar_transform' ) == '1') { ?>
			text-transform: none;
			<?php } ?>
		}
		
		<?php if( $theme_options->get( 'categories_bar' ) == 'Amatic SC' ) { ?>
		#main ul.megamenu li .sub-menu .content .static-menu a.main-menu {
		     font-family: Amatic SC;
		     font-weight: bold;
		}
		
		     @media (max-width: 991px) {
		          .responsive ul.megamenu > li > a strong {
		               line-height: 1;
		          }
		     }
		<?php } ?>
		
		.megamenuToogle-wrapper .container {
			font-weight: <?php echo $theme_options->get( 'categories_bar_weight' )*100; ?>;
			<?php if( $theme_options->get( 'categories_bar_font' ) != '' && $theme_options->get( 'categories_bar_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'categories_bar_font' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'categories_bar_transform' ) == '1') { ?>
			text-transform: none;
			<?php } ?>
		}
		
		ul.megamenu li .sub-menu .content .static-menu a.main-menu,
		ul.megamenu li .sub-menu .content .hover-menu .menu ul a,
		#top form .dropdown .dropdown-menu a,
		.box-category-wall-2 .categories > ul > li ul a,
		.box-category-wall-2 .categories > ul > li > a {
			font-weight: <?php echo $theme_options->get( 'submenu_main_links_weight' )*100; ?>;
			<?php if( $theme_options->get( 'submenu_main_links' ) != '' && $theme_options->get( 'submenu_main_links' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'submenu_main_links' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'submenu_main_links_transform' ) == '1') { ?>
			text-transform: none;
			<?php } ?>
		}
		
		body .ui-autocomplete li a {
		     font-weight: <?php echo $theme_options->get( 'submenu_main_links_weight' )*100; ?> !important;
		     <?php if( $theme_options->get( 'submenu_main_links' ) != '' && $theme_options->get( 'submenu_main_links' ) != 'standard' ) { ?>
		     font-family: <?php echo $theme_options->get( 'submenu_main_links' ); ?> !important;
		     <?php } ?>
		     <?php if( $theme_options->get( 'submenu_main_links_transform' ) == '1') { ?>
		     text-transform: none !important;
		     <?php } ?>
		     font-size: <?php echo $theme_options->get( 'submenu_main_links_smaller_px' ); ?>px !important;
		}
		
		@media (max-width: 767px) {
		     .responsive ul.megamenu li .sub-menu .content .hover-menu .menu ul li a,
		     .responsive ul.megamenu li .sub-menu .content .static-menu .menu ul li a {
		     	font-weight: <?php echo $theme_options->get( 'submenu_main_links_weight' )*100; ?> !important;
		     	<?php if( $theme_options->get( 'submenu_main_links' ) != '' && $theme_options->get( 'submenu_main_links' ) != 'standard' ) { ?>
		     	font-family: <?php echo $theme_options->get( 'submenu_main_links' ); ?> !important;
		     	<?php } ?>
		     	<?php if( $theme_options->get( 'submenu_main_links_transform' ) == '1') { ?>
		     	text-transform: none !important;
		     	<?php } ?>
		     	font-size: <?php echo $theme_options->get( 'submenu_main_links_smaller_px' ); ?>px !important;
		     }
		}
		
		ul.megamenu li .sub-menu .content .static-menu a.main-menu,
		.box-category-wall-2 .categories > ul > li > a {
		     font-size: <?php echo $theme_options->get( 'submenu_main_links_px' ); ?>px;
		}
		
		ul.megamenu li .sub-menu .content .hover-menu .menu ul a,
		#top form .dropdown .dropdown-menu a,
		.box-category-wall-2 .categories > ul > li ul a {
		     font-size: <?php echo $theme_options->get( 'submenu_main_links_smaller_px' ); ?>px;
		}
		
		.box .box-heading,
		.center-column h1, 
		.center-column h2, 
		.center-column h3, 
		.center-column h4, 
		.center-column h5, 
		.center-column h6,
		.filter-product .filter-tabs ul > li > a,
		.htabs a,
		h1, h2, h3, h4, h5, h6,
		ul.megamenu li h3,
		#main .artblock .name {
			font-size: <?php echo $theme_options->get( 'headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'headlines' ) != '' && $theme_options->get( 'headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'headlines' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'headlines_transform' ) == '1') { ?>
			text-transform: none;
			<?php } ?>
		}
		
		<?php if( $theme_options->get( 'headlines' ) == 'Amatic SC' ) { ?>
		.center-column .background .panel-heading h4,
		.col-sm-3 .box-blog-latest h4, .col-sm-4 .box-blog-latest h4, .col-md-3 .box-blog-latest h4, .col-md-4 .box-blog-latest h4 {
		     font-size: 18px !important;
		}
		
		     .center-column .panel-heading h4 i {
		          padding-left: 5px;
		     }
		     
		.center-column .panel-heading h4,
		.product-info .options h2,
		.modal h4,
		.product-info .product-name {
		     font-size: 25px;
		}
		<?php } ?>
		
		.footer h4,
		.custom-footer h4,
		.box-contact h3 {
			font-size: <?php echo $theme_options->get( 'footer_headlines_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'footer_headlines_weight' )*100; ?>;
			<?php if( $theme_options->get( 'footer_headlines' ) != '' && $theme_options->get( 'footer_headlines' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'footer_headlines' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'footer_headlines_transform' ) == '1') { ?>
			text-transform: none;
			<?php } ?>
		}
		
		.breadcrumb .container h1 {
			font-size: <?php echo $theme_options->get( 'page_name_px' ); ?>px;
			line-height: <?php echo $theme_options->get( 'page_name_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'page_name_weight' )*100; ?>;
			<?php if( $theme_options->get( 'page_name' ) != '' && $theme_options->get( 'page_name' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'page_name' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'page_name_transform' ) == '1') { ?>
			text-transform: none;
			<?php } ?>
		}
		
		.button, 
		.btn {
			font-size: <?php echo $theme_options->get( 'button_font_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'button_font_weight' )*100; ?>;
			<?php if( $theme_options->get( 'button_font' ) != '' && $theme_options->get( 'button_font' ) != 'standard' ) { ?>
			font-family: <?php echo $theme_options->get( 'button_font' ); ?>;
			<?php } ?>
			<?php if( $theme_options->get( 'button_font_transform' ) == '1') { ?>
			text-transform: none;
			<?php } ?>
			<?php if( $theme_options->get( 'button_font' ) == 'Lato' ) { ?>
			-webkit-font-smoothing: subpixel-antialiased;
			-moz-osx-font-smoothing: unset;
			<?php } ?>
		}
		
		<?php if( $theme_options->get( 'custom_price' ) != '' && $theme_options->get( 'custom_price' ) != 'standard' ) { ?>
		.product-grid .product .price, 
		.hover-product .price, 
		.product-list .actions > div .price, 
		.product-info .price .price-new,
		ul.megamenu li .product .price,
		#top #cart_block .cart-heading p,
		.product-list .price,
		.mini-cart-info td.total,
		.mini-cart-total td:last-child,
		.cart-total table tr td:last-child,
		.product-info .price .price-old,
		.box-special-products .product .left .price .price-old,
		.box-special-products .product .left .price {
			font-family: <?php echo $theme_options->get( 'custom_price' ); ?>;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		<?php } ?>
		
		.product-grid .product .price,
		.hover-product .price,
		ul.megamenu li .product .price,
		.box-special-products .product .left .price {
			font-size: <?php echo $theme_options->get( 'custom_price_px_small' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		<?php if( $theme_options->get( 'custom_price' ) == 'Amatic SC' ) { ?>
		#top #cart_block .cart-heading p {
			font-size: <?php echo $theme_options->get( 'custom_price_px_small' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
			line-height: 0.6;
		}
		
		.mini-cart-info td.total,
		.mini-cart-total td:last-child,
		.cart-total table tr td:last-child {
		     font-family: Lato;
		     font-weight: 700;
		     font-size: 14px !important;
		}
		<?php } ?>
		
		.product-info .price .price-new {
			font-size: <?php echo $theme_options->get( 'custom_price_px' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.product-list .price,
		.cart-total table tr td:last-child {
			font-size: <?php echo $theme_options->get( 'custom_price_px_medium' ); ?>px;
			font-weight: <?php echo $theme_options->get( 'custom_price_weight' )*100; ?>;
		}
		
		.price-old,
		.compare-info .price-old,
		.product-grid .product .price .price-old,
		.product-list .price .price-old,
		.box-special-products .product .left .price .price-old {
			font-size: <?php echo $theme_options->get( 'custom_price_px_old_price' ); ?>px;
			font-weight: 400;
		}
	<?php } ?>

     <?php if($theme_options->get( 'background_status' ) == 1) { ?>
     	<?php if($theme_options->get( 'body_background_background' ) == '1') { ?> 
     	body { background-image:none !important; }
     	<?php } ?>
     	<?php if($theme_options->get( 'body_background_background' ) == '2') { ?> 
     	body { background-image:url(image/<?php echo $theme_options->get( 'body_background' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
     	<?php } ?>
     	<?php if($theme_options->get( 'body_background_background' ) == '3') { ?> 
     	body { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'body_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'body_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'body_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'body_background_attachment' ); ?> !important; }
     	<?php } ?>
     	
     	<?php if($theme_options->get( 'header_background_background' ) == '1') { ?> 
     	#top .background > .pattern { background-image:none !important; }
     	<?php } ?>
     	<?php if($theme_options->get( 'header_background_background' ) == '2') { ?> 
     	#top .background > .pattern { background-image:url(image/<?php echo $theme_options->get( 'header_background' ); ?>);background-position:<?php echo $theme_options->get( 'header_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'header_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'header_background_attachment' ); ?> !important; }
     	<?php } ?>
     	<?php if($theme_options->get( 'header_background_background' ) == '3') { ?> 
     	#top .background > .pattern { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'header_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'header_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'header_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'header_background_attachment' ); ?> !important; }
     	<?php } ?>
     	
     	<?php if($theme_options->get( 'customfooter_background_background' ) == '1') { ?> 
     	.custom-footer .pattern { background-image:none !important; }
     	<?php } ?>
     	<?php if($theme_options->get( 'customfooter_background_background' ) == '2') { ?> 
     	.custom-footer .pattern { background-image:url(image/<?php echo $theme_options->get( 'customfooter_background' ); ?>);background-position:<?php echo $theme_options->get( 'customfooter_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'customfooter_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'customfooter_background_attachment' ); ?> !important; }
     	<?php } ?>
     	<?php if($theme_options->get( 'customfooter_background_background' ) == '3') { ?> 
     	.custom-footer .pattern { background-image:url(image/subtle_patterns/<?php echo $theme_options->get( 'customfooter_background_subtle_patterns' ); ?>);background-position:<?php echo $theme_options->get( 'customfooter_background_position' ); ?>;background-repeat:<?php echo $theme_options->get( 'customfooter_background_repeat' ); ?> !important;background-attachment:<?php echo $theme_options->get( 'customfooter_background_attachment' ); ?> !important; }
     	<?php } ?>
	<?php } ?>
</style>
