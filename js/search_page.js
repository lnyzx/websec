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

    $.getJSON("index.php?/articles/search_page/" + geturlkey(), function(result){
        for(i=1; i <= result; i++){
            var link = $('<a></a>').text(i).attr('href', 'index.php?/articles/search/' + geturlkey() + '/' + (i));
            var li = $('<li></li>').append(link);
            if(i == geturlparam()){
                li.attr('class', 'active');
            }
            $('ul#page').append(li);
        }
    });
});