<?php
/* Template Name: Team */
?>

<?php get_header(); ?>


<h1><?php the_title(); ?></h1>
<div><?php the_content(); ?></div>

<?php if (have_rows('team')) :  ?>
  <?php while (have_rows('team')) : the_row(); ?>
    <?php the_sub_field('name'); ?>
    <?php the_sub_field('biography'); ?>
    <?php
    $image = get_sub_field('profile_picture');

    $picture = $image['sizes']['thumbnail'];
    $link = get_sub_field('link');

    ?>

    <p><a href="<?php echo $link; ?>"> <img src="<?php echo $picture ?>" alt=""></a></p>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>