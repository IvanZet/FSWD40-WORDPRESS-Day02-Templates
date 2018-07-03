<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CFV
 */

get_header(); ?>

<h1 class="text-center"> <?php bloginfo('name'); ?></h1>

<div class="row">
  
<?php if(have_posts()) : ?>
	<?php  while(have_posts()): the_post();  ?>

<div class="col-md-3">
  <?php if (has_post_thumbnail()) {
    the_post_thumbnail();
  }?>
</div>

<div class="col-md-9">
  <a href="<?php the_permalink(); ?>" title="">
    <h4><?php the_title(); ?></h4></a>
  <p>Author: <?php the_author(); ?> </p>
  <p><?php the_content(); ?>  </p>
  <div>
    <span class="badge">Posted <?php the_time('j F Y G:i'); ?>  </span>
    <div class="pull-right">
      <span class="label label-default"><?php the_category(', '); ?></span>
    </div>
  </div>
  <hr>
</div>

<?php endwhile; ?>
<?php endif; ?>

</div>

<!-- Start Bootstrap native

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> -->


  <!--End Bootstrap native -->

<?php 
get_footer();
 ?>