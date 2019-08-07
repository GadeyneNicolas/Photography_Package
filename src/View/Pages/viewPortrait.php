<?php $this->title = "Photographie - Portfolio"; ?>

<section class="banner_portfolio">

</section>

<section class="portfolio">
    <div class="portfolio_grid">
      <?php foreach ($picturesPortrait as $picturePortrait): ?>
            <?php echo "<img src='".$picturePortrait->getLink()."' alt='image de larticle'>"; ?>
      <?php endforeach; ?>
      <img src="Contents/Illustrations/portrait_portfolio.jpg" alt="photo portrait">
      <img src="Contents/Illustrations/portrait_portfolio.jpg" alt="photo portrait">
      <img src="Contents/Illustrations/portrait_portfolio.jpg" alt="photo portrait">
      <img src="Contents/Illustrations/portrait_portfolio.jpg" alt="photo portrait">
      <img src="Contents/Illustrations/portrait_portfolio.jpg" alt="photo portrait">
      <img src="Contents/Illustrations/portrait_portfolio.jpg" alt="photo portrait">
      <img src="Contents/Illustrations/portrait_portfolio.jpg" alt="photo portrait">
    </div>
</section>