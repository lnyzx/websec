$(document).ready(function(){

    function geturlkey() {
        var url = window.location.href;
        var key = url.split('/')[url.split('/').length -1];
        return key;
    }

    function load_article(key, page) {
        $('tbody tr').remove();
        $.getJSON("index.php?/articles/get_search/" + key + '/' + page, function(result){
            $.each(result, function(num, value){
                var tr = $('<tr></tr>');
                var time = $('<th></th>').text(value.time);
                var title = $('<a></a>').text(value.title).attr('href', value.url);
                var title = $('<th></th>').append(title);
                var introduction = $('<th></th>').text(value.introduction);
                var category = $('<th></th>').text(value.category);
                $(tr).append(time);
                $(tr).append(title);
                $(tr).append(introduction);
                $(tr).append(category);
                $("tbody#articles_tbody").append(tr);
            });
        });
    }

    $.getJSON("index.php?/articles/search_page/" + geturlkey(), function(result){

        $('ul#page').twbsPagination({
            totalPages: result,
            visiblePages: 5,
            onPageClick: function (event, page) {
                $('tbody tr').remove();
                load_article(geturlkey(), page-1);
            }
        });

    });
});