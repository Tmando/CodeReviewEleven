<?php /* Template Name: SimplePage */ ?>
<?php get_header();

?>
<div class="row">
  <div class="col-sm-9 ">
    <div class="tweaked-margin-left">
          <div class="row rowBot">
            <?php
            			if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
            <div class="col-sm-12 content formPage">
              <form>
                <div class="form-group">
                  <label>Your Name:</label><br>
                  <input class="form-control" type="text" name="firstname">
                </div>
                <div class="form-group">
                  <label>Your Email:</label>
                  <input class="form-control" type="text" name="lastname"><br>
                </div>
                <div class="form-group">
                  <label>Subject:</label>
                  <input class="form-control" type="text" name="subject"><br>
                </div>
                <div class="form-group">
                  <label>Message:</label>
                  <textarea class="form-control" type="text" name="subject" rows="4" cols="50"></textarea>
                </div>
                  <input class="btn-default" type="submit" name="subject">
                </form>
            </div>
            <?php
            			endwhile; endif;
            ?>
          </div> <!-- close class row rowBot -->
      </div> <!-- close class tweaked-margin-left -->
    </div> <!-- close class col-sm-9 -->
    <?php get_sidebar(); ?>
  </div> <!-- close class row -->
<div class="frontFooter">

<?php get_footer();



?>
