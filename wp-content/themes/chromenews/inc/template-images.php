<?php
/**
 * Custom template images for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ChromeNews
 */


if ( ! function_exists( 'chromenews_post_thumbnail' ) ) :
    /**
     * Displays an optional post thumbnail.
     *
     * Wraps the post thumbnail in an anchor element on index views, or a div
     * element when on single views.
     */
    function chromenews_post_thumbnail() {
        if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
            return;
        }

        global $post;

        if ( is_singular() ) :

            $chromenews_theme_class = chromenews_get_option('global_image_alignment');
            $chromenews_post_image_alignment = get_post_meta($post->ID, 'chromenews-meta-image-options', true);
            $chromenews_post_class = !empty($chromenews_post_image_alignment) ? $chromenews_post_image_alignment : $chromenews_theme_class;

            if ( $chromenews_post_class != 'no-image' ):
                ?>
                <div class="post-thumbnail <?php echo esc_attr($chromenews_post_class); ?>">
                    <?php the_post_thumbnail('full'); ?>
                </div>
            <?php endif; ?>

        <?php else :
            $chromenews_archive_layout = chromenews_get_option('archive_layout');
            $chromenews_archive_layout = $chromenews_archive_layout;
            $chromenews_archive_class = '';
            if ($chromenews_archive_layout == 'archive-layout-list') {
                $chromenews_archive_image_alignment = chromenews_get_option('archive_image_alignment');
                $chromenews_archive_class = $chromenews_archive_image_alignment;
                $chromenews_archive_image = 'medium';
            } elseif ($chromenews_archive_layout == 'archive-layout-full') {
                $chromenews_archive_image = 'chromenews-medium';
            } else {
                $chromenews_archive_image = 'post-thumbnail';
            }

            ?>
            <div class="post-thumbnail <?php echo esc_attr($chromenews_archive_class); ?>">
                <a href="<?php the_permalink(); ?>" aria-hidden="true">
                    <?php
                    the_post_thumbnail( $chromenews_archive_image, array(
                        'alt' => the_title_attribute( array(
                            'echo' => false,
                        ) ),
                    ) );
                    ?>
                </a>
            </div>

        <?php endif; // End is_singular().
    }
endif;
