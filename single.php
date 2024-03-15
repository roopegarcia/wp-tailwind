<?php get_header(); ?>

<div class="max-w-4xl mx-auto px-4">
  <h1>Hey, this is a single.php.</h1>
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div>
      <?php the_post_thumbnail('medium', array(
          'class' => 'h-48 w-full object-cover md:h-full md:w-48')); 
          ?>

        <h1><?php the_title(); ?></h1>
        <div class="prose"><?php the_content(); ?></div>
      </div>
    <?php }
  } ?>
</div>

<?php get_footer(); ?>