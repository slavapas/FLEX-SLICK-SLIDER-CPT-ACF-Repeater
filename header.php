<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body>
    <h1>I am header</h1>
    !-- Place somewhere in the
    <?php
    $args = array(
        'post_type' => 'slider',
        'post_per_page' => -1
    );

    $slides = new WP_Query($args);
    ?>
    <?php if ($slides->have_posts()) : ?>
        <div class="slider-body">
            <div class="flexslider">
                <ul class="slides">
                    <?php while ($slides->have_posts()) : $slides->the_post(); ?>
                        <li>
                            <?php the_post_thumbnail('slides'); ?>
                        </li>

                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>