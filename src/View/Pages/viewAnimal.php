<?php $this->title = "Photographie - Portfolio"; ?>

<section class="banner_portfolio">

</section>

<section class="portfolio">
    <div class="portfolio_grid">
      <?php foreach ($picturesAnimal as $pictureAnimal): ?>
            <?php echo "<img src='".$pictureAnimal->getLink()."' alt='image de larticle'>"; ?>
      <?php endforeach; ?>
      <img src="Contents/Illustrations/animal_portfolio.jpg" alt="photo animalière">
      <img src="Contents/Illustrations/animal_portfolio.jpg" alt="photo animalière">
      <img src="Contents/Illustrations/animal_portfolio.jpg" alt="photo animalière">
      <img src="Contents/Illustrations/animal_portfolio.jpg" alt="photo animalière">
      <img src="Contents/Illustrations/animal_portfolio.jpg" alt="photo animalière">
      <img src="Contents/Illustrations/animal_portfolio.jpg" alt="photo animalière">
      <img src="Contents/Illustrations/animal_portfolio.jpg" alt="photo animalière">
    </div>
</section>


