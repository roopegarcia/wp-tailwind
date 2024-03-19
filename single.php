<?php get_header(); ?>

<div class="max-w-4xl mx-auto prose">
  <h1 class="bg-gradient-to-r from-purple-500 to-pink-500 p-5 text-white">Hey, this is a single.php. - <?php the_title(); ?></h1>
  <?php if (have_posts()) {
    while(have_posts()) {
      the_post(); ?>
      <div>

<h3>Posted in</h3>
<?php
$categories = get_the_category();
$category_list = join( ', ', wp_list_pluck( $categories, 'name' ) );

echo wp_kses_post( $category_list );
?>
      <?php the_post_thumbnail('full', array(
          'class' => 'max-w-4xl mx-auto')); 
          ?>
        <div class="prose"><?php the_content(); ?></div>
      </div>
    <?php }
  } ?>
</div>

<?php get_footer(); ?>