<?php
$args = array(
  'post_type' => 'slider',
  'post_per_page' => -1
);

$posts = new WP_Query($args);
?>

<?php if ($posts->have_posts()) : ?>
  <div class="feed">
    <?php while ($posts->have_posts()) : $posts->the_post(); ?>
      <div class="flexslider">
        <ul class="slides">
          <?php if (have_rows('slider_content')) : ?>
            <?php while (have_rows('slider_content')) : the_row(); ?>
              111111111
              <?php get_header(); ?>
              <li>
                <?php
                $image = get_sub_field('slider_image');
                $imageUrl = $image['sizes']['slides'];
                $text = get_sub_field('slider_title');
                $info = get_sub_field('slider_body_copy');
                //echo $text;

                //$test = get_field('slides');
                // echo '<pre>';
                // print_r($test);
                // echo '</pre>';
                echo '<p>Title:' . $text . '</p>';
                // echo '<p>Image:' . $image . '</p>';
                ?>
                <div class="info"><?php echo $info; ?></div>
                <img src="<?php echo $imageUrl ?>" alt="">
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!--flexslider-->
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

  </div>