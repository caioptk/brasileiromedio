<?php
/**
 * Info setup
 *
 * @package ChromeNews
 */

if ( ! function_exists( 'chromenews_details_setup' ) ) :

    /**
     * Info setup.
     *
     * @since 1.0.0
     */
    function chromenews_details_setup() {

        $config = array(

            // Welcome content.
            'welcome-texts' => sprintf( esc_html__( 'Howdy %1$s, we would like to thank you for installing and activating %2$s theme for your precious site. All of the features provided by the theme are now ready to use; Here, we have gathered all of the essential details and helpful links for you and your better experience with %2$s. Once again, Thanks for using our theme!', 'chromenews' ), get_bloginfo('name'), 'ChromeNews' ),

            // Tabs.
            'tabs' => array(
                'getting-started' => esc_html__( 'Getting Started', 'chromenews' ),
                'support'         => esc_html__( 'Support', 'chromenews' ),
                'useful-plugins'  => esc_html__( 'Useful Plugins', 'chromenews' ),
                'demo-content'    => esc_html__( 'Demo Content', 'chromenews' ),
                'upgrade-to-pro'  => esc_html__( 'Upgrade to Pro', 'chromenews' ),
            ),

            // Quick links.
            'quick_links' => array(
                'theme_url' => array(
                    'text' => esc_html__( 'Theme Details', 'chromenews' ),
                    'url'  => 'https://afthemes.com/products/chromenews/',
                ),
                'demo_url' => array(
                    'text' => esc_html__( 'View Demo', 'chromenews' ),
                    'url'  => 'https://afthemes.com/products/chromenews/',
                ),
                'documentation_url' => array(
                    'text' => esc_html__( 'View Documentation', 'chromenews' ),
                    'url'  => 'https://docs.afthemes.com/chromenews/',
                ),
                'rating_url' => array(
                    'text' => esc_html__( 'Rate This Theme','chromenews' ),
                    'url'  => 'https://wordpress.org/support/theme/chromenews/reviews/#new-post',
                ),
            ),

            // Getting started.
            'getting_started' => array(
                'one' => array(
                    'title'       => esc_html__( 'Theme Documentation', 'chromenews' ),
                    'icon'        => 'dashicons dashicons-format-aside',
                    'description' => esc_html__( 'Please check our full documentation for detailed information on how to setup and customize the theme.', 'chromenews' ),
                    'button_text' => esc_html__( 'View Documentation', 'chromenews' ),
                    'button_url'  => 'https://docs.afthemes.com/chromenews/',
                    'button_type' => 'link',
                    'is_new_tab'  => true,
                ),
                'two' => array(
                    'title'       => esc_html__( 'Static Front Page', 'chromenews' ),
                    'icon'        => 'dashicons dashicons-admin-generic',
                    'description' => esc_html__( 'To achieve custom home page other than blog listing, you need to create and set static front page.', 'chromenews' ),
                    'button_text' => esc_html__( 'Static Front Page', 'chromenews' ),
                    'button_url'  => admin_url( 'customize.php?autofocus[section]=static_front_page' ),
                    'button_type' => 'primary',
                ),
                'three' => array(
                    'title'       => esc_html__( 'Theme Options', 'chromenews' ),
                    'icon'        => 'dashicons dashicons-admin-customizer',
                    'description' => esc_html__( 'Theme uses Customizer API for theme options. Using the Customizer you can easily customize different aspects of the theme.', 'chromenews' ),
                    'button_text' => esc_html__( 'Customize', 'chromenews' ),
                    'button_url'  => wp_customize_url(),
                    'button_type' => 'primary',
                ),
                'four' => array(
                    'title'       => esc_html__( 'Widgets', 'chromenews' ),
                    'icon'        => 'dashicons dashicons-welcome-widgets-menus',
                    'description' => esc_html__( 'Theme uses Wedgets API for widget options. Using the Widgets you can easily customize different aspects of the theme.', 'chromenews' ),
                    'button_text' => esc_html__( 'Widgets', 'chromenews' ),
                    'button_url'  => admin_url('widgets.php'),
                    'button_type' => 'primary',
                ),
                'five' => array(
                    'title'       => esc_html__( 'Demo Content', 'chromenews' ),
                    'icon'        => 'dashicons dashicons-layout',
                    'description' => sprintf( esc_html__( 'To import sample demo content, %1$s plugin should be installed and activated. After plugin is activated, visit AF Companion Dashboard from admin menu.', 'chromenews' ), '<a href="https://wordpress.org/plugins/af-companion/" target="_blank">AF Companion</a>' ),
                    'button_text' => esc_html__( 'Demo Content', 'chromenews' ),
                    'button_url'  => admin_url( 'themes.php?page=chromenews-pro-details&tab=demo-content' ),
                    'button_type' => 'secondary',
                ),
                'six' => array(
                    'title'       => esc_html__( 'Theme Preview', 'chromenews' ),
                    'icon'        => 'dashicons dashicons-welcome-view-site',
                    'description' => esc_html__( 'You can check out the theme demos for reference to find out what you can achieve using the theme and how it can be customized.', 'chromenews' ),
                    'button_text' => esc_html__( 'View Demo', 'chromenews' ),
                    'button_url'  => 'https://afthemes.com/products/chromenews/',
                    'button_type' => 'link',
                    'is_new_tab'  => true,
                ),
            ),

            // Support.
            'support' => array(
                'one' => array(
                    'title'       => esc_html__( 'Contact Support', 'chromenews' ),
                    'icon'        => 'dashicons dashicons-sos',
                    'description' => esc_html__( 'Got theme support question or found bug or got some feedbacks? Best place to ask your query is the dedicated Support forum for the theme.', 'chromenews' ),
                    'button_text' => esc_html__( 'Contact Support', 'chromenews' ),
                    'button_url'  => 'https://wordpress.org/support/theme/chromenews/',
                    'button_type' => 'link',
                    'is_new_tab'  => true,
                ),
                'two' => array(
                    'title'       => esc_html__( 'Theme Documentation', 'chromenews' ),
                    'icon'        => 'dashicons dashicons-format-aside',
                    'description' => esc_html__( 'Please check our full documentation for detailed information on how to setup and customize the theme.', 'chromenews' ),
                    'button_text' => esc_html__( 'View Documentation', 'chromenews' ),
                    'button_url'  => 'https://docs.afthemes.com/chromenews/',
                    'button_type' => 'link',
                    'is_new_tab'  => true,
                ),
                'three' => array(
                    'title'       => esc_html__( 'Child Theme', 'chromenews' ),
                    'icon'        => 'dashicons dashicons-admin-tools',
                    'description' => esc_html__( 'For advanced theme customization, it is recommended to use child theme rather than modifying the theme file itself. Using this approach, you wont lose the customization after theme update.', 'chromenews' ),
                    'button_text' => esc_html__( 'Learn More', 'chromenews' ),
                    'button_url'  => 'https://developer.wordpress.org/themes/advanced-topics/child-themes/',
                    'button_type' => 'link',
                    'is_new_tab'  => true,
                ),
            ),

            //Useful plugins.
            'useful_plugins' => array(
                'description' => esc_html__( 'Theme supports some helpful WordPress plugins to enhance your site. But, please enable only those plugins which you need in your site. For example, enable WooCommerce only if you are using e-commerce.', 'chromenews' ),
            ),

            //Demo content.
            'demo_content' => array(
                'description' => sprintf( esc_html__( 'To import demo content for this theme, %1$s plugin is needed. Please make sure plugin is installed and activated. After plugin is activated, you will see AF Companion Dashboard from admin menu.', 'chromenews' ), '<a href="https://wordpress.org/plugins/af-companion/" target="_blank">' . esc_html__( 'AF Companion', 'chromenews' ) . '</a>' ),
            ),

            //Free vs Pro.
            'free_vs_pro' => array(

                'features' => array(
                    'Live editing in Customizer' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Typography style and colors' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'Preloader Option' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Multiple Header Options' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'Logo and title customization' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Multiple Frontpage Banner Options' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'Featured Posts on Banner Section' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Banner Featured Posts Controls' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'WooCommerce Compatibility' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Category Color Options' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Number of Category Color Options' => array('3 Available', '7 Available'),
                    'Banner Advertisements' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Posts Section Advertisements' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'Custom Widgets' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Number of Custom Widgets' => array('7+ Available', '10+ Available'),
                    'Author Biography' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Posts Slider Widget' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Posts Carousel Widget' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Posts Grid Widget' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Posts Double Coulmn Double Categories Widget' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Posts Tabbed Widget' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Social Contacts Widget' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Posts Single Column Widget' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'Trending Posts Vertical Carousel Widget' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'YouTube Video Slider Widget' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'Custom Widgets Controls' => array('Basic', 'Advanced'),
                    'Archive Layout' => array('Full, Grid', 'List, Full, Grid'),
                    'Instagram Feeds' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'Mailchimp Subscription Section' => array('No', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Display Related Posts' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'Footer Widgets Section' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Hide Theme Credit Link' => array('No', 'Yes', 'dashicons-no-alt', 'dashicons-yes'),
                    'Responsive Layout' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'Translations Ready' => array('Yes', 'Yes', 'dashicons-yes', 'dashicons-yes'),
                    'SEO' => array('Optimized', 'Optimized'),
                    'Support' => array('Yes', 'High Priority Dedicated Support')
                ),
            ),

            // Upgrade content.
            'upgrade_to_pro' => array(
                'description' => esc_html__( 'If you want more advanced features then you can upgrade to the premium version of the theme.', 'chromenews' ),
                'button_text' => esc_html__( 'Upgrade Now', 'chromenews' ),
                'button_url'  => 'https://afthemes.com/products/chromenews-pro',
                'button_type' => 'primary',
                'is_new_tab'  => true,
            ),
        );

        ChromeNews_Info::init( $config );
    }

endif;

add_action( 'after_setup_theme', 'chromenews_details_setup' );