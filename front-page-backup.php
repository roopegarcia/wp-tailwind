<?php get_header(); ?>

<!-- <div class="max-w-4xl mx-auto px-4 prose"> -->
<div class="front-page max-w-4xl mx-auto flex-auto p-6 prose">
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div>
        <h1 class="text-center border-2 p-10 mb-8 uppercase border-black bg-teal-400 text-black">Pick your topic</h1>
        <?php the_content(); ?>
      </div>
    <?php }
  } ?>
</div>
<?php get_footer(); ?>