<?php get_header(); ?>

<div class="max-w-4xl mx-auto px-4 prose bg-layer">
<div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <!-- <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup"> -->
</div> 
  <!-- <h1>Hey, this is a single-programs.php, capiche?</h1> -->
  <!-- <img src="<?php echo get_stylesheet_directory_uri() . '/img/ladies-banner.jpg'; ?>" class="post-image" /> -->
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div>
      <!-- <?php the_post_thumbnail('post-image', array(
            'class' => 'steve')); 
            ?> -->
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    <?php }
  } ?>
  <a class="no-underline " href="<?php echo get_post_type_archive_link('programs'); ?>"><button class="goback-arrow mt-5 mb-5 p-2">BACK</button></a>
</div>


<?php get_footer(); ?>