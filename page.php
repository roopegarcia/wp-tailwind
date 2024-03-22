<?php get_header(); ?>

<div class="page-container">
  <!-- <h1 class="bg-gradient-to-r from-purple-500 to-pink-500 p-5 text-white">Hey, this is a single.php. - <?php the_title(); ?></h1> -->
  
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div class="class-tba">
        <h2 class="prose font-mono">page.php</h2>
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail('banner', array(
            'class' => 'steve')); 
            ?>
          <div class=""><?php the_content(); ?></div>
         

        </div>
      <?php }
  } ?>
</div>

<hr />

<?php get_footer(); ?>