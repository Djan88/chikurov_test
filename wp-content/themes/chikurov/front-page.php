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
                'posts_per_page' => '10',
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
  </section>
  <!-- end of doctor section -->
  <section class="doctor seminar text-center" id="bc">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Биологическое центрирование</h2>
        </div>
        <div class="col-md-12 bc">
          <img class="img-responsive pull-left content_img colorbox-147" src="http://yuchikurov.info/wp-content/themes/chikurov/img/oblojka.png" alt="">
          <p>Биологическое Центрирование объединяет людей с совершенно различным образованием и профессиями. Эти люди хотят познать принципы формирования здорового и успешного жизнеустройства и проистекающих из него физического здоровья, личностного развития, успешной самореализации в жизни. </p>
          <p>Биологическое Центрирование объясняет не только причины болезней и жизненных неудач, но и место Человека в общем мироустройстве.</p>
          <p>Биологическое Центрирование является продуктом более чем четверть векового моего практического опыта работы с клиентами, предельно холистично по своей сути – и объединяет в себе анатомию/физиологию/клинику с невидимыми глазу и приборам, тонкоматериальными процессами Ума, которые помимо физического тела составляют истинную суть человека.  Эти тонкоматериальные человеческие процессы на стыке души/ума/тела ранее всегда были прерогативой различных практик и религий, а в Биологическом Центрировании, пожалуй, впервые, сведены во вполне материальные и реально работающие алгоритмы схемы и протоколы действия.</p>
          <a target="_blank" href="http://www.yuchikurov.info/biologicheskoe-centrirovanie/" class="btn btn-primary btn-lg">Читать книгу</a>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
