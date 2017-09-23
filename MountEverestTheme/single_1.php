<?php get_header();

?>
<div class="row rowBot">
  <div class="col-sm-9 content">
    <div class="tweaked-margin-left-single">
<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
?>



    <div class="row">
        <div class="col-sm-12">
          <h1 class="singleHeadLine text-center"><?php the_title(); ?></h1>
        </div> <!-- Close col-sm-12 -->
    </div> <!-- Close row -->


    <div class="row">
        <?php if(has_post_thumbnail()){ ?>

              <div class="col-sm-5">
                <img class="img-rounded img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>">
              </div> <!-- Close col-sm-5 singleText -->


              <div class="col-sm-7 singleText">
              <?php  the_content(); ?>
              </div> <!-- Close col-sm-7 singleText -->


        <?php }else{ ?>

              <div class="col-sm-12 singleText">
                <?php the_content(); ?>
              </div> <!-- Close col-sm-12 singleText -->

        <?php } ?>
    </div> <!-- Close row -->
















<?php
			endwhile; endif;
?>

    </div> <!-- close class col-sm-9 -->
    </div> <!-- close class tweaked-margin-left -->
    <?php get_sidebar(); ?>
</div> <!-- close class row rowBot -->


<?php get_footer();



?>
