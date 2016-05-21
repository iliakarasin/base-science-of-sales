<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Base:_Science_of_Sales
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="outer-container">
            <div class="site-info">
                <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'base-science-of-sales' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'base-science-of-sales' ), 'WordPress' ); ?></a>
                <span class="sep"> | </span>
                <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'base-science-of-sales' ), 'base-science-of-sales', '<a href="http://underscores.me/" rel="designer">Ilia Karasin</a>' ); ?>
            </div><!-- .site-info -->
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
