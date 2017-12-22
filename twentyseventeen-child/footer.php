<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @package Twenty_Seventeen
 * @subpackage Twenty_Seventeen_Child
 * @since 1.0
 * @version 1.0
 */

?>
</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="wrap">

        <div class="site-info">
            <a href="<?php echo esc_url( __( 'http://scripthere.com/', 'twenty-seventeen-child' ) ); ?>">
                <?php printf( __( 'Proudly powered by %s', 'twenty-seventeen-child' ), 'ScriptHere' ); ?>
            </a>
        </div><!-- .site-info -->
    </div><!-- .wrap -->
</footer><!-- #colophon -->
</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>

