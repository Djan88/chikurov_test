  <footer class="footer clearfix">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 footer-para">
          <p>&copy; Юрий Чикуров</p>
        </div>
        <div class="col-xs-6 text-right">
          <a target="_blank" href="http://vk.com/id139677998"><i class="fa fa-vk" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.facebook.com/profile.php?id=100012253260685&pnref"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.youtube.com/user/ThePractik01/"><i class="fa fa-youtube" aria-hidden="true"></i></a>
          <a target="_blank" href="https://www.instagram.com/yuchikurov/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <!-- script tags
  ============================================================= -->
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/loadmore.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
  <?php if (is_single()) { ?>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
      ymaps.ready(init);
      var myMap, 
          myPlacemark;

      function init(){ 
          myMap = new ymaps.Map("seminar_map", {
              center: [55.837270, 37.633126],
              zoom: 17
          }); 
          
          myPlacemark = new ymaps.Placemark([55.837270, 37.633126], {
              balloonContent: 'Москва, Сельскохозяйственная 17, к.5, ауд 128'
          });
          
          myMap.geoObjects.add(myPlacemark);
      }
    </script>
  <?php } ?>
</body>
</html>
