  <footer class="footer clearfix">
    <div class="container">
      <div class="row footer-area">
        <div class="col-xs-6 footer-para">
          <p>&copy; Юрий Чикуров</p>
        </div>
        <div class="col-xs-6 text-right">
          <a target="_blank" href="http://vk.com/id139677998"><i class="fa fa-vk" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.facebook.com/profile.php?id=100012253260685&pnref"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.youtube.com/user/ThePractik01/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.instagram.com/dr.chikurov/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="clearfix"></div>
        <div class="menu_footer">
          <a href="/#seminars">Расписание семинаров</a>
          <a href="http://www.yuchikurov.info/members/admin/author_books/" target="_blank">Книги Доктора Чикурова</a>
          <a href="/#bc">Биологическое центрирование</a>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <!-- script tags
  ============================================================= -->
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/loadmore.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>
  <div class="modal fade" id="videoCours" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Заказать видеокурс</h4>
              </div>
              <div class="modal-body">
                  <?php echo do_shortcode('[contact-form-7 id="159" title="Заказ видео курса"]')?>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="book_down" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Получить книгу бесплатно</h4>
              </div>
              <div class="modal-body">
                  <?php //echo do_shortcode('[contact-form-7 id="434" title="Скачать книгу"]')?>
                  <h4>"Биологическое центрирование. Практическое руководство"</h4>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                      <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="/wp-content/themes/chikurov/img/oblojka.png" alt="">
                    </div>
                    <div class="col-md-8">
                      <form id="ltForm2951937"  action="http://school-bc.ru/pl/lite/block-public/process-html?id=5852695" method="post">
                        <input type="hidden" name="formParams[setted_offer_id]" ><br>
                        <input type="text" maxlength="60"  placeholder="Введите ваш эл. адрес" name="formParams[email]" value="" ><br>
                        <button type="submit" id="button7253258" style="color: #fff; background-color: #337ab7; ">Получить книгу</button><br>
                        <input type="hidden" name="__gc__internal__form__helper" class="__gc__internal__form__helper" value="">
                        <input type="hidden" name="requestTime" value="1521630980">
                        <input type="hidden" name="requestSimpleSign" value="cc3ef85b7cea5dc3f9305e60ea588db7">
                      </form>
                      <script>window.onload=function(){document.getElementsByClassName("__gc__internal__form__helper").value = window.location.href;}</script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="lovushka_down" tabindex="-1" role="dialog" aria-labelledby="videoCoursLabel" aria-hidden="true">
      <div class="modal-dialog styled_form">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="videoCoursLabel">Антистресс Визард-ловушка</h4>
              </div>
              <div class="modal-body">
                  <?php //echo do_shortcode('[contact-form-7 id="449" title="Купить ловушку"]')?>
                  <div class="clearfix">
                    <div class="col-md-4" style="text-align: center;">
                    <img style="max-width: 100%;" class="img-responsive pull-left content_img colorbox-147" src="http://chikurov.com/wp-content/uploads/2018/03/IMG_3817-167x300.jpg" alt="">
                    </div>
                    <div class="col-md-8">
                      <script id="b85b70eafb20cae19a3f8910bfeaf0f331d89c4d" src="http://school-bcru.getcourse.ru/pl/lite/widget/script?id=24443"></script>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <script>
    jQuery(function($){
        $('#loadSeminar').on('click', function(event) {
            $(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
            console.log('test');
            var data = {
                'action': 'loadmore',
                'query': true_posts,
                'page' : current_page
            };
            $.ajax({
                url:ajaxurl, // обработчик
                data:data, // данные
                type:'POST', // тип запроса
                success:function(data){
                    if( data ) {
                        $('#loadSeminar').text('Загрузить ещё').before(data); // вставляем новые посты
                        current_page++; // увеличиваем номер страницы на единицу
                        if (current_page == max_pages) $("#loadSeminar").remove(); // если последняя страница, удаляем кнопку
                    } else {
                        $('#loadSeminar').remove(); // если мы дошли до последней страницы постов, скроем кнопку
                    }
                }
            });
        });
    });
  </script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
      (function (d, w, c) {
          (w[c] = w[c] || []).push(function() {
              try {
                  w.yaCounter46945023 = new Ya.Metrika({
                      id:46945023,
                      clickmap:true,
                      trackLinks:true,
                      accurateTrackBounce:true,
                      webvisor:true
                  });
              } catch(e) { }
          });

          var n = d.getElementsByTagName("script")[0],
              s = d.createElement("script"),
              f = function () { n.parentNode.insertBefore(s, n); };
          s.type = "text/javascript";
          s.async = true;
          s.src = "https://mc.yandex.ru/metrika/watch.js";

          if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
          } else { f(); }
      })(document, window, "yandex_metrika_callbacks");
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/46945023" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</body>
</html>
