<?php $this->title = "Photographie - Portfolio"; ?>

<section class="banner_portfolio">

</section>

<section class="portfolio">
    <div class="portfolio_grid">
      <?php foreach ($picturesLandscape as $pictureLandscape): ?>
            <?php echo "<img src='".$pictureLandscape->getLink()."' alt='image de larticle'>"; ?>
      <?php endforeach; ?>
      <img src="Contents/Illustrations/landscape_portfolio.jpg" alt="photo paysage">
      <img src="Contents/Illustrations/landscape_portfolio.jpg" alt="photo paysage">
      <img src="Contents/Illustrations/landscape_portfolio.jpg" alt="photo paysage">
      <img src="Contents/Illustrations/landscape_portfolio.jpg" alt="photo paysage">
      <img src="Contents/Illustrations/landscape_portfolio.jpg" alt="photo paysage">
      <img src="Contents/Illustrations/landscape_portfolio.jpg" alt="photo paysage">
      <img src="Contents/Illustrations/landscape_portfolio.jpg" alt="photo paysage">
    </div>
</section>