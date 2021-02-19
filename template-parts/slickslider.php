<?php

// WP_Query arguments
$args = array(
  'post_type' => array('slider'),
);
$myposts = get_posts($args); ?>
<!-- <?php echo '<pre>' ?>
<?php echo print_r($myposts); ?>
<?php echo '</pre>' ?> -->

<?php foreach ($myposts as $post) : setup_postdata($post); ?>
  <section class="dev-slider-wrppr">
    <div class="dev-slider-row">
      <div class="slider-for">
        <?php if (have_rows('slider_content')) : ?>
          <?php while (have_rows('slider_content')) : the_row(); ?>
            <?php


            $slideimage = get_sub_field('slider_image');
            $slidetitle = get_sub_field('slider_title');
            $slidebodycopy = get_sub_field('slider_body_copy'); ?>


            <div class="slick-container">
              <h4 class="info-title text-center"><?php echo $slidetitle; ?></h4>
              <p class="description"><?php echo $slidebodycopy; ?></p>
              <img src="<?php echo $slideimage['url']; ?>" alt="<?php echo $slideimage['alt']; ?>" />
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
  </section>
  <?php wp_reset_postdata(); ?>

<?php endforeach; ?>