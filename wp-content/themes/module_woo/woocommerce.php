<?php /* Template Name: page */ ?>
<?php get_header(); ?>
<div class="col-md-12 bloc">
    
     <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post">
          <?php the_post_thumbnail(); ?>
      <h1 class="post-title"><?php the_title(); ?></h1>
        <h1 class="post-info" >
      <?php the_date('j M Y ') ?>
        </h1>
        
      
        <div class="post-content">
          <?php woocommerce_content(); ?>
        </div>
        
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php get_footer(); ?>