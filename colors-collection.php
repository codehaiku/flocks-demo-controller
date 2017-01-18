<?php
/**
 * Returns all the background color;
 * 
 * @return [type] [description]
 */
function fdc_background_color_collecton() {

	// General WordPress
	$selectors = ".background-primary, #header-menu-toggle:hover .menu-bar, #header-menu-toggle.active:hover .menu-bar, .nav-links .nav-previous a:hover, .nav-links .nav-next a:hover, .entry-footer .edit-link a, #colophon.site-footer, .edit-link a, button, input[type=button], input[type=submit], .button, .subscription-toggle, #main-menu ul#main-menu-ul li.menu-item > ul.sub-menu li.menu-item a:hover, .error-404.not-found .page-header .not-found-btn, .error-404.not-found .page-content .searchform label .searchsubmit, .dunhakdis-headings:after, article table th, #user-navigation ul#nav-user-action-notification > li:before, .widget.widget_tag_cloud > .tagcloud a:hover, .widget .widget-title:after, .custom .tp-bullet:hover, .custom .tp-bullet.selected, .gears-button.solid.primary, .gears-bp-groups-carousel-2 .member-count, .gears-recent-posts .gears-article-recent-posts:hover .entry-post-format-icon, body .vc_btn3.vc_btn3-color-blue, body .vc_btn3.vc_btn3-color-blue.vc_btn3-style-flat, .flocks-vc-row-container .vc_toggle_active.vc_toggle_size_md.vc_toggle_simple .vc_toggle_icon, .gears-pricing-table.popular .gears-pricing-table-price-label, span.gears-dropcap-letter.circular,";

	// Visual Composer
	$selectors .= ".background-primary, .flocks-vc-row-container .vc_tta.vc_tta-tabs.vc_tta-style-flat:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-top .vc_tta-tab.vc_active > a, .flocks-vc-row-container .vc_tta.vc_tta-tabs.vc_tta-style-flat:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-bottom .vc_tta-tab.vc_active > a, .flocks-vc-row-container .vc_tta.vc_tta-tabs.vc_tta-style-flat .vc_tta-tab:hover > a, .flocks-vc-row-container .vc_tta.vc_tta-tabs.vc_tta-style-flat:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-left .vc_tta-tab.vc_active > a, .flocks-vc-row-container .vc_tta.vc_tta-tabs.vc_tta-style-flat:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill).vc_tta-tabs-position-right .vc_tta-tab.vc_active > a, .flocks-vc-row-container .vc_tta.vc_tta-accordion.vc_tta-style-classic .vc_tta-panel-title > a:before, .flocks-vc-row-container .vc_tta.vc_tta-accordion.vc_tta-style-classic .vc_tta-panel-title > a:after, .flocks-vc-row-container .vc_tta.vc_tta-accordion.vc_tta-style-modern:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill) .vc_tta-panel.vc_active .vc_tta-panel-heading, .flocks-vc-row-container .vc_tta.vc_tta-accordion.vc_tta-style-modern .vc_tta-panel:hover .vc_tta-panel-heading, .flocks-vc-row-container .vc_tta.vc_tta-accordion.vc_tta-style-flat:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill) .vc_tta-panel.vc_active .vc_tta-panel-heading, .flocks-vc-row-container .vc_tta.vc_tta-accordion.vc_tta-style-flat:not([class*=vc_tta-gap]):not(.vc_tta-o-no-fill) .vc_tta-panel:hover .vc_tta-panel-heading, .flocks-vc-row-container .vc_images_carousel .vc_carousel-indicators li.vc_active,";

	// BuddyPress
	$selectors .=  ".background-primary, .bp_button, .buddypress.groups .dir-form .list-style-container ul li#group-create-nav a, .buddypress.groups .bp-objects-loop li .action .meta, .buddypress .bp-objects-loop li .generic-button a, .buddypress .bp-objects-loop li .action .button, .bp-user #item-body .groups.mygroups #group-create-nav a, .single-item.groups .bp-objects-loop.type-grid .generic-button a, .buddypress.members .bp-objects-loop.members-list li .item .item-title .item-update .activityreadmore a, .buddypress .pagination .pagination-links .page-numbers.current, .buddypress .pagination .pagination-links .page-numbers:hover, .buddypress .item-list-tabs ul li a span, .buddypress ul#activity-stream .load-newest a, .buddypress ul#activity-stream .load-more a, .bp-user #item-body .bp-objects-loop.members-list li .item .item-title .item-update .activityreadmore a, .bp-user #item-body .pagination .pagination-links .page-numbers.current, .bp-user #item-body .pagination .pagination-links .page-numbers:hover, #cv-cover-photo #cv-cover-photo-elements #item-buttons a, .single-item.groups #group-settings-form #request-list li .action .generic-button a, .widget_bp_groups_widget .item-options a.selected, .widget_bp_core_friends_widget .item-options a.selected, .widget_bp_core_members_widget .item-options a.selected, .buddypress.register #signup_form #profile-details-section h4:after, .buddypress.register #signup_form #basic-details-section h4:after,";

	// Cart
	$selectors .= "#user-navigation ul li a .notification-count, #user-navigation ul li a .cart-count";

	return $selectors;
}


function fdc_color_collection() {


	$selectors = ".color-primary, .header-style-3 #main-menu ul#main-menu-ul li.menu-item a:hover, .header-style-4 #main-menu ul#main-menu-ul li.menu-item a:hover, .header-style-3 #main-menu ul#main-menu-ul li.menu-item.menu-item-has-children > a:hover:after, .header-style-4 #main-menu ul#main-menu-ul li.menu-item.menu-item-has-children > a:hover:after, .header-style-3.logged-out #main-menu .col-lg-2.col-md-2 #user-navigation ul li:first-of-type a:hover, .header-style-3.logged-out #main-menu .col-lg-2.col-md-2 #user-navigation ul li:nth-child(2) a:hover, .header-style-4.logged-out #main-menu .col-lg-2.col-md-2 #user-navigation ul li:first-of-type a:hover, .header-style-4.logged-out #main-menu .col-lg-2.col-md-2 #user-navigation ul li:nth-child(2) a:hover, #comments h2.comments-title p span, #comments .comment-meta .comemnt-date:hover, #footer-style-3-social-media-list .item a:hover, #main-menu ul#main-menu-ul li.menu-item.menu-item-has-children > a:after, .error-404.not-found .page-header .page-title, .error-404.not-found .page-header h3, .error-404.not-found .page-header p, .single #flocks-share-count, a, a:focus, a:hover, #user-navigation ul#nav-user-action-notification li a:hover, #user-navigation ul#nav-user-action-dropdown li a:hover, .gears-testimonial-carousel .gears-testimonials-item .gears-testimonials-author .gears-testimonial-author-name, #bbpress-forums div.bbp-template-notice a, #bbpress-forums div.bbp-template-notice.info a, #bbpress-forums div.bbp-template-notice.info:before, .gears-login-wrap .login-password label:after, .gears-login-wrap .login-username label:after,";

	$selectors .= ".color-primary, .woocommerce ul.products li.product a:hover, .woocommerce ul.products li.product .price, .woocommerce .widget_price_filter .price_slider_amount .button, .woocommerce-thankyou-order-received, .woocommerce .woocommerce-info:before";

	return $selectors;

}