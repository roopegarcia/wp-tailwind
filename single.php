<?php get_header(); ?>

<div class="max-w-4xl mx-auto prose">
  <h1 class="bg-gradient-to-r from-purple-500 to-pink-500 p-5 text-white">Hey, this is a single.php. - <?php the_title(); ?></h1>
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div>
      <?php the_post_thumbnail('full', array(
          'class' => 'max-w-4xl mx-auto')); 
          ?>
        <div class="prose"><?php the_content(); ?></div>
        <!-- <p class="goback-arrow mt-5 mb-5 p-2 steve-button text-white"><?php echo get_the_category_list(', ') ?></p> -->
        <button class="font-mono uppercase goback-arrow mt-5 mb-5 p-2"><?php the_category(',  '); ?></button>

      </div>
    <?php }
  } ?>
</div>

<?php get_footer(); ?>