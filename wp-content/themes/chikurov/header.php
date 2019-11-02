<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <title><?php the_title(); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
  <meta name="yandex-verification" content="b49724cdf441409a" />
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <!-- Facebook Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1517810708340892');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1517810708340892&ev=PageView&noscript=1"
  /></noscript>
  <!-- End Facebook Pixel Code -->
</head>
<body>
  
  <!-- ====================================================
  header section -->
  <header class="top-header">
    <div class="container">
      <div class="row contacts_wrap">
        <div class="media_area col-md-1 col-xs-1 col-sm-2">
          <a target="_blank" href="http://vk.com/id139677998" class="media_area_item media_area_item-vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.facebook.com/profile.php?id=100012253260685&pnref" class="media_area_item media_area_item-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.youtube.com/user/ThePractik01/" class="media_area_item media_area_item-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.instagram.com/dr.chikurov/" class="media_area_item media_area_item-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="col-md-6 col-md-offset-2 col-sm-8 col-sm-offset-1 col-xs-12 contacts">
          <a class="contacts_email pull-left" href="mailto:info@chikurov.com">info@chikurov.com</a>
          <span class="contacts_phone pull-right">+7 (495) 135-25-48</span>
          <a class="contacts_home" href="/"> Школа Доктора Чикурова </a>
        </div>
        <div class="col-xs-2 col-sm-1 col-sm-offset-1 col-md-1 col-md-offset-2 header-logo">
          <br>
          <a href="/"><img src="<?php bloginfo('template_url'); ?>/img/bc_2.png" alt="" class="img-responsive logo"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 main-menu">
          <div class="row">
            <div class="col-md-12">
              <nav class="navbar navbar-default">
                <div class="container-fluid nav-bar">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <!-- <div id="bs-example-navbar-collapse-1"> -->
                    
                    <ul class="nav navbar-nav navbar-left">
                    <?php if (is_front_page()) { ?>
                      <li><a class="menu" href="#seminars">Семинары</a></li>
                    <?php } else { ?>
                      <li><a class="menu" href="/#seminars">Семинары</a></li>
                    <?php } ?>
                      <!-- <li><a class="menu" href="#about">Биологическое центрирование</a></li> -->
                      <li><a class="menu" href="http://school-bc.ru/" target="_blank">Онлайн школа</a></li>
                      <li><a class="menu" target="_blank" href="http://www.yuchikurov.info/reestr/">Реестр специалистов</a></li>
                      <li class="dropdown_menu">Визардтерапия <i class="fa fa-caret-down"></i>
                        <ul class="submenu_wrap">
                          <li><a class="submenu" target="_blank" href="https://wizardmachine.ru/">Wizard Machine</a></li>
                          <li><a class="submenu" target="_blank" href="https://wizardduos.ru/">Wizard Duos</a></li>
                          <li><a class="submenu" target="_blank" href="https://wizard-lovushka.ru/">Wizard Ловушка</a></li>
                          <li><a class="submenu" target="_blank" href="https://tarotmachine.ru/">Tarot Machine</a></li>
                          <li><a class="submenu" target="_blank" href="https://deviatochka.ru/">Игра Девяточка</a></li>
                          <li><a class="submenu" target="_blank" href="http://marakata.ru/">Marakata</a></li>
                          <li><a class="submenu" target="_blank" href="https://school-bc.ru/wizardtherapy">Wizard Therapy</a></li>
                        </ul>
                      </li>
                      <li><a class="menu" href="/kniga">Книги</a></li>
                      <li><a target="_blank" class="menu" href="https://shop-bc.com/">Магазин товаров бц</a></li>
                    </ul>
                  </div><!-- /navbar-collapse -->
                </div><!-- / .container-fluid -->
              </nav>
            </div>     
          </div>
        </div>
      </div>
    </div>
  </header> 
  <!-- end of header area -->
