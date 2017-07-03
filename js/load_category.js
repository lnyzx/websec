/**
 * Created by au1ge on 2017/7/2.
 */
$(document).ready(function(){
   $.getJSON("index.php?/admin/show_category", function(result){
       $.each(result, function(num, value){
            var category = value.category;
            var opt = $('<option></option>').text(category);
            $("select#category").append(opt);
       });
   });
});