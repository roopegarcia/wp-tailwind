<?php

get_header(); ?>

<div class="max-w-4xl mx-auto px-4">

  <!-- example react component -->
  <div id="render-react-example-here"></div>
  <!-- end example react component -->

  <div class="prose max-w-full">
    <h1>index.php</h1>
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
       

        <?php the_post_thumbnail('medium', array('class' => 'h-48 w-full object-cover md:h-full md:w-48')); ?>

        <div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_content(); ?>
        </div>
      <?php }
    } ?>
  </div>
</div>

<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
  <div class="md:flex">
    <div class="md:shrink-0">
      <img class="h-48 w-full object-cover md:h-full md:w-48" src="https://picsum.photos/id/870/200/200?grayscale&blur=2" alt="Modern building architecture">
    </div>
    <div class="p-8">
      <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Company retreats</div>
      <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></a>
      <p class="mt-2 text-slate-500">Looking to take your team away on a retreat to enjoy awesome food and take in some sunshine? We have a list of places to do just that.</p>
    </div>
  </div>
</div>

<?php get_footer();