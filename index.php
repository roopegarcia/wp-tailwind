<?php get_header(); ?>

<div class="prose max-w-4xl mx-auto flex-auto">
  <h1 class="max-w-4xl text-center border-2 p-10 mb-8 uppercase border-black bg-teal-400 text-black">Posts... Read 'em all!</h1>  
</div>

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
      <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
        <!-- <h1 class="text-center border-2 p-10 mb-8 uppercase border-black bg-teal-400 text-black">Pick your topic</h1> -->
        <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
              <a href="<?php the_permalink(); ?>">
                  <!-- <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar"> -->
                  <?php the_post_thumbnail('post-listing-image', array(
                'class' => 'w-full rounded-lg sm:rounded-none sm:rounded-l-lg')); 
              ?></a>
              <div class="p-5">
                  <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br />
                  </h3>
                  <!-- <p><?php comments_number( 'no responses', 'one response', '% responses' ); ?></p> -->
                  <span class="text-gray-500 dark:text-gray-400">Posted in: <?php the_category(', '); ?></span>
                  <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>
                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
              </div>
          </div>
      

    <?php }
  } ?>
      </div>  
  </div>
</section>
<div class="paginate-archive mb-10 tracking-widest text-xl">
      <!-- Put this where you want the paginate_links to appear -->
      <?php echo paginate_links( array(

      'prev_text' => '<span></span>',
      'next_text' => '<span></span>'

      )); ?>
    </div>

<?php get_footer(); ?>