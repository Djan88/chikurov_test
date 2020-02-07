jQuery(document).ready(function () {
  
  var $page = jQuery('html, body');
  jQuery('a[href*="#"]').click(function() {
      $page.animate({
          scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
      }, 600);
      return false;
  });

  //peekobot open/close
  jQuery('.pekobot_close').on('click', function(event) {
    if (!jQuery('.peekobot_wrap').hasClass('peekobot_wrap-closed')) {
      jQuery('.peekobot_wrap').addClass('peekobot_wrap-closed');
      jQuery('.pekobot_open').removeClass('hidden');
    }
  });
  jQuery('.peekobot_wrap').on('click', function(event) {
    if (event.target.attributes['data-next'].value == '100') {
      if (!jQuery('.peekobot_wrap').hasClass('peekobot_wrap-closed')) {
        jQuery('.peekobot_wrap').addClass('peekobot_wrap-closed');
        jQuery('.pekobot_open').removeClass('hidden');
      }
    } else if (event.target.attributes['data-next'].value == '5') {
      jQuery([document.documentElement, document.body]).animate({
          scrollTop: jQuery("#seminars").offset().top
      }, 2000);
      jQuery('.btn_seminar_filter').removeClass('active');
      jQuery(jQuery('.btn_seminar_filter[data-filter_s="ch"]')).addClass('active');
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__ch').removeClass('hidden');
    }
  });
  jQuery('.pekobot_open').on('click', function(event) {
    if (jQuery('.peekobot_wrap').hasClass('peekobot_wrap-closed')) {
      jQuery('.peekobot_wrap').removeClass('peekobot_wrap-closed');
      jQuery(this).addClass('hidden');
    }
  });


  // console.log('status');
  jQuery('.seminar_title').val(jQuery('.title_info').text());
  jQuery('.seminar_url').val(jQuery('.page_url').text());
  jQuery('.seminar_date').val(jQuery('.date_info').text());
  jQuery('.seminar_time').val(jQuery('.time_info').text());
  jQuery('.seminar_place').val(jQuery('.place_info').text());
  jQuery('.seminar_price').val(jQuery('.price_info').text());
  jQuery('.seminar_email').val(jQuery('.email_info').text());
  jQuery('.seminar_phone').val(jQuery('.phone_info').text());
  // console.log(jQuery('.page_title').text());
  // console.log(jQuery('.page_url').text());
  jQuery('.speed_closed').popover({
    delay: {hide: 2000 }
  })
  var supportsStorage = function(){
    try {
      return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
      return false;
    }
  };
  var online_block_h = parseFloat(jQuery('.online_school_text').css('height'));
  jQuery('.online .col-md-4').css('height', jQuery('.online').css('height'));
  jQuery('.online_school_logo').css('height', online_block_h+'px');
  jQuery('.online_school').css('height', online_block_h/4+'px');
  jQuery('.online_school').css('marginTop', online_block_h/4+'px');
  // Фильтрация по городам
  // jQuery('.btn_siminar_filter').on('click', function(event) {
  //   jQuery('.btn_siminar_filter').removeClass('active');
  //   jQuery(this).addClass('active');
  //   var filter_param_city = jQuery(this).data('filter');

  //   if (filter_param_city == 'all') {
  //     jQuery('.seminar_in').removeClass('hidden');
  //   } else if (filter_param_city == 'msk') {
  //     jQuery('.seminar_in').addClass('hidden');
  //     jQuery('.seminar_item__msk').removeClass('hidden');
  //   } else if (filter_param_city == 'spb') {
  //     jQuery('.seminar_in').addClass('hidden');
  //     jQuery('.seminar_item__spb').removeClass('hidden');
  //   } else if (filter_param_city == 'kiev') {
  //     jQuery('.seminar_in').addClass('hidden');
  //     jQuery('.seminar_item__kiev').removeClass('hidden');
  //   } else if (filter_param_city == 'riga') {
  //     jQuery('.seminar_in').addClass('hidden');
  //     jQuery('.seminar_item__riga').removeClass('hidden');
  //   }
  // });

  jQuery('.btn_seminar_filter').on('click', function(event) {
    jQuery('.btn_seminar_filter').removeClass('active');
    jQuery(this).addClass('active');
    var filter_param = jQuery(this).data('filter_s');

    if (filter_param == 'all') {
      jQuery('.seminar_in').removeClass('hidden');
    } else if (filter_param == 'msk') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__msk').removeClass('hidden');
    } else if (filter_param == 'spb') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__spb').removeClass('hidden');
    } else if (filter_param == 'kiev') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__kiev').removeClass('hidden');
    } else if (filter_param == 'riga') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__riga').removeClass('hidden');
    } else if (filter_param == 'ch') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__ch').removeClass('hidden');
    } else if (filter_param == 'iv') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__iv').removeClass('hidden');
    } else if (filter_param == 'ks') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__ks').removeClass('hidden');
    } else if (filter_param == 'zk') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__zk').removeClass('hidden');
    } else if (filter_param == 'sh') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__sh').removeClass('hidden');
    } else if (filter_param == 'is') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__is').removeClass('hidden');
    } else if (filter_param == 'st') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__st').removeClass('hidden');
    } else if (filter_param == 'pl') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__pl').removeClass('hidden');
    } else if (filter_param == 'ms') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__ms').removeClass('hidden');
    } else if (filter_param == 'online') {
      jQuery('.seminar_in').addClass('hidden');
      jQuery('.seminar_item__online').removeClass('hidden');
    }
  });
  var popupStatus = false;
  function openPopup(){
    jQuery('#book_down').modal('show');
  }
  function openPopupTwo(){
    jQuery('#lovushka_down').modal('show');
  }
  //Получение данных из локального хранилища
  if(supportsStorage && localStorage.getItem('popupStatus')){
    popupStatus = localStorage.getItem('popupStatus');
  }
  if (popupStatus == false) {
    setTimeout(openPopup, 5000);
    jQuery('#book_down').on('hidden.bs.modal', function (e) {
      setTimeout(openPopupTwo, 25000);
    })
    localStorage.setItem('popupStatus', true);
  }
  jQuery('#myTab a').click(function (e) {
    e.preventDefault();
    jQuery(this).tab('show');
  })
  jQuery('.btn_session').on('click', function(event) {
    jQuery('.session_type').val(jQuery(this).data('session_type'))
  });
});
