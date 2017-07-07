/**
 * Created by au1ge on 2017/7/8.
 */
$(document).ready(function (){
    //处理搜索框回车
    $("input#search").keydown(function (e){
        if (e.which == 13) {
            window.location.href='index.php?/articles/search/' + document.getElementById('search').value;
        }
    });

    $("button#search_button").click(function (){
        window.location.href='index.php?/articles/search/' + document.getElementById('search').value;
    });
})