<?php
/**
 * Displays the Category, Tags, Authors, post date in posts.
 *
 * @package WordPress
 * @subpackage Open_Web_Office
 * @since Open Web Office 1.0
 */
?>
<div class="post-meta-wrapper post-meta-single post-meta-single-bottom">

    <ul class="post-meta">
        <!-- Post Author -->
        <li class="post-author meta-wrapper">
            <span class="meta-icon">
                <span class="screen-reader-text"><?php _e( 'Post author', 'open-web-office-acf-flexible' ); ?></span>
                <?php openweboffice_the_theme_svg( 'user' ); ?>
            </span>
            <span class="meta-text">
                <?php
                printf(
                    /* translators: %s: Author name. */
                    __( 'By %s', 'open-web-office-acf-flexible' ),
                    '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author_meta( 'display_name' ) ) . '</a>'
                );
                ?>
            </span>
        </li>
        <!-- Post date -->
        <li class="post-date meta-wrapper">
            <span class="meta-icon">
                <span class="screen-reader-text"><?php _e( 'Post date', 'open-web-office-acf-flexible' ); ?></span>
                <?php openweboffice_the_theme_svg( 'calendar' ); ?>
            </span>
            <span class="meta-text">
                <a href="<?php the_permalink(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
            </span>
        </li>
        <!-- Post Categories -->
        <?php if (has_category('category')){ ?>
        <li class="post-categories meta-wrapper">
            <span class="meta-icon">
                <span class="screen-reader-text"><?php _e( 'Categories', 'open-web-office-acf-flexible' ); ?></span>
                <?php openweboffice_the_theme_svg( 'folder' ); ?>
            </span>
            <span class="meta-text">
                <?php _ex( 'In', 'A string that is output before one or more categories', 'open-web-office-acf-flexible' ); ?> <?php the_category( ', ' ); ?>
            </span>
        </li>
        <?php } ?>
        <?php if(has_tag()) { ?>        
        <li class="post-tags meta-wrapper">
            <span class="meta-icon">
                <span class="screen-reader-text"><?php _e( 'Tags', 'open-web-office-acf-flexible' ); ?></span>
                <?php openweboffice_the_theme_svg( 'tag' ); ?>
            </span>
            <span class="meta-text">
                <?php the_tags( '', ', ', '' ); ?>
            </span>
        </li>
        <?php } ?>
        <?php if ( have_comments() ) { ?>
        <li class="post-comment-link meta-wrapper">
            <span class="meta-icon">
                <?php openweboffice_the_theme_svg( 'comment' ); ?>
            </span>
            <span class="meta-text">
                <?php comments_popup_link(); ?>
            </span>
        </li>     
        <?php } ?>           
    </ul><!-- .post-meta -->

</div><!-- .post-meta-wrapper -->