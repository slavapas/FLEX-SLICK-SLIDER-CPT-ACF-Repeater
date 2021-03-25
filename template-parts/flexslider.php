<?php
$args = array(
  'post_type' => 'slider',
  'post_per_page' => -1
);

$posts = new WP_Query($args);
?>

<!-- Place somewhere in the <body> of your page -->
<?php if (have_rows('slides')) : ?>
  <div class="flexslider">
    <ul class="slides">
      <?php while (have_rows('slides')) : the_row();
        $imageFlex = get_sub_field('image');
        $imageURL  = $imageFlex['sizes']['slider'];
        $titleFlex = get_sub_field('title');
      ?>
        <li><img src="<?php echo $imageURL; ?>" alt=""></li>
        <p><?php echo $titleFlex; ?></p>
      <?php endwhile; ?>
    </ul>
    <!--/end .flexslider-->
  </div>
<?php endif; ?>