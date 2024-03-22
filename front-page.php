<?php get_header(); ?>

<!-- <div class="max-w-4xl mx-auto px-4 prose"> -->
<div class="front-page">
  <h1>front-page.php</h1>
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>

      <div>
      
        <h1 class="">Pick your topic</h1>
        <?php the_content(); ?>
      </div>

    <?php }
  } ?>
</div>

<hr />

<?php get_footer(); ?>