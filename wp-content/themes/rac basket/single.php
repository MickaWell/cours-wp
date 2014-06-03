

<?php get_header(); ?>
<div class="main_single_<?php
foreach((get_the_category()) as $cat) {
echo $cat->cat_name;
} ?>">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post">
		  <?php the_post_thumbnail(); ?>
      <h1 class="post-title"><?php the_title(); ?></h1>
        <h1 class="post-info" >
      <?php the_date('j M Y ') ?>
        </h1>
		
      
        <div class="post-content">
          <?php the_content(); ?>
        </div>
        
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>


