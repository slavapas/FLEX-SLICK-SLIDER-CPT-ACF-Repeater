<h1>Hi. I'm a slider</h1>
<section class="dev-slider-wrppr">
  <div class="dev-slider-row">
    <div class="slider-for">
      <?php if (have_rows('slider_content')) : ?>
        <?php echo get_the_fiels('slider_title'); ?>
        <?php while (have_rows('slider_content')) : the_row(); ?>
          <?php $slideimage = get_sub_field('slider_image'); ?>
          <?php $slidetitle = get_sub_field('slider_title'); ?>
          <?php $slidebdycpy = get_sub_field('slider_body_copy'); ?>
          <div class="slick-container">
            <h4 class="info-title text-center">Title<?php echo $slidetitle; ?></h4>
            <p class="description"><?php echo $slidebdycpy; ?></p> <img src="<?php echo $slideimage['url']; ?>" alt="<?php echo $slideimage['alt']; ?>" />
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
</section>