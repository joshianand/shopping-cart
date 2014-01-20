$(document).ready(function() {

		$(function() {
		$('#slider_img').slidesjs({
					width: 538,
					height: 305,
					navigation: {
					  active: true,        
					  effect: "fade"						
					},					
					play:{
						  auto: true,
						  effect: "fade",
						  interval: 3000},
					pagination: {
					  effect: "fade"
					},
					effect: {
						fade: {
							speed: 400
						  }
						}
				  });
				});

				
	
				  
window.onresize=function(){			
			
		if(window.innerWidth < 1000)
		{
			$('body').css('overflow-x','scroll');
		}
		else
		{			
			$('body').css('overflow-x','auto');			
		}
	};	 
			
});
			