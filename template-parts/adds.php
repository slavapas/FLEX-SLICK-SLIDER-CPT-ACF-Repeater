<?php  //add me in

//Fields

//slider_portfolio = Gallery Field

$images = get_field('slider_portfolio');

if ($images) : ?>
  <div class="slider-for">

    <?php foreach ($images as $image) : ?>
      <div class="slick-container">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      </div>
    <?php endforeach; ?>
  </div>
  <div class="slider-nav">

    <?php foreach ($images as $image) : ?>
      <div>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

      </div>
    <?php endforeach; ?>
  </div>
<?php endif;
