<?php get_header(); ?>

<div class="max-w-4xl mx-auto px-4">
  <h1>Hey, this is an archive-gymlife.php, not a post.</h1>
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div>
      <?php the_post_thumbnail('medium', array(
          'class' => 'h-48 w-full object-cover md:h-full md:w-48')); 
          ?>

        <h1><?php the_title(); ?></h1>
        <p>Content here...</p>
      </div>
    <?php }
  } ?>
  <!-- This button goes to single-gymlife.php -->
  <div class="pre-footer container mx-auto">
  <button class="h-10 px-6 mt-8 mb-8 font-semibold rounded-md bg-black text-white" type="submit">
    <a class="archive-link" href="<?php echo get_post_type_archive_link('gymlife'); ?>">View all</a>
  </button>
</div>
</div>
<?php get_footer(); ?>