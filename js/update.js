/**
 * Created by au1ge on 2017/8/6.
 */
$(document).ready(function(){
    var btn = $('#update_button');
    var title = $('input#title').val();
    var url = $('input#url').val();
    var introduction = $('input#introduction').val();
    var category = $('#new_category').val();

    btn.click(function(){
        alert(category);
    });
});