<?php get_header(); ?>
<section class="doctor seminar text-center" id="doctor">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="col-md-12">
        <?php
        the_content(__('(more...)'));
        edit_post_link(__('Edit This'));
        ?>
      </div>
    </div>
  </div>
  <?php endwhile; else: ?>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  <?php endif; ?>
</section>
<?php get_footer(); ?>
