<?php get_header(); ?>

<div class="prose max-w-4xl mx-auto flex-auto">
  <h1 class="text-center border-2 p-10 mb-8 uppercase border-black bg-teal-400 text-black">Pick your topic</h1>  
</div>

<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">

      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">

      <?php 
        $homePageMain = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name' => 'cut24'
        ));

        while($homePageMain->have_posts()) {
          $homePageMain->the_post(); ?>
            
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
          <a href="<?php the_permalink(); ?>">
          
                  <?php the_post_thumbnail('post-listing-image', array(
                'class' => 'w-full rounded-lg sm:rounded-none sm:rounded-l-lg')); 
              ?>
                </a>
              <div class="p-5">
                  <a href="<?php the_permalink(); ?>"><h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <?php the_title(); ?>
                  </h3></a>
                  <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>

                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                  <ul class="flex space-x-4 sm:mt-0">
                    <li class="category-bg font-medium uppercase"><?php the_category(', '); ?></li>
                  </ul>
              </div>
          </div>
        <?php }
      ?>

      <?php wp_reset_postdata(); ?>

      
      <?php 
        $homePagePosts = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name' => 'training'
        ));

        while($homePagePosts->have_posts()) {
          $homePagePosts->the_post(); ?>
            
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
          <a href="<?php the_permalink(); ?>">
          
                  <?php the_post_thumbnail('post-listing-image', array(
                'class' => 'w-full rounded-lg sm:rounded-none sm:rounded-l-lg')); 
              ?>
                </a>
              <div class="p-5">
                  <a href="<?php the_permalink(); ?>"><h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <?php the_title(); ?>
                  </h3></a>
                  <!-- <span class="text-gray-500 dark:text-gray-400"><?php the_date( 'F jS, Y', '<h2>', '</h2>' ); ?></span> -->
                  <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>


                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                  <ul class="flex space-x-4 sm:mt-0">
                    <li class="category-bg font-medium uppercase"><?php the_category(', '); ?></li>
                  </ul>
              </div>
          </div>
        <?php }
      ?>

      <?php wp_reset_postdata(); ?>

      <?php 
        $homePagePosts2 = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name' => 'nutrition'
        ));

        while($homePagePosts2->have_posts()) {
          $homePagePosts2->the_post(); ?>
          
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
          <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-listing-image', array(
                'class' => 'w-full rounded-lg sm:rounded-none sm:rounded-l-lg')); 
              ?>
                </a>
              <div class="p-5">
              <a href="<?php the_permalink(); ?>"><h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <?php the_title(); ?>
                  </h3></a>
                  <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>

                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                  <ul class="flex space-x-4 sm:mt-0">
                    <li class="category-bg font-medium uppercase"><?php the_category(', '); ?></li>
                  </ul>
              </div>
          </div>
        <?php }
      ?>

      <?php 
        $homePagePosts3 = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name' => 'life'
        ));

        while($homePagePosts3->have_posts()) {
          $homePagePosts3->the_post(); ?>
          
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
          <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-listing-image', array(
                'class' => 'w-full rounded-lg sm:rounded-none sm:rounded-l-lg')); 
              ?>
                </a>
              <div class="p-5">
              <a href="<?php the_permalink(); ?>"><h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <?php the_title(); ?>
                  </h3></a>
                  <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>

                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                  <ul class="flex space-x-4 sm:mt-0">
                    <li class="category-bg font-medium uppercase"><?php the_category(', '); ?></li>
                  </ul>
              </div>
          </div>
        <?php }
      ?>

      <?php wp_reset_postdata(); ?>

      <?php 
        $homePagePosts4 = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name' => 'music'
        ));

        while($homePagePosts4->have_posts()) {
          $homePagePosts4->the_post(); ?>
          
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
          <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-listing-image', array(
                'class' => 'w-full rounded-lg sm:rounded-none sm:rounded-l-lg')); 
              ?>
                </a>
              <div class="p-5">
              <a href="<?php the_permalink(); ?>"><h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <?php the_title(); ?>
                  </h3></a>
                  <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>

                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                  <ul class="flex space-x-4 sm:mt-0">
                      <!-- <li>
                          <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                          </a>
                      </li> -->
                      <ul class="flex space-x-4 sm:mt-0">
                    <li class="category-bg font-medium uppercase"><?php the_category(', '); ?></li>
                  </ul>
                  </ul>
              </div>
          </div>
        <?php }
      ?>

      <?php wp_reset_postdata(); ?>

      <?php 
        $homePagePosts5 = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name' => 'running'
        ));

        while($homePagePosts5->have_posts()) {
          $homePagePosts5->the_post(); ?>
          
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
          <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-listing-image', array(
                'class' => 'w-full rounded-lg sm:rounded-none sm:rounded-l-lg')); 
              ?>
                </a>
              <div class="p-5">
              <a href="<?php the_permalink(); ?>"><h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <?php the_title(); ?>
                  </h3></a>
                  <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>

                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                  <ul class="flex space-x-4 sm:mt-0">
                    <li class="category-bg font-medium uppercase"><?php the_category(', '); ?></li>
                  </ul>
              </div>
          </div>
        <?php }
      ?>

      <?php wp_reset_postdata(); ?>

      <?php 
        $homePagePosts6 = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name' => 'development'
        ));

        while($homePagePosts6->have_posts()) {
          $homePagePosts6->the_post(); ?>
          
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
          <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-listing-image', array(
                'class' => 'w-full rounded-lg sm:rounded-none sm:rounded-l-lg')); 
              ?>
                </a>
              <div class="p-5">
              <a href="<?php the_permalink(); ?>"><h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <?php the_title(); ?>
                  </h3></a>
                  <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>

                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                  <ul class="flex space-x-4 sm:mt-0">
                    <li class="category-bg font-medium uppercase"><?php the_category(', '); ?></li>
                  </ul>
              </div>
          </div>
        <?php }
      ?>

      <?php wp_reset_postdata(); ?>

      <?php 
        $homePagePosts7 = new WP_Query(array(
          'posts_per_page' => 1,
          'category_name' => 'reading'
        ));

        while($homePagePosts7->have_posts()) {
          $homePagePosts7->the_post(); ?>
          
          <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700">
          <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('post-listing-image', array(
                'class' => 'w-full rounded-lg sm:rounded-none sm:rounded-l-lg')); 
              ?>
                </a>
              <div class="p-5">
              <a href="<?php the_permalink(); ?>"><h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                  <?php the_title(); ?>
                  </h3></a>
                  <p class="text-gray-500 dark:text-gray-400">Last update: <?php the_field('post_date');?></p>

                  <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400"><?php the_excerpt(); ?></p>
                  <ul class="flex space-x-4 sm:mt-0">
                    <li class="category-bg font-medium uppercase"><?php the_category(', '); ?></li>
                  </ul>
              </div>
          </div>
        <?php }
      ?>

      <?php wp_reset_postdata(); ?>
      </div>  
  </div>
</section>

<?php get_footer(); ?>