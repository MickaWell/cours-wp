<?php /* Template Name: page */ ?>
<?php get_header(); ?>
<div class="col-md-12 bloc">
    
     <?php if (have_posts()) : ?>
  
  
      
        <div class="post-content">
          <?php woocommerce_content(); ?>
        </div>
        
      </div>
  
  <?php endif; ?>
</div>
<?php get_footer(); ?>