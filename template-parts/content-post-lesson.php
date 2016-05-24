<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Base:_Science_of_Sales
 */

$hero_bg = get_field('hero_image');
?>
<section id="post-<?php the_ID(); ?>" class="lesson-hero" style="background-image: url(<?php if (!empty($hero_bg)) : echo esc_html($hero_bg['url']); endif; ?>);">
    <div class="outer-container">
        <div class="lesson-hero-content">
            <p class="note blue"><?php the_title(); ?></p>
            <h1 class="hero-title"><?php the_field('hero_title'); ?></h1>

            <div class="hero-content">
                <h2><?php
                    the_field('hero_copy');
                ?></h2>
            </div><!-- .hero-content -->

            <div class="clear-both"></div>

            <a class="hero-cta button" href="<?php the_field('hero_cta_url'); ?>">
                <?php the_field('hero_cta_copy'); ?>
            </a><!-- .hero-cta -->
        </div>
    </div>
</section><!-- #post-## -->

<?php if( have_rows('lesson_sections') ): ?>
    <?php while( have_rows('lesson_sections') ): the_row();
        // vars
        $note = get_sub_field('section_note');
        $class = get_sub_field('section_class');
        $title = get_sub_field('section_title');
        $copy =  get_sub_field('section_copy');
        $img = get_sub_field('section_image');
        $float = get_sub_field('image_float');
        $hr = get_sub_field('dividing_line')
    ?>
        <section class="lesson-section <?php if ($class) : echo esc_html($class) . ' '; endif; if ($float) : echo 'float-' . $float; endif; ?>">
            <div class="outer-container">
                <?php if ($float == 'right') : ?>
                    <div class="inner-container copy">
                        <?php if ($note) : ?>
                            <p class="note blue"><?php echo esc_html($note); ?></p>
                        <?php endif; ?>

                        <?php if ($title) : ?>
                            <h3><?php echo esc_html($title); ?></h3>
                        <?php endif; ?>

                        <?php if ($hr == true) : ?><hr /><?php endif; ?>

                        <?php if ($copy) : ?>
                            <p class="section-copy"><?php echo esc_html($copy); ?></p>
                        <?php endif; ?>
                    </div>

                    <div class="inner-container img">
                        <?php if (!empty($img)) : ?>
                            <img src="<?php echo esc_html($img['url']); ?>" alt="<?php echo esc_html($img['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($float == 'left') : ?>
                    <div class="inner-container img">
                        <?php if (!empty($img)) : ?>
                            <img src="<?php echo esc_html($img['url']); ?>" alt="<?php echo esc_html($img['alt']); ?>" />
                        <?php endif; ?>
                    </div>

                    <div class="inner-container copy">
                        <?php if ($note) : ?>
                            <p class="note blue"><?php echo esc_html($note); ?></p>
                        <?php endif; ?>

                        <?php if ($title) : ?>
                            <h3><?php echo esc_html($title); ?></h3>
                        <?php endif; ?>

                        <?php if ($hr == true) : ?><hr /><?php endif; ?>

                        <?php if ($copy) : ?>
                            <p c><?php echo esc_html($copy); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
