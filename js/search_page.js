$(document).ready(function(){

    function geturlparam(){
        var url = window.location.href;
        var param = url.split('/')[url.split('/').length -1];
        if(param && param.match(/^\d*$/i)){
            return param;
        }
        else {
            return 1;
        }
    }
    function geturlkey() {
        var url = window.location.href;
        var key = url.split('/')[url.split('/').length -2];
        return key;
    }

    function load_articles(key, page){
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

        // var first_url = 'index.php?/articles/search/' + geturlkey() + '/1';
        // var first = $('<a></a>').attr('href', first_url).text('首页');
        // first = $('<li></li>').append(first);
        // $('ul#page').append(first);
        //
        // for (i = 1; i <= result; i++){
        //     var link = $('<a></a>').text(i).attr('href', 'index.php?/articles/search/' + geturlkey() + '/' + (i));
        //     var li = $('<li></li>').append(link);
        //     if(i == geturlparam()){
        //         li.attr('class', 'active');
        //     }
        //     $('ul#page').append(li);
        // }
        //
        // var last_url = 'index.php?/articles/search/' + geturlkey() + '/' + result;
        // var last = $('<a></a>').attr('href', last_url).text('尾页');
        // last = $('<li></li>').append(last);
        // $('ul#page').append(last);

        $('ul#page').twbsPagination({
            totalPages: result,
            visiblePages: 5,
            onPageClick: function (event, page) {
                $('tbody tr').remove();
                load_articles(geturlkey(), page);
            }
        });

    });
});