<?php get_header(); ?>

<div class="post-container">
  <!-- <h1 class="bg-gradient-to-r from-purple-500 to-pink-500 p-5 text-white">Hey, this is a single.php. - <?php the_title(); ?></h1> -->
  
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div class="class-tba">
        <h2 class="prose uppercase font-mono">single.php</h2>
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail('full', array(
            'class' => 'steve')); 
            ?>
          <div class=""><?php the_content(); ?></div>
          <!-- <p class="goback-arrow mt-5 mb-5 p-2 steve-button text-white"><?php echo get_the_category_list(', ') ?></p> -->
          <button class="font-mono uppercase goback-arrow mt-5 mb-5 p-2"><?php the_category(',  '); ?></button>

        </div>
      <?php }
  } ?>
</div>

<?php get_footer(); ?>