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
  <!-- Мастера -->
  <section class="seminars text-center" id="lectors">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h2>Мастера школы</h2></div>
        <div class="col-md-12">
          <div class="school-lector col-md-2 col-sm-5 col-xs-12">
            <a target="_blank" href="http://www.yuchikurov.info/members/irina_ivanova/">
              <img src="<?php bloginfo('template_url'); ?>/img/ivanova.jpg" alt="">
              <div class="lector_name">Ирина Иванова</div>
            </a>
            <div class="lector_city">г.Киев</div>
            <div class="lector_tel"><span class="glyphicon glyphicon-earphone"></span> +38(099)294-82-24</div>
            <div class="lector_email">
              <a href="mailto:drivanova524@gmail.com"><span class="glyphicon glyphicon-envelope"></span> drivanova524@gmail.com</a>
            </div>
          </div>
          <div class="school-lector col-md-2 col-sm-5 col-xs-12">
            <a target="_blank" href="http://www.yuchikurov.info/members/Bazilevs/">
              <img src="<?php bloginfo('template_url'); ?>/img/kiselev.jpg" alt="">
              <div class="lector_name">Василий Киселев</div>
            </a>
            <div class="lector_city">г.Санкт-Петербург</div>
            <div class="lector_tel"><span class="glyphicon glyphicon-earphone"></span> +7(911)210-48-99</div>
            <div class="lector_email">
              <a href="mailto:npobm@yandex.ru"><span class="glyphicon glyphicon-envelope"></span> npobm@yandex.ru</a>
            </div>
          </div>
          <div class="school-lector col-md-2 col-sm-5 col-xs-12">
            <a target="_blank" href="http://www.yuchikurov.info/members/zukule-elena/">
              <img src="<?php bloginfo('template_url'); ?>/img/zukule.jpeg" alt="">
              <div class="lector_name">Елена Зукуле</div>
            </a>
            <div class="lector_city">г.Рига (Латвия)</div>
            <div class="lector_tel"><span class="glyphicon glyphicon-earphone"></span> +(371)295-65-911</div>
            <div class="lector_email">
              <a href="mailto:zukule7@gmail.com"><span class="glyphicon glyphicon-envelope"></span> zukule7@gmail.com</a>
            </div>
          </div>
          <div class="school-lector col-md-2 col-sm-5 col-xs-12">
            <a target="_blank" href="http://www.yuchikurov.info/members/e1e7e/">
              <img src="<?php bloginfo('template_url'); ?>/img/stekanov.png" alt="">
              <div class="lector_name">Сергей Стеканов</div>
            </a>
            <div class="lector_city">г.Москва</div>
            <div class="lector_tel"><span class="glyphicon glyphicon-earphone"></span> +7(909)656-48-47</div>
            <div class="lector_email">
              <a href="mailto:e1e7e@list.ru"><span class="glyphicon glyphicon-envelope"></span> e1e7e@list.ru</a>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="school-lector col-md-2 col-sm-5 col-xs-12">
            <a target="_blank" href="http://www.yuchikurov.info/members/salehova_marina/">
              <img src="<?php bloginfo('template_url'); ?>/img/salechova.jpg" alt="">
              <div class="lector_name">Марина Салехова</div>
            </a>
            <div class="lector_city">г.Москва</div>
            <div class="lector_tel"><span class="glyphicon glyphicon-earphone"></span> +7(925)792-98-22</div>
            <div class="lector_email">
              <a href="mailto:7929822@mail.ru"><span class="glyphicon glyphicon-envelope"></span> 7929822@mail.ru</a>
            </div>
          </div>
          <div class="school-lector col-md-2 col-sm-5 col-xs-12">
            <a target="_blank" href="http://www.yuchikurov.info/members/plotnikov/">
              <img src="<?php bloginfo('template_url'); ?>/img/plotnikov.jpg" alt="">
              <div class="lector_name">Олег Плотников</div>
            </a>
            <div class="lector_city">г.Москва</div>
            <div class="lector_tel"><span class="glyphicon glyphicon-earphone"></span> +7(977)710-72-41</div>
            <div class="lector_email">
              <a href="mailto:plotnikov_n89@mail.ru"><span class="glyphicon glyphicon-envelope"></span> plotnikov_n89@mail.ru</a>
            </div>
          </div>
          <div class="school-lector col-md-2 col-sm-5 col-xs-12">
            <a target="_blank" href="http://www.yuchikurov.info/members/galina-63/">
              <img src="<?php bloginfo('template_url'); ?>/img/moskalenko.png" alt="">
              <div class="lector_name">Галина Москаленко</div>
            </a>
            <div class="lector_city">г.Новороссийск</div>
            <div class="lector_tel"><span class="glyphicon glyphicon-earphone"></span> +7(967)312-07-96</div>
            <div class="lector_email">
              <a href="mailto:63-galina@mail.ru"><span class="glyphicon glyphicon-envelope"></span> 63-galina@mail.ru</a>
            </div>
          </div>
          <div class="school-lector col-md-2 col-sm-5 col-xs-12">
            <a target="_blank" href="http://www.yuchikurov.info/members/paltus/">
              <img src="<?php bloginfo('template_url'); ?>/img/pavlenok.jpg" alt="">
              <div class="lector_name">Вячеслав Павленок</div>
            </a>
            <div class="lector_city">г.Южно-Сахалинск</div>
            <div class="lector_tel" style="color: transparent;"><span class="glyphicon glyphicon-earphone"></span> +7(914)756-92-82</div>
            <div class="lector_email">
              <a href="mailto:dr.paltus@mail.ru"><span class="glyphicon glyphicon-envelope"></span> dr.paltus@mail.ru</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="seminars text-center" id="seminars">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><h2>Расписание семинаров</h2></div>
        <div class="cyties col-md-12">
          <button type="button" data-filter_s="all" class="btn btn-success btn_seminar_filter active">Все семинары</button>
          <button type="button" data-filter_s="msk" class="btn btn-warning btn_seminar_filter">Москва</button>
          <button type="button" data-filter_s="spb" class="btn btn-warning btn_seminar_filter">Санкт—Петербург</button>
          <button type="button" data-filter_s="kiev" class="btn btn-warning btn_seminar_filter">Киев</button>
          <button type="button" data-filter_s="riga" class="btn btn-warning btn_seminar_filter">Рига</button>
          <button type="button" data-filter_s="online" class="btn btn-info btn_seminar_filter">Онлайн школа</button>
        </div>
        <div class="autors col-md-12">
          <button type="button" data-filter_s="ch" class="btn btn-warning btn_seminar_filter">Юрий Чикуров</button>
          <button type="button" data-filter_s="iv" class="btn btn-warning btn_seminar_filter">Ирина Иванова</button>
          <button type="button" data-filter_s="ks" class="btn btn-warning btn_seminar_filter">Василий Киселев</button>
          <!-- <button type="button" data-filter_s="is" class="btn btn-warning btn_seminar_filter">Никита Истомин</button> -->
          <button type="button" data-filter_s="zk" class="btn btn-warning btn_seminar_filter">Елена Зукуле</button>
          <button type="button" data-filter_s="sh" class="btn btn-warning btn_seminar_filter">Марина Салехова</button>
          <button type="button" data-filter_s="pl" class="btn btn-warning btn_seminar_filter">Олег Плотников</button>
          <button type="button" data-filter_s="st" class="btn btn-warning btn_seminar_filter">Сергей Стеканов</button>
          <button type="button" data-filter_s="ms" class="btn btn-warning btn_seminar_filter">Галина Москаленко</button>
          <!-- <button type="button" data-filter_s="pa" class="btn btn-warning btn_seminar_filter">Вячеслав Павленок</button> -->
        </div>
        <div class="autors col-md-12">
          
        </div>
        <div class="seminar__alert col-md-12">
          <div class="row">
            <div class="col-md-12 seminar__alert_header">Внимание! В связи со сложившейся ситуацией следующие семинары переносятся на более поздние даты:</div>
            <div class="col-md-12 seminar__alert_item">"БЦ2. Продвинутый семинар по Биологическому центрированию" перносится с 3-5 апреля 2020 на 8-10 мая 2020</div>
            <div class="col-md-12 seminar__alert_item">"MARAKATA – Мастер реальности" перносится с 10-12 апреля 2020 на 15-17 мая 2020</div>
            <div class="col-md-12 seminar__alert_footer">Актуальную информацию Вы всегда можете уточнить по телефону +7 (495) 135-25-48</div>
          </div>
        </div>
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
                        'key' => 'seminar_end',
                        'value' => date('Y-m-d'),
                        'compare' => '>=',
                        'type' => 'DATE'
                    )
                )
            ));
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
              </script>
              <div id="loadSeminar" class="btn btn-primary btn-lg hidden">Загрузить ещё</div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of doctor section -->
  <section class="seminars text-center reviews_wrap" id="lectors">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Отзывы</h2>
          <h4>Каждый отзыв снабжен ссылкой на первоисточник. Кликнув на "читать далее" можно увидеть отзыв целиком.</h4>
        </div>
        <div class="col-md-12  bc reviews">
          <?php
          // The Query
          $query_reviews = new WP_Query( array( 'category_name' => 'otzyvy', 'posts_per_page' => '4' ) );
          $cur_month = 0;
          while ($query_reviews->have_posts()) : $query_reviews->the_post();
              echo '<div class="review col-md-3 col-sm-6 col-xs-12">';
              echo '<div class="review_inner">';
              echo '<a href="';
              if (get_field('link_review')) {
                echo the_field('link_review');
              } else {
                echo the_permalink();
              }
              echo '" target="_blank" title="Ссылка на источник">';
              echo '<img src="';
              echo the_field('img_review');
              echo '" alt="">';
              echo '</a>';
              echo '<p>';
              echo the_content(__('(читать полностью)'));
              echo '</p>';
              echo '<a href="';
              if (get_field('link_review')) {
                echo the_field('link_review');
              } else {
                echo the_permalink();
              }
              echo '" target="_blank" title="Ссылка на источник">';
              echo the_field('name_review');
              echo '</a>';
              echo '</div>';
              echo '</div>';
          endwhile;
          wp_reset_postdata();
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 reviews_more"><a href="/category/otzyvy">Читать все отзывы</a></div>
      </div>
    </div>
  </section>
  <!-- end of reviews section -->
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
  <!-- end of reviews section -->
  <section class="doctor seminar text-center" id="bc">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Магазин товаров БЦ</h2>
        </div>
        <div class="col-md-12 bc">
          <img class="img-responsive pull-left content_img colorbox-147" src="/wp-content/themes/chikurov/img/shop-bc.png" alt="">
          <p>Интернет-магазин <a href="https://shop-bc.com">shop-bc.com</a> – инструменты для тех, то занимается по методике "Биологическое центрирование"</p>
          <p>Мы рады предложить вам недорогие, но качественные товары с подробными описаниями, характеристиками и фотографиями. У нас Вы можете купить замечательные товары.</p>
          <p>Продажа небольшого ассортимента разнообразных товаров – основная специализация нашего интернет-магазина. Мы доставим ваш заказ, осуществим подробную консультацию по товарам и поможем с выбором.</p>
          <p>Магазин <a href="https://shop-bc.com">shop-bc.com</a> предлагает Вам купить книги и многое другое с доставкой! Все виды современных товаров от эконом класса до более дорогих представлены в нашем каталоге.</p>
          <!-- <a target="_blank" href="http://www.yuchikurov.info/biologicheskoe-centrirovanie/" class="btn btn-primary btn-lg">Читать книгу</a> -->
          <a target="_blank" href="https://shop-bc.com" class="btn btn-primary btn-lg">shop-bc.com</a>
        </div>
        <div class="peekobot_wrap peekobot_wrap-closed">
          <div class="peekobot_paranja">
            <div class="pekobot_close"><i class="fa fa-times"></i></div>
            <div class="pekobot_open"><i class="fa fa-comment"></i></i></div>
          </div>
          <div id="peekobot-container">
            <div id="peekobot"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>
