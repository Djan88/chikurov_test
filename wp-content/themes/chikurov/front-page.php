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
            $wp_query = new WP_Query( array(
                'category_name' => 'seminary',
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
            $cur_year = 0;
            $cur_month = 0;
            while ($wp_query->have_posts()) : $wp_query->the_post();
                get_template_part( 'seminar');
            endwhile;
            wp_reset_postdata();
            ?>
            <?php if (  $wp_query->max_num_pages > 1 ) : ?>
              <script>
                var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
                var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
              </script>
              <div id="loadSeminar" class="btn btn-primary btn-lg">Загрузить ещё</div>
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
          <img class="img-responsive pull-left content_img colorbox-147" src="/wp-content/themes/chikurov/img/oblojka.png" alt="">
          <p>Биологическое Центрирование объединяет людей с совершенно различным образованием и профессиями. Эти люди хотят познать принципы формирования здорового и успешного жизнеустройства и проистекающих из него физического здоровья, личностного развития, успешной самореализации в жизни. </p>
          <p>Биологическое Центрирование объясняет не только причины болезней и жизненных неудач, но и место Человека в общем мироустройстве.</p>
          <p>Биологическое Центрирование является продуктом более чем четверть векового моего практического опыта работы с клиентами, предельно холистично по своей сути – и объединяет в себе анатомию/физиологию/клинику с невидимыми глазу и приборам, тонкоматериальными процессами Ума, которые помимо физического тела составляют истинную суть человека.  Эти тонкоматериальные человеческие процессы на стыке души/ума/тела ранее всегда были прерогативой различных практик и религий, а в Биологическом Центрировании, пожалуй, впервые, сведены во вполне материальные и реально работающие алгоритмы схемы и протоколы действия.</p>
          <!-- <a target="_blank" href="http://www.yuchikurov.info/biologicheskoe-centrirovanie/" class="btn btn-primary btn-lg">Читать книгу</a> -->
          <button class="btn btn-primary btn-lg down_book" data-toggle="modal" data-target="#book_down">Скачать книгу бесплатно</button>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
