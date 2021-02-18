<?php get_header(); ?>
<h3>I'm body</h3>
<?php
$slider_args  = array(
  'post_type'      => 'slides',
  'posts_per_page' => 10
);

$slider_query = new WP_Query($slider_args);
echo '<pre>';
echo print_r($slider_query);
echo '</pre>';
?>
<section class="testimonials">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <div class="slick-testimonial">
          <?php
          if ($slider_query->have_posts()) :
            while ($slider_query->have_posts()) :
              $slider_query->the_post(); ?>

              <div class="item">
                <div class="testimonial">

                  <h1>What our customers say</h1>
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_content(); ?></p>

                </div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <div class="item">
              <div class="testimonial">
                <h3>No Slider Found</h3>
              </div>
            </div>
          <?php endif; ?>
          <?php wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>






<?php wp_reset_postdata(); // сброс; 
?>




<?php get_footer(); ?>