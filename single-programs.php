<?php get_header(); ?>

<div class="max-w-4xl mx-auto px-4 prose">
<div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png" alt="mockup">
        </div> 
  <h1>Hey, this is a single-programs.php, capiche?</h1>
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div>
      <?php the_post_thumbnail('medium', array(
          'class' => 'h-48 w-full object-cover md:h-full md:w-48')); 
          ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
    <?php }
  } ?>
  <a href="<?php echo get_post_type_archive_link('gymlife'); ?>"><button class="goback-arrow mt-5 mb-5 p-2"></button></a>
</div>


<?php get_footer(); ?>