jQuery(document).ready(function () {
  console.log('status');
  jQuery('.seminar_title').val(jQuery('.page_title').text());
  jQuery('.seminar_url').val(jQuery('.page_url').text());
  console.log(jQuery('.page_title').text());
  console.log(jQuery('.page_url').text());
  jQuery('.speed_closed').popover({
    delay: {hide: 2000 }
  })
});
