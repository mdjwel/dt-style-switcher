<?php
global $wp;
// Menu Width
$demo_menu_width = isset($_GET['menu']) ? $_GET['menu'] : '';
$is_boxed = $demo_menu_width == 'boxed' ? 'active' : '';
$is_wide = $demo_menu_width == 'wide' ? 'active' : '';
$is_full_width = $demo_menu_width == 'full_width' ? 'active' : '';

// Menu Alignment
$demo_menu_align = isset($_GET['menu_align']) ? $_GET['menu_align'] : '';
$is_menu_center = $demo_menu_align == 'menu_center' ? 'active' : '';
$is_menu_left = $demo_menu_align == 'menu_left' ? 'active' : '';
$is_menu_right = $demo_menu_align == 'menu_right' ? 'active' : '';
?>
<div class="color_switcher_zone">

    <div class="switZone_title">
        <a href="#" class="dt_open_settings settingBtn setting" id="age">
            <i class="icon_cog" aria-hidden="true"></i>
        </a>
        <a href="http://docs.droitthemes.com/docs/karfixr-wordpress-theme/" target="blank" class="doc settingBtn setting">
            <i class="icon_document_alt" aria-hidden="true"></i>
        </a>
        <a href="https://droitthemes.ticksy.com" target="blank" class="doc settingBtn life">
            <i class="icon_lifesaver" aria-hidden="true"></i>
        </a>
        <!--<a href="#" id="age2" class="purches" title="Purchase"><i class="icon_cart_alt" aria-hidden="true"></i></a>-->
        <div class="clearfix"></div>
    </div>
    <div class="dtss_switcher_inner_wrapper">
        <div class="color_switcher_inner">
            <a href="https://is.gd/7dI0D7" target="_blank" class="button-pr"> <span class="ti-shopping-cart"></span> Purchase Saasland </a>
            <div class="header_switcher_style">
                <div class="switcher-title">
                    <h5 class="no-border"> <?php esc_html_e('Menu Width', 'dt-style-switcher') ?> </h5>
                    <div class="dtss_btns dtss_row">
                        <a href="<?php echo esc_url(home_url($wp->request)) ?>?menu=boxed" class="dtss_col_3 dtss_btn dtss_btn_outline <?php echo esc_attr($is_boxed); ?>">
                            <?php esc_html_e('Boxed', 'dt-style-switcher') ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/')) ?>?menu=wide" class="dtss_col_3 dtss_btn dtss_btn_outline <?php echo esc_attr($is_wide) ?>">
                            <?php esc_html_e(' Wide', 'dt-style-switcher') ?>
                        </a>
                        <a href="<?php echo esc_url(home_url('/')) ?>?menu=full_width" class="dtss_col_3 dtss_btn dtss_btn_outline <?php echo esc_attr($is_full_width) ?>">
                            <?php esc_html_e('Full Width', 'dt-style-switcher'); ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="header_switcher_style">
                <div class="switcher-title">
                    <h5> <?php esc_html_e('Menu Alignment ', ''); ?></h5>
                    <div class="dtss_btns dtss_row">
                        <a href="<?php echo esc_url(home_url($wp->request)) ?>?menu_align=menu_center" class="dtss_col_3 dtss_btn dtss_btn_outline <?php echo esc_attr($is_menu_center) ?>">
                            <?php esc_html_e(' Center', 'dt-style-switcher') ?>
                        </a>
                        <a href="<?php echo esc_url(home_url($wp->request)) ?>?menu_align=menu_left" class="dtss_col_3 dtss_btn dtss_btn_outline <?php echo esc_attr($is_menu_left) ?>">
                            <?php esc_html_e(' Left', 'dt-style-switcher') ?>
                        </a>
                        <a href="<?php echo esc_url(home_url($wp->request)) ?>?menu_align=menu_right" class="dtss_col_3 dtss_btn dtss_btn_outline <?php echo esc_attr($is_menu_right) ?>">
                            <?php esc_html_e(' Right', 'dt-style-switcher') ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="header_switcher_style">
                <div class="switcher-title">
                    <h5> Demos </h5>
                    <div class="dtss_row demos">
                        <a href="https://saasland.droitthemes.com/" class="dtss_col_2 demo_link" title="Saasland Design Studio Demo">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/Prototyping_Tool.jpg" alt="Saasland Design Studio Demo">
                        </a>
                        <a href="https://saasland2.droitthemes.com/home-hosting/" class="dtss_col_2 demo_link" title="Saasland Hosting Demo">
                            <img src="https://saasland.droitthemes.com/wp-content/uploads/2019/07/hosting.jpg" alt="Saasland Hosting Demo">
                        </a>
                        <a href="https://saasland2.droitthemes.com/home-pos/" class="dtss_col_2 demo_link" title="Saasland POS Demo">
                            <img src="https://saasland.droitthemes.com/wp-content/uploads/2019/07/pos.jpg" alt="Saasland POS Demo">
                        </a>
                        <a href="https://saasland2.droitthemes.com/home-erp/" class="dtss_col_2 demo_link" title="Saasland ERP Demo">
                            <img src="https://saasland.droitthemes.com/wp-content/uploads/2019/07/erp.jpg" alt="Saasland ERP Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/home-payment-processing/" class="dtss_col_2 demo_link" title="Saasland Payment Processing Demo">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home16.jpg" alt="Saasland Payment Processing Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-mail/" class="dtss_col_2 demo_link" title="Saasland Email Client Demo">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home9.jpg" alt="Saasland Email Client Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-startup/" class="dtss_col_2 demo_link" title="Saasland Startup Demo">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home15.jpg" alt="Saasland Startup Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-saas/" class="dtss_col_2 demo_link" title="Saasland classic saas demo">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home17.jpg" alt="Saasland classic saas demo">
                        </a>
                        <a href="https://onepage.saasland.droitthemes.com/" class="dtss_col_2 demo_link" title="Mobile App (Onepage) Demo">
                            <img src="http://onepage.saasland.droitthemes.com/wp-content/uploads/2019/06/onepage-thumbnail.png" alt="Mobile App (Onepage) Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-software-dark/" class="dtss_col_2 demo_link" title="Saasland Software (Dark) Demo">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home13.jpg" alt="Saasland Software (Dark) Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-app-showcase/" class="dtss_col_2 demo_link" title="">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home14.jpg" alt="app showcase">
                        </a>
                        <a href="http://saasland.droitthemes.com/saasland/home-marketing/" class="dtss_col_2 demo_link">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home11.jpg" alt="Saasland Digital Marketing Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-cloud/" class="dtss_col_2 demo_link">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home12.jpg" alt="Saasland Cloud Based Saas Demo">
                        </a>
                        <a href="http://saasland.droitthemes.com/saasland/home-hr-management/" class="dtss_col_2 demo_link" title="Saasland HR Management Demo">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home4.jpg" alt="Saasland HR Management Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-crm-software/" class="dtss_col_2 demo_link" title="CRM Software Demo">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home3.jpg" alt="CRM Software Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/accounts-billing/" class="dtss_col_2 demo_link" title="Accounts & Billing">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home1.jpg" alt="Accounts & Billing">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-digital-agency/" class="dtss_col_2 demo_link" title="Digital Agency">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home5.jpg" alt="Digital Agency">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-project-management/" class="dtss_col_2 demo_link" title="Project Management">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/home8.jpg" alt="Project Management Demo">
                        </a>
                        <a href="https://saasland.droitthemes.com/saasland/home-saas-2-slider/" class="dtss_col_2 demo_link" title="Saas 02 (Slider)">
                            <img src="https://droitthemes.com/wp/saasland/wp-content/uploads/2019/04/saas2-slider.png" alt="Saas 02 (Slider)">
                        </a>
                        <a href="https://saasland.droitthemes.com/home-shop/" class="dtss_col_2 demo_link" title="Digital Shop">
                            <img src="https://saasland.droitthemes.com/wp-content/uploads/2019/05/home-shop.png" alt="Digital Shop">
                        </a>
                        <a href="https://saasland.droitthemes.com/home-company/" class="dtss_col_2 demo_link" title="Software Company">
                            <img src="https://saasland.droitthemes.com/wp-content/uploads/2019/04/home-company.png" alt="Software Company">
                        </a>
                        <a href="https://saasland.droitthemes.com/home-prototyping/" class="dtss_col_2 demo_link" title="Prototype & Wireframing">
                            <img src="https://saasland.droitthemes.com/wp-content/uploads/2019/05/home-prototyping.png" alt="Prototype & Wireframing">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>