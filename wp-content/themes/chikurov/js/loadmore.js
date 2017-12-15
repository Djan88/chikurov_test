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
