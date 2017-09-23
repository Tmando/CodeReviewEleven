<?php /* Template Name: ArchiveTemplate */ ?>
<?php get_header();

?>
<div class="row">
  <div class="col-sm-9 ">
    <div class="tweaked-margin-left">
          <div class="row rowBot">

<?php
      $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
      if ( $wpb_all_query->have_posts() ) :
			if ( have_posts() ) : while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
?>
  <div class="col-sm-6 content">


          <div class="row">
            <div class="col-sm-12">
                    <a class="headerStyle" href="<?php echo get_permalink(); ?>"><h1 class="headerStyle"><?php the_title(); ?></h1></a>
            </div> <!-- close class col-sm-12 -->
          </div> <!-- close class row -->


          <?php if(has_post_thumbnail()) : ?>
          <div class="row">
            <div class="col-sm-12">
              <a href="<?php echo get_permalink(); ?>"><img class="img-rounded img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
              <p class="textStyle"> <?php echo get_the_date() ." "; the_author();?> </p>
            </div> <!-- close class col-sm-12 -->
          </div>  <!-- close class col-sm-12 -->
          <?php endif;?>

          <div class="row">
            <div class="col-sm-12">
              <span class="linkStyle">
                <?php the_excerpt(); ?>
              </span>
            </div> <!-- close class col-sm-12 -->
          </div> <!-- close class col-sm-12 -->


          <div class="row">
            <div class="col-sm-12">
              <span class="linkStyle">
                <a class="textStyle" href="<?php echo get_permalink(); ?>">More..</a>
              </span>
            </div> <!-- close class col-sm-12 -->
          </div> <!-- close class col-sm-12 -->








  </div> <!-- close class col-sm-6 content -->
<?php
			endwhile; endif;endif;
?>

        </div> <!-- close class row -->
      </div> <!-- close class tweaked-margin-left -->
    </div> <!-- close class col-sm-9 -->
    <?php get_sidebar(); ?>
  </div> <!-- close class row rowBot -->


<?php get_footer();



?>
