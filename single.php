<?php get_header(); ?>

<div class="post-container prose max-w-4xl mx-auto flex-auto p-6 font-sans">
  <!-- <h1 class="bg-gradient-to-r from-purple-500 to-pink-500 p-5 text-white">Hey, this is a single.php. - <?php the_title(); ?></h1> -->
  
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div class="class-tba">
        <h1><?php the_title(); ?></h1>

        <?php $u_time = get_the_time('U');
          $u_modified_time = get_the_modified_time('U');
          if ($u_modified_time >= $u_time + 86400) {
            echo "<p>Last Updated on ";
            the_modified_time('F jS, Y');
            // echo " at ";
            the_modified_time();
            echo "</p> ";
          } ?>

        <?php the_post_thumbnail('full', array(
            'class' => 'steve')); 
            ?>
          <div class=""><?php the_content(); ?></div>
          <!-- <p class="goback-arrow mt-5 mb-5 p-2 steve-button text-white"><?php echo get_the_category_list(', ') ?></p> -->
          <button class="font-sans uppercase goback-arrow mt-5 mb-5 p-2"><?php the_category(',  '); ?></button>

        </div>
      <?php }
  } ?>
</div>

<?php get_footer(); ?>