jQuery(document).ready(function () {
  console.log('status');
  jQuery('.seminar_title').val(jQuery('.page_title').text());
  jQuery('.seminar_url').val(jQuery('.page_url').text());
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
  var popupStatus
  //Получение данных из локального хранилища
  if(supportsStorage && localStorage.getItem('popupStatus')){
    popupStatus = localStorage.getItem('popupStatus');
  }
  if (popupStatus == false) {
    setTimeout(jQuery('#book_down').modal('show'), 5000);
    jQuery(".send_book").on("click", function(){
      setTimeout(openPopupTwo, 5000);
    });
    localStorage.setItem('popupStatus', true);
  }
});
