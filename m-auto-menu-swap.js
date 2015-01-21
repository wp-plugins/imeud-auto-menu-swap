(function($){
$(document).ready(function(){
$(window).scroll(function(){
	if($(this).scrollTop()>100){ 
		$("nav").addClass("swap_header_footer"); 
		$("footer").attr('style', 'margin-bottom:'+$("nav").height()+'px !important');
	}else{
		$("nav").removeClass("swap_header_footer");
	}
})
})
})(jQuery);