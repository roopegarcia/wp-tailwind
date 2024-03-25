<?php get_header(); ?>

<div class="page-container prose max-w-4xl mx-auto flex-auto p-6">
  <!-- <h1 class="bg-gradient-to-r from-purple-500 to-pink-500 p-5 text-white">Hey, this is a single.php. - <?php the_title(); ?></h1> -->
  
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div class="class-tba">
        <!-- <h2 class="">page.php</h2> -->
        <h1 class="text-center font-mono border-2 p-10 mb-8 uppercase border-black bg-gradient-to-r from-purple-500 to-pink-500 text-black"><?php the_title(); ?></h1>
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