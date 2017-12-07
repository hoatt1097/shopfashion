
$(document).ready(function() {
  $(".panel-heading").click(function(){
    $("#filter_group").toggle();
  });
  $(".widget_links a").click(function(){
    $(".filter_list").toggle();
  });
});
