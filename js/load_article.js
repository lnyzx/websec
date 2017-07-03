/**
 * Created by au1ge on 2017/7/2.
 */
$(document).ready(function(){
    function geturlparam(){
        var url = window.location.href;
        var param = url.split('/')[url.split('/').length -1];
        if(param && param.match(/^\d*$/i)){
            return param - 1;
        }
        else {
            return 0;
        }
    }

    $.getJSON("index.php?/articles/show_articles/" + geturlparam(), function(result){
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
});