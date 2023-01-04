<section>
    
<div class="jumbotron">
    
  <h1 class="display-4">Blog</h1>
  <p class="lead">Willkommen</p>
  <hr class="my-4">
  <p>Schau dir meinen Blog an</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Mehr</a>
  </p>

 </div>
 
</section>

<section class = "blog-section">
  <div class = "container">

    <?php if ($news): ?>

      <?php foreach ($news as $newsItem) : ?>
        <h3><?= $newsItem['title'] ?> </h3>

      <?php endforeach; ?>
      <?php else: ?>
        <p class = "text-center">No posts have been found</p>
     <?php endif; ?>

  </div>

    



</section>