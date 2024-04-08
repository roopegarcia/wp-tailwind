<?php get_header(); ?>

<div class="max-w-4xl mx-auto px-4 bg-layer">
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

            <!-- start your html here -->
      <div class="flex items-center mb-10">
        <div class="w-24 rounded-2xl overflow-hidden text-center shrink-0 bg-stone-500">
          <span class="text-white block text-xl uppercase leading-8"><?php the_time('M'); ?></span>
          <span class="block bg-stone-100 text-stone-700 text-5xl py-2"><span class="relative bottom-1"><?php the_time('d'); ?></span></span>
        </div>
        <div class="pl-6">
          <h1 class="text-3xl sm:text-4xl font-bold"><?php the_title(); ?></h1>
          <p class="text-xl text-gray-400">Gender: <?php the_field('gender'); ?></p>
        </div>
      </div>
        
        <span class="prose"><?php the_content(); ?></span>
      </div>
    <?php }
  } ?>

  <a class="no-underline " href="<?php echo get_post_type_archive_link('programs'); ?>"><button class="goback-arrow mt-5 mb-5 p-2">BACK</button></a>
</div>


<?php get_footer(); ?>