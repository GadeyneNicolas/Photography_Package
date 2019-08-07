<?php $this->title = "Photographie - Portfolio"; ?>

<section class="banner_portfolio">

</section>

<section class="portfolio">
    <div class="portfolio_grid">
      <?php foreach ($picturesUrbex as $pictureUrbex): ?>
            <?php echo "<img src='".$pictureUrbex->getLink()."' alt='image de larticle'>"; ?>
      <?php endforeach; ?>
      <img src="Contents/Illustrations/urbex_portfolio.jpg" alt="photo urbex">
      <img src="Contents/Illustrations/urbex_portfolio.jpg" alt="photo urbex">
      <img src="Contents/Illustrations/urbex_portfolio.jpg" alt="photo urbex">
      <img src="Contents/Illustrations/urbex_portfolio.jpg" alt="photo urbex">
      <img src="Contents/Illustrations/urbex_portfolio.jpg" alt="photo urbex">
      <img src="Contents/Illustrations/urbex_portfolio.jpg" alt="photo urbex">
      <img src="Contents/Illustrations/urbex_portfolio.jpg" alt="photo urbex">
    </div>
</section>