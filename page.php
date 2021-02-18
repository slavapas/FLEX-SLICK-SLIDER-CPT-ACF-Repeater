<?php get_header(); ?>


<?php if (have_posts()) : ?>
  <div class="feed">
    <?php while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID() ?>" class="<?php post_class() ?>">
        <?php the_title(); ?>

        <?php the_field('ps-page_title'); ?>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  </div>
<?php endif; ?>

<?php get_footer(); ?>