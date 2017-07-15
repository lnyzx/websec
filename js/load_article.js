/**
 * Created by au1ge on 2017/7/2.
 */
$(document).ready(function(){

    function load_article(page){
        $.getJSON("index.php?/articles/show_articles/" + page, function(result){
            $('tbody tr').remove();
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

    $.getJSON("index.php?/articles/get_pages", function(result){

        $('ul#page').twbsPagination({
            totalPages: result,
            visiblePages: 7,
            onPageClick: function (event, page) {
                load_article(page-1);
                window.location.hash = page;
            }
        });
    });
});