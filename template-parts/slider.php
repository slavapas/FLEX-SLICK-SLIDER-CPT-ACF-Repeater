<?php get_header(); ?>

<?php
$args = array(
  'post_type' => 'slides'
);

$slider = get_posts($args);
print_r($slider);

?>
<?php
foreach ($slider as $slide) {
  setup_postdata($slide);
  // формат вывода the_title() ...
  print_r($slide);
}

wp_reset_postdata(); // сброс


; ?>
<?php if (have_rows('slides')) :  ?>
  <?php while (have_rows('slides')) : the_row(); ?>
    <?php the_sub_field('image'); ?>
    <?php the_sub_field('title'); ?>
    <?php
    $image = get_sub_field('profile_picture');

    $picture = $image['sizes']['thumbnail'];
    $link = get_sub_field('link');

    ?>

    <p><a href="<?php echo $link; ?>"> <img src="<?php echo $picture ?>" alt=""></a></p>
  <?php endwhile; ?>
<?php endif; ?>






<?php get_footer(); ?>