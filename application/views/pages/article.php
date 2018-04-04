<table class="table table-striped table-hover" id="articles">
    <caption class="motto">.(500) DAYS OF SUMMER</caption>
    <thead>
    <tr>
        <th class="th-time">时间</th>
        <th class="th-title">标题</th>
        <th class="th-intro">简介</th>
        <th class="th-cate">分类</th>
    </tr>
    </thead>
    <tbody id="articles_tbody">
    </tbody>
</table>

<!--this is page-->
<ul class="pagination" id="page">
</ul>
<script>
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

    $(document).ready(function(){
        $('ul#page').twbsPagination({
            totalPages: <?php echo $page;?>,
            visiblePages: 7,
            onPageClick: function (event, page) {
                load_article(page-1);
                window.location.hash = page;
            }
        });
    });
</script>