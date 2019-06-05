jQuery(document).ready(function () {
  console.log('status');
  jQuery('.seminar_title').val(jQuery('.title_info').text());
  jQuery('.seminar_url').val(jQuery('.page_url').text());
  jQuery('.seminar_date').val(jQuery('.date_info').text());
  jQuery('.seminar_time').val(jQuery('.time_info').text());
  jQuery('.seminar_place').val(jQuery('.place_info').text());
  jQuery('.seminar_price').val(jQuery('.price_info').text());
  jQuery('.seminar_email').val(jQuery('.email_info').text());
  jQuery('.seminar_phone').val(jQuery('.phone_info').text());
  console.log(jQuery('.page_title').text());
  console.log(jQuery('.page_url').text());
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
  // Фильтрация по городам
  jQuery('.btn_city_filter').on('click', function(event) {
    jQuery('.btn_city_filter').removeClass('active');
    jQuery(this).addClass('active');
    var filter_param = jQuery(this).data('filter');
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
  console.log(jQuery('.online_school_text').css('height'));
  jQuery('.online_school_logo').css('height', jQuery('.online_school_text').css('height'));
});
