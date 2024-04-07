<?php get_header(); ?>

<div class="prose max-w-4xl mx-auto flex-auto">
  <h1 class="max-w-4xl text-center border-2 p-10 mb-8 uppercase border-black text-black">Programs!</h1>  
</div>

<section class="bg-white dark:bg-gray-900 font-mono">
  <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
      <div class="grid gap-8 mb-6 lg:mb-16 md:grid-cols-2">
      <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="group relative block h-64 sm:h-80 lg:h-96">
  <span class="absolute inset-0 border-2 border-dashed border-black"></span>

  <div
    class="relative flex h-full transform items-end border-2 border-black bg-white transition-transform group-hover:-translate-x-2 group-hover:-translate-y-2">
    <div
      class="p-4 !pt-0 transition-opacity group-hover:absolute group-hover:opacity-0 sm:p-6 lg:p-8">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="180" height="180" viewBox="0 0 256 256" xml:space="preserve">
<defs>
</defs>
<g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
	<rect x="25.13" y="40.66" rx="0" ry="0" width="39.75" height="8.67" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(211,211,211); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
	<rect x="0.92" y="40.66" rx="0" ry="0" width="39.75" height="8.67" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(211,211,211); fill-rule: nonzero; opacity: 1;" transform=" matrix(6.123234e-17 -1 1 6.123234e-17 -24.2098 65.7902) "/>
	<rect x="-0.99" y="40.66" rx="0" ry="0" width="26.21" height="8.67" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(211,211,211); fill-rule: nonzero; opacity: 1;" transform=" matrix(6.123234e-17 -1 1 6.123234e-17 -32.8832 57.1168) "/>
	<rect x="49.34" y="40.66" rx="0" ry="0" width="39.75" height="8.67" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(211,211,211); fill-rule: nonzero; opacity: 1;" transform=" matrix(6.123234e-17 -1 1 6.123234e-17 24.2098 114.2098) "/>
	<rect x="64.78" y="40.66" rx="0" ry="0" width="26.21" height="8.67" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(211,211,211); fill-rule: nonzero; opacity: 1;" transform=" matrix(6.123234e-17 -1 1 6.123234e-17 32.8832 122.8832) "/>
	<rect x="1" y="40.66" rx="0" ry="0" width="6.78" height="8.67" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(211,211,211); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
	<rect x="82.22" y="40.66" rx="0" ry="0" width="6.78" height="8.67" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(211,211,211); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) "/>
	<path d="M 64.873 50.337 H 25.127 c -0.552 0 -1 -0.447 -1 -1 v -8.674 c 0 -0.552 0.448 -1 1 -1 h 39.746 c 0.553 0 1 0.448 1 1 v 8.674 C 65.873 49.89 65.426 50.337 64.873 50.337 z M 26.127 48.337 h 37.746 v -6.674 H 26.127 V 48.337 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 25.127 65.873 h -8.673 c -0.552 0 -1 -0.447 -1 -1 V 25.127 c 0 -0.552 0.448 -1 1 -1 h 8.673 c 0.552 0 1 0.448 1 1 v 39.746 C 26.127 65.426 25.679 65.873 25.127 65.873 z M 17.454 63.873 h 6.673 V 26.127 h -6.673 V 63.873 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 16.454 59.104 H 7.78 c -0.552 0 -1 -0.447 -1 -1 V 31.896 c 0 -0.552 0.448 -1 1 -1 h 8.673 c 0.552 0 1 0.448 1 1 v 26.208 C 17.454 58.656 17.006 59.104 16.454 59.104 z M 8.78 57.104 h 6.673 V 32.896 H 8.78 V 57.104 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 73.547 65.873 h -8.674 c -0.553 0 -1 -0.447 -1 -1 V 25.127 c 0 -0.552 0.447 -1 1 -1 h 8.674 c 0.553 0 1 0.448 1 1 v 39.746 C 74.547 65.426 74.1 65.873 73.547 65.873 z M 65.873 63.873 h 6.674 V 26.127 h -6.674 V 63.873 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 82.22 59.104 h -8.673 c -0.553 0 -1 -0.447 -1 -1 V 31.896 c 0 -0.552 0.447 -1 1 -1 h 8.673 c 0.553 0 1 0.448 1 1 v 26.208 C 83.22 58.656 82.772 59.104 82.22 59.104 z M 74.547 57.104 h 6.673 V 32.896 h -6.673 V 57.104 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 7.78 50.337 H 1 c -0.552 0 -1 -0.447 -1 -1 v -8.674 c 0 -0.552 0.448 -1 1 -1 h 6.78 c 0.552 0 1 0.448 1 1 v 8.674 C 8.78 49.89 8.333 50.337 7.78 50.337 z M 2 48.337 h 4.78 v -6.674 H 2 V 48.337 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
	<path d="M 89 50.337 h -6.78 c -0.553 0 -1 -0.447 -1 -1 v -8.674 c 0 -0.552 0.447 -1 1 -1 H 89 c 0.553 0 1 0.448 1 1 v 8.674 C 90 49.89 89.553 50.337 89 50.337 z M 83.22 48.337 H 88 v -6.674 h -4.78 V 48.337 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
</g>
</svg>

      <h2 class="mt-4 text-xl font-medium sm:text-2xl"><?php the_title(); ?></h2>
      
    </div>

    <div
      class="absolute p-4 opacity-0 transition-opacity group-hover:relative group-hover:opacity-100 sm:p-6 lg:p-8"
    >
      <h3 class="mt-4 text-xl font-medium sm:text-2xl"><?php the_title(); ?></h3>

      <p class="mt-4 text-sm sm:text-base">
        <?php the_field('program_description'); ?>
      </p>

      <p class="mt-8 font-bold">More</p>

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