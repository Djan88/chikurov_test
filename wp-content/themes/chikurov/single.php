<?php get_header(); ?>
<?php if (in_category(2)) { ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php
    $seminar_start = get_field('seminar_start');
    $date_formated_start = strtotime($seminar_start);
    $seminar_start_d = date('d',$date_formated_start);
    $seminar_start_m = date('m',$date_formated_start);
    $seminar_start_y = date('Y',$date_formated_start);
    if ($seminar_start_m == 01) {
      $seminar_start_m = ' января ';
    } else if ($seminar_start_m == 02) {
      $seminar_start_m = ' февраля ';
    } else if ($seminar_start_m == 03) {
      $seminar_start_m = ' марта ';
    } else if ($seminar_start_m == 04) {
      $seminar_start_m = ' апреля ';
    } else if ($seminar_start_m == 05) {
      $seminar_start_m = ' мая ';
    } else if ($seminar_start_m == 06) {
      $seminar_start_m = ' июня ';
    } else if ($seminar_start_m == 07) {
      $seminar_start_m = ' июля ';
    } else if ($seminar_start_m == 08) {
      $seminar_start_m = ' августа ';
    } else if ($seminar_start_m == 09) {
      $seminar_start_m = ' сентября ';
    } else if ($seminar_start_m == 10) {
      $seminar_start_m = ' октября ';
    } else if ($seminar_start_m == 11) {
      $seminar_start_m = ' ноября ';
    } else if ($seminar_start_m == 12) {
      $seminar_start_m = ' декабря ';
    }

    $seminar_end = get_field('seminar_end');
    $date_formated_end = strtotime($seminar_end);
    $seminar_end_d = date('d',$date_formated_end);
    $seminar_end_m = date('m',$date_formated_end);
    $seminar_end_y = date('Y',$date_formated_end);
    if ($seminar_end_m == 01) {
      $seminar_end_m = ' января ';
    } else if ($seminar_end_m == 02) {
      $seminar_end_m = ' февраля ';
    } else if ($seminar_end_m == 03) {
      $seminar_end_m = ' марта ';
    } else if ($seminar_end_m == 04) {
      $seminar_end_m = ' апреля ';
    } else if ($seminar_end_m == 05) {
      $seminar_end_m = ' мая ';
    } else if ($seminar_end_m == 06) {
      $seminar_end_m = ' июня ';
    } else if ($seminar_end_m == 07) {
      $seminar_end_m = ' июля ';
    } else if ($seminar_end_m == 08) {
      $seminar_end_m = ' августа ';
    } else if ($seminar_end_m == 09) {
      $seminar_end_m = ' сентября ';
    } else if ($seminar_end_m == 10) {
      $seminar_end_m = ' октября ';
    } else if ($seminar_end_m == 11) {
      $seminar_end_m = ' ноября ';
    } else if ($seminar_end_m == 12) {
      $seminar_end_m = ' декабря ';
    }
    ?>
    <section class="doctor seminar text-center" id="doctor">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="page_title"><?php the_title(); ?></h2>
            <div class="hidden page_url"><?php the_permalink(); ?></div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 seminar_article">
            <div class="seminar_params clearfix">
              <div class="pull-left">
                <span class="fa fa-calendar"></span> Дата проведения:
              </div> 
              <div class="pull-right">
                <?php 
                  echo $seminar_start_d;
                  echo ' ';
                  echo $seminar_start_m;
                  echo ' ';
                  echo $seminar_start_y;
                ?> — 
                <?php if ($seminar_end) {
                  echo $seminar_end_d;
                  echo ' ';
                  echo $seminar_end_m;
                  echo ' ';
                  echo $seminar_end_y;
                } else {
                  echo $seminar_start_d;
                  echo ' ';
                  echo $seminar_start_m;
                  echo ' ';
                  echo $seminar_start_y;
                }
                ?>
              </div>
            </div>
            <div class="seminar_params clearfix">
              <div class="pull-left">
                <span class="fa fa-map-marker"></span> Место проведения:
              </div>
              <span class="pull-right"><?php the_field('city'); ?>, <?php the_field('adres'); ?></span>
            </div>
            <a href="#order" class="pull-right seminar_order btn btn-primary">Записаться</a>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 seminar_article">
            <div class="seminar_params clearfix">
              <div class="pull-left">
                <span class="fa fa-user"></span> Читает:
              </div> 
              <div class="pull-right"><?php the_field('autor'); ?></div>
            </div>
            <div class="seminar_params clearfix">
              <div class="pull-left">
                <span class="fa fa-phone"></span> Записаться по телефону:
              </div>
              <span class="pull-right"><?php the_field('phone'); ?></span>
            </div>
            <div class="seminar_params clearfix">
              <div class="pull-left">
                <span class="fa fa-envelope"></span> Написать письмо:
              </div>
              <span class="pull-right">
                <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
              </span>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="col-md-12 seminar_content">
            <h4 class="content_center">О чем этот семинар</h4>
            <?php
            the_content(__('(more...)'));
            edit_post_link(__('Edit This'));
            ?>
          </div>
          <div class="col-md-12 order_seminar">
            <h4 class="content_center" id="order">Записаться на семинар</h4>
            <div class="row">
              <?php $autor = get_field('autor');?>
              <?php if ($autor == 'Юрий Чикуров') {?>
                <?php echo do_shortcode('[contact-form-7 id="4" title="Запись на семинар"]'); ?>
              <?php } else { ?>
                <?php echo do_shortcode('[contact-form-7 id="170" title="Запись на семинар_Иванова"]'); ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of doctor section -->
    <?php $coords_seminar = get_field('coords');?>
    <?php if ($coords_seminar) { ?>
      <section class="doctor seminar text-center" id="doctor">
        <?php $seminar_map = "[showyamap] [placemark coordinates='".$coords_seminar."'/] [/showyamap]";?>
        <?php echo do_shortcode($seminar_map); ?>
      </section>
    <?php } ?>
  <?php endwhile; else: ?>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
  <?php endif; ?>
<?php } else { ?>
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
<?php } ?>
<?php get_footer(); ?>
