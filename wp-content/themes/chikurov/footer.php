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
          <a target="_blank" href="https://www.instagram.com/yuchikurov/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
        <div class="clearfix"></div>
        <div class="menu_footer">
          <a href="/#seminars">Расписание семинаров</a>
          <a href="/wizardterapiya">Визардтерапия</a>
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
  <script src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.js"></script>
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
</body>
</html>
