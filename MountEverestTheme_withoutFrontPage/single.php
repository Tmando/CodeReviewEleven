<?php get_header();

?>
<div class="row">
  <div class="col-sm-9">
    <div class="tweaked-margin-left">
          <div class="row rowBot">

<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
  <div class="col-sm-12 content">


          <div class="row">
            <div class="col-sm-12">
                    <h1 class="headerStyle"><?php the_title(); ?></h1>
            </div> <!-- close class col-sm-12 -->
          </div> <!-- close class row -->


          <?php if(has_post_thumbnail()) : ?>
            <div class="row">

              <div class="col-sm-5">
                <img class="img-rounded img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>">
              </div> <!-- Close col-sm-5 singleText -->

              <div class="col-sm-7 singleText">
                <?php  the_content(); ?>
              </div> <!-- Close col-sm-7 singleText -->

            </div>
          <?php else:?>
          <div class="row">
            <div class="col-sm-12 singleText">
              <?php the_content(); ?>
            </div> <!-- Close col-sm-12 singleText -->
          </div>
        <?php endif;?>







  </div> <!-- close class col-sm-12 content -->
<?php
			endwhile; endif;
?>

        </div> <!-- close class row -->
      </div> <!-- close class tweaked-margin-left -->
    </div> <!-- close class col-sm-9 -->
    <?php get_sidebar(); ?>
  </div> <!-- close class row rowBot -->


<?php get_footer();



?>
