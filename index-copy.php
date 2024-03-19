<?php get_header(); ?>

  <div class="container-main__gymlife prose mx-auto">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div class="container-card max-w-5xl">
    <div class="lorem columns-2">
        <?php the_title(); ?>
        <?php the_post_thumbnail('medium', array(
            'class' => 'h-48 w-full object-cover md:h-full md:w-48 rotate-12 aspect-square')); 
            ?>
          <?php the_excerpt(); ?>

        </div>
        </div>
      <?php }
    } ?>
    <div class="nav-previous alignleft"><?php previous_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php next_posts_link( 'Newer posts' ); ?></div>
</div>
    <!-- This button goes to single-gymlife.php
    <div class="pre-footer container mx-auto">
    <button class="h-10 px-6 mt-8 mb-8 font-semibold rounded-md bg-black text-white" type="submit">
      <a class="archive-link" href="<?php echo get_post_type_archive_link('gymlife'); ?>">View all</a>
    </button> -->
<?php get_footer(); ?>