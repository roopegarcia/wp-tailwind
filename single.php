<?php get_header(); ?>

<div class="prose py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
  <!-- <h1 class="bg-gradient-to-r from-purple-500 to-pink-500 p-5 text-white">Hey, this is a single.php. - <?php the_title(); ?></h1> -->
  
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
    
      <div class="class-tba">
      <div class="prose max-w-4xl mx-auto flex-auto">
  <h1 class="text-center border-2 p-10 mb-8 uppercase border-black  bg-gradient-to-r from-purple-500 to-pink-500 text-black"><?php the_title(); ?></h1>  
</div>
        <span class="flex items-center"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
</svg>
<?php the_date( 'F jS, Y', '<p class="font-thin pl-2">', '</p>' ); ?></span>

<?php the_post_thumbnail('post-image', array(
            'class' => 'steve')); 
            ?>
          <div class=""><?php the_content(); ?></div>

        </div>
      <?php }
  } ?>

<button class="font-sans uppercase goback-arrow mt-5 mb-5 p-2"><?php the_category(',  '); ?></button>

</div>
  
</div>
<?php get_footer(); ?>