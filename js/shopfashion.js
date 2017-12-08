$(document).ready(function() {
  $(".product-image").hover(function(){
    $(".quick_action", this).toggle();
  });

  $(".product-title a").click(function(){
    var image_id =  $(this).attr("itemprop");
    $(this).attr('href', 'product.php?id=' + image_id);
  })
  
  $(".btn-quicklook").click(function(){
    var image_id =  $(this).attr("itemprop");
    $(this).attr('href', 'product.php?id=' + image_id);
  })

});
