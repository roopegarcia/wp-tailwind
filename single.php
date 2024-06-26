<?php get_header(); ?>

<div class="prose px-4 mx-auto max-w-screen-xl">  
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
    
      <div class="class-tba prose max-w-4xl mx-auto flex-auto text-base">
        <div class="prose max-w-4xl mx-auto flex-auto">
          <h1 class="text-center p-10 mb-8 uppercase border-black text-black"><?php the_title(); ?></h1>  
        </div>
        <?php the_breadcrumb(); ?>
        <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>

<!-- <?php the_post_thumbnail('post-image', array(
            'class' => 'steve')); 
            ?> -->
          <div class=""><?php the_content(); ?></div>
          <button class="paginate-archive font-sans uppercase goback-arrow mt-5 mb-5 p-2"><?php the_category(',  '); ?></button>
        </div>
      <?php }
  } ?>
</div>
  
</div>
<?php get_footer(); ?>