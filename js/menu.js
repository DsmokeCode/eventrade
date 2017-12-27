$('#toggle-menu').click(function(){
	$(this).next().slideToggle();
})

$(document).ready(function(){
	var altura =$('.menupegajoso').offset().top;
	var al=0;
	
		$(window).on('scroll',function(){

				if($(window).scrollTop()>al){
						$('.menupegajoso').addClass('menu-fixed');
						$('.menupegajoso').removeClass('menupegajoso1');
				}
				else{
						$('.menupegajoso').removeClass('menu-fixed');
						$('.menupegajoso').addClass('menupegajoso1');
				}
		});
});