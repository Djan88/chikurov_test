<?php get_header(); ?>
  <section class="doctor" id="doctor">
    <div class="container chikurov_info">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h1 class="main_heading">Биологическое Центрирование</h1>
          <h3>Cистема здоровья</h3>
          <a href="/seminary" target="_blank" class="seminars_link btn btn-success btn-lg">Расписание семинаров</a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
          <img class="chikurov_img" src="/wp-content/themes/chikurov/img/chi_img.jpg" alt="Чикуров Ю.В.">
        </div>
      </div>
    </div>
  </section><!-- end of doctor section -->
  <section class="seminars programm" id="programm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Программа обучения в школе</h2>
        </div>
        <div class="col-md-12 programm_menu">
          <div class="programm_menu_item programm_menu_item_1 active">Обязательные</div>
          <div class="programm_menu_item programm_menu_item_2">Факультативные</div>
          <div class="programm_menu_item programm_menu_item_3">Мастер - классы</div>
          <div class="programm_menu_item programm_menu_item_all">Все</div>
        </div>
        <div class="col-md-12 programm_items">
          <a href="/" class="col-md-4 col-sm-6 col-xs-12 programm_item programm_item_1">
            <span class="programm_item_inner">
              <span class="parogramm_item_heading">БЦ1. Базовый семинар по Биологическому Центрированию</span></br>
              <span class="parogramm_item_content">24 учебных часа</span></br>
              <span class="parogramm_item_link btn btn-success btn-sm">Узнать подробнее</span>
            </span>
          </a>
          <a href="/" class="col-md-4 col-sm-6 col-xs-12 programm_item programm_item_1">
            <span class="programm_item_inner">
              <span class="parogramm_item_heading">БЦ2. Продвинутый семинар по Биологическому Центрированию</span></br>
              <span class="parogramm_item_content">24 учебных часа</span></br>
              <span class="parogramm_item_link btn btn-success btn-sm">Узнать подробнее</span>
            </span>
          </a>
          <a href="/" class="col-md-4 col-sm-6 col-xs-12 programm_item programm_item_1">
            <span class="programm_item_inner">
              <span class="parogramm_item_heading">Эстетическое мануальное моделирование лица</span></br>
              <span class="parogramm_item_content">16 учебных часа</span></br>
              <span class="parogramm_item_link btn btn-success btn-sm">Узнать подробнее</span>
            </span>
          </a>
          <a href="/" class="col-md-4 col-sm-6 col-xs-12 programm_item programm_item_1">
            <span class="programm_item_inner">
              <span class="parogramm_item_heading">Мягкие мануальные техники</span></br>
              <span class="parogramm_item_content">16 учебных часа</span></br>
              <span class="parogramm_item_link btn btn-success btn-sm">Узнать подробнее</span>
            </span>
          </a>
          <a href="/" class="col-md-4 col-sm-6 col-xs-12 programm_item programm_item_1">
            <span class="programm_item_inner">
              <span class="parogramm_item_heading">Терапевтическая дефрагментация</span></br>
              <span class="parogramm_item_content">24 учебных часа</span></br>
              <span class="parogramm_item_link btn btn-success btn-sm">Узнать подробнее</span>
            </span>
          </a>
          <a href="/" class="col-md-4 col-sm-6 col-xs-12 programm_item programm_item_2">
            <span class="programm_item_inner">
              <span class="parogramm_item_heading">Коррекция кармических отношений (В подарок дуос машина)</span></br>
              <span class="parogramm_item_content">16 учебных часа</span></br>
              <span class="parogramm_item_link btn btn-success btn-sm">Узнать подробнее</span>
            </span>
          </a>
          <a href="/" class="col-md-4 col-sm-4 col-xs-12 programm_item programm_item_3">
            <span class="programm_item_inner">
              <span class="parogramm_item_heading">Коррекция висцеральных систем</span></br>
              <span class="parogramm_item_content">8 учебных часа</span></br>
              <span class="parogramm_item_link btn btn-success btn-sm">Узнать подробнее</span>
            </span>
          </a>
          <a href="/" class="col-md-4 col-sm-4 col-xs-12 programm_item programm_item_3">
            <span class="programm_item_inner">
              <span class="parogramm_item_heading">Краниосакральная терапия, избранные техники</span></br>
              <span class="parogramm_item_content">8 учебных часа</span></br>
              <span class="parogramm_item_link btn btn-success btn-sm">Узнать подробнее</span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>
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
