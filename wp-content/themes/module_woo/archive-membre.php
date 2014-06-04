<?php
/* 
Template Name: membres
*/
?>
<?php get_header(); ?>
<div class="col-md-12 bloc">
    <?php //ouverture d'une nouvelle boucle qui va chercher nos livres
      $books_loop = new WP_Query( 'post_type=membre');
        if( $books_loop->have_posts() ):
           while( $books_loop->have_posts() ): $books_loop->the_post();?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <h1> <?php the_field("date_de_naissance"); ?> </h1>
            </article>
           <?php endwhile;
        endif;
      wp_reset_postdata();
      ?>
    
</div>
<?php get_footer(); ?>