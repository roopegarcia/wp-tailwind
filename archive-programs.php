<?php get_header(); ?>

<div class="prose max-w-4xl mx-auto flex-auto">
  <h1 class="max-w-4xl text-center border-2 p-10 mb-8 uppercase border-black bg-teal-400 text-black">Programs!</h1>  
</div>

<section class="bg-white dark:bg-gray-900 font-mono">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
      <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <a href="#" class="group relative block h-64 sm:h-80 lg:h-96">
  <span class="absolute inset-0 border-2 border-dashed border-black"></span>

  <div
    class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2"
  >
    <div
      class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8"
    >
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="size-10 sm:size-12"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        />
      </svg>

      <h2 class="mt-4 text-xl font-medium sm:text-2xl">Go around the world</h2>
    </div>

    <div
      class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8"
    >
      <h3 class="mt-4 text-xl font-medium sm:text-2xl">Go around the world</h3>

      <p class="mt-4 text-sm sm:text-base">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, praesentium voluptatem
        omnis atque culpa repellendus.
      </p>

      <p class="mt-8 font-bold">Read more</p>
    </div>
  </div>
</a>
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