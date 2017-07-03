/**
 * Created by au1ge on 2017/7/3.
 */
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

    $.getJSON("index.php?/articles/get_pages", function(result){
        for(i=1; i <= result; i++){
            var link = $('<a></a>').text(i).attr('href', 'index.php?/articles/page/' + (i));
            var li = $('<li></li>').append(link);
            if(i == geturlparam()){
                li.attr('class', 'active');
            }
            $('ul#page').append(li);
        }
    });
});