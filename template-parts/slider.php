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
          <?php if (have_rows('slides')) : ?>
            <?php while (have_rows('slides')) : the_row(); ?>

              <?php get_header(); ?>

              <li>
                hi there
                <?php
                $image = get_sub_field('image');
                $imageUrl = $image['sizes']['slides'];
                $text = get_sub_field('text');
                //echo $text;

                $test = get_field('slides');
                // echo '<pre>';
                // print_r($test);
                // echo '</pre>';
                echo '<p>Title:' . $text . '</p>';
                echo '<p>Image:' . $image . '</p>';
                ?>
                <img src="<?php echo $imageUrl ?>" alt="">
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <!--flexslider-->
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

  </div>