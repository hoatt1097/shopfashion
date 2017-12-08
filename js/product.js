$(document).ready(function() {
 	changeImage();
 	changeNumber();
 	var addSelectedColor = $(".color ul li");
 	var addSelectedSize = $(".size ul li");
 	addSelected(addSelectedColor);
 	addSelected(addSelectedSize);
});
function changeImage(){
	$(".ega-product-img").click(function(){
		var src = $(this).attr("src");
		$("img[itemprop='photos']").attr("src",src);
	});
}
function changeNumber(){
	$(".plus").click(function(){
		var number =  $("#product_quantity").attr("value");
		var plus =  parseInt(number,10) + 1;
		$("#product_quantity").attr("value",plus);
	});
	$(".minus").click(function(){
		var number =  $("#product_quantity").attr("value");
		var minus =  parseInt(number,10) - 1;
		if(minus < 1){
			minus = 1;
		}
		$("#product_quantity").attr("value",minus);
	});
}
function removeSelected(element){
	element.removeClass("selected");
}
function addSelected(element){
	element.click(function(){
		removeSelected(element);
	 	$(this).addClass("selected");
	});
}