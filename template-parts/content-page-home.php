<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Base:_Science_of_Sales
 */

$hero_bg = get_field('hero_background');
?>

<section id="page-<?php the_ID(); ?>" class="home-hero">
<!-- style="background-image: url(<?php if (!empty($hero_bg)) : echo esc_html($hero_bg['url']); endif; ?>);" -->
    <div class="outer-container">
        <p class="note blue">Base Presents</p>

        <hr class="hero" />

        <h1 class="hero-title"><?php the_field('hero_title'); ?></h1>

        <div class="hero-content">
            <h2><?php
                the_field('hero_copy');
            ?></h2>
        </div><!-- .hero-content -->

        <div class="clear-both"></div>

        <a class="home-hero-cta button" href="<?php the_field('hero_cta_url'); ?>">
            <?php the_field('hero_cta'); ?>
        </a><!-- .hero-cta -->
    </div>
</section><!-- #page-## -->

<img class="waves" src="<?php if (!empty($hero_bg)) : echo esc_html($hero_bg['url']); endif; ?>" />

<?php if( have_rows('body') ): ?>
    <?php while( have_rows('body') ): the_row();
        // vars
        $class = get_sub_field('section_class');
        $title = get_sub_field('section_title');
        $copy =  get_sub_field('section_copy');
        $img = get_sub_field('section_image');
        $float = get_sub_field('image_float');
        $hr = get_sub_field('dividing_line');
    ?>
        <section class="home-section <?php if ($class) : echo esc_html($class) . ' '; endif; if ($float) : echo 'float-' . $float; endif; ?>">
            <div class="outer-container">
                <?php if ($float == 'right') : ?>
                    <div class="inner-container copy">
                        <?php if ($title) : ?>
                            <h3 class="section-title"><?php echo esc_html($title); ?></h3>
                        <?php endif; ?>

                        <?php if ($hr == true) : ?><hr /><?php endif; ?>

                        <?php if ($copy) : ?>
                            <p><?php echo $copy; ?></p>
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
                        <?php if ($title) : ?>
                            <h3 class="section-title"><?php echo esc_html($title); ?></h3>
                        <?php endif; ?>

                        <?php if ($hr == true) : ?><hr /><?php endif; ?>

                        <?php if ($copy) : ?>
                            <p><?php echo $copy; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<section class="lesson-lead blue">
    <div class="outer-container">
        <p class="note">Lesson #1</p>

        <h1 class="lesson-lead-title">A Scientific Approach to Sales</h1>

        <div class="lesson-lead-content">
            <h2>In this lesson, we’ll dive into how we can take a scientific approach to sales. We will provide examples and tools to apply this skill.</h2>
        </div><!-- .lesson-lead-content -->

        <div class="clear-both"></div>

        <a class="lesson-lead-cta button black" href="http://local.wordpress.dev/">Start Lesson</a><!-- .lesson-lead-cta -->
    </div>
</section>
