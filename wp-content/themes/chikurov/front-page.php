<?php get_header(); ?>
  <section class="doctor text-center" id="doctor">
    <div class="container">
      <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php
          the_content(__('(more...)'));
          edit_post_link(__('Edit This'));
          ?>
        <?php endwhile; else: ?>
          <?php _e('Sorry, no posts matched your criteria.'); ?>
        <?php endif; ?>
      </div>
    </div>
  </section><!-- end of doctor section -->
  <section class="seminars text-center" id="seminars">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h2>Расписание семинаров</h2></div>
        <div class="col-md-12 seminar_wrap">
          <div class="row">
            <?php
            // The Query
            $querySeminar = new WP_Query( array(
                'category_name' => 'seminary',
                'posts_per_page' => '9',
                'order' => 'ASC',
                'orderby' => 'meta_value',
                'meta_key' => 'seminar_start',
                'meta_query' => array(
                    array(
                        'key' => 'seminar_start',
                        'value' => date('Y-m-d'),
                        'compare' => '>=',
                        'type' => 'DATE'
                    )
                )
            ));
            while ($querySeminar->have_posts()) : $querySeminar->the_post();
                get_template_part( 'seminar', get_post_format() );
            endwhile;
            wp_reset_postdata();
            ?>
            <?php if (  $querySeminar->max_num_pages > 1 ) : ?>
                <script>
                    var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                    var true_posts = '<?php echo serialize($querySeminar->query_vars); ?>';
                    var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                    var max_pages = '<?php echo $querySeminar->max_num_pages; ?>';
                </script>
                <div href="seminar.html" id="true_loadmore" class="btn btn-primary btn-lg">Загрузить еще</div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section><!-- end of doctor section -->
<?php get_footer(); ?>
