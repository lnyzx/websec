/**
 * Created by au1ge on 2017/8/6.
 */
$(document).ready(function(){
    var btn = $('#update_button');

    btn.click(function(){
        var title = $('#title').val();
        var url = $('#url').val();
        var introduction = $('#introduction').val();
        var category = $('select#category').val();
        var new_category = $('#new_category').val();

        if (new_category != '') {
            category = new_category;
        }

        post_data = {
            title: title,
            category: category,
        }

        if(url != ''){
            post_data['url'] = url;
        }
        if(introduction != ''){
            post_data['introduction'] = introduction;
        }

        $.post('index.php?/admin/update_article', post_data, function(result){
            alert('update done');
            window.location.href='index.php?/admin';
        })
    });
});