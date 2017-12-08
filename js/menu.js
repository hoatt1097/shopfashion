
$(document).ready(function() {
  $(".panel-heading").click(function(){
    $("#filter_group").toggle();
  });
  $(".widget_links a h4").click(function(){
  	var group = $(this).attr("class");
    $("#filter_" + group).toggle();
  });
  var amountProduct = $(".product").size();
  $('#amount_product').text("Có " + amountProduct + " sản phẩm");
});
