<?php get_header(); ?>

<div class="prose px-4 mx-auto max-w-screen-xl">
  <!-- <h1 class="bg-gradient-to-r from-purple-500 to-pink-500 p-5 text-white">Hey, this is a single.php. - <?php the_title(); ?></h1> -->
  
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
    
      <div class="class-tba prose max-w-4xl mx-auto flex-auto">
        <div class="prose max-w-4xl mx-auto flex-auto">
          <h1 class="text-center border-2 p-10 mb-8 uppercase border-black  bg-gradient-to-r from-purple-500 to-pink-500 text-black"><?php the_title(); ?></h1>  
        </div>
        <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>

<!-- <?php the_post_thumbnail('post-image', array(
            'class' => 'steve')); 
            ?> -->
          <div class=""><?php the_content(); ?></div>
          <button class="font-sans uppercase goback-arrow mt-5 mb-5 p-2"><?php the_category(',  '); ?></button>
        </div>
      <?php }
  } ?>



</div>
  
</div>
<?php get_footer(); ?>