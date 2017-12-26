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
