<?php get_header(); ?>

<div class="class-tba prose max-w-4xl mx-auto flex-auto">
  <div class="prose max-w-4xl mx-auto flex-auto">
    <h1 class="text-center border-2 p-10 mb-8 uppercase border-black  bg-gradient-to-r from-purple-500 to-pink-500 text-black">404.exe</h1>  

    <h2><?php _e( 'This is 404, not found etc, how did you even...?', 'ballstothewall' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'ballstothewall' ); ?></p>
          <div class="search-form form-input mb-10">
					  <?php get_search_form(); ?>
          </div>

  </div>
</div>

<?php get_footer(); ?>