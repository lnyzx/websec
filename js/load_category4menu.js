/**
 * Created by au1ge on 2017/7/3.
 */
$(document).ready(function(){
    $.getJSON("index.php?/admin/show_category", function(result){
        $.each(result, function(num, value){
            var category = value.category;
            var link = $('<a></a>').text(category).attr('href', 'http://www.au1ge.xyz/websec/index.php?/articles/search/'+category);
            var opt = $('<li></li>').append(link);
            $("ul#category").append(opt);
        });
    });
});